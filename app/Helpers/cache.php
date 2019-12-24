<?php

use TCG\Voyager\Models\Setting;
use Modules\VoyagerBaseExtend\Entities\Menus\Menu;

if (! function_exists('cache_setting') ) {
    function cache_setting($key, $default = null) {

        if(Cache::has('cache_setting_'.$key) ) {
            return Cache::get('cache_setting_'.$key);
        }

        $setting = app(Setting::class)->where('key', $key)
        ->firstOrfail();

        if( !empty($setting->value) ) {
            Cache::put('cache_setting_'.$key, $setting->value);
            return $setting->value;
        }

        Cache::put('cache_setting_'.$key, '');

        return $default;
    }
}

if (!function_exists('menu_full')) {
    function menu_full($menuName, $type = null, array $options = []) {
        return Menu::display($menuName, $type, $options);
    }
}