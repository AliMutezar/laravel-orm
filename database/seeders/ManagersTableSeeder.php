<?php

namespace Database\Seeders;

use App\Models\Managers;
use Illuminate\Database\Seeder;

class ManagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $managers = [
            [
                'clubs_id'  =>  '1',
                'photo'     =>  'https://resources.premierleague.com/premierleague/photos/players/250x250/man39237.png',
                'name'      =>  'Thomas Tuchel',
                'old'       =>  '47',
                'nationality' => 'Germany',
                'created_at'    =>  '2023-02-28 00:00:00',
                'updated_at'    =>  '2023-02-28 00:00:00',
            ],
            [
                'clubs_id'  =>  '2',
                'photo'     =>  'https://resources.premierleague.com/premierleague/photos/players/250x250/man51018.png',
                'name'      =>  'Mikel Arteta',
                'old'       =>  '38',
                'nationality' => 'Spain',
                'created_at'    =>  '2023-02-28 00:00:00',
                'updated_at'    =>  '2023-02-28 00:00:00',
            ],
            [
                'clubs_id'  =>  '3',
                'photo'     =>  'https://www.ligaolahraga.com/storage/images/news/2017/08/05/ragam-liga-inggris-mengenal-enam-staf-pelatih-jurgen-klopp-di-liverpool.jpg',
                'name'      =>  'Jürgen Klopp',
                'old'       =>  '55',
                'nationality' => 'Germany',
                'created_at'    =>  '2023-02-28 00:00:00',
                'updated_at'    =>  '2023-02-28 00:00:00',
            ],
        ];

        Managers::insert($managers);
    }
}
