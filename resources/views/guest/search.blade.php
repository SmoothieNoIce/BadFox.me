@extends('layouts.badFoxStyle', ['category' => '2'])

@section('content')
<div class="fh5co-narrow-content animated fadeInLeft" data-animate-effect="fadeInLeft">
	<h2 class="fh5co-heading">搜尋</h2>

	<div class="fh5co-text">
			<div>
				<?php
				if(!isset($articles)){
					echo '<p>旁邊就有搜尋框了，何樂不為呢？</p>';
				}?>
					<form action="{{ url('search') }}" method="get">
						{{ csrf_field() }}
						<div class="active-purple-4 mb-4" >
							<input style="margin:0 200px 0 0" class="form-control search-form" name="parameter" type="text" placeholder="搜尋" aria-label="Search">
						</div>
					</form>
			</div>
	</div>

	@isset($parameter)
	<h4>{{$parameter}}  的搜尋結果</p>
	@endisset


	@isset($articles)
	<?php 
	if(count($articles)==0){
		echo '<h5>無結果</p>';
	}
	?>
	<div class="row row-bottom-padded-md box">
			@foreach ($articles as $article)
			<div class="item col-md-5 col-sm-3 col-padding animated fadeInLeft" data-animate-effect="fadeInLeft">
				<div class="blog-entry">
					<a href="{{url('article/'.$article->id)}}" class="blog-img"><img src="{{$article->thumbnail}}" class="img-responsive" alt="IMAGE"></a>
					<div class="desc">
						<h3><a href="{{url('article/'.$article->id)}}">{{$article->title}}</a></h3>
						<span><small>{{$article->author}} </small> / <small>{{$article->date}}  </small> </small></span>
						<p style="color: black">{{mb_substr($article->content,0,50,"utf-8")}}</p>
						<a href="{{url('article/'.$article->id)}}" class="lead">Read More <i class="icon-arrow-right3"></i></a>
					</div>
				</div>
			</div>
			@endforeach
			</div>
		
		
			<br>
			<div class="fh5co-narrow-content">
					<?php echo $articles->render(); ?>
			</div>
	@endisset

</div>
@endsection