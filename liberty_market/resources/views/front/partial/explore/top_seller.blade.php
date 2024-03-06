<div class="top-seller">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h2>Our Top Sellers This Week.</h2>
                </div>
            </div>
            @foreach ($items as $item)
            <div class="col-lg-3 col-sm-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="item">
                            <h4>{{ $loop->iteration }} <span>.</span></h4>
                            <img src="{{asset('uploads/explore/'.$item->img_profile) }}" alt=""
                                style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>NFT Top Artist<br><a href="#">{{ $item->current_bid }} or {{ $item->price }}</a></h6>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
