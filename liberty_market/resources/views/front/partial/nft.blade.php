<div class="create-nft">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h2>Create Your NFT & Put It On The Market.</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="main-button">
                    <a href="create.html">Create Your NFT Now</a>
                </div>
            </div>
          @foreach ($nft as $nft)
          <div class="col-lg-4">
            <div class="item first-item">
                <div class="number">
                    <h6>{{ $loop->iteration }}</h6>
                </div>
                <div class="icon">
                    <img src="{{ asset('front/assets/images/'.$nft->img) }}" alt="">
                </div>
                <h4>{{ $nft->title }}</h4>
                <p>{{ $nft->description }}</p>
            </div>
        </div>
          @endforeach
        </div>
    </div>
</div>
