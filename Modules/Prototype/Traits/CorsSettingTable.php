<?php

namespace Modules\Prototype\Traits;

use Illuminate\Support\Facades\Cache;
use Modules\Prototype\Entities\CorsSetting;

trait CorsSettingTable
{
    /**
     * Get all options values.
     *
     * @return mixed
     */
    public function getAllCors()
    {
        return CorsSetting::All();
    }

    /**
     * Determine given option value by id.
     *
     * @param  int  $id
     * @return bool
     */
    public function getCorsById($id)
    {
        return CorsSetting::where('id',$id)->first();
    }

    /**
     * Determine given option value by name.
     *
     * @param  string  $name
     * @return bool
     */
    public function getCorsByName($name)
    {
        return CorsSetting::where('cors_name',$name)->first();
    }

    /**
     * Determine if the given option value exists.
     *
     * @param  string  $name
     * @return bool
     */
    public function checkCors($name)
    {
        return (string) CorsSetting::where('cors_name',$name)->exists();
    }

    /**
     * Get the specified option value.
     *
     * @param  string  $key
     * @param  mixed   $default
     * @return mixed
     */
    public function getCorsValue($key, $default = null)
    {
        if ($option = CorsSetting::where('cors_name', $key)->first()) {
            return $option->cors_value;
        }

        return $default;
    }

    /**
     * Get count options values.
     *
     * @param  string  $key
     * @return mixed
     */
    public function countCors()
    {
        return CorsSetting::count();
    }

    /**
     * Set a given option value.
     *
     * @param  array|string  $key
     * @param  mixed   $value
     * @return void
     */
    public function setCors($name, $value = null)
    {
        $names = is_array($name) ? $name : [$name => $value];

        foreach ($names as $key => $value) {
            CorsSetting::updateOrCreate(['cors_name' => $name], ['cors_value' => $value]);

            if(Cache::has('cors_'.$name)) {
                Cache::forget('cors_'.$name);
                Cache::put('cors_'.$name, $value);
            }

        }

        // @todo: return the option
    }

    /**
     * Get the specified option value.
     *
     * @param  string  $name
     * @param  mixed   $value
     * @return mixed
     */
    public function updateCors($name, $value)
    {
        $cors = CorsSetting::where('cors_name', $name)->firstOrFail();
        $cors->cors_value = $value;

        if(Cache::has('cors_'.$name)) {
            Cache::forget('cors_'.$name);
            Cache::put('cors_'.$name, $value);
        }

        return $cors->save();
    }

    /**
     * Get the specified option value.
     *
     * @param  string  $key
     * @param  mixed   $default
     * @return mixed
     */
    public static function findModelCors($key, $default = null)
    {
        if ($option = CorsSetting::where('cors_name', $key)->first()) {
            return $option;
        }

        return $default;
    }

    /**
     * Get the specified option value.
     *
     * @param  string  $key
     * @param  mixed   $default
     * @return mixed
     */
    public static function get($key, $default = null)
    {
        if(Cache::has('cors_'.$key) && false == verify_trans() ) {
            return Cache::get('cors_'.$key);
        }

        if ($option = CorsSetting::where('cors_name', $key)->first()) {

            if( true == verify_trans() ) {
                return $option->translate()->cors_value;
            }

            Cache::put('cors_'.$key, $option->cors_value);
            return $option->cors_value;
        }

        return $default;
    }
}