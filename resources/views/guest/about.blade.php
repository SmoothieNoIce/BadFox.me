@extends('layouts.badFoxStyle', ['category' => '3','title' => '關於 - Flexolk'])

@section('content')
<div class="fh5co-narrow-content animated fadeInLeft" data-animate-effect="fadeInLeft">
		<div class="fh5co-text">

				<div><img src="{{URL::asset('images/badfox.png')}}" class="logo-img img-responsive" alt="IMAGE"></div>


				<h3>關於</h3>
				<p>這是我用Laravel來寫出的個人網站uwu</p>
				
				<br><br>
			
				<h3>簡歷</h3>

				<div class="fh5co-narrow-content-4">
					<div class="row">
						<div class="col-md-4" data-animate-effect="fadeInLeft">
							<h1 class="fh5co-heading-colored">Links</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3" data-animate-effect="fadeInLeft">
							<a class="fh5co-lead" href="https://github.com/SmoothieNoIce">Github</a>
							<br>
							<a class="fh5co-lead" href="https://bitbucket.org/dashboard/repositories">Bitbucket</a>
						</div>	
					</div>
				</div>	

				<div class="fh5co-narrow-content-4">
					<div class="row">
						<div class="col-md-4" data-animate-effect="fadeInLeft">
							<h1 class="fh5co-heading-colored">Portfolio</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3" data-animate-effect="fadeInLeft">
							<a class="fh5co-lead" href="https://badfox-me-website.herokuapp.com/index">BadFox website</a>
							<br>
							<a class="fh5co-lead" href="https://play.google.com/store/apps/details?id=com.abbc45255.emojibyabbc45255&hl=zh-TW">Kaomoji Go</a>
							<br>
							<a class="fh5co-lead" href="https://play.google.com/store/apps/details?id=me.badfox.twplan&hl=zh-TW">TwPlan(游台灣)</a>
							<br>
							<a class="fh5co-lead" href="https://play.google.com/store/apps/details?id=com.abbc45255.simplewidgetgo&hl=zh-TW">SWG</a>
							<br>
							<a class="fh5co-lead" href="https://discordapp.com/api/oauth2/authorize?client_id=630007539840581642&permissions=0&scope=bot">Badfox bot</a>
						</div>	
					</div>
				</div>	

				<div class="fh5co-narrow-content-4">
						<div class="row">
							<div class="col-md-4" data-animate-effect="fadeInLeft">
								<h1 class="fh5co-heading-colored">Technique</h1>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-md-offset-3 col-md-pull-3" data-animate-effect="fadeInLeft">
									<p>＊Web Design</p>
									<p>＊Android APP Design</p>
							</div>	
						</div>
				</div>	
				
				<div class="fh5co-narrow-content-4">
						<div class="row">
							<div class="col-md-4" data-animate-effect="fadeInLeft">
								<h1 class="fh5co-heading-colored">Database</h1>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-md-offset-3 col-md-pull-3" data-animate-effect="fadeInLeft">
									<p>＊MySQL</p>
									<p>＊PGSQL</p>
									<p>＊Sqlite</p>
									<p>＊Radis</p>
									<p>＊MongoDB</p>
							</div>	
						</div>
				</div>

				<div class="fh5co-narrow-content-4">
						<div class="row">
							<div class="col-md-4" data-animate-effect="fadeInLeft">
								<h1 class="fh5co-heading-colored">Tools</h1>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-md-offset-3 col-md-pull-3" data-animate-effect="fadeInLeft">
									<p>＊Bootstrap</p>
									<p>＊Firebase</p>
									<p>＊Docker</p>
							</div>	
						</div>
				</div>

				<div class="fh5co-narrow-content-4">
						<div class="row">
							<div class="col-md-4" data-animate-effect="fadeInLeft">
								<h1 class="fh5co-heading-colored">FrameWork</h1>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-md-offset-3 col-md-pull-3" data-animate-effect="fadeInLeft">
									<p>＊Laravel</p>
									<p>＊Vue.js</p>
							</div>	
						</div>
				</div>	
					
				<div class="fh5co-narrow-content-4">
						<div class="row">
							<div class="col-md-4" data-animate-effect="fadeInLeft">
								<h1 class="fh5co-heading-colored">Programming Language</h1>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-md-offset-3 col-md-pull-3" data-animate-effect="fadeInLeft">
									<p>＊Java</p>
									<p>＊Javascript</p>
									<p>＊Php</p>
									<p>＊Python</p>
									<p>＊Golang</p>
									<p>＊Html/css</p>
							</div>	
						</div>
				</div>

		</div>
	</div>
@endsection