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
        $tag1 = new App\Tag();
        $tag1->name = 'Kawasaky';
        $tag1->save();

        $tag2 = new App\Tag();
        $tag2->name = 'Honda';
        $tag2->save();

        $tag3 = new App\Tag();
        $tag3->name = 'BMW';
        $tag3->save();

        $tag4 = new App\Tag();
        $tag4->name = 'Yamaha';
        $tag4->save();
    }
}
