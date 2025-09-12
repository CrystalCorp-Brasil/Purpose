<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="{{ str_replace ('_', '-', app ()->getLocale ()) }}" dir="ltr" class="has-sidemenu">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="msapplication-TileImage" content="{{ asset('favicon.png') }}">
        <meta name="theme-color" content="#031141">
        <title>{{ config('app.name', 'Grupo CrystalCorp') }}</title>
        <link href="{{ asset('favicon.png') }}" rel="apple-touch-icon" sizes="180x180">
        <link href="{{ asset('favicon.png') }}" rel="icon" type="image/png" sizes="32x32">
        <link href="{{ asset('favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
        <link href="{{ asset('site/css/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('site/css/loaders.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('site/css/fonts.css') }}" rel="stylesheet" type="text/css">
@yield('styles')
        <link href="{{ asset('site/css/theme.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('site/css/styles.css') }}" rel="stylesheet" type="text/css"/>
    </head>
        @include('layouts.nav')
        <main class="main min-vh-100" id="top">
            @include('layouts.preloader')
@yield('content')
        </main>
        @include('layouts.footer')
        <script src="{{ asset('site/js/popper.min.js') }}"></script>
        <script src="{{ asset('site/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('site/js/anchor.min.js') }}"></script>
        <script src="{{ asset('site/js/is.min.js') }}"></script>
        <script src="{{ asset('site/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('site/js/packery-mode.pkgd.min.js') }}"></script>
        <script src="{{ asset('site/js/BigPicture.js') }}"></script>
        <script src="{{ asset('site/js/rellax.min.js') }}"></script>
        <script src="{{ asset('site/js/all.min.js') }}"></script>
        <script src="{{ asset('site/js/lodash.min.js') }}"></script>
        <script src="{{ asset('site/js/polyfill.min.js') }}"></script>
        <script src="{{ asset('site/js/imagesloaded.pkgd.js') }}"></script>
        <script src="{{ asset('site/js/gsap.js') }}"></script>
        <script src="{{ asset('site/js/customEase.js') }}"></script>
        <script src="{{ asset('site/js/drawSVGPlugin.js') }}"></script>
        <script src="{{ asset('site/js/theme.js') }}"></script>
@yield('scripts')
    </body>
</html>
