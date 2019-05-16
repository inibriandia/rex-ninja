<?php

use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'categorie' => 'Sport',
        ]);

        DB::table('categories')->insert([
            'categorie' => 'Musique',
        ]);

        DB::table('categories')->insert([
            'categorie' => 'Art visuels',
        ]);

        DB::table('categories')->insert([
            'categorie' => 'Degustation',
        ]);
    }
}
