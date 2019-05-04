<?php

use Illuminate\Database\Seeder;

class AmbianceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ambiances')->insert([
            'ambiance' => 'Plein air',
        ]);

        DB::table('ambiances')->insert([
            'ambiance' => 'Intérieur',
        ]);

        DB::table('ambiances')->insert([
            'ambiance' => 'Mer',
        ]);
    }
}
