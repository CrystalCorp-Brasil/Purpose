@extends('layouts.webLayout')
@section('headTitle')Galeria de Imagens @endsection
@section('content')
            @include('layouts.webHeader')
            <section class="mt-5 mt-lg-0 py-lg-7 px-5" id="Gallery">
                <div class="container-fluid">
                    <div class="row mb-5 mb-lg-7">
                        <div class="col-lg-6">
                            <h2 class="d-inline">Aprecie as imagens enviadas por nossos colaboradores</h2>
                        </div>
                    </div>
                    <ul class="nav font-secondary mb-3" data-filter-nav="data-filter-nav">
                        <li class="nav-item"><a class="nav-link isotope-nav active px-4 py-2" href="#!" data-filter="*">todos</a></li>
                        <li class="nav-item"><a class="nav-link isotope-nav px-4 py-2" href="#!" data-filter=".admin">administrador</a></li>
                        <li class="nav-item"><a class="nav-link isotope-nav px-4 py-2" href="#!" data-filter=".publish">editores</a></li>
                        <li class="nav-item"><a class="nav-link isotope-nav px-4 py-2" href="#!" data-filter=".user">usuários</a></li>
                    </ul>
                    <div class="row g-3 mt-2" id="portfolio-gallery" data-zanim-timeline="{}" data-zanim-trigger="scroll" data-isotope='{"layoutMode":"packery"}'>
@foreach ($images as $image)
                        <div class="col-6 col-md-3 isotope-item {{ $image->user->rule }}">
                            <a href="#!" data-bp="{{ asset($image->image) }}" data-bigpicture='{"gallery":"#portfolio-gallery"}' data-caption="{{ $image->descr }}">
                                <img class="rounded w-100 fit-cover" src="{{ asset($image->image) }}" alt="{{ $image->title }}" data-zanim-xs='{"animation":"zoom-in","delay":0.2}'/>
                            </a>
                            <div class="col-12 mt-2">
                                <p class="text-center fs-9">Postado por <span class="text-info text-capitalize">{{ $image->user->username }}</span> em: {{ $image->created_at }}</p>
                            </div>
                        </div>
@endforeach
                        {{ $images->appends(request()->query())->links() }}
                    </div>
                </div>
            </section>
@endsection
