<?php

namespace Modules\VoyagerBaseExtend\Traits;

use Modules\VoyagerBaseExtend\Entities\CorsSetting;

trait CorsSettingTable
{
    /**
     * 
     * @method for returning all Settings
     * 
     */
    public function getAllCors()
    {
        return CorsSetting::All();
    }

    /**
     * 
     * @method for returning setting by id
     * 
     */
    public function getCorsById($id)
    {
        return CorsSetting::where('id',$id)->first();
    }

    /**
     * 
     * @method for returning setting by name
     * 
     */
    public function getCorsByName($name)
    {
        return CorsSetting::where('cors_name',$name)->first();
    }

    /**
     * 
     * @method cjeck if setting exist
     * 
     */
    public function checkCors($name)
    {
        return (string) CorsSetting::where('cors_name',$name)->exists();
    }

    /**
     * 
     * @method for returning setting value
     * 
     */
    public function getCorsValue($value)
    {
        return CorsSetting::where('cors_name',$value)->first()->cors_value;
    }

    /**
     * 
     * @method for returning setting value
     * 
     */
    public function countCors()
    {
        return CorsSetting::count();
    }

    /**
     * 
     * @method for returning setting value
     * 
     */
    public function updateCors($name,$request)
    {
        $cors = CorsSetting::where('cors_name',$name)->firstOrFail();
        $cors->cors_value = $request;

        return $cors->save();
    }
}