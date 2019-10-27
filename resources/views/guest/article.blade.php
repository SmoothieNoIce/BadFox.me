@extends('layouts.badFoxStyle', ['category' => '1','title' => $article->title+' - BadFox'])

@section('content')
<div class="fh5co-narrow-content animated fadeInLeft" data-animate-effect="fadeInLeft">

		@isset($mode)
			@if($mode==1)
			<h1 class="article-heading">這是預覽模式!</h2>
			@endif
		@endisset

		@isset($article)

			<div  class="article-div">
				<a href="" class="article-img"><img src="{{$article->thumbnail}}" class="article-img" alt="IMAGE"></a>
			</div>
	
			<h1 class="article-heading">{{$article->title}}</h2>
	
			<h2 class="fh5co-heading-2">{{$article->date}}</h2>
			
			@isset($tags)
			@foreach ($tags as $tag)
			<a href="" style="margin:0 10px 0 0;" class="badge badge-primary">{{$tag['name']}}</a>
			@endforeach
			@endisset
	
			<br><br>
			<h2 class="fh5co-heading">作者： {{$article->author}}</h2>
	
			<h2 class="article-text">{!!$article->content!!}</h2>
	
			<br>

			@else
				<h1 class="article-text">文章不存在uwu</h2>	
		@endisset

</div>

@endsection