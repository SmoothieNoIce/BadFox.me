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
				<br>
				<div class="about-title-div"><p class="about-title">Programming Language</p></div>
				<p>＊Java</p>
				<p>＊Javascript</p>
				<p>＊Php</p>
				<p>＊Python</p>
				<p>＊Golang/p>
				<p>＊Html/css</p>
				<br>
				<div class="about-title-div"><p class="about-title">FrameWork</p></div>
				<p>＊Laravel</p>
				<p>＊Vue.js</p>
				<br>
				<div class="about-title-div"><p class="about-title">Tools</p></div>
				<p>＊Bootstrap</p>
				<p>＊Firebase</p>
				<p>＊Docker</p>
				<br>
				<div class="about-title-div"><p class="about-title">Database</p></div>
				<p>＊MySQL</p>
				<p>＊PGSQL</p>
				<p>＊Sqlite/p>
				<p>＊Radis</p>
				<p>＊MongoDB</p>
				<br>
				<div class="about-title-div"><p class="about-title">Portfolio</p></div>
				<p>＊Kaomoji Go</p>
				<p>＊TwPlan(游台灣)</p>
				<p>＊BadFox website</p>
				<p>＊Furret bot</p>
				<br>
				<div class="about-title-div"><p class="about-title">Others</p></div>
				<a herf="https://github.com/SmoothieNoIce">Github</a>
				<a herf="https://bitbucket.org/dashboard/repositories">Bitbucket</a>
				<br>
		</div>
	</div>
@endsection