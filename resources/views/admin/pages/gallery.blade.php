@extends('layouts.adm',['bodyClass'=>'text-start','pageActive'=>'galeria','title'=>'Galeria'])
@section('title') Galeria @endsection
@section('content')
                    <div class="card user-profile o-hidden mb-4">
                        <div class="header-cover" style="background-image: url('{{ asset('images/adm/crystalcorp.jpg') }}');"></div>
                        <div class="user-info">
                            <img class="profile-picture avatar-lg mb-2 bg-white rounded-pill" src="@if($user->image == null){{ asset('images/adm/user.png') }}@else{{ asset($user->image) }}@endif" alt="{{ $user->name }}"/>
                            <p class="m-0 text-24">{{ $user->name }}</p>
@if ($user->rule == 'admin')
                            <p class="text-muted m-0 text-capitalize">{{ $user->rule }}</p>
@endif
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs profile-nav" id="profileTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="about-tab" data-bs-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">Galeria de Imagens</a></li>
                            </ul>
                            <div class="tab-content" id="profileTabContent">
                                @include('admin.profile.parts.gallery')
                            </div>
                        </div>
                    </div>
@endsection
