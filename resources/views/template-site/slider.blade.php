
<div id="fwslider">
    @foreach ($banner as $banner)
    <div class="slider_container">
        <div class="slide">
            <!-- Slide image -->
                <img class="img-responsive "  src="img-banner/{{$banner->image}}" alt="" />
            <!-- /Slide image -->
            <!-- Texts container -->
            <div class="slide_content">
                <div class="slide_content_wrap">
                    <!-- Text title -->
                    <h4 class="title">{{$banner->nome}}</h4>
                    <!-- /Text title -->


                </div>
            </div>
             <!-- /Texts container -->
        </div>

    </div>
    @endforeach
    <div class="timers"></div>
    <div class="slidePrev"><span></span></div>
    <div class="slideNext"><span></span></div>
</div>
