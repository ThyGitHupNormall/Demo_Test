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
            <h2 class="text-blue h2"​>Create User</h2>
        </div>​​​
    </div>
    <form action="{{route('admin.user.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{old('Name')}}" />
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
                    <input type="text" class="form-control" name="email" placeholder="Email" value="{{old('Email')}}"/>
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
                    <input type="text" class="form-control" name="password" placeholder="Password" value="{{old('Password')}}"/>
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
                    <select class="form-control" name="user_type">
                        <option value="">Select Role</option>
                        <option value="1">Admin</option>
                        <option value="2">Manager</option>
                        <option value="0">User</option>
                    </select>
                    @error('user_type')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-10 col-sm-12">
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="avatar" />
                    @error('avatar')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add User</button>
            <a href="{{url('/admin/user')}}" class="btn btn-secondary">Cancell</a>
        </div>
    </form>
</div>

@endsection

