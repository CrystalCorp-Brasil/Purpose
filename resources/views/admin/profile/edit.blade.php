@extends('layouts.adm',['bodyClass'=>'text-start','pageActive'=>'perfil','title'=>'Editar Perfil'])
@section('style')
        <link href="{{ asset('css/quill.snow.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('title') | Edição @endsection
@section('content')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{ route('profile.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        @method('PATCH')

                                        <div class="row">
                                            <div class="col-md-8"><br>
                                                <h4>{{ __('Profile Information') }}</h4><br>
                                                <p >{{ __("Update your account's profile information and email address.") }}</p>
                                                <div class="card mb-5">
                                                    <div class="card-body">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label text-primary" for="name">Nome :</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row pt-4">
                                                            <label class="col-sm-2 col-form-label text-primary" for="email">E-mail</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" id="email" name="email" type="email" class="mt-1 block w-full" value="{{ old('email', $user->email) }}" required autocomplete="email">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="form-group row">
                                                            <div class="col-sm-8 offset-3">
                                                                <img src="@if($user->image == null){{ asset('images/adm/user.png') }}@else{{ asset($user->image) }}@endif" alt="{{ $user->name }}" width="150"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <input type="file" class="form-control" id="image" name="image" accept="image/*"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group py-5">
                                                    <textarea id="editor" name="bio">{!! $user->bio !!}</textarea>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-12"><button class="btn w-100 btn-outline-warning" type="submit">Salvar</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
@endsection
@section('script')
        <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin" crossorigin="anonymous"></script>
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
@error('email')
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
