<?php

namespace App\Handlers;

class LfmConfigHandler extends \UniSharp\LaravelFilemanager\Handlers\ConfigHandler
{
    public function userField()
    {
        if(auth()->user()->hasRole(config('lfm.allow_roles_folder'))){
            return '';
        }else{
        	return auth()->user()->id;
        }
    }
}