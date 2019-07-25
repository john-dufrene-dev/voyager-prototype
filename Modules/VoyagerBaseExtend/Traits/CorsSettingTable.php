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
}