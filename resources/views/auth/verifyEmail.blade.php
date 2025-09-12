@extends('layouts.adm',['bodyClass'=>'overflow-hidden-x','pageActive'=>'login'])
@section('content')
        <div class="auth-layout-wrap" style="background-image: url({{ asset('images/BGHome.jpg') }})">
            <div class="auth-content">
                <div class="card o-hidden">
                    <div class="row">
                        <div class="col-md-10 offset-1">
                            <div class="p-4">
                                <div class="auth-logo text-center mb-4"><a href="{{ route('login') }}"><img src="{{ asset('images/crystalcorp.png') }}" alt="CrystalCorp"/></a></div>
                                <div class="mb-4 text-sm text-justify">{{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}</div>
@if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm">{{ __('A new verification link has been sent to the email address you provided during registration.') }}</div>
@endif
                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf

                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" type="email" placeholder="E-mail" value="{{ old('email') }}" autofocus autocomplete="email"/>
                                    </div>
                                    <button type="submit" class="btn w-100 btn-outline-warning btn-rounded mt-3">{{ __('Resend Verification Email') }}</button>
                                </form>
                                <div class="mt-3 text-center"><a class="btn w-100 btn-outline-success btn-rounded" href="{{ route('login') }}"> Logar</a></div>
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

