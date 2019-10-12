<?php

if (! function_exists('get_cors') ) {
    function get_cors($key, $default = null) {
        return Modules\VoyagerBaseExtend\Traits\CorsSettingTable::get($key, $default = null);
    }
}

if (! function_exists('find_cors') ) {
    function find_cors($key, $default = null) {
        return Modules\VoyagerBaseExtend\Traits\CorsSettingTable::findModelCors($key, $default = null);
    }
}