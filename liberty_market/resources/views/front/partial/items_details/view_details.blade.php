<div class="item-details-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h2>View Details <em>For Item</em> Here.</h2>
                </div>
            </div>
            @foreach ($items->where('id', 1 ) as $item)
            <div class="col-lg-7">
                <div class="left-image">
                    <img src="{{asset('uploads/explore/'.$item->img) }}" alt="" style="border-radius: 20px;">
                </div>
            </div>
            <div class="col-lg-5 align-self-center">
                <h4>{{ $item->title }}</h4>
                <span class="author">
                    <img src="{{asset('uploads/explore/'.$item->img_profile) }}" alt="" style="max-width: 50px; border-radius: 50%;">
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
                            Ends In<br><strong>{{ $item->end_in }}</strong><br><em>(January 22nd, 2021)</em>
                        </span>
                    </div>
                </div>
                <form action="submit">
                    <label for="quantity-text">Place Bid:</label>
                    <input placeholder="1 ETH" class="quantity-text">
                    <button type="submit" id="form-submit" class="main-button">Submit Now</button>
                </form>
            </div>
            @endforeach
            <div class="col-lg-12">
                <div class="current-bid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mini-heading">
                                <h4>Current Biddings Prices ( ETH )</h4>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <select name="Category" class="form-select" aria-label="Default select example"
                                    id="chooseCategory" onchange="this.form.click()">
                                    <option selected>Sort By: Latest</option>
                                    <option type="checkbox" name="option1" value="old">Sort By: Oldest</option>
                                    <option value="low">Sort By: Lowest</option>
                                    <option value="high">Sort By: Highest</option>
                                </select>
                            </fieldset>
                        </div>
                        @foreach ($items as $item)
                            <div class="col-lg-4 col-md-6">
                                <div class="item">
                                    <div class="left-img">
                                        <img src="{{asset('uploads/explore/' . $item->img) }}" alt="">
                                    </div>
                                    <div class="right-content">
                                        <h4>{{ $item->username }}</h4>
                                        <a href="#"><em>@</em>{{ $item->username }}</a>
                                        <div class="line-dec"></div>
                                        <h6>Bid: <em>{{ $item->corrent_bid }}</em></h6>
                                        <span class="date">{{ $item->date }}</span>
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
