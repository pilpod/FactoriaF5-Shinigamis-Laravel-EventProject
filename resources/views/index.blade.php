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
		<link rel="stylesheet" href="{{asset('templateHtml/css/slideshow.css')}}" />
		<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
		<link href="{{asset('css/app.css')}}" rel="stylesheet">
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
				<section>
					<!-- <div class"container-fluid"> -->
						
						<div class="slider">
							@foreach($outstanding as $item)
								<div class="slide" id="slide">
									<p>{{$item->title}}</p>
									<img src="{{$item->picture_path}}" class="img">
									<p>{{"$item->short_description"}}</p>
									<ol class="carousel-indicators">
										<li class="inline-block mr-3">
										<label class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
										</li>
									</ol>
								</div>
							@endforeach		
						</div>
							
					<!-- <div class="carousel relative shadow-2xl bg-white">
						<div class="carousel-inner relative overflow-hidden w-full"> -->
						<!--Slide 1-->
						<!-- @foreach($outstanding as $item)
							<input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
							<div class="carousel-item absolute opacity-0" style="height:50vh;">
								<div class="block h-full w-full bg-indigo-500 text-white text-5xl text-center">{{$item->title}}</div>
							</div>
							<label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
							<label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label> -->
							
							<!--Slide 2-->
							<!-- <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
							<div class="carousel-item absolute opacity-0" style="height:50vh;">
								<div class="block h-full w-full bg-orange-500 text-white text-5xl text-center">{{$item->title}}</div>
							</div>
							<label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
							<label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>  -->
							
							<!--Slide 3-->
							<!-- <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
							<div class="carousel-item absolute opacity-0" style="height:50vh;">
								<div class="block h-full w-full bg-green-500 text-white text-5xl text-center">{{$item->title}}</div>
							</div>
							<label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
							<label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
							@endforeach -->

							<!-- Add additional indicators for each slide-->
							<!-- @foreach($outstanding as $item)
							
							@endforeach
						</div>
					</div>
					</div> -->
				</section>

						<!--OLD BANNER-->
						<!-- <section>
						<div class"container-fluid">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
							@foreach($outstanding as $item)
								<li data-target="#carouselExampleIndicators" data-slide-to="{{$item->event_date}}" class="@if($loop->index==0) active @endif"></li>
							
								@endforeach
							</ol>

							<div class="carousel-inner">
							@foreach ($outstanding as $item)
								<div class="carousel-item @if($loop->index==0) active @endif">
									<img src="{{$item->picture_path}}" class="d-block w-100 h-72" alt="">
									<div class="carousel-caption d-none d-md-block">
										<h3>{{$item->title}}</h3>
										<p>{{$item->short_description}}</p>
										<input type="button" href="??" value="More Details">
									</div>
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
</section> -->

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