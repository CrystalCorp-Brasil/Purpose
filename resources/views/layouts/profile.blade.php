<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"/>
        <title>CrystalCorp | Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="CrystalCorp Brasil Admin & Dashboard"/>
        <meta name="author" content="NHOJunior Design"/>
        <link href="{{ asset('favicon.ico') }}" rel="shortcut icon" type="image/x-icon"/>
        <link href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/fonts.css') }}" rel="stylesheet" id="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" id="stylesheet">
        <link href="{{ asset('css/perfect-scrollbar.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/personalized.css') }}" rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet"/>
    </head>
    <body class="text-start">
        <div class="app-admin-wrap layout-sidebar-compact sidebar-gradient-black-blue sidenav-open clearfix">
            @include('admin.parts.sidebar')
            <div class="main-content-wrap d-flex flex-column">
                <div class="main-header">
                    @include('admin.parts.logo')
@if (Auth::user()->rule == 'admin')
                    @include('admin.parts.megamenu')
@endif
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
                    <div class="card user-profile o-hidden mb-4">
@yield('content')
                    </div>
                    <div class="flex-grow-1"></div>
                    @include('admin.parts.footer')
                </div>
            </div>
        </div>
        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('js/lightbox.min.js') }}"></script>
        <script src="{{ asset('js/script.min.js') }}"></script>
        <script src="{{ asset('js/sidebar.compact.script.min.js') }}"></script>
        <script src="{{ asset('js/customizer.script.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            import Swal from 'sweetalert2';
            window.Swal = Swal;
        </script>
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
