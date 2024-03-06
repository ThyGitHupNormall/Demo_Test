@extends('front.layout.master_layout')
@section('content')

    <!-- ***** page heading Start ***** -->
    @include('front.partial.top_heading')
    <!-- ***** page heading End ***** -->

    <!-- ***** items Start ***** -->
    @include('front.partial.create_yours.create_page')
    <!-- ***** items End ***** -->

@endsection
