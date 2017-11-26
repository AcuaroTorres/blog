<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new App\Category();
        $category->name = 'Motos';
        $category->save();

        $category = new App\Category();
        $category->name = 'Autos';
        $category->save();

        $category = new App\Category();
        $category->name = 'Camiones';
        $category->save();
    }
}
