<!DOCTYPE HTML>
<!--
	Dopetrope by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Shinigamis Events</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{{asset('templateHtml/css/main.css')}}" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">
					<!-- Logo -->
					{{-- <h1><a href="{{route('index')}}">Shinigamis Events</a></h1> --}}
					<img src="{{asset('img/shinigamisLogo.png')}}" alt="logo">

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="{{route('index')}}">Home</a></li>
								@if(Route::has('login'))
									@auth
										<li>
											<a href="{{ url('/home') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Home') }}</a>
										</li>
									@else
										<li>
											<a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Login') }}</a>
										</li>
										@if (Route::has('register'))
											<li>
												<a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Register') }}</a>
											</li>												
										@endif
									@endauth
								@endif
							</ul>
						</nav>

					<!-- Banner -->
						<section id="banner">
							<header>
								<h2>Howdy. This is Dopetrope.</h2>
								<p>A responsive template by HTML5 UP</p>
							</header>
						</section>
				</section>

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<!-- Portfolio -->
									<section>
										<header class="major">
											<h2>Next Events</h2>
										</header>
										<div class="row">
											<div class="col-4 col-6-medium col-12-small">
												<section class="box">
												<a href="#" class="image featured"><img src="{{asset('templateHtml/images/pic02.jpg')}}" alt="" /></a>
													<header>
														<h3>Ipsum feugiat et dolor</h3>
													</header>
													<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
													<footer>
														<ul class="actions">
															<li><a href="#" class="button alt">Find out more</a></li>
														</ul>
													</footer>
												</section>
											</div>
											<div class="col-4 col-6-medium col-12-small">
												<section class="box">
													<a href="#" class="image featured"><img src="{{asset('templateHtml/images/pic02.jpg')}}" alt="" /></a>
													<header>
														<h3>Sed etiam lorem nulla</h3>
													</header>
													<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
													<footer>
														<ul class="actions">
															<li><a href="#" class="button alt">Find out more</a></li>
														</ul>
													</footer>
												</section>
											</div>
											<div class="col-4 col-6-medium col-12-small">
												<section class="box">
													<a href="#" class="image featured"><img src="{{asset('templateHtml/images/pic02.jpg')}}" alt="" /></a>
													<header>
														<h3>Consequat et tempus</h3>
													</header>
													<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
													<footer>
														<ul class="actions">
															<li><a href="#" class="button alt">Find out more</a></li>
														</ul>
													</footer>
												</section>
											</div>
											<div class="col-4 col-6-medium col-12-small">
												<section class="box">
													<a href="#" class="image featured"><img src="{{asset('templateHtml/images/pic02.jpg')}}" alt="" /></a>
													<header>
														<h3>Blandit sed adipiscing</h3>
													</header>
													<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
													<footer>
														<ul class="actions">
															<li><a href="#" class="button alt">Find out more</a></li>
														</ul>
													</footer>
												</section>
											</div>
											<div class="col-4 col-6-medium col-12-small">
												<section class="box">
													<a href="#" class="image featured"><img src="{{asset('templateHtml/images/pic02.jpg')}}" alt="" /></a>
													<header>
														<h3>Etiam nisl consequat</h3>
													</header>
													<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
													<footer>
														<ul class="actions">
															<li><a href="#" class="button alt">Find out more</a></li>
														</ul>
													</footer>
												</section>
											</div>
											<div class="col-4 col-6-medium col-12-small">
												<section class="box">
													<a href="#" class="image featured"><img src="{{asset('templateHtml/images/pic02.jpg')}}" alt="" /></a>
													<header>
														<h3>Dolore nisl feugiat</h3>
													</header>
													<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
													<footer>
														<ul class="actions">
															<li><a href="#" class="button alt">Find out more</a></li>
														</ul>
													</footer>
												</section>
											</div>
										</div>
									</section>

									<section>
										<header class="major">
											<h2>Past Events</h2>
										</header>
										<div class="row">
											<div class="col-4 col-6-medium col-12-small">
												<section class="box">
												<a href="#" class="image featured"><img src="{{asset('templateHtml/images/pic02.jpg')}}" alt="" /></a>
													<header>
														<h3>Ipsum feugiat et dolor</h3>
													</header>
													<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
													<footer>
														<ul class="actions">
															<li><a href="#" class="button alt">Find out more</a></li>
														</ul>
													</footer>
												</section>
											</div>
											<div class="col-4 col-6-medium col-12-small">
												<section class="box">
													<a href="#" class="image featured"><img src="{{asset('templateHtml/images/pic02.jpg')}}" alt="" /></a>
													<header>
														<h3>Sed etiam lorem nulla</h3>
													</header>
													<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
													<footer>
														<ul class="actions">
															<li><a href="#" class="button alt">Find out more</a></li>
														</ul>
													</footer>
												</section>
											</div>
											<div class="col-4 col-6-medium col-12-small">
												<section class="box">
													<a href="#" class="image featured"><img src="{{asset('templateHtml/images/pic02.jpg')}}" alt="" /></a>
													<header>
														<h3>Consequat et tempus</h3>
													</header>
													<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
													<footer>
														<ul class="actions">
															<li><a href="#" class="button alt">Find out more</a></li>
														</ul>
													</footer>
												</section>
											</div>
										</div>
									</section>
							</div>
						</div>
					</div>
				</section>

			<!-- Footer -->
				<section id="footer">
					<div class="container">
						<div class="row">
							<div class="col-12">

							<!-- Copyright -->
							<div id="copyright">
								<ul class="links">
									<li>&copy; Shinigamis Events 2020. All rights reserved.</li>
								</ul>
							</div>

							</div>
						</div>
					</div>
				</section>

		</div>

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.dropotron.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

		<ul class="dropotron level-0" style="user-select: none; display: none; position: absolute; z-index: 1000;">
			<li style="white-space: nowrap;"><a href="#" style="display: block;">Lorem ipsum dolor</a></li>
			<li style="white-space: nowrap;"><a href="#" style="display: block;">Magna phasellus</a></li>
			<li style="white-space: nowrap;"><a href="#" style="display: block;">Etiam dolore nisl</a></li>
			<li class="opener" style="user-select: none; cursor: pointer; white-space: nowrap;">
				<a href="#" style="display: block;">Phasellus consequat</a>
				<ul class="dropotron level-1" style="user-select: none; display: none; position: absolute; z-index: 1001;">
					<li style="white-space: nowrap;"><a href="#" style="display: block;">Magna phasellus</a></li>
					<li style="white-space: nowrap;"><a href="#" style="display: block;">Etiam dolore nisl</a></li>
					<li style="white-space: nowrap;"><a href="#" style="display: block;">Veroeros feugiat</a></li>
					<li style="white-space: nowrap;"><a href="#" style="display: block;">Nisl sed aliquam</a></li>
					<li style="white-space: nowrap;"><a href="#" style="display: block;">Dolore adipiscing</a></li>
				</ul>
			</li>
			<li style="white-space: nowrap;"><a href="#" style="display: block;">Veroeros feugiat</a></li>
		</ul>

	<div id="titleBar"><a href="#navPanel" class="toggle"></a></div>

	<div id="navPanel">
		<nav>
			<a class="link depth-0" href="{{route('index')}}" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Home</a>
			<a class="link depth-0" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Dropdown</a>
				<a class="link depth-1" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-1"></span>Lorem ipsum dolor</a>
					<a class="link depth-2" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-2"></span>Magna phasellus</a>
			<a class="link depth-0" href="left-sidebar.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Left Sidebar</a>
		</nav>
	</div>


	</body>
</html>