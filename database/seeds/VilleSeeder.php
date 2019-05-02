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
        ]);

        DB::table('villes')->insert([
            'ville' => 'Moncton',
        ]);

        DB::table('villes')->insert([
            'ville' => 'Saint John',
        ]);

        DB::table('villes')->insert([
            'ville' => 'Frédericton',
        ]);
    }
}
