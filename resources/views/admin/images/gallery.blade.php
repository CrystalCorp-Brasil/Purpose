@extends('layouts.admLayout',['bodyClass'=>'text-start','pageActive'=>'galeria','title'=>'Galeria'])
@section('title') Galeria @endsection
@section('content')
                    <div class="card user-profile o-hidden">
                        @include('admin.profile.sections.header')
                        <div class="card-body">
                            <ul class="nav nav-tabs profile-nav" id="profileTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="about-tab" data-bs-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">Galeria de Imagens</a></li>
                            </ul>
                            <div class="tab-content" id="profileTabContent">
                                @include('admin.images.sections.gallery')
                            </div>
                        </div>
                    </div>
@endsection
