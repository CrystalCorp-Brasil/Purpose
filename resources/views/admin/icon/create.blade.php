@extends('layouts.admLayout',['bodyClass'=>'text-start','pageActive'=>'resource','title'=>'Ícones','route'=>'dashboard'])
@section('title') | Ícones @endsection
@section('content')
                    <div class="row">
                        <form action="{{ route('resource.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            @method('PATCH')

                            <div class="card">
                                <div class="card-body">
                                    <div class="row text-center">
                                        <div class="col-md-8 offset-2">
                                            <h4 class="pt-2">Cadastro de Ícone</h4>
                                            <p class="pt-2">Cadastrar ícones de coleção existente ou adicionar uma nova.</p>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label text-orange" for="Título">Título</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="title" name="title" placeholder="Título" value="{{ old('title') }}" autofocus autocomplete="title">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label text-orange" for="Classe">Classe</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="class" name="class" placeholder="Classe" value="{{ old('class') }}" autofocus autocomplete="class">
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-4">
                                                <div class="form-group row">
                                                    <div class="col-sm-12"><button class="btn btn-outline-warning px-5" type="submit">Salvar</button></div>
                                                </div>
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
