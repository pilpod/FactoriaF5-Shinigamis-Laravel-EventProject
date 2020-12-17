


@props(['outstanding'])

<section id="slider" class="slideshow-container">


        @foreach($outstanding as $event)
            <div class="mySlides fade overflow">
	
	            <img src="{{$event->picture_path}}" style="width:100%">
            <div class="text">{{$event->title}}</div>
            </div>
        @endforeach

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>


    <div style="text-align:center">
        @foreach($outstanding as $event)
            <span class="dot" onclick="currentSlide('{{$event->id}}')"></span>
        @endforeach
    </div> 
</section>
<script src="{{ asset('js/app.js') }}"></script>

