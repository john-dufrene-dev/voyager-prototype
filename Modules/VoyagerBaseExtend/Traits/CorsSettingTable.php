<?php

namespace Modules\VoyagerBaseExtend\Traits;

use Modules\VoyagerBaseExtend\Entities\CorsSetting;

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
    public function updateCors($name,$value)
    {
        $cors = CorsSetting::where('cors_name',$name)->firstOrFail();
        $cors->cors_value = $value;

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
        if ($option = CorsSetting::where('cors_name', $key)->first()) {

            if( true == config('voyager.multilingual.enabled') ) {
                return $option->translate()->cors_value;
            }

            return $option->cors_value;
        }

        return $default;
    }
}