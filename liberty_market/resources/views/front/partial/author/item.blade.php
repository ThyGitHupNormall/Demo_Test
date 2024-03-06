<div class="col-lg-12">
    <div class="section-heading">
        <div class="line-dec"></div>
        <h2>Melanie Smith’s <em>Items</em>.</h2>
    </div>
</div>
@foreach ($items as $item)
<div class="col-lg-3 col-md-6">
    <div class="item">
        <div class="row">
            <div class="col-lg-12">
                <span class="author">
                    <img src="{{asset('uploads/explore/'.$item->img_profile) }}" alt="" style="max-width: 50px; border-radius: 50%;">
                </span>
                <img src="{{asset('uploads/explore/'.$item->img) }}" alt="" style="border-radius: 20px;">
                <h4>{{ $item->title }}</h4>
            </div>
            <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                    <div class="col-6">
                        <span>Current Bid: <br> <strong>{{ $item->current_bid }}</strong></span>
                    </div>
                    <div class="col-6">
                        <span>Ends In: <br> <strong>{{ $item->end_in }}</strong></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="main-button">
                    <a href="details.html">View Details</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
