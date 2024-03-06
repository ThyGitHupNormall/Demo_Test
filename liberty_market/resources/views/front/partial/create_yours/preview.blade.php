@foreach ($items->where('id', 1) as $item)
<div class="col-lg-12">
    <div class="section-heading">
        <div class="line-dec"></div>
        <h2>This Is <em>Your Item</em> Preview.</h2>
    </div>
</div>
<div class="col-lg-7">
    <div class="left-image">
        <img src="{{ asset('front/assets/images/'.$item->img) }}" alt="" style="border-radius: 20px;">
    </div>
</div>
<div class="col-lg-5 align-self-center">
    <h4>Dolores Haze Westworld Eye</h4>
    <span class="author">
        <img src="{{ asset('front/assets/images/'.$item->img_profile) }}" alt="" style="max-width: 50px; border-radius: 50%;">
        <h6>{{ $item->username }}<br><a href="#"><em>@</em>{{ $item->username }}</a></h6>
    </span>
    <p>{{ $item->description }}</p>
    <div class="row">
        <div class="col-3">
            <span class="bid">
                Current Bid<br><strong>{{ $item->current_bid }}</strong><br><em>({{ $item->price }})</em>
            </span>
        </div>
        <div class="col-4">
            <span class="owner">
                Owner<br><strong>{{ $item->username }}</strong><br><em>(<span>@</span>{{ $item->username }})</em>
            </span>
        </div>
        <div class="col-5">
            <span class="ends">
                Ends In<br><strong>{{ $item->end_in }}</strong><br><em>({{ $item->date }})</em>
            </span>
        </div>
    </div>
</div>

@endforeach
