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
	    $article = new App\Article();
	    $article->title = 'Primera noticia';
	    $article->content ='Kawasaky versys 300x';
	    $article->user()->associate(App\User::find(1));
	    $article->category()->associate(App\Category::find(1));
	    $article->save();

	    $article = new App\Article();
	    $article->title = 'Honda XRE300';
	    $article->content ='El modelo de carabineros Honda XRE 300';
	    $article->user()->associate(App\User::find(3));
	    $article->category()->associate(App\Category::find(1));
	    $article->save();

	    $article = new App\Article();
	    $article->title = 'BMW Lanza G310GS';
	    $article->content ='La nueva mini trail estará disponible para finales del 2018';
	    $article->user()->associate(App\User::find(1));
	    $article->category()->associate(App\Category::find(1));
	    $article->save();

	    $article = new App\Article();
	    $article->title = 'Renault Captur';
	    $article->content ='Un excelente vehiculo para toda la familia';
	    $article->user()->associate(App\User::find(1));
	    $article->category()->associate(App\Category::find(2));
	    $article->save();
    }
}
