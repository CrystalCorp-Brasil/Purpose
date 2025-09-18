@extends('layouts.admLayout',['bodyClass'=>'text-start','pageActive'=>'editorial','title'=>'Editoriais'])
@section('title') Editoriais @endsection
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
                        <div class="row my-5">
                            <div class="col-md-12 mb-3">
                                <div class="card text-start">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">Editoriais</h4>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="width: 5%">#</th>
                                                        <th scope="col" style="width: 20%">Título</th>
                                                        <th scope="col" style="width: 50%">Matéria</th>
                                                        <th scope="col" style="width: 10%">Capa</th>
                                                        <th scope="col" style="width: 5%">Visitas</th>
                                                        <th scope="col" style="width: 10%">Ações</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
@forelse ($posts as $post)
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>{{ $post->title }}</td>
                                                        <td>{!! Str::limit($post->publish,150,'...') !!}</td>
                                                        <td><img src="{{ asset($post->cover) }}" alt="{{ $post->title }}" style="width: 60%"/></td>
                                                        <td><span class="badge bg-success">{{ $post->visits }}</span></td>
                                                        <td>
                                                            <button  type="button" class="btn btn-success px-2 mr-2"><i class="nav-icon i-Pen-2"></i></button>
                                                            <button  type="button" class="btn btn-danger px-2 ml-2"><i class="nav-icon i-Close-Window"></i></button>
                                                        </td>
                                                    </tr>
@empty
                                                    <tr class="text-center">
                                                        <td colspan="6">Você não tem publicações neste momento!</td>
                                                    </tr>
@endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection
