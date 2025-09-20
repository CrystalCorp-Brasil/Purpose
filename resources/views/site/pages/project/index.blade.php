@extends('layouts.weblayout')
@section('title') Projetos @endsection
@section('content')
            @include('site.pages.project.sections.header')
            <div class="main p-5">
                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-9 col-lg-8">
                                <div class="card">
                                    <ul class="nav nav-tabs nav-tabs-custom justify-content-center pt-2" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#all-post" role="tab">Desenvolvimento</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#archive" role="tab">Planejamento</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="all-post" role="tabpanel">
                                            <div class="row justify-content-center">
                                                <div class="col-12">
                                                    <div class="tab-content">
                                                        <div class="row align-items-center">
                                                            <div class="col-7"><h1 class="mb-0">Desenvolvimento</h1></div>
                                                            <div class="col-5">
                                                                <ul class="nav nav-pills justify-content-end">
                                                                    <li class="nav-item"><a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Visão :</a></li>
                                                                    <li class="nav-item" data-bs-placement="top" title="List"><a class="nav-link" data-bs-toggle="tab" href="#list" role="tab"><i class="mdi mdi-format-list-bulleted"></i></a></li>
                                                                    <li class="nav-item" data-bs-placement="top" title="Grid"><a class="nav-link active" data-bs-toggle="tab" href="#grid" role="tab"><i class="mdi mdi-view-grid-outline"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        @include('site.pages.project.sections.grid')
                                                        @include('site.pages.project.sections.list')
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @include('site.pages.project.sections.archive')
                                    </div>
                                </div>
                            </div>
                            @include('site.pages.project.sections.sidebar')
                        </div>
                    </div>
                </div>
            </div>
@endsection
