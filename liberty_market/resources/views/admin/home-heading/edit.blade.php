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
            <h2 class="text-blue h2"​>Home Heading</h2>
        </div>​​​
    </div>
    <form action="{{route('admin.home-heading.update',$home_heading->id)}}" method="PUT" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" value="{{ $home_heading['title'] }}" />
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ $home_heading['description'] }}</textarea>

                </div>
            </div>
        </div>





        <div class="form-group">
            <button type="submit" class="btn btn-primary">Edite Home Heading</button>
            <a href="{{route('admin.explore')}}" class="btn btn-secondary">Cancell</a>
        </div>
    </form>
</div>

@endsection

