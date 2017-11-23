<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	    $article1 = new App\Article();
	    $article1->title = 'Primera noticia';
	    $article1->content ='Kawasaky versys 300x';
	    $article1->user()->associate(App\User::find(1));
	    $article1->category()->associate(App\Category::find(1));
	    $article1->save();

	    $article2 = new App\Article();
	    $article2->title = 'Segunda noticia';
	    $article2->content ='Nueva Honda XRE';
	    $article2->user()->associate(App\User::find(3));
	    $article2->category()->associate(App\Category::find(2));
	    $article2->save();

    }
}
