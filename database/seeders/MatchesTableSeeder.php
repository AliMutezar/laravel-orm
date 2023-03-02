<?php

namespace Database\Seeders;

use App\Models\Matches;
use Illuminate\Database\Seeder;

class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $Matches = [
            [
                'clubs_id'  =>  '1',
                'rivals_id' =>  '2',
                'schedule'  =>  '2023-03-01 16:00:00',
                'created_at'    =>  '2023-02-28 00:00:00',
                'updated_at'    =>  '2023-02-28 00:00:00',
            ],

            [
                'clubs_id'  =>  '2',
                'rivals_id' =>  '3',
                'schedule'  =>  '2023-03-07 20:00:00',
                'created_at'    =>  '2023-02-28 00:00:00',
                'updated_at'    =>  '2023-02-28 00:00:00',
            ],

            [
                'clubs_id'  =>  '3',
                'rivals_id' =>  '1',
                'schedule'  =>  '2023-03-014 18:00:00',
                'created_at'    =>  '2023-02-28 00:00:00',
                'updated_at'    =>  '2023-02-28 00:00:00',
            ],
        ];

        Matches::insert($Matches);
    }
}
