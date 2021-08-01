<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // seeds the db with 10 example ads
        for ($i=0; $i < 12; $i++) {
            DB::table('ads')->insert([
                'title' => 'lf 1x healer 2x tank 3x dps',
                'description' => 'we are a really cool group and i need to make this example text quite long so i will continue to type. we are wanting to kill tea and you need to be the best player in the world in order to join us because we are also the best players in the world. please contact me so we can all be really good together.',
                'discord_contact' => 'example#0000',
                'ad_type' => 'static_rec',
            ]);
        }
    }
}
