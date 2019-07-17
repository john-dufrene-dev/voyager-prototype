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
    public function getCorsValue($name)
    {
        return CorsSetting::where('cors_name',$name)->first()->cors_name;
    }
}