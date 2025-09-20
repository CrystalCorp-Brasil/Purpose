@extends('layouts.admLayout',['bodyClass'=>'text-start','pageActive'=>'perfil','title'=>'Perfil'])
@section('title') Perfil @endsection
@section('content')
                    <div class="card user-profile o-hidden">
                        @include('admin.profile.sections.header')
                        <div class="card-body">
                            <ul class="nav nav-tabs profile-nav mb-4" id="profileTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="about-tab" data-bs-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">Informações Básicas</a></li>
                            </ul>
                            <div class="tab-content" id="profileTabContent">
                                @include('admin.profile.sections.about')
                            </div>
                        </div>
                    </div>
@endsection
