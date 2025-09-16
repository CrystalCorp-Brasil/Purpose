@extends('layouts.adm',['bodyClass'=>'overflow-hidden-x','pageActive'=>'login'])
@section('content')
        <div class="auth-layout-wrap" style="background-image: url({{ asset('images/BGHome.jpg') }})">
            <div class="auth-content">
                <div class="card o-hidden">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8 ">
                            <div class="p-4">
                                <div class="auth-logo text-center mb-4"><a href="{{ route('login') }}"><img src="{{ asset('images/crystalcorp.png') }}" alt="CrystalCorp"/></a></div>
                                <h1 class="text-center mb-3 text-18">Resetar Senha</h1>
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    <div class="form-group row pt-4">
                                        <label class="col-form-label text-orange" for="email">Insira seu E-mail ou Usuário</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text px-3" id="basic-addon3"><i class="fad fa-user"></i></span>
                                            <input class="form-control" type="email" id="email" name="email" @error('email') is-invalid @enderror" placeholder="email ou usuário" autocomplete="email" autofocus>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn w-100 btn-outline-warning btn-rounded mt-3">Enviar E-mail</button>
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
                icon: 'error',
                title: 'Atenção!',
                text: '{{ $message }}',
                showConfirmButton: true,
            });
        </script>
@enderror
@endsection

