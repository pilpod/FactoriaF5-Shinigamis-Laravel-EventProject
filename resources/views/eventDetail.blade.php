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
										<a href="{{ url('/admin') }}" class="no-underline hover:underline text-sm font-normal text-teal-800">{{ __('Dashboard') }}</a>
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

				<!-- Event Detail -->   

                <div class="m-auto px-8 py-8 max-w-xxl">
                            <div class="md:flex bg-white shadow-2xl" >
                                <div>
                                    <img class="w-100 h-30" src="{{$eventDetail->picture_path}}">
                                </div>
                                <div class="px-4 py-2 mt-2 bg-white">
                                    <h2 class="font-bold text-2xl text-gray-800">{{$eventDetail->title}}</h2>
                                        <p class="sm:text-sm text-xs text-gray-700 px-2 mr-1 my-3">{{$eventDetail->description}} </p>
                                        <p><span class="font-bold text-gray-800">Date:</span> {{$eventDetail->event_date}}</p>
                                        <p><span class="font-bold text-gray-800">Hour:</span> {{$eventDetail->hour}}</p>
                                        <p><span class="font-bold text-gray-800">Duration:</span> {{$eventDetail->duration}}</p>
                                        <p> <span class="font-bold text-gray-800">Available spots:</span> {{$eventDetail->event_capacity}}<p>
                                        @if($eventDetail->event_date >= $datenow)
                                        <form action="{{route('subscribe', ['id' => $eventDetail->id])}}" method="post">
															@csrf
															<button type="submit" class="button alt">Subscribe</button>
														</form>
										@endif
                                        <div class="user flex items-center -ml-3 mt-8 mb-4">
                                        <!-- <div class="user-logo">
                                            <img class="w-10 h-10 sm:w-12 sm:h-12 object-cover rounded-full mx-4  shadow" src="https://images.unsplash.com/photo-1607789382281-1152591ec0da?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80" alt="avatar">
                                        </div> -->
                                            <!-- <a href="https://twitter.com/GressierCosme1" target="_blank" class="text-gray-500">@GressierCosme1</a> -->
                                        </div>
                                </div>
                            </div>
                </div>



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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>
</html>