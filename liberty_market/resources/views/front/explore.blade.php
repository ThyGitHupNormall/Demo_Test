@extends('front.layout.master_layout')
@section('content')


    <!-- ***** page heading Start ***** -->
    @include('front.partial.explore.page_heading')
    <!-- ***** page heading End ***** -->

    <!-- ***** items Start ***** -->
    @include('front.partial.explore.items')
    <!-- ***** items End ***** -->

    <!-- ***** top seller Start ***** -->
    @include('front.partial.explore.top_seller')
    <!-- ***** top seller End ***** -->


@endsection
