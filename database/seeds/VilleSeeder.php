<?php

use Illuminate\Database\Seeder;

class VilleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('villes')->insert([
            'ville' => 'Bathurst',
            'province_id' => '1',
        ]);

        DB::table('villes')->insert([
            'ville' => 'Moncton',
            'province_id' => '1',
        ]);

        DB::table('villes')->insert([
            'ville' => 'Saint John',
            'province_id' => '1',
        ]);

        DB::table('villes')->insert([
            'ville' => 'Frédericton',
            'province_id' => '1',
        ]);
        DB::table('villes')->insert([
            'ville' => 'Montreal',
            'province_id' => '2',
        ]);
        DB::table('villes')->insert([
            'ville' => 'Quebec City',
            'province_id' => '2',
        ]);
        DB::table('villes')->insert([
            'ville' => 'Laval',
            'province_id' => '2',
        ]);
    }
}
