@extends('layouts.webLayout')
@section('title')Editoriais @endsection
@section('PageTitle')Editoriais @endsection
@section('content')
            @include('site.pages.sections.headerEditorials')
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            @include('site.pages.sections.bodyEditorials')
                            @include('site.pages.sections.paginationEditorials')
                        </div>
                        <div class="col-lg-4 mt-6 mt-lg-0 ps-xl-7">
                            @include('site.pages.sections.sideBarEditorials')
                        </div>
                    </div>
                </div>
            </section>
@endsection
