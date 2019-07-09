<?php

namespace App\Voyager\Widgets;

use Illuminate\Support\Str;
use Modules\Post\Entities\Post;
use TCG\Voyager\Facades\Voyager;

class PostDimmer extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Post::all()->count();
        $string = trans_choice('dimmer.post', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-news',
            'title'  => "{$count} {$string}",
            'text'   => __('dimmer.post_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('dimmer.post_link_text'),
                'link' => route('voyager.posts.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return app('VoyagerAuth')->user()->can('browse', app(Post::class));
    }
}
