

@section('slideshow')
<!-- Slideshow container -->
<section class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    @foreach($outstanding as $event)
    <div class="mySlides fade overflow">
        <div class="numbertext">1 / 3</div>
        <img src="https://picsum.photos/id/10/2500/1667" style="width:100%">
        <div class="text">Caption Text</div>
    </div>
    @endforeach
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    </div> 
</section>
<script src="{{ asset('js/app.js') }}"></script>
@endsection