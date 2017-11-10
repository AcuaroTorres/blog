<h1>Noticias</h1>

<br>

<h2>{{$article->title}}</h2>
<hr>
<p>{{$article->content}}</p>
<hr>
<small>{{$article->user->name}}</small> - 
@foreach($article->tags as $tag)
	{{$tag->name}} -
@endforeach