@extends('layouts.badFoxStyle', ['category' => '4','title' => '後台-圖片列表 - BadFox'])

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
        <a class="nav-link" href="{{url('/admin/tagList')}}">標籤</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{url('/admin/imgList')}}">圖片列表</a>
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


<br>
<br>

<div class="col-md-6 col-sm-6 col-xs-12">
    <form  action="{{url('admin/image/upload')}}" method="post">
      {{ csrf_field() }}
    <div id="inputBox" class="form-group">
        <label class="fh5co-heading-2" >上傳圖片</label>
        <input class="form-control" type="file" title="請選擇圖片" id="mainImg" name="main_img" required multiple accept="image/png,image/jpg,image/gif,image/JPEG"/>
        <div id="mainImgBox"></div>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">上傳</button>
    </form>
</div>

<div class="fh5co-narrow-content-2 animated fadeInLeft" data-animate-effect="fadeInLeft">
</div>

@endsection