@extends('layouts.webLayout')
@section('title')Home @endsection
@section('content')
                        <section class="py-9 py-lg-10" id="page-blog" data-zanim-xs='{"delay":0.4,"animation":"zoom-out"}' data-zanim-trigger="scroll">
                <div class="bg-holder" style="background-image:url({{ asset($editorial->cover) }});"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="overflow-hidden">
                                <h1 class="text-decoration-underline" data-zanim-xs='{"delay":0.6}' data-zanim-trigger="scroll"> {{ $editorial->title }}</h1>
                            </div>
                            <div class="overflow-hidden">
                                <h6 class="mb-0 ls-2 text-uppercase" data-zanim-xs='{"delay":0.8}' data-zanim-trigger="scroll"><small>publicado por: {{ $editorial->user->username }}</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col font-secondary text-body-tertiary">{{ $editorial->created_at->format('d/m/Y H:m') }}</div>
                                        <div class="col ms-auto font-secondary text-end">
                                            <a class="me-3 text-body-tertiary" href="#!"><span class="fas fa-heart me-1 text-danger"></span>14</a>
                                            <a class="text-body-tertiary" href="#!"><span class="far fa-comment me-1"></span>12</a>
                                        </div>
                                    </div>
                                    <h3 class="mt-4">{{ $editorial->title }}</h3>
                                    <div class="mt-4 text-justify">{!! $editorial->publish !!}</div>
                                    <div class="mt-3">
                                        <a class="btn btn-xs btn-outline-secondary m-1" href="#!">Creativity</a>
                                        <a class="btn btn-xs btn-outline-secondary m-1" href="#!">Ideas</a>
                                        <a class="btn btn-xs btn-outline-secondary m-1" href="#!">Travel</a>
                                        <a class="btn btn-xs btn-outline-secondary m-1" href="#!">Art</a>
                                        <a class="btn btn-xs btn-outline-secondary m-1" href="#!">Life</a>
                                        <a class="btn btn-xs btn-outline-secondary m-1" href="#!">Music</a>
                                    </div>
                                </div>
                                <div class="col-12 mt-6">
                                    <div class="bg-black-russian p-5 rounded">
                                        <div class="row g-0 justify-content-center text-center text-sm-start">
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3 align-self-center pe-sm-3 pb-3 pb-sm-0"><img class="rounded-circle img-fluid bg-primary" src="@if($editorial->user->image == null){{ asset('images/adm/user.png') }}@else{{ asset($editorial->user->image) }}@endif" alt="{{ $editorial->user->username }}" /></div>
                                            <div class="col-sm">
                                                <h5 class="text-capitalize">{{ $editorial->user->username }}</h5>
                                                <p class="font-secondary">@if($editorial->user->bio == null)Sem informações disponíveis @else{!! $editorial->user->bio !!}@endif</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-8"><h3 class="mb-4">More from Web design</h3></div>
                                <div class="col-lg-4">
                                    <a href="#!"><img class="rounded img-fluid" src="../assets/img/blog-1.jpg" alt=""/>
                                        <h5 class="mt-3">How to make the shame out of self-promotion totally insane!</h5>
                                    </a>
                                </div>
                                <div class="col-lg-4 mt-4 mt-lg-0">
                                    <a href="#!"><img class="rounded img-fluid" src="../assets/img/blog-2.jpg" alt=""/>
                                        <h5 class="mt-3">Magic. My Macbook has been stolen.</h5>
                                    </a>
                                </div>
                                <div class="col-lg-4 mt-4 mt-lg-0">
                                    <a href="#!"><img class="rounded img-fluid" src="../assets/img/blog-3.jpg" alt=""/>
                                        <h5 class="mt-3">How to make the shame out of self-promotion totally insane!</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-6 mt-lg-0 ps-xl-7">
                            <div class="row px-2">
                                <div class="col">
                                    <form class="input-iconic">
                                        <div class="input-icon"><button type="submit"><span class="fas fa-search text-body-tertiary"></span></button></div>
                                        <input class="form-control" type="search" placeholder="Search..."/>
                                    </form>
                                    <h4 class="mt-5">Popular</h4>
                                    <a class="mt-3 d-inline-block" href="blog-single.html">
                                        <img class="rounded w-100 fit-cover" src="../assets/img/blog-1.jpg" alt=""/>
                                        <h5 class="mt-3">How to take the shame out of self-promotion</h5>
                                    </a>
                                    <a class="mt-4 d-inline-block" href="blog-single.html">
                                        <img class="rounded w-100 fit-cover" src="../assets/img/blog-3.jpg" alt=""/>
                                        <h5 class="mt-3">Magic. My Macbook has been stolen.</h5>
                                    </a>
                                    <div class="mt-6">
                                        <h4>Tags</h4>
                                        <ul class="nav mt-3">
                                            <li><a class="btn btn-xs btn-outline-secondary m-1" href="#!">Creativity</a></li>
                                            <li><a class="btn btn-xs btn-outline-secondary m-1" href="#!">Ideas</a></li>
                                            <li><a class="btn btn-xs btn-outline-secondary m-1" href="#!">Travel</a></li>
                                            <li><a class="btn btn-xs btn-outline-secondary m-1" href="#!">Art</a></li>
                                            <li><a class="btn btn-xs btn-outline-secondary m-1" href="#!">Psychology</a></li>
                                            <li><a class="btn btn-xs btn-outline-secondary m-1" href="#!">Life</a></li>
                                            <li><a class="btn btn-xs btn-outline-secondary m-1" href="#!">Music</a></li>
                                            <li><a class="btn btn-xs btn-outline-secondary m-1" href="#!">Books</a></li>
                                            <li><a class="btn btn-xs btn-outline-secondary m-1" href="#!">Movie</a></li>
                                        </ul>
                                    </div>
                                    <div class="mt-6">
                                        <h4>Categories</h4>
                                        <ul class="bullet-inside ps-0 font-secondary">
                                            <li><a class="text-body-secondary" href="#!">Design</a></li>
                                            <li><a class="text-body-secondary" href="#!">Programming</a></li>
                                            <li><a class="text-body-secondary" href="#!">Writing</a></li>
                                            <li><a class="text-body-secondary" href="#!">Games</a></li>
                                            <li><a class="text-body-secondary" href="#!">Typography</a></li>
                                            <li><a class="text-body-secondary" href="#!">Cricket</a></li>
                                            <li><a class="text-body-secondary" href="#!">Soccer</a></li>
                                            <li><a class="text-body-secondary" href="#!">Photography</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
