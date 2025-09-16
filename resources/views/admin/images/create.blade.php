@extends('layouts.adm',['bodyClass'=>'text-start','pageActive'=>'resource','title'=>'Ícones','route'=>'dashboard'])
@section('title') | Ícones @endsection
@section('content')
                <div class="row">
                    <form action="{{ route('resource.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        @method('PATCH')

                        <div class="card mb-3 pt-5">
                            <h4 class="text-center">Cadastro de Ícone</h4>
                            <p class="text-center">Cadastrar ícones de coleção existente ou adicionar uma nova.</p>
                            <div class="col-md-8 offset-2">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-primary" for="Título">Título</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" id="title" name="title" placeholder="Título" value="{{ old('title') }}" autofocus autocomplete="title"></div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-primary" for="Classe">Classe</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" id="class" name="class" placeholder="Classe" value="{{ old('class') }}" autofocus autocomplete="class"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix m-3"></div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <div class="col-sm-12"><button class="btn w-100 btn-outline-warning" type="submit">Salvar</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
@endsection
@section('script')
@error('title')
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Atenção!',
            text: '{{ $message }}',
            showConfirmButton: true,
        });
    </script>
@enderror
@error('class')
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Atenção!',
            text: '{{ $message }}',
            showConfirmButton: true,
        });
    </script>
@enderror
@endsection
