<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [

            // Developer
            [
                'name'  =>  'Ahmad Ali Mutezar',
                'email' =>  'aamutezar@gmail.com',
                'email_verified_at' => now(),
                'password' => 'P@ssw0rd',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name'  =>  'Alvin',
                'email' =>  'alvin@gmail.com',
                'email_verified_at' => now(),
                'password' => 'P@ssw0rd',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Staff
            [
                'name'  =>  'Gunawan Wibisono',
                'email' =>  'gunawan@gmail.com',
                'email_verified_at' => now(),
                'password' => 'P@ssw0rd',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name'  =>  'Carisa',
                'email' =>  'carisa@gmail.com',
                'email_verified_at' => now(),
                'password' => 'P@ssw0rd',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Admin
            [
                'name'  =>  'Nadia',
                'email' =>  'nadia@gmail.com',
                'email_verified_at' => now(),
                'password' => 'P@ssw0rd',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],


            [
                'name'  =>  'Febe',
                'email' =>  'febe@gmail.com',
                'email_verified_at' => now(),
                'password' => 'P@ssw0rd',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],


        ];

        User::insert($users);
    }
}
