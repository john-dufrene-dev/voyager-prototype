<?php

use App\User;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            $role_demo = Role::where('name', 'demo')->firstOrFail();
            $role_client = Role::where('name', 'user')->firstOrFail();
            $role_notifiable = Role::where('name', 'notifiable')->firstOrFail();

            User::create([
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('admin'),
                'remember_token' => Str::random(60),
                'role_id'        => $role->id,
            ]);

            User::create([
                'name'           => 'Client',
                'email'          => 'client@client.com',
                'password'       => bcrypt('client'),
                'remember_token' => Str::random(60),
                'role_id'        => $role_client->id,
            ]);

            User::create([
                'name'           => 'Demo',
                'email'          => 'demo@demo.com',
                'password'       => bcrypt('demo'),
                'remember_token' => Str::random(60),
                'role_id'        => $role_demo->id,
            ]);
            
            $client = User::where('name', 'Client')->firstOrFail();

            DB::table('user_roles')->insert([[
                'user_id' => $client->id,
                'role_id' => $role_notifiable->id
            ]]);
        }
    }
}
