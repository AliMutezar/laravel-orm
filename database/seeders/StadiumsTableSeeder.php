<?php

namespace Database\Seeders;

use App\Models\Stadiums;
use Illuminate\Database\Seeder;

class StadiumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $stadiums = [
            [
                'name'          => 'Stamford Bridge',
                'capacity'      =>  40000,
                'address'       =>  'Stamford Bridge, Fulham Road, London, SW6 1HS',
                'created_at'    =>  '2023-02-28 00:00:00',
                'updated_at'    =>  '2023-02-28 00:00:00',
            ],

            [
                'name'          => 'Emirates Stadium',
                'capacity'      =>  60000,
                'address'       =>  'Highbury House, 75 Drayton Park, London, N5 1BU',
                'created_at'    =>  '2023-02-28 00:00:00',
                'updated_at'    =>  '2023-02-28 00:00:00',
            ],

            [
                'name'          => 'Anfield',
                'capacity'      =>  54000,
                'address'       =>  'Anfield Rd, Anfield, Liverpool L4 0TH, Inggris Raya',
                'created_at'    =>  '2023-02-28 00:00:00',
                'updated_at'    =>  '2023-02-28 00:00:00',
            ]
        ];

        Stadiums::insert($stadiums);
    }
}
