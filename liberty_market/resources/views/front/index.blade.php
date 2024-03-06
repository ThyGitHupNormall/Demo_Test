@extends('front.layout.master_layout')
@section('content')


    <!-- ***** Main Banner Area Start ***** -->
    @include('front.partial.home.home_heading')
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Categories and Collections Start ***** -->
    @include('front.partial.home.categories_and_collections')
    <!-- ***** Categories and Collections End ***** -->

    <!-- ***** nft Start ***** -->
    @include('front.partial.nft')
    <!-- ***** nft End ***** -->

    <!-- ***** nft Start ***** -->
    @include('front.partial.home.items')
    <!-- ***** nft End ***** -->

@endsection
