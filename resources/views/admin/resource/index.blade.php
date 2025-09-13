@extends('layouts.adm',['bodyClass'=>'text-start','pageActive'=>'resource','title'=>' | Ícones'])
@section('searchSection')
                    <div class="d-flex align-items-center mt-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <form action="{{ route('resource.index') }}" method="GET">
                                        @csrf

                                        <div class="input-group mb-3">
                                            <input class="form-control line-height-2" type="text" id="search" name="search" value="{{ $search }}" placeholder="Pesquisar" aria-label="search" aria-describedby="basic-addon2"/>
                                            <span class="input-group-text p-0 m-0" id="basic-addon2"><button class="btn line-height-1" type="submit"><i class="search-icon text-muted i-Magnifi-Glass1"></i> Pesquisar</button></span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection
@section('content')
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="row">
@foreach ($icons as $icon)
                            <div class="col-md-2">
                                <div class="card card-icon mb-4">
                                    <div class="card-body text-center">
                                        <i class="{{ $icon->class }}"></i>
                                        <p class="text-muted mt-2 mb-2">{{ $icon->title }}</p>
                                    </div>
                                </div>
                            </div>
@endforeach
                        </div>
                        {{ $icons->appends(request()->query())->links() }}
                    </div>
                </div>
@endsection
