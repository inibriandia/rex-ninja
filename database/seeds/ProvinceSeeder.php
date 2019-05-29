<?php

use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert([
            'province' => 'New Brunswick',
            'Pays_id' => '1',
        ]);

        DB::table('provinces')->insert([
            'province' => 'Québec',
            'Pays_id' => '1',
        ]);
        DB::table('provinces')->insert([
            'province' => 'Washington',
            'Pays_id' => '2',
        ]);
        DB::table('provinces')->insert([
            'province' => 'Chicago',
            'Pays_id' => '2',
        ]);
    }
}
