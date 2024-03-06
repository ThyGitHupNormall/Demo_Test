<div class="page-heading">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6>Liberty NFT Market</h6>
                <h2>{{ $top_heading }}</h2>
                <span>Home > <a href="#">Explore</a></span>
            </div>
        </div>
    </div>
    <div class="featured-explore">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-features owl-carousel">
                        <div class="item">
                            <div class="thumb">
                                <img src="front/assets/images/" alt="" style="border-radius: 20px;">
                                <div class="hover-effect">
                                    <div class="content">
                                        <h4>Triple Mutant Ape Bored</h4>
                                        <span class="author">
                                            <img src="front/assets/images/author.jpg" alt=""
                                                style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                                            <h6>Liberty Artist<br><a href="#">@libertyart</a></h6>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @foreach ($items as $item)
                        <div class="item">
                            <div class="thumb">
                                <img src="{{asset('uploads/explore/'.$item->img) }}" alt="" style="border-radius: 20px;">
                                <div class="hover-effect">
                                    <div class="content">
                                        <h4>{{ $item->title }}</h4>
                                        <span class="author">
                                            <img src="{{asset('uploads/explore/'.$item->img_profile) }}" alt=""
                                                style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                                            <h6>{{ $item->username }}<br><a href="#"><em>@</em>{{ $item->username }}</a></h6>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
