@extends('layouts.web')
@section('title')Galeria de Imagens @endsection
@section('PageTitle')Galeria de Imagens @endsection
@section('content')
            <section class="mt-5 mt-lg-0 py-lg-7" id="page-portfolio">
                <div class="container">
                    <div class="row mb-5 mb-lg-7">
                        <div class="col-lg-6">
                            <h1 class="text-decoration-underline d-inline fs-5 fs-md-4">Galeria</h1>
                            <p class="mt-3">Aprecie as imagens enviadas por nossos colaboradores.</p>
                        </div>
                    </div>
                    <ul class="nav font-secondary mb-2" data-filter-nav="data-filter-nav">
                        <li class="nav-item"><a class="nav-link isotope-nav active" href="#!" data-filter="*">todos</a></li>
                        <li class="nav-item"><a class="nav-link isotope-nav" href="#!" data-filter=".admin">admin</a></li>
                        <li class="nav-item"><a class="nav-link isotope-nav" href="#!" data-filter=".publish">editor</a></li>
                        <li class="nav-item"><a class="nav-link isotope-nav" href="#!" data-filter=".user">usuário</a></li>
                    </ul>
                    <div class="row g-3 mt-2" id="portfolio-gallery" data-zanim-timeline="{}" data-zanim-trigger="scroll" data-isotope='{"layoutMode":"packery"}'>
@foreach ($users as $image)
                        <div class="col-6 col-md-3 isotope-item {{ $image->rule }}">
                            <a href="#!" data-bp="{{ asset($image->image) }}" data-bigpicture='{"gallery":"#portfolio-gallery"}' data-caption="{{ $image->descr }}">
                                <img class="rounded w-100 fit-cover" src="{{ asset($image->image) }}" alt="{{ $image->title }}" data-zanim-xs='{"animation":"zoom-in","delay":0.1}'/>
                            </a>
                            <div class="col-12 mt-2">
                                <p class="fs-9">Postado por <span class="text-info">{{ $image->username }}</span> em: {{ $image->created_at }}</p>
                            </div>
                        </div>
@endforeach
                        {{ $users->appends(request()->query())->links() }}
                    </div>
                </div>
            </section>
@endsection
