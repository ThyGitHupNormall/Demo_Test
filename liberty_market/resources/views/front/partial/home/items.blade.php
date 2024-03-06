<div class="currently-market">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h2><em>Items</em> Currently In The Market.</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="filters">
                    <ul>
                        <li data-filter="*" class="active">All Items</li>
                        <li data-filter=".msc">Music Art</li>
                        <li data-filter=".dig">Digital Art</li>
                        <li data-filter=".blc">Blockchain</li>
                        <li data-filter=".vtr">Virtual</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row grid">
                    @foreach ($items as $item)
                    <div class="col-lg-6 currently-market-item all msc">
                        <div class="item">
                            <div class="left-image">
                                <img src="{{asset('uploads/explore/'.$item->img) }}" alt=" "
                                    style="border-radius: 20px; min-width: 195px; width:185; height: 450px;">
                            </div>
                            <div class="right-content">
                                <h4>{{ $item->title }}</h4>
                                <span class="author">
                                    <img src="{{asset('uploads/explore/'.$item->img_profile) }}" alt=""
                                        style="max-width: 50px; border-radius: 50%;">
                                    <h6>{{ $item->username }}<br><a href="#"><em>@</em>{{ $item->username }}</a></h6>
                                </span>
                                <div class="line-dec"></div>
                                <span class="bid">
                                    Current Bid<br><strong>{{ $item->current_bid }}</strong><br><em>({{ $item->price }})</em>
                                </span>
                                <span class="ends">
                                    Ends In<br><strong>{{ $item->end_in }}</strong><br><em>({{ $item->date }})</em>
                                </span>
                                <div class="text-button">
                                    <a href="details">View Item Details</a>
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
