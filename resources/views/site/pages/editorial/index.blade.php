@extends('layouts.webLayout')
@section('headTitle')Editoriais @endsection
@section('content')
            @include('layouts.webHeader')
            <section class="mt-5 mt-lg-0 py-lg-7 p-5" id="Editorials">
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
