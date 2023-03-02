<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [   'name'          => 'Admin',
                'created_at'    =>  now(),
                'updated_at'    =>  now(),
            ],

            [   'name'          => 'Staff',
                'created_at'    =>  now(),
                'updated_at'    =>  now(),
            ],

            [   'name'          => 'Developer',
                'created_at'    =>  now(),
                'updated_at'    =>  now(),
            ]
        ];

        Roles::insert($roles);
    }
}
