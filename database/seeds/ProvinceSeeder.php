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
            'provinceName' => 'New Brunswick',
            'Pays_id' => '1',
        ]);

        DB::table('provinces')->insert([
            'provinceName' => 'Québec',
            'Pays_id' => '1',
        ]);
        DB::table('provinces')->insert([
            'provinceName' => 'Washington',
            'Pays_id' => '2',
        ]);
        DB::table('provinces')->insert([
            'provinceName' => 'Chicago',
            'Pays_id' => '2',
        ]);
    }
}
