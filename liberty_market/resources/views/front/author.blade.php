@extends('front.layout.master_layout')
@section('content')


    <!-- ***** Main Banner Area Start ***** -->
    @include('front.partial.top_heading')
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Categories and Collections Start ***** -->
    @include('front.partial.author.author_page')
    <!-- ***** Categories and Collections End ***** -->

    <!-- ***** nft Start ***** -->
    @include('front.partial.nft')
    <!-- ***** nft End ***** -->

@endsection
