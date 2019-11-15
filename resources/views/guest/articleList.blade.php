@extends('layouts.badFoxStyle', ['category' => '1','title' => '文章列表 - Flexolk'])

@section('content')
<div class="fh5co-narrow-content animated fadeInLeft" data-animate-effect="fadeInLeft">
	<h2 class="fh5co-heading">文章列表</h2>
	<br>

	<div class="row row-bottom-padded-md box">
	@foreach ($articles as $article)
	<div class="item col-md-5 col-sm-3 col-padding animated fadeInLeft" data-animate-effect="fadeInLeft">
		<div class="blog-entry">
			<a href="{{url('article/'.$article->id)}}" class="blog-img"><img src="{{$article->thumbnail}}" class="blog-img img-responsive" alt="IMAGE"></a>
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


</div>
<script >
$(function(){

    $('.box').imagesLoaded(function () {
        $('.box').masonry({

            itemSelector: '.item',
            animate:true
        });
    });
});
	
</script>
@endsection