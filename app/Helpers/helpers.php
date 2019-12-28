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

if (! function_exists('get_header_customer') ) {
    function get_header_customer() {

        if( request()->session()->has('customer_session_authenticated') 
            && auth('customer')->check()
        ) {

            $user = [
                'auth'      => request()->headers->get('Customer-Authenticated'),
                'id'        => request()->headers->get('Customer-Id'),
                'name'      => request()->headers->get('Customer-Name'),
                'email'     => request()->headers->get('Customer-Email'),
            ];

            return $user;         
        }

        return false;
    }
}