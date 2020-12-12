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
		<!-- <link rel="stylesheet" href="{{asset('templateHtml/css/slideshow.css')}}" /> -->
		<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
		<link href="{{asset('css/app.css')}}" rel="stylesheet">
		<link href="{{asset('css/slider.css')}}" rel="stylesheet"><!-- acuerdate de quitarlo cabron!! -->
</head>

	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">
					<!-- Logo -->
					<a href="{{route('index')}}">
						<img src="{{asset('img/shinigamisLogo.png')}}" alt="logo" style="margin: auto;">
					</a>

					<!-- Nav -->
					<nav id="nav">
						<ul>
							<li class="current"><a href="{{route('index')}}">Home</a></li>
							@if(Route::has('login'))
								@auth
									<li>
										<a href="{{ url('/home') }}" class="no-underline hover:underline text-sm font-normal text-teal-800">{{ __('Dashboard') }}</a>
									</li>
								@else
									<li>
										<a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-teal-800">{{ __('Login') }}</a>
									</li>
									@if (Route::has('register'))
										<li>
											<a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-teal-800">{{ __('Register') }}</a>
										</li>												
									@endif
								@endauth
							@endif
						</ul>
					</nav>
				</section>

						<!-- Banner -->
				@extends('slideshow')

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<!-- Events -->
									<section>
										<header class="major">
											<h2>Next Events</h2>
										</header>
										<div class="row">
											@foreach ($events as $event)
											<div class="col-4 col-6-medium col-12-small">
												<section class="box">
												<a href="#" class="image featured"><img src="{{$event->picture_path}}" alt="" /></a>
													<header>
													<h3>{{$event->title}}</h3>
													</header>
													<p>{{$event->short_description}}</p>
													<div style="margin-top: 10px">
														<span>Fecha: <strong>{{$event->event_date->format('d-m-Y H:00')}}</strong></span>
													</div>
													<footer>
														<ul class="actions">
															<li><a href="{{route('subscribe', ['id' => $event->id])}}" class="button alt">Subscribe</a></li>
														</ul>
													</footer>
												</section>
											</div>
											@endforeach
										</div>
										<section class="container">
											{{$events->links()}}
										</section>
									</section>

									<section>
										<header class="major">
											<h2>Past Events</h2>
										</header>
										<div class="row">
											@foreach ($pastEvents as $event)
												<div class="col-4 col-6-medium col-12-small">
													<section class="box">
													<a href="#" class="image featured"><img src="{{$event->picture_path}}" alt="" /></a>
														<header>
															<h3>{{$event->title}}</h3>
														</header>
														<p>{{$event->short_description}}</p>
														<div style="margin-top: 10px">
															<span>Fecha: <strong>{{$event->event_date->format('d-m-Y H:00')}}</strong></span>
														</div>
													</section>
												</div>
											@endforeach
										</div>
										<section class="container">
											<a href="{{Route('pastevents')}}">Ver más</a>
										</section>
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

	<div id="titleBar"><a href="#navPanel" class="toggle"></a></div>

	<!-- Scripts -->
	<script src="{{asset('templateHtml/js/jquery.min.js') }}"></script>
	<script src="{{asset('templateHtml/js/jquery.dropotron.min.js')}}"></script>
	<script src="{{asset('templateHtml/js/browser.min.js')}}"></script>
	<script src="{{asset('templateHtml/js/breakpoints.min.js')}}"></script>
	<script src="{{asset('templateHtml/js/util.js')}}"></script>
	<script src="{{asset('templateHtml/js/main.js')}}"></script>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	</body>
</html>