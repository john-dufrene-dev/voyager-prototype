<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Role;
use App\Voyager\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {
            $role = Role::where('name', 'admin')->firstOrFail();
            $role_demo = Role::where('name', 'user')->firstOrFail();

            User::create([
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('admin'),
                'remember_token' => Str::random(60),
                'role_id'        => $role->id,
                'api_token'      => Str::random(60),
            ]);

            User::create([
                'name'           => 'User',
                'email'          => 'demo@demo.com',
                'password'       => bcrypt('demo'),
                'remember_token' => Str::random(60),
                'role_id'        => $role_demo->id,
                'api_token'      => Str::random(60),
            ]);
        }
    }
}
