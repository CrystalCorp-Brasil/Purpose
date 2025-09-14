@extends('layouts.adm',['bodyClass'=>'text-start','pageActive'=>'perfil','title'=>'Galeria'])
@section('title') | Galeria @endsection
@section('content')
                    <div class="card user-profile o-hidden pb-4">
                        <ul class="nav nav-tabs profile-nav pb-4" id="profileTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="about-tab" data-bs-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">Galeria de Imagens</a></li>
                        </ul>
                        <div class="tab-content" id="profileTabContent">
                            @include('admin.profile.parts.gallery')
                        </div>
                    </div>
@endsection
