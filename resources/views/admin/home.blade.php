@extends('layouts.badFoxStyle', ['category' => '4'])

@section('content')

<div class="fh5co-narrow-content-2">
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link active" href="{{url('/admin/home')}}">後臺首頁</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{url('/admin/articleList')}}">文章</a>
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

<br>
<br>

<div class="fh5co-narrow-content-3 animated fadeInLeft" data-animate-effect="fadeInLeft">
    <h2 class="fh5co-heading">系統基本訊息</h2>
    <p class="fh5co-heading-2" >版本：BF 1.0</p>
    <p class="fh5co-heading-2" >框架：Laravel</p>
    <p class="fh5co-heading-2" >系統：{{PHP_OS}}</p>
    <p class="fh5co-heading-2" >環境：{{$_SERVER['SERVER_SOFTWARE']}}</p>
    <p class="fh5co-heading-2" >時間：台北時間 <?php echo date("Y/m/d h:i:s");?></p>
    <p class="fh5co-heading-2" >伺服器名稱：{{$_SERVER['SERVER_NAME']}}</p>
    <p class="fh5co-heading-2" >伺服器地址：{{$_SERVER['SERVER_ADDR']}}</p>
    <br>
    <h2 class="fh5co-heading">網站流量</h2>
</div>
 @endsection