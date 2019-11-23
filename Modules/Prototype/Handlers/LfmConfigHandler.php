<?php

namespace Modules\Prototype\Handlers;

class LfmConfigHandler extends \UniSharp\LaravelFilemanager\Handlers\ConfigHandler
{
    public function userField()
    {
        if(auth()->user()->hasRole(config('lfm.allow_roles_folder'))){
            return 'get';
        }else{
            return 'get/' . auth()->user()->id;
        }
    }
}