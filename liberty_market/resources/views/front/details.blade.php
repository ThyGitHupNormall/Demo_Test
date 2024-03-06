@extends('front.layout.master_layout')
@section('content')


    <!-- ***** page heading Start ***** -->
    @include('front.partial.top_heading')
    <!-- ***** page heading End ***** -->

    <!-- ***** items Start ***** -->
    @include('front.partial.items_details.view_details')
    <!-- ***** items End ***** -->

    <!-- ***** top seller Start ***** -->
    @include('front.partial.nft')
    <!-- ***** top seller End ***** -->


@endsection
