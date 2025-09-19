@extends('layouts.webLayout')
@section('title')Home @endsection
@section('content')
            @include('site.pages.home.sections.mosaic')
            @include('site.pages.home.sections.register')
            @include('site.pages.home.sections.content')
            @include('site.pages.home.sections.featurings')
            @include('site.pages.home.sections.leagueHall')
            @include('site.pages.home.sections.parallax')
            @include('site.pages.home.sections.signup_db')
            @include('site.pages.home.sections.footer')
@endsection
