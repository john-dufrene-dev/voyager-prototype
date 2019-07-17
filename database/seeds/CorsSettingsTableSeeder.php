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
        }
    }
}
