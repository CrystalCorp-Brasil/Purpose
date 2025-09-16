@extends('layouts.adm',['bodyClass'=>'text-start','pageActive'=>'perfil','title'=>'Imagens','route'=>'dashboard'])
@section('title') | Imagens @endsection
@section('content')
                    <div class="row">
                        <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            @method('PATCH')

                            <div class="card">
                                <div class="card-body">
                                    <div class="row  text-center">
                                        <div class="col-md-8 offset-2">
                                            <h4 class="pt-2">Upload de Imagem</h4><br>
                                            <p class="pt-2">Adicione Imagens para sua Galeria e exibição no site.</p>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label text-primary" for="title">Título :</label>
                                                <div class="col-sm-10">
                                                    <input type="hidden" id="id" name="id" value="{{ Auth::user()->id }}">
                                                    <input class="form-control" id="title" name="title" type="text" placeholder="Título" value="{{ old('title') }}" autofocus autocomplete="title"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label text-primary" for="descr">Descrição :</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" id="descr" name="descr" type="text" placeholder="Descrição (Opcional)" value="{{ old('descr') }}" autocomplete="descr"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label text-primary" for="image">Imagem :</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" id="image" name="image" accept="image/*" autocomplete="image"/>
                                                </div>
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
@error('descr')
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Atenção!',
            text: '{{ $message }}',
            showConfirmButton: true,
        });
    </script>
@enderror
@error('image')
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
