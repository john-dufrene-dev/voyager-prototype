<?php

namespace Modules\VoyagerBaseExtend\Http\Controllers\Admin;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use Nwidart\Modules\Facades\Module;
use Illuminate\Support\Facades\Auth;
use Modules\VoyagerBaseExtend\Entities\Menus\Menu;
use Modules\VoyagerBaseExtend\Entities\Menus\MenuItem;
use App\Voyager\Http\Controllers\VoyagerMenuController as BaseVoyagerMenuController;

class VoyagerMenuExtendController extends BaseVoyagerMenuController
{
    public function __construct()
    {
        if(Module::find('VoyagerBaseExtend')->isDisabled())
            abort(403, 'Module VoyagerBaseExtend is not allowed.');
    }

    public function builder($id)
    {
        $menu = app(Menu::class)->findOrFail($id);

        $modules = Module::all();

        Auth::guard(app('VoyagerGuard'))->user()->can('edit', $menu);

        $isModelTranslatable = is_bread_translatable(app(MenuItem::class));

        return Voyager::view('voyagerbaseextend::admin.menus.builder', compact(
            'menu', 
            'isModelTranslatable',
            'modules'
        ));
    }

    public function add_item(Request $request)
    {
        $menu = app(Menu::class);

        Auth::guard(app('VoyagerGuard'))->user()->can('add', $menu);

        $data = $this->prepareParameters(
            $request->all()
        );

        unset($data['id']);
        $data['order'] = app(MenuItem::class)->highestOrderMenuItem();

        // Check if is translatable
        $_isTranslatable = is_bread_translatable(app(MenuItem::class));
        if ($_isTranslatable) {
            // Prepare data before saving the menu
            $trans = $this->prepareMenuTranslations($data);
        }

        $menuItem = app(MenuItem::class)->create($data);

        // Save menu translations
        if ($_isTranslatable) {
            $menuItem->setAttributeTranslations('title', $trans, true);
        }

        return redirect()
            ->route('voyager.menus.builder', [$data['menu_id']])
            ->with([
                'message'    => __('menu_builder.successfully_created'),
                'alert-type' => 'success',
            ]);
    }

    public function update_item(Request $request)
    {
        $id = $request->input('id');
        $data = $this->prepareParameters(
            $request->except(['id'])
        );

        $menuItem = app(MenuItem::class)->findOrFail($id);

        Auth::guard(app('VoyagerGuard'))->user()->can('edit', $menuItem);

        if (is_bread_translatable($menuItem)) {
            $trans = $this->prepareMenuTranslations($data);

            // Save menu translations
            $menuItem->setAttributeTranslations('title', $trans, true);
        }

        $menuItem->update($data);

        return redirect()
            ->route('voyager.menus.builder', [$menuItem->menu_id])
            ->with([
                'message'    => __('menu_builder.successfully_updated'),
                'alert-type' => 'success',
            ]);
    }

    private function orderMenu(array $menuItems, $parentId)
    {
        foreach ($menuItems as $index => $menuItem) {
            $item = app(MenuItem::class)->findOrFail($menuItem->id);
            $item->order = $index + 1;
            $item->parent_id = $parentId;
            $item->save();

            if (isset($menuItem->children)) {
                $this->orderMenu($menuItem->children, $item->id);
            }
        }
    }

    public function updateActiveItem(Request $request) {

        if( $request->ajax() ) {

            $id = $request->input('id');
            $active = $request->input('active');

            $new_active_item = ($active == 0) ? 1 : 0 ;

            $model = MenuItem::findOrFail($id);

            $model->active_item = $new_active_item;
            $model->save();

            return $request->server('HTTP_REFERER');
        }

        return 'error is not an ajax request';
    }
}
