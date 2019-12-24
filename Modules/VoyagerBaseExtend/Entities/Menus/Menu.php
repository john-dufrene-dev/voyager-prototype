<?php

namespace Modules\VoyagerBaseExtend\Entities\Menus;

use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use Nwidart\Modules\Facades\Module;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Modules\VoyagerBaseExtend\Entities\Menus\MenuItem;
use Modules\VoyagerBaseExtend\Events\MenuDisplayExtend;

/**
 * @todo: Refactor this class by using something like MenuBuilder Helper.
 */
class Menu extends Model
{
    use LogsActivity;
    
    protected static $logAttributes = ['*'];
    
    protected static $logOnlyDirty = true;

    protected static $logName = 'menus';

    protected $table = 'menus';

    protected $guarded = [];

    protected $relations = [
        'items',
    ];

    public static function boot()
    {
        parent::boot();

        static::saved(function ($model) {
            $model->removeMenuFromCache();
        });

        static::deleted(function ($model) {
            $model->removeMenuFromCache();
        });
    }

    public function items()
    {
        return $this->hasMany(app(MenuItem::class));
    }

    public function parent_items()
    {
        return $this->hasMany(app(MenuItem::class))
            ->whereNull('parent_id');
    }

    /**
     * Display menu.
     *
     * @param string      $menuName
     * @param string|null $type
     * @param array       $options
     *
     * @return string
     */
    public static function display($menuName, $type = null, array $options = [])
    {
        // GET THE MENU - sort collection in blade
        $menu = \Cache::remember('voyager_menu_'.$menuName, \Carbon\Carbon::now()->addDays(30), function () use ($menuName) {
            return static::where('name', '=', $menuName)
            ->with(['parent_items.children' => function ($q) {
                $q->orderBy('order');
            }])
            ->first();
        });

        // Check for Menu Existence
        if (!isset($menu)) {
            return false;
        }

        // event(new MenuDisplayExtend($menu));

        // Convert options array into object
        $options = (object) $options;

        $items = $menu->parent_items->sortBy('order');

        if ($menuName == 'admin' && $type == '_json') {
            $items = static::processItems($items);
        }

        if ($type == 'admin') {
            $type = 'voyager::menu.'.$type;
        } else {
            if (is_null($type)) {
                $type = 'voyager::menu.default';
            } elseif ($type == 'bootstrap' && !view()->exists($type)) {
                $type = 'voyager::menu.bootstrap';
            }
        }

        if (!isset($options->locale)) {
            $options->locale = app()->getLocale();
        }

        if ($type === '_json') {
            return $items;
        }

        if ($menuName != 'admin' && $type == '_json_full') {

            $items = static::processItemsFull($items);

            return $items;
        }

        return new \Illuminate\Support\HtmlString(
            \Illuminate\Support\Facades\View::make($type, ['items' => $items, 'options' => $options])->render()
        );
    }

    public function removeMenuFromCache()
    {
        \Cache::forget('voyager_menu_'.$this->name);
    }

    private static function processItemsFull($items)
    {
        $items = $items->transform(function ($item) {
            // Translate title
            if( verify_trans() ) {
                $item->title = $item->getTranslatedAttribute('title');
            }
            // Resolve URL/Route
            $item->href = $item->link(true);

            if ($item->href == url()->current() && $item->href != '') {
                // The current URL is exactly the URL of the menu-item
                $item->active = true;
            }

            if ($item->children->count() > 0) {
                $item->setRelation('children', static::processItemsFull($item->children));
            }

            if(null != $item->link_to_module) {
                $item->module_statuse = Module::find($item->link_to_module)->isEnabled();
            }

            return $item;
        });

        return $items->values();
    }

    private static function processItems($items)
    {
        $items = $items->transform(function ($item) {
            // Translate title
            $item->title = $item->getTranslatedAttribute('title');
            // Resolve URL/Route
            $item->href = $item->link(true);

            if ($item->href == url()->current() && $item->href != '') {
                // The current URL is exactly the URL of the menu-item
                $item->active = true;
            } elseif (Str::startsWith(url()->current(), Str::finish($item->href, '/'))) {
                // The current URL is "below" the menu-item URL. For example "admin/posts/1/edit" => "admin/posts"
                $item->active = true;
            }
            if (($item->href == url('') || $item->href == route('voyager.dashboard')) && $item->children->count() > 0) {
                // Exclude sub-menus
                $item->active = false;
            } elseif ($item->href == route('voyager.dashboard') && url()->current() != route('voyager.dashboard')) {
                // Exclude dashboard
                $item->active = false;
            }

            if ($item->children->count() > 0) {
                $item->setRelation('children', static::processItems($item->children));

                if (!$item->children->where('active', true)->isEmpty()) {
                    $item->active = true;
                }
            }

            return $item;
        });

        // Filter items by permission
        $items = $items->filter(function ($item) {
            return !$item->children->isEmpty() || app('VoyagerAuth')->user()->can('browse', $item);
        })->filter(function ($item) {
            // Filter out empty menu-items
            if ($item->url == '' && $item->route == '' && $item->children->count() == 0) {
                return false;
            }

            return true;
        });

        return $items->values();
    }
}