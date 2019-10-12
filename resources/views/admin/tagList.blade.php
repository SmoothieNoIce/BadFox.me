@extends('layouts.badFoxStyle', ['category' => '4'])

@section('content')
<div class="fh5co-narrow-content-2">
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="{{url('/admin/home')}}">後臺首頁</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{url('/admin/articleList')}}">文章</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{{url('/admin/tagList')}}">標籤</a>
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
  <form  action="{{url('admin/tag/add')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label class="fh5co-heading-2" >名稱</label>
        <input class="form-control" type="text" placeholder="NAME" name="name" value="">
    </div>
    <div class="form-group">
        <label class="fh5co-heading-2" >介紹</label>
        <input class="form-control" type="text" placeholder="DESCRIPTION" name="description" value="">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">新增Tag</button>
</div>

<div class="fh5co-narrow-content-2 animated fadeInLeft" data-animate-effect="fadeInLeft">

@isset($tags)
<h2 class="fh5co-heading">標籤</h2>
@foreach ($tags as $tag)
<a href="" style="margin:0 10px 0 0;" class="badge badge-primary">ID：{{$tag->id}}<br>NAME：{{$tag->name}}<br>DESCRIPTION：{{$tag->description}}</a>
<br>
@endforeach
<div class="fh5co-narrow-content">
    <?php echo $tags->render(); ?>
</div>
@endisset
</div>

@endsection