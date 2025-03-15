<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Features;
use App\Models\Permission;
use App\Models\User;
use App\Models\Roles;
use App\Models\RolesPermission;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->createMany([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'role_id' => 1, // Make sure role_id exists
                // ... other columns
            ],
             ['name' => 'bobo',
             'email' => 'bobo@gmail.com',
             'password'=>Hash::make('password'),
             'role_id'=> 2]
         ]);

        Features::factory()->createMany([
                ['name'=>'User'],
                ['name'=>'Roles'],
                ['name'=>'Supplier'],
                ['name'=>'Customer'],
                ['name'=>'Product'],
                ['name'=>'Variation'],
                ['name'=>'Selling Price Group'],
                ['name'=>'Category'],
                ['name'=>'Brand'],
        ]);

        Roles::factory()->createMany([
            ['name'=>'admin'],
            ['name'=>'operator'],
            ['name'=>'cashier'],
            ['name'=>'accountant'],
            ['name'=>'warehouse specialist'],
            ['name'=>'maketing staff'],
        ] );

        /* Users::factory()->createMany([
                ['name'=>'Kyaw Kyaw', 'role_id'=> 1],
                ['name'=>'David', 'role_id'=> 2],
            ]); */

        $features = Features::all();
        foreach($features as $feature){
            $permissions = [
                [
                    'name'=> 'View',
                    'feature_id'=>$feature->id,
                ],
                [
                    'name'=> 'Create',
                    'feature_id'=>$feature->id,
                ],
                [
                    'name'=> 'Update',
                    'feature_id'=>$feature->id,
                ],
                [
                    'name'=> 'Delete',
                    'feature_id'=>$feature->id,
                ],
                [
                    'name'=> 'Import',
                    'feature_id'=>$feature->id,
                ],
                [
                    'name'=> 'Export',
                    'feature_id'=>$feature->id,
                ],
                [
                    'name'=> 'Print',
                    'feature_id'=>$feature->id,
                ]
                ];
                Permission::insert($permissions);
        }

        RolesPermission::factory()->createMany([
                ['role_id'=>1, 'permission_id'=> 1],
                ['role_id'=>1, 'permission_id'=> 2],
                ['role_id'=>1, 'permission_id'=> 3],
                ['role_id'=>1, 'permission_id'=> 4],
                ['role_id'=>1, 'permission_id'=> 5],
                ['role_id'=>1, 'permission_id'=> 6],
                ['role_id'=>1, 'permission_id'=> 7],
                ['role_id'=>1, 'permission_id'=> 8],
        ]);

    }
}
