<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"/>
        <title>CrystalCorp | @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="CrystalCorp Brasil Admin & Dashboard"/>
        <meta name="author" content="NHOJunior Design"/>
        <link href="{{ asset('favicon.ico') }}" rel="shortcut icon" type="image/x-icon"/>
        <link href="{{ asset('css/admin/lightbox.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/fonts.css') }}" rel="stylesheet" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/admin/loaders.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/admin/perfect-scrollbar.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/admin/theme.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/admin/styles.css') }}" rel="stylesheet" type="text/css"/>
@yield('style')
    </head>
    <body class="{{ $bodyClass }}">
        @include('layouts.preloader')
@if ($pageActive != 'auth')
        <div class="app-admin-wrap layout-sidebar-compact sidebar-gradient-black-blue sidenav-open clearfix">
            @include('admin.parts.sidebar')
            <div class="main-content-wrap d-flex flex-column p-0">
                <div class="main-header">
                    @include('admin.parts.logo')
                    <div class="menu-toggle">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
@if (Auth::user()->rule == 'admin')
                    @include('admin.parts.megamenu')
@endif
@yield('searchSection')
                    <div style="margin: auto"></div>
                    @include('admin.parts.header-right')
                </div>
                <div class="main-content p-3 mb-2">
                    <div class="breadcrumb">
                        <h1>{{ $title }}</h1>
                        <ul>
                            <li><a href="{{ route('dashboard') }}">Dashboard&nbsp;</a></li>
                            <li class="text-muted">{{ $title }}</li>
                        </ul>
                    </div>
                    <div class="separator-breadcrumb border-top"></div>
@endif
@yield('content')
@if ($pageActive != 'auth')
                    <div class="flex-grow-1"></div>
                    @include('admin.parts.footer')
                </div>
            </div>
        </div>
@endif
        <script src="{{ asset('js/admin/jquery.min.3.4.1.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/admin/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('js/admin/lightbox.min.js') }}"></script>
        <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('js/admin/scripts.js') }}"></script>
@include('sweetalert2::index')
@if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Sucesso!',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 3000
            });
        </script>
@endif
@yield('script')
    </body>
</html>
