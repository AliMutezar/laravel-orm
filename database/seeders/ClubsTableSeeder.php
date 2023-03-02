<?php

namespace Database\Seeders;

use App\Models\Clubs;
use Illuminate\Database\Seeder;


class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $clubs = [
            [
                'stadiums_id'   =>  '1',
                'name'          =>  'Chelsea FC',
                'logo'          =>  'https://resources.premierleague.com/premierleague/badges/t8.svg',
                'url'           =>  'https://www.chelseafc.com',
                'thropy'        =>  19,
                'created_at'    =>  '2023-02-28 00:00:00',
                'updated_at'    =>  '2023-02-28 00:00:00',
            ],

            [
                'stadiums_id'   =>  '2',
                'name'          =>  'Arsenal FC',
                'logo'          =>  'https://resources.premierleague.com/premierleague/badges/t3.svg',
                'url'           =>  'https://www.arsenal.com',
                'thropy'        =>  8,
                'created_at'    =>  '2023-02-28 00:00:00',
                'updated_at'    =>  '2023-02-28 00:00:00',
            ],

            [
                'stadiums_id'   =>  '3',
                'name'          =>  'Liverpool FC',
                'logo'          =>  'https://resources.premierleague.com/premierleague/badges/t14.svg',
                'url'           =>  'https://www.liverpoolfc.com/',
                'thropy'        =>  19,
                'created_at'    =>  '2023-02-28 00:00:00',
                'updated_at'    =>  '2023-02-28 00:00:00',
            ]
        ];

        Clubs::insert($clubs);
    }
}
