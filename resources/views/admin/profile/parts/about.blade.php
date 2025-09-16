                                <div class="tab-pane fade active show" id="about" role="tabpanel" aria-labelledby="about-tab">
                                    <h4>Informações Pessoais</h4>
                                    <p class="text-justify">@if($user->bio == null)Sem informações @else{!! $user->bio !!}@endif</p><hr/>
                                    <div class="row">
                                        <div class="col-md-4 col-6">
                                            <div class="mb-4">
                                                <p class="text-orange mb-1"><i class="i-Checked-User text-16 me-1"></i> Nome de Usuário</p>
                                                <span class="text-capitalize">{{ $user->username }}</span>
                                            </div>
                                            <div class="mb-4">
                                                <p class="text-orange mb-1"><i class="i-Calendar text-16 me-1"></i> Atualizado em</p>
                                                <span>@if($user->updated_at == null)Sem atualização @else{{ $user->updated_at->now()->format('d/m/Y') }}@endif</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-6">
                                            <div class="mb-4">
                                                <p class="text-orange mb-1"><i class="i-Email text-16 me-1"></i> E-mail</p>
                                                <span>{{ $user->email }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-6">
                                            <div class="mb-4">
                                                <p class="text-orange mb-1"><i class="i-Calendar text-16 me-1"></i> Data de Cadastro</p>
                                                <span>{{ $user->created_at->now()->format('d/m/Y') }}</span>
                                            </div>
                                        </div>
                                    </div><hr/>
                                </div>
