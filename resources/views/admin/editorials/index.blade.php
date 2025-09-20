@extends('layouts.admLayout',['bodyClass'=>'text-start','pageActive'=>'editorial','title'=>'Editoriais'])
@section('title') Editoriais @endsection
@section('content')
                    <div class="card user-profile o-hidden">
                        @include('admin.profile.sections.header')
                        <div class="row">
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
