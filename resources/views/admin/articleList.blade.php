@extends('layouts.badFoxStyle', ['category' => '4'])

@section('content')

<div class="fh5co-narrow-content-2">
	<ul class="nav nav-pills">
	  <li class="nav-item">
		<a class="nav-link" href="{{url('/admin/home')}}">後臺首頁</a>
	  </li>
	  <li class="nav-item">
	  <a class="nav-link active" href="{{url('/admin/articleList')}}">文章</a>
	  </li>
	  <li class="nav-item">
		  <a class="nav-link" href="{{url('/admin/tagList')}}">標籤</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" href="{{url('/admin/imgList')}}">圖片列表</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" href="{{url('/admin/contentSetting')}}">內容設定</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" href="{{url('/admin/fullSetting')}}">主設定</a>
	  </li>
	  <li class="nav-item">
		  <a class="nav-link" href="{{url('/admin/logout')}}">登出</a>
	  </li>
	</ul>
</div>

<div class="fh5co-narrow-content-2">
		<ul class="nav">
			<li class="nav-item">
				<a class="nav-link" href="{{url('/admin/article/new')}}">新增文章+</a>
			</li>
		</ul>
</div>


<div class="fh5co-narrow-content-2 animated fadeInLeft" data-animate-effect="fadeInLeft">

	<h2 class="fh5co-heading">文章列表</h2>

	@foreach ($articles as $article)
		<p style="margin: 0 0 5px 0;" >{{'ID：'.$article->id}}</p>
		<p style="margin: 0 0 5px 0;">{{'TITLE：'.$article->title}}</p>
		<p style="margin: 0 0 5px 0;">{{'DATE：'.$article->date}}</p>
		<p style="margin: 0 0 5px 0;">{{'AUTHOR：'.$article->author}}</p>
		<p style="margin: 0 0 5px 0;">{{'THUMBNAIL：'.$article->thumbnail}}</p>
		<p style="margin: 0 0 5px 0;">{{'TAGS：'}}
			@foreach ($article->tags as $tag)
			<a href="" style="margin:0 10px 0 0;" class="badge badge-primary">{{$tag['name']}}</a>
			@endforeach
		</p>
		<form  action="{{url('admin/article/delete/'.$article->id)}}" method="POST">
			{{ csrf_field() }}
			<a id="article-view"  href="{{url('article/'.$article->id)}}" type="button" class="btn btn-info">查看</a>
			<a id="article-edit"  href="{{route('editPost', ['id' => $article->id])}}" type="button" class="btn btn-warning">修改</a>
			<button id="article-delete" type="submit" class="btn btn-danger">刪除</button>
		</form>
		<br>
		<br>
	@endforeach
	<div class="fh5co-narrow-content">
			<?php echo $articles->render(); ?>
	</div>

</div>
@endsection