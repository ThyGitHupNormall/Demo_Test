@extends('layouts.admin.admin-app')
@push('title')
Create
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
            <h2 class="text-blue h2"​>View User</h2>
        </div>​​​
    </div>
    <form action="{{route("admin.user.view",$user->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{$user->name}}" readonly />
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email" value="{{$user->email}}" readonly/>
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                     @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" class="form-control" name="password" placeholder="Password" value="{{$user->password}}" readonly/>
                    @error('password')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2 col-sm-12">
                <div class="form-group">
                    <label>User Type</label>

                    <h6 readonly>{{ $user->type }}</h6>




                    @error('user_type')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group mb-2">
                <label for="">User Profile</label><br>
                <img class="rounded-circle" src="{{asset("uploads/user/image/".$user->avatar)}}" width="100px" alt="No Image">
            </div>
        </div>

        <div class="form-group">
            <a href="{{url('/admin/user')}}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>

@endsection

