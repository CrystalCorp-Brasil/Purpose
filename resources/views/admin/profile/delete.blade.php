@extends('layouts.adm',['bodyClass'=>'text-start','pageActive'=>'perfil','title'=>'Editar Perfil'])
@section('title') | Exclusão @endsection
@section('content')
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <header>
                                        <h2 class="text-lg font-medium">{{ __('Delete Account') }}</h2>
                                        <p class="mt-1 text-sm">{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}</p>
                                    </header>
                                    <button type="button" class="btn btn-danger" id="deleteUser">{{ __('Delete Account') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix my-2"></div>
                    @include('admin.profile.parts.modalDeleteUser')
@endsection
@section('script')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const openModalButton = document.getElementById('deleteUser');
                const myModal = new bootstrap.Modal(document.getElementById('modalDeleteUser'));
                openModalButton.addEventListener('click', function() {
                    myModal.show();
                });
            });
        </script>
@endsection
