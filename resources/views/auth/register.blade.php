@extends('layouts.adm',['bodyClass'=>'overflow-hidden-x','pageActive'=>'login'])
@section('content')
        <main class="main min-vh-100" id="top">
            <section class="py-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 p-0">
                            <div class="sticky-top vh-lg-100">
                                <div class="bg-holder" style="background-image:url({{ asset('images/adm/register.gif') }});" data-zanim-trigger="scroll" data-zanim-lg='{"animation":"zoom-out-slide-right","delay":0.4}'></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row h-100 align-items-center justify-content-center">
                                <a href="{{ route('home') }}" class="text-center">
                                    <img src="{{ asset('images/crystalcorp.png') }}" width="100px" data-toggle="tooltip" data-placement="top" title="Página Inicial" alt="Grupo CrystalCorp"><br>
                                </a>
                                <div class="col-sm-8 col-md-6 col-lg-10 col-xl-8" data-zanim-xs='{"delay":0.5,"animation":"slide-right"}' data-zanim-trigger="scroll">
                                    <h3 class="display-4 fs-7 cc-yellow">Bem vindo ao,<br />Grupo CrystalCorp.</h3>
                                    <h6 class="text-danger mt-3">Por favor, complete seu resitro.</h6>
                                    <form class="mt-5" method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="mb-3">
                                            <div class="form-group row pt-4">
                                                <label class="col-sm-3 col-form-label text-primary" for="name">Nome</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="name" class="form-control bg-light" placeholder="Nome" value="{{ old('name') }}" autofocus autocomplete="off"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-group row pt-4">
                                                <label class="col-sm-3 col-form-label text-primary" for="username">Usuário</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="username" class="form-control bg-light" placeholder="Usuário" value="{{ old('username') }}" autofocus autocomplete="off"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0">
                                            <div class="form-group row pt-4">
                                                <label class="col-sm-3 col-form-label text-primary" for="email">E-mail</label>
                                                <div class="col-sm-9">
                                                    <input type="email" name="email" class="form-control bg-light" placeholder="E-mail" value="{{ old('email') }}" autocomplete="off"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0">
                                            <div class="form-group row pt-4">
                                                <label class="col-sm-3 col-form-label text-primary" for="email">Senha</label>
                                                <div class="col-sm-9">
                                                    <input type="password" name="password" class="form-control bg-light" placeholder="Senha" autocomplete="off"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0">
                                            <div class="form-group row pt-4">
                                                <label class="col-sm-3 col-form-label text-primary" for="email">Confirmação</label>
                                                <div class="col-sm-9">
                                                    <input type="password" name="password_confirmation" class="form-control bg-light" placeholder="Confirme a Senha" autocomplete="off"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 d-grid"><button class="btn btn-login mt-4" type="submit" name="submit"><i class="far fa-save"></i>&nbsp;&nbsp;Registrar</button></div></br>
                                    </form>
                                    <div class="col-sm-12 text-center">
                                        <h6>Já tem uma conta?</h6>
                                        <a href="{{ route('login') }}" class="btn btn-outline-info btn-rounded mt-2 w-50"><i class="fa fa-user"></i>&nbsp;&nbsp;<b>Logar</b></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
@endsection
@section('script')
@error('name')
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Atenção!',
                text: '{{ $message }}',
                showConfirmButton: true,
            });
        </script>
@enderror
@error('username')
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
@error('password')
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

