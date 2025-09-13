<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"/>
        <title>CrystalCorp @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="CrystalCorp Brasil Admin & Dashboard"/>
        <meta name="author" content="NHOJunior Design"/>
        <link href="{{ asset('favicon.ico') }}" rel="shortcut icon" type="image/x-icon"/>
        <link href="{{ asset('admin/css/lightbox.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('admin/css/fonts.css') }}" rel="stylesheet" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('admin/css/loaders.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('admin/css/perfect-scrollbar.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('admin/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('admin/css/styles.css') }}" rel="stylesheet" type="text/css"/>
@yield('style')
    </head>
    <body class="{{ $bodyClass }}">
        @include('layouts.preloader')
@if ($pageActive != 'login')
        <div class="app-admin-wrap layout-sidebar-compact sidebar-gradient-black-blue sidenav-open clearfix">
            @include('admin.parts.sidebar')
            <div class="main-content-wrap d-flex flex-column">
                <div class="main-header">
                    @include('admin.parts.logo')
@if (Auth::user()->rule == 'admin')
                    @include('admin.parts.megamenu')
@endif
@yield('searchSection')
                    <div style="margin: auto"></div>
                    @include('admin.parts.header-right')
                </div>
                <div class="main-content">
                    <div class="breadcrumb">
                        <h1>Perfil de Usuário</h1>
                        <ul>
                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li>{{ $title }}</li>
                        </ul>
                    </div>
                    <div class="separator-breadcrumb border-top"></div>
@endif
@yield('content')
@if ($pageActive != 'login')
                    <div class="flex-grow-1"></div>
                    @include('admin.parts.footer')
                </div>
            </div>
        </div>
@endif
        <script src="{{ asset('admin/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('admin/js/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('admin/js/script.min.js') }}"></script>
        <script src="{{ asset('admin/js/sidebar.compact.script.min.js') }}"></script>
        <script src="{{ asset('admin/js/customizer.script.min.js') }}"></script>
        <script src="{{ asset('admin/js/lightbox.min.js') }}"></script>
        <script src="{{ asset('admin/js/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('admin/js/imagesloaded.pkgd.js') }}"></script>
        <script src="{{ asset('admin/js/scripts.js') }}"></script>
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
@include('sweetalert2::index')
    </body>
</html>
