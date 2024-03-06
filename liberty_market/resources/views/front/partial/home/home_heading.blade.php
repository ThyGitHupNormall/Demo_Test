<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner">
    <div class="container">
        <div class="row">
            @foreach ($home_heading as $heading)
                <div class="col-lg-6 align-self-center">
                    <div class="header-text">
                        <h6>Liberty NFT Market</h6>
                        <h2>{{ $heading->title }}</h2>
                        <p>{{ $heading->description }}</p>
                        <div class="buttons">
                            <div class="border-button">
                                <a href="explore">Explore Top NFTs</a>
                            </div>
                            <div class="main-button">
                                <a href="https://youtube.com/templatemo" target="_blank">Watch Our Videos</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @include('front.partial.home.slide')
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->
