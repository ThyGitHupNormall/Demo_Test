<div class="categories-collections">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="categories">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-heading">
                                <div class="line-dec"></div>
                                <h2>Browse Through Our <em>Categories</em> Here.</h2>
                            </div>
                        </div>
                        @foreach ($categories as $category)
                            <div class="col-lg-2 col-sm-6">
                                <div class="item">
                                    <div class="icon">
                                        <img src="{{ asset('/front/assets/images/'.$category->img) }}" alt="">
                                    </div>
                                    <h4>{{ $category->title }}</h4>
                                    <div class="icon-button">
                                        <a href="#"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="collections">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-heading">
                                <div class="line-dec"></div>
                                <h2>Explore Some Hot <em>Collections</em> In Market.</h2>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="owl-collection owl-carousel">
                               @foreach ($collections as $collection)
                               <div class="item">
                                <img src="{{ asset('/front/assets/images/'.$collection->img) }}" alt="">
                                <div class="down-content">
                                    <h4>{{ $collection->title }}</h4>
                                    <span class="collection">Items In Collection:<br><strong>{{ $collection->collection }}</strong></span>
                                    <span class="category">Category:<br><strong>{{ $collection->category }}</strong></span>
                                    <div class="main-button">
                                        <a href="explore">Explore Mutant</a>
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
    </div>
</div>
