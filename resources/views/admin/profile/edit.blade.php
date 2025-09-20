@extends('layouts.admLayout',['bodyClass'=>'text-start','pageActive'=>'perfil','title'=>'Editar Perfil'])
@section('title') Edição @endsection
@section('content')
                    <div class="card user-profile o-hidden">
                        @include('admin.profile.sections.header')
                        <div class="row mb-3">
                            <form action="{{ route('profile.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                @method('PATCH')

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 offset-2">
                                            <h4 class="text-center">{{ __('Profile Information') }}</h4><br>
                                            <p class="text-center mb-2">{{ __("Update your account's profile information and email address.") }}</p>
                                            <div class="form-group row mt-4">
                                                <label class="col-sm-2 col-form-label text-orange" for="name">Nome :</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name"/>
                                                </div>
                                            </div>
                                            <div class="form-group row mt-2">
                                                <label class="col-sm-2 col-form-label text-orange" for="email">E-mail</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" id="email" name="email" type="email" class="mt-1 block w-full" value="{{ old('email', $user->email) }}" required autocomplete="email">
                                                </div>
                                            </div>
                                            <div class="form-group row mt-2">
                                                <label class="col-sm-2 col-form-label text-orange" for="image">Imagem</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" id="image" name="image" accept="image/*"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 mt-7">
                                            <div class="form-group row">
                                                <div class="col-sm-8 offset-3">
                                                    <img src="@if($user->image == null){{ asset('images/adm/user.png') }}@else{{ asset($user->image) }}@endif" alt="{{ $user->name }}" width="150"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 offset-2 py-5">
                                            <div class="form-group row"><textarea id="editor" name="bio">{!! $user->bio !!}</textarea></div>
                                        </div>
                                        <div class="col-md-8 offset-2 text-center">
                                            <div class="form-group row">
                                                <div class="col-sm-12"><button class="btn btn-outline-warning px-5" type="submit">Salvar</button></div>
                                            </div>
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
