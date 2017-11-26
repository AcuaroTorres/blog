<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = new App\Tag();
        $tag->name = 'Kawasaky';
        $tag->save();

        $tag = new App\Tag();
        $tag->name = 'Honda';
        $tag->save();

        $tag = new App\Tag();
        $tag->name = 'BMW';
        $tag->save();

        $tag = new App\Tag();
        $tag->name = 'Yamaha';
        $tag->save();

        $tag = new App\Tag();
        $tag->name = 'Toyota';
        $tag->save();

        $tag = new App\Tag();
        $tag->name = 'Mitsubishi';
        $tag->save();

        $tag = new App\Tag();
        $tag->name = 'Hiundai';
        $tag->save();

        $tag = new App\Tag();
        $tag->name = 'Audi';
        $tag->save();
    }
}
