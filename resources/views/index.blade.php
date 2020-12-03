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
		<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">
					<!-- Logo -->
					{{-- <h1><a href="{{route('index')}}">Shinigamis Events</a></h1> --}}
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
						<section>
						<div class"container-fluid">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
							@foreach($events as $item)
								<li data-target="#carouselExampleIndicators" data-slide-to="{{$item->event_date}}" class="@if($loop->index==0) active @endif"></li>
							
								@endforeach
							</ol>

							<div class="carousel-inner">
							@foreach ($events as $item)
								<div class="carousel-item @if($loop->index==0) active @endif">
								<img src="{{$item->picture_path}}" class="d-block w-100 h-72" alt="">
								</div>
								
							@endforeach
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
							</div></div>
</section>

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
															<li><a href="#" class="button alt">Subscribe</a></li>
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
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	</body>

</html>