
<div class="col-lg-5 offset-lg-1">
    <div class="owl-banner owl-carousel">
        @foreach ($slide as $slide)
        <div class="item">
            <img src="{{ asset('front/assets/images/'.$slide->img_slide) }}" alt="">
        </div>
        @endforeach
    </div>
</div>



