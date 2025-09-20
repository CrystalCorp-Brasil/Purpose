@extends('layouts.admLayout',['bodyClass'=>'text-start','pageActive'=>'editorial','title'=>'Novo Editorial'])
@section('title') Novo Editorial @endsection
@section('content')
                    <div class="card user-profile o-hidden">
                        @include('admin.profile.sections.header')
                        <div class="row mb-3">
                            <form action="{{ route('editorial.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                @method('PATCH')

                                <div class="card-body">
                                    <div class="row text-center">
                                        <div class="col-md-8 offset-2">
                                            <h4 class="text-center">Editorial</h4><br>
                                            <p class="text-center mb-3">Crie seu novo editorial para o site.</p>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label text-orange" for="title">Título :</label>
                                                <div class="col-sm-10">
                                                    <input type="hidden" id="id" name="id" value="{{ Auth::user()->id }}">
                                                    <input class="form-control" id="title" name="title" type="text" value="{{ old('title') }}" autofocus autocomplete="title"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label text-orange" for="cover">Capa :</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" id="cover" name="cover" accept="image/*" autocomplete="cover"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 offset-2 pt-5">
                                        <div class="form-group row"><textarea id="editor" name="publish"></textarea></div>
                                    </div>
                                    <div class="col-md-8 offset-2 text-center pt-5">
                                        <div class="form-group row">
                                            <div class="col-sm-12"><button class="btn btn-outline-warning px-5" type="submit">Salvar</button></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
@endsection
@section('script')
    <script src="{{ asset('js/admin/tinymce/tinymce.min.js') }}" referrerpolicy="origin" crossorigin="anonymous"></script>
    <script>
        tinymce.init({
            selector: 'textarea#editor',
            license_key: 'gpl',
            skin: 'oxide-dark',
            content_css: 'dark',
            plugins: ['a11ychecker', 'advcode', 'advlist', 'anchor', 'autolink', 'codesample', 'fullscreen', 'help','image', 'editimage', 'tinydrive', 'lists', 'link', 'media', 'powerpaste', 'preview','searchreplace', 'table', 'tinymcespellchecker', 'visualblocks', 'wordcount'],
            toolbar: 'insertfile a11ycheck undo redo | bold italic | forecolor backcolor | codesample | alignleft aligncenter alignright alignjustify | bullist numlist | link image',
        });
    </script>
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
@error('cover')
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Atenção!',
            text: '{{ $message }}',
            showConfirmButton: true,
        });
    </script>
@enderror
@error('content')
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
