@extends('layouts.admin.admin-app')
@push('title')
Edit Explore
@endpush

@push('styles')
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="{{asset('backend')}}/vendors/styles/core.css" />
<link  rel="stylesheet"  type="text/css"  href="{{asset('backend')}}/vendors/styles/icon-font.min.css"/>
<link  rel="stylesheet"  type="text/css" href="{{asset('backend')}}/src/plugins/datatables/css/dataTables.bootstrap4.min.css"/>
<link  rel="stylesheet"  type="text/css" href="{{asset('backend')}}/src/plugins/datatables/css/responsive.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="{{asset('backend')}}/vendors/styles/style.css" />
@endpush



@section('content')
<div class="pd-20 card-box mb-30">
    <div class="clearfix">
        <div class="pull-left">
            <h2 class="text-blue h2"​>Create Explo​​​​​​​​re</h2>
        </div>​​​
    </div>
    <form action="{{ route("admin.explore.update",$explore->id )}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title" value="{{$explore->title}}" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 col-sm-12">
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" class="form-control" name="user_name" placeholder="User Name" value="{{$explore->username}}"/>
                </div>
            </div>
            <div class="col-md-5 col-sm-12">
                <div class="form-group">
                    <label>Profile</label>
                    <input type="file" class="form-control" name="profile" />
                </div>
            </div>
        </div>
        <div class="form-grop">
            <img src="{{asset("uploads/explore/".$explore->img_profile)}}" alt="No Image">
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" name="description" placeholder="Description" value="{{$explore->description}}"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="form-group">
                    <label>Item</label>
                    <input type="file" class="form-control" name="item" />
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" name="price" placeholder="Price" value="{{$explore->price}}"/>
                </div>
            </div>
        </div>
        <div class="form-grop">
            <img src="{{asset("uploads/explore/".$explore->img)}}" alt="No Image">
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label>Current_Bid</label>
                    <input type="text" class="form-control" name="current_bid" value="{{$explore->current_bid}}"/>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label>End in</label>
                    <input type="date" class="form-control" id="demo" name="end_in" value="{{$explore->end_in}}"/>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label>Date</label>
                    <input type="date" class="form-control" name="date" value="{{$explore->date}}"/>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Explore</button>
            <a href="{{route('admin.explore')}}" class="btn btn-secondary">Cancell</a>
        </div>
    </form>
</div>

@endsection

