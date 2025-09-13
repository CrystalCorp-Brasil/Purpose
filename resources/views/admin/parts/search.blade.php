                    <div class="d-flex align-items-center mt-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <form action="{{ route($searchBar) }}" method="GET">
                                        @csrf

                                        <div class="input-group mb-3">
                                            <input class="form-control line-height-2" type="text" id="search" name="search" value="{{ $search }}" placeholder="Pesquisar" aria-label="search" aria-describedby="basic-addon2"/>
                                            <span class="input-group-text p-0 m-0" id="basic-addon2"><button class="btn line-height-1" type="submit"><i class="search-icon text-muted i-Magnifi-Glass1"></i> Pesquisar</button></span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
