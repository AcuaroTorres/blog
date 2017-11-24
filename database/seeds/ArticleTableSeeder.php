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
	    $article1 = new App\Article();
	    $article1->title = 'Primera noticia';
	    $article1->content ='Kawasaky versys 300x';
	    $article1->user()->associate(App\User::find(1));
	    $article1->category()->associate(App\Category::find(1));
	    $article1->save();

	    $article2 = new App\Article();
	    $article2->title = 'Honda XRE300';
	    $article2->content ='El modelo de carabineros Honda XRE 300';
	    $article2->user()->associate(App\User::find(3));
	    $article2->category()->associate(App\Category::find(1));
	    $article2->save();

	    $article3 = new App\Article();
	    $article3->title = 'BMW Lanza G310GS';
	    $article3->content ='La nueva mini trail estará disponible para finales del 2018';
	    $article3->user()->associate(App\User::find(1));
	    $article3->category()->associate(App\Category::find(1));
	    $article3->save();

	    $article4 = new App\Article();
	    $article4->title = 'Renault Captur';
	    $article4->content ='Un excelente vehiculo para toda la familia';
	    $article4->user()->associate(App\User::find(1));
	    $article4->category()->associate(App\Category::find(2));
	    $article4->save();
    }
}
