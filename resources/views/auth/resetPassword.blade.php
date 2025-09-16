@extends('layouts.admLayout',['bodyClass'=>'overflow-hidden-x','pageActive'=>'auth'])
@section('title')Reset @endsection
@section('content')
        <div class="auth-layout-wrap" style="background-image: url({{ asset('images/BGHome.jpg') }})">
            <div class="auth-content">
                <div class="card o-hidden">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="p-4">
                                <div class="auth-logo text-center mb-4"><a href="{{ route('login') }}"><img src="{{ asset('images/crystalcorp.png') }}" alt="CrystalCorp"/></a></div>
                                <h1 class="text-center mb-3 text-18">Resetar Senha</h1>
                                <form method="POST" action="{{ route('password.store') }}">
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label text-primary" for="email">E-mail</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="email" name="email" type="email" placeholder="E-mail" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label text-primary" for="password">Senha</label>
                                        <div class="col-sm-9">
                                            <input type="password" id="password" name="password" class="form-control bg-light" placeholder="Senha" required/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label text-primary" for="password_confirmation">Confirmação de Senha</label>
                                        <div class="col-sm-9">
                                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control bg-light" placeholder="Senha" required/>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn w-100 btn-outline-warning btn-rounded mt-3">{{ __('Reset Password') }}</button>
                                </form>
                                <div class="mt-3 text-center"><a class="text-muted" href="{{ route('login') }}"> <u>Logar</u></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('script')
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
@error('email')
        <script>
            Swal.fire({
                icon: 'info',
                title: 'Atenção!',
                text: '{{ $message }}',
                showConfirmButton: true,
            });
        </script>
@enderror
@endsection

