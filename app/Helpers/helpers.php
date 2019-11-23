<?php

if (! function_exists('get_cors') ) {
    function get_cors($key, $default = null) {
        return Modules\Prototype\Traits\CorsSettingTable::get($key, $default = null);
    }
}

if (! function_exists('find_cors') ) {
    function find_cors($key, $default = null) {
        return Modules\Prototype\Traits\CorsSettingTable::findModelCors($key, $default = null);
    }
}

if (! function_exists('verify_trans') ) {
    function verify_trans() {
        
        if ( true == config('voyager.multilingual.enabled') 
        && app()->getLocale() != config('voyager.multilingual.default') ) {
            return true;
        }

        return false;
    }
}