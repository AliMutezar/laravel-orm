<?php

namespace Database\Seeders;

use App\Models\Players;
use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $players = [
            [
                'clubs_id'  =>  '1',
                'photo'     =>  'https://cdns.klimg.com/bola.net/library/upload/21/2023/01/645x430/mudryk-1_5a2684c.jpg',
                'name'      =>  'mudryk',
                'height'    =>  '180',
                'position'  =>  'Defender',
                'created_at'    =>  '2023-02-28 00:00:00',
                'updated_at'    =>  '2023-02-28 00:00:00',
            ],

            [
                'clubs_id'  =>  '1',
                'photo'     =>  'https://media.vivagoal.com/2020/10/Mantan-Pemain-Menilai-Havertz-Bakal-Jadi-Bintang-di-Chelsea-copy.jpg',
                'name'      =>  'Havertz',
                'height'    =>  '175',
                'position'  =>  'Striker',
                'created_at'    =>  '2023-02-28 00:00:00',
                'updated_at'    =>  '2023-02-28 00:00:00',
            ],

            [
                'clubs_id'  =>  '2',
                'photo'     =>  'https://akcdn.detik.net.id/community/media/visual/2020/10/31/mesut-oezil_169.jpeg?w=700&q=90',
                'name'      =>  'Mesut Oezil',
                'height'    =>  '180',
                'position'  =>  'Striker',
                'created_at'    =>  '2023-02-28 00:00:00',
                'updated_at'    =>  '2023-02-28 00:00:00',
            ],
            
            [
                'clubs_id'  =>  '2',
                'photo'     =>  'https://cdns.klimg.com/bola.net/library/upload/21/2021/08/645x430/ben-white-afc-02-h_e7d51aa.jpg',
                'name'      =>  'Ben White',
                'height'    =>  '183',
                'position'  =>  'Middle',
                'created_at'    =>  '2023-02-28 00:00:00',
                'updated_at'    =>  '2023-02-28 00:00:00',
            ],

            [
                'clubs_id'  =>  '3',
                'photo'     =>  'https://akcdn.detik.net.id/community/media/visual/2022/02/17/roberto-firmino-1_169.jpeg?w=700&q=90',
                'name'      =>  'Roberto Firmino',
                'height'    =>  '183',
                'position'  =>  'Defender',
                'created_at'    =>  '2023-02-28 00:00:00',
                'updated_at'    =>  '2023-02-28 00:00:00',
            ],

            [
                'clubs_id'  =>  '3',
                'photo'     =>  'https://akcdn.detik.net.id/community/media/visual/2021/01/09/mohamed-salah.jpeg?w=700&q=90',
                'name'      =>  'Mohamed Salah',
                'height'    =>  '178',
                'position'  =>  'Stiker',
                'created_at'    =>  '2023-02-28 00:00:00',
                'updated_at'    =>  '2023-02-28 00:00:00',
            ],
        ];

        Players::insert($players);
    }
}
