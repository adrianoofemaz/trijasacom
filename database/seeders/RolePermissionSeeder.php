<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'manage statistics',
            'manage products',
            'manage principles',
            'manage testimonials',
            'manage clients',
            'manage teams',
            'manage abouts',
            'manage appointments',
            'manage hero sections'
            ];
    
            foreach ($permissions as $permission) {
                Permission::firstOrCreate([
                    'name'=> $permission
             ]);
            }
        
            // $admin2Role = Role::firstOrCreate([
            //     'name'=> 'admin2'
            // ]);

            // $admin2Permissions =[
            //     'manage statistics',
            //     'manage products',
            //     'manage principles',    
            // ];
            // $admin2Role->syncPermissions($admin2Permissions);

            
            $superAdminRole =Role::firstOrCreate([
                'name' => 'super_admin'
            ]);

             $superAdminRole->syncPermissions($permissions);

            $user = User::create([
            'name' =>'admin_TrijasaSigma',
            'email' =>'superadmin@admin.com',
            'password' => bcrypt('12345678')
            ]);

            $user->assignRole(  $superAdminRole);

    }
}
