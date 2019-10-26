@extends('layouts.badFoxStyle', ['category' => '3'])

@section('content')
<div class="fh5co-narrow-content animated fadeInLeft" data-animate-effect="fadeInLeft">
		<div class="fh5co-text">
				<h3>關於</h3>
				<p>這是我用Laravel來寫出的個人網站>w<</p>
				<br><br>
				<div><img src="{{URL::asset('images/badfox.png')}}" class="logo-img img-responsive" alt="IMAGE"></div>
				<h3>簡歷</h3>
				<div class="about-title-div"><p class="about-title">Links</p></div>
				<a href="https://github.com/SmoothieNoIce">Github</a>
				<a href="https://bitbucket.org/dashboard/repositories">Bitbucket</a>
				<br>
				<div class="about-title-div"><p class="about-title">Portfolio</p></div>
				<p href="https://badfox-me-website.herokuapp.com/index">＊BadFox website</p>
				<p href="https://play.google.com/store/apps/details?id=com.abbc45255.emojibyabbc45255&hl=zh-TW">＊Kaomoji Go</p>
				<p href="https://play.google.com/store/apps/details?id=me.badfox.twplan&hl=zh-TW">＊TwPlan(游台灣)</p>
				<p href="https://play.google.com/store/apps/details?id=com.abbc45255.simplewidgetgo&hl=zh-TW">＊SWG</p>
				<p href="https://discordapp.com/api/oauth2/authorize?client_id=630007539840581642&permissions=0&scope=bot">＊Badfox bot</p>
				<br>
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
		</div>
	</div>
@endsection