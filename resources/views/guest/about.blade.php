@extends('layouts.badFoxStyle', ['category' => '3'])

@section('content')
<div class="fh5co-narrow-content animated fadeInLeft" data-animate-effect="fadeInLeft">
		<div class="fh5co-text">
				<h3>關於</h3>
				<p>這是我用Laravel來寫出的個人網站>w<</p>
				<br><br>
				<div><img src="{{URL::asset('images/badfox.png')}}" class="logo-img img-responsive" alt="IMAGE"></div>
				<h3>簡歷</h3>
				<div class="about-title-div"><p class="about-title">Technique</p></div>
				<p>＊Web Design</p>
				<p>＊Android APP Design</p>
				<p>＊資料庫設計</p>
				<br>
				<div class="about-title-div"><p class="about-title">Programming Language</p></div>
				<p>＊JAVA</p>
				<p>＊JAVASCRIPT</p>
				<p>＊PHP</p>
				<p>＊PYTHON</p>
				<p>＊GO</p>
				<p>＊HTML / CSS</p>
				<br>
				<div class="about-title-div"><p class="about-title">FrameWork</p></div>
				<p>＊LARAVEL</p>
				<p>＊VUE.JS</p>
				<p>＊ANDROID FRAMEWORK</p>
				<br>
				<div class="about-title-div"><p class="about-title">Tools</p></div>
				<p>＊JQUERY / AJAX</p>
				<p>＊BOOTSTRAP</p>
				<p>＊FIREBASE</p>
				<p>＊DOCKER</p>
				<p>＊GSON</p>
				<br>
				<div class="about-title-div"><p class="about-title">Database</p></div>
				<p>＊MYSQL</p>
				<p>＊SQLITE</p>
				<p>＊RADIS</p>
				<p>＊MONGODB</p>
				<br>
				<div class="about-title-div"><p class="about-title">PORTFOLIO</p></div>
				<p>＊Kaomoji Go</p>
				<p>＊TwPlan(游台灣)</p>
				<p>＊BadFox website</p>
				<p>＊Furret bot</p>
				<br>
		</div>
	</div>
@endsection