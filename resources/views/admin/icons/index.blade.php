@extends('layouts.admLayout',['bodyClass'=>'text-start','pageActive'=>'resource','title'=>'Ícones','route'=>'dashboard'])
@section('searchSection')
                    <div class="d-flex align-items-center mt-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <form action="{{ route('resource.index') }}" method="GET">
                                        @csrf

                                        <div class="input-group mb-3">
                                            <input class="form-control line-height-2" type="text" id="search" name="search" value="{{ $search }}" placeholder="Pesquisar" aria-label="search" aria-describedby="basic-addon2"/>
                                            <span class="input-group-text p-0 m-0" id="basic-addon2"><button class="btn line-height-1 text-dark" type="submit"><i class="search-icon i-Magnifi-Glass1"></i> Pesquisar</button></span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection
@section('content')
                    <div class="card user-profile o-hidden">
                        @include('admin.profile.sections.header')
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="row">
@foreach ($icons as $icon)
                                <div class="col-md-2">
                                    <div class="card card-icon mb-4">
                                        <div class="card-body text-center">
                                            <i class="{{ $icon->class }}"></i>
                                            <p class="mt-2 mb-2"><small>{{ $icon->title }}</small></p>
                                            <pre id="iconCode"><code>&lt;i class="{{ $icon->class }}"&gt;&lt;/i&gt;</code></pre>
                                            <button class="btn btn-a-link-2" onclick="copyCode('iconCode')">Copiar Código</button>
                                        </div>
                                    </div>
                                </div>
@endforeach
                            </div>
                        </div>
                        {{ $icons->appends(request()->query())->links() }}
                    </div>
@endsection
@section('script')
        <script>
            function copyCode(idElemento) {
                const elemento = document.getElementById(idElemento);
                const texto = elemento.innerText;
                const textarea = document.createElement('textarea');
                textarea.value = texto;
                document.body.appendChild(textarea);
                textarea.select();
                document.execCommand('copy');
                document.body.removeChild(textarea);
                Swal.fire({
                    title: 'Sucesso!',
                    text: 'Código copiado para a área de transferência!',
                    icon: 'info',
                    confirmButtonText: 'OK'
                })
            }
        </script>
@endsection

