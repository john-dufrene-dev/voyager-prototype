<?php

use Illuminate\Database\Seeder;
use Modules\MaintenanceMode\Entities\MaintenanceIp;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;

class MaintenanceIpsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        //Data Type
        $dataType = $this->dataType('name', 'maintenance_ips');
        if (!$dataType->exists) {
            $dataType->fill([
                'slug'                  => 'maintenance',
                'display_name_singular' => __('seeders.data_types.maintenance.singular'),
                'display_name_plural'   => __('seeders.data_types.maintenance.plural'),
                'icon'                  => 'voyager-warning',
                'model_name'            => 'Modules\\MaintenanceMode\\Entities\\MaintenanceIp',
                'controller'            => 'Modules\\MaintenanceMode\\Http\\Controllers\\Admin\\VoyagerMaintenanceModeController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
        //Data Rows
        $maintenanceIpDataType = DataType::where('slug', 'maintenance')->firstOrFail();
        $dataRow = $this->dataRow($maintenanceIpDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($maintenanceIpDataType, 'name_maintenance');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('seeders.data_rows.name'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order' => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($maintenanceIpDataType, 'ip_maintenance');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('seeders.data_rows.ip_maintenance'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'validation' => [
                        'rule'     => 'required|unique:maintenance_ips',
                        'messages'  => [
                            'required'  => __('modules.maintenance.field_require') ,
                            'unique'    => __('modules.maintenance.field_unique') ,
                        ]
                    ],
                ],
                'order' => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($maintenanceIpDataType, 'active');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'checkbox',
                'display_name' => __('seeders.data_rows.status'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'on'       => 'ON',
                    'off'      => 'OFF',
                    'checked'  => true,
                ],
                'order'        => 4,
            ])->save();
        }

        $dataRow = $this->dataRow($maintenanceIpDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('seeders.data_rows.created_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($maintenanceIpDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('seeders.data_rows.updated_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 6,
            ])->save();
        }

        //Menu Item
        $menu = Menu::where('name', 'admin')->firstOrFail();
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('seeders.menu_items.maintenance'),
            'url'     => '',
            'route'   => 'voyager.maintenance.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-warning',
                'color'      => '#000000',
                'parent_id'  => 5,
                'order'      => 16,
            ])->save();
        }

        //Permissions
        Permission::generateFor('maintenance_ips');

        // //Content
        $ip = MaintenanceIp::firstOrNew([
            'name_maintenance' => 'Défaut IP',
            'ip_maintenance' => '::1',
        ]);
        if (!$ip->exists) {
            $ip->fill([
                'name_maintenance' => 'Défaut IP',
                'ip_maintenance' => '::1',
            ])->save();
        }
    }

    /**
     * [dataRow description].
     *
     * @param [type] $type  [description]
     * @param [type] $field [description]
     *
     * @return [type] [description]
     */
    protected function dataRow($type, $field)
    {
        return DataRow::firstOrNew([
                'data_type_id' => $type->id,
                'field'        => $field,
            ]);
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
