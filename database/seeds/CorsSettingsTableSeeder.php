<?php

use Illuminate\Database\Seeder;
use Modules\VoyagerBaseExtend\Entities\CorsSetting;

class CorsSettingsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (CorsSetting::count() == 0) {

            CorsSetting::create([
                'cors_name'      => 'MAINTENANCE_MODE',
                'cors_value'     => 0,
                'active'       => 1,
            ]);

            CorsSetting::create([
                'cors_name'      => 'PAGE_HOME_META_TITLE',
                'cors_value'     => 'Page d\'accueil',
                'active'       => 1,
            ]);

            CorsSetting::create([
                'cors_name'      => 'PAGE_HOME_META_DESCRIPTION',
                'cors_value'     => 'Description de la page d\'accueil',
                'active'       => 1,
            ]);

            CorsSetting::create([
                'cors_name'      => 'PAGE_HOME_META_KEYWORDS',
                'cors_value'     => 'accueil',
                'active'       => 1,
            ]);
                
            CorsSetting::create([
                'cors_name'      => 'SERVICE_CLIENT_ACTIVE',
                'cors_value'     => 1,
                'active'       => 1,
            ]);

            CorsSetting::create([
                'cors_name'      => 'SERVICE_CLIENT_NUMBER',
                'cors_value'     => 'XX XX XX XX XX',
                'active'       => 1,
            ]);

            CorsSetting::create([
                'cors_name'      => 'ACTIVITY_LOGGER_ENABLED',
                'cors_value'     => '1',
                'active'       => 1,
            ]);
        }
    }
}
