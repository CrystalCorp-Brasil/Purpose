@extends('layouts.webLayout')
@section('title')Editoriais @endsection
@section('PageTitle')Editoriais @endsection
@section('content')
            @include('site.pages.editorial.sections.headerEditorials')
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 px-5 mb-3 mb-xl-4 mt-3 mt-xl-4">
                            @include('site.pages.editorial.sections.bodyEditorials')
                            @include('site.pages.editorial.sections.paginationEditorials')
                        </div>
                        <div class="col-lg-4 px-5 pt-5 mb-3 mb-xl-4 mt-4 mt-xl-5">
                            @include('site.pages.editorial.sections.sideBarEditorials')
                        </div>
                    </div>
                </div>
            </section>
@endsection
