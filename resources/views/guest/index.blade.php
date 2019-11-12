@extends('layouts.badFoxStyle', ['category' => '0','title' => '首頁 - BadFox'])

@section('content')


<div class="fh5co-narrow-content animated fadeInLeft">
    <h2 class="fh5co-heading">首頁</h2>
	<div class="fh5co-text">
            <p>放一些怪怪的東西的地方</p>
    </div> 
    <div class="fh5co-text">
            <h4>最新文章</h3>
            <div class="row row-bottom-padded-md box">
            @foreach ($articles as $article)
	        <div class="col-md-3 col-sm-6 col-padding animated fadeInLeft">
		        <div class="blog-entry">
			        <a href="{{url('article/'.$article->id)}}" class="blog-img"><img src="{{$article->thumbnail}}" class="img-responsive" alt="IMAGE"></a>
			        <div class="desc">
				        <h3><a href="{{url('article/'.$article->id)}}">{{$article->title}}</a></h3>
				        <span><small>{{$article->author}} </small> / <small>{{$article->date}}  </small> </small></span>
				        <p style="color: black">{{mb_substr($article->content,0,50,"utf-8")}}</p>
				        <a href="{{url('article/'.$article->id)}}" class="lead">看更多 <i class="icon-arrow-right3"></i></a>
			         </div>
		        </div>
	        </div>
            @endforeach
            </div>
    </div>
{{--     @if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
    
                @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
                @endif
    
            @endauth
    @endif --}}
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('.content .guide ul.guide li .event').mouseover(function(){
            $(this).find('.info').stop().fadeTo('slow',1);
        });
        $('.content .guide ul.guide li .event').mouseout(function(){
            $(this).find('.info').stop().fadeTo('slow',0);
        });
    });
</script>
@endsection