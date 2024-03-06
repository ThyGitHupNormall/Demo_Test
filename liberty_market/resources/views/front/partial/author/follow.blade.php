@foreach ($items->where('id',1) as $item)
<div class="col-lg-6">
    <div class="author">
        {{-- <img src="front/assets/images/single-author.jpg" alt=""
            style="border-radius: 50%; max-width: 170px;"> --}}
            <img src="{{asset('uploads/explore/'.$item->img_profile) }}" alt="" style="border-radius: 50%; max-width: 170px;">
        <h4>{{ $item->username }} <br> <a href="#"><em>@</em>{{ $item->username }}</a></h4>
    </div>
</div>
<div class="col-lg-6">
    <div class="right-info">
        <div class="row">
            <div class="col-4">
                <div class="info-item">
                    <i class="fa fa-heart"></i>
                    <h6>1238 <em>Likes</em></h6>
                </div>
            </div>
            <div class="col-4">
                <div class="info-item">
                    <i class="fa fa-hand"></i>
                    <h6>1238 <em>Likes</em></h6>
                </div>
            </div>
            <div class="col-4">
                <div class="info-item">
                    <i class="fa fa-dollar"></i>
                    <h6>1238 <em>Likes</em></h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-5">
                <h5>559 Followers</h5>
            </div>
            <div class="col-7">
                <div class="main-button">
                    <a href="#">Follow @melanie32</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
