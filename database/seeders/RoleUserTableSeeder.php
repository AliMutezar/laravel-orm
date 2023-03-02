<?php

namespace Database\Seeders;

use App\Models\RoleUser;
use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = [
            [
                'user_id'       => '1',
                'role_id'       => '3',
                'created_at'    =>  now(),
                'updated_at'    =>  now(),
            ],

            [
                'user_id'       => '1',
                'role_id'       => '1',
                'created_at'    =>  now(),
                'updated_at'    =>  now(),
            ],

            [
                'user_id'       => '2',
                'role_id'       => '3',
                'created_at'    =>  now(),
                'updated_at'    =>  now(),
            ],

            [
                'user_id'       => '3',
                'role_id'       => '2',
                'created_at'    =>  now(),
                'updated_at'    =>  now(),
            ],

            [
                'user_id'       => '4',
                'role_id'       => '2',
                'created_at'    =>  now(),
                'updated_at'    =>  now(),
            ],

            [
                'user_id'       => '5',
                'role_id'       => '1',
                'created_at'    =>  now(),
                'updated_at'    =>  now(),
            ],

            [
                'user_id'       => '6',
                'role_id'       => '1',
                'created_at'    =>  now(),
                'updated_at'    =>  now(),
            ],
        ];

        RoleUser::insert($role_user);
    }
}
