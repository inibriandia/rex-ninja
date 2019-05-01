<?php

use Illuminate\Database\Seeder;

class PaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pays')->insert([
            'pays' => 'Canada',
        ]);

        DB::table('pays')->insert([
            'pays' => 'USA',
        ]);

        DB::table('pays')->insert([
            'pays' => 'France',
        ]);
    }
}
