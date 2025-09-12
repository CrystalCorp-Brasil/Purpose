@extends('layouts.adm',['bodyClass'=>'text-start','pageActive'=>'perfil','title'=>'Perfil'])
@section('title') | Perfil @endsection
@section('content')
                <div class="header-cover" style="background-image: url('{{ asset('images/BGHome.jpg') }}');"></div>
                <div class="user-info">
                    <img class="profile-picture avatar-lg mb-2" src="@if($user->image == null){{ asset('images/adm/user.png') }}@else{{ asset($user->image) }}@endif" alt="CrystalCorp"/>
                    <p class="m-0 text-24">{{ $user->name }}</p>
@if ($user->rule == 'admin')
                    <p class="text-muted m-0 text-capitalize">{{ $user->rule }}</p>
@endif
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs profile-nav mb-4" id="profileTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="about-tab" data-bs-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">Perfil</a></li>
                        <li class="nav-item"><a class="nav-link" id="gallery-tab" data-bs-toggle="tab" href="#gallery" role="tab" aria-controls="gallery" aria-selected="false">Galeria</a></li>
                    </ul>
                    <div class="tab-content" id="profileTabContent">
                        @include('admin.profile.parts.about')
                        @include('admin.profile.parts.gallery')
                    </div>
                </div>
@endsection
