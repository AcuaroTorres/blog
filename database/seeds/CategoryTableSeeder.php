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
        $category1 = new App\Category();
        $category1->name = 'Motos';
        $category1->save();

        $category2 = new App\Category();
        $category2->name = 'Autos';
        $category2->save();

        $category3 = new App\Category();
        $category3->name = 'Camiones';
        $category3->save();
    }
}
