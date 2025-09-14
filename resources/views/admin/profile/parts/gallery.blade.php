                            <div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="photos-tab">
                                <div class="row">
@foreach ($images as $image)
                                    <div class="col-md-4">
                                        <a href="{{ asset($image->image) }}" data-lightbox="image-{{ $image->id }}" data-title="{{ $image->descr }}">
                                            <div class="card o-hidden">
                                                <img id="imagePath{{ $image->id }}" class="card-img" src="{{ asset($image->image) }}" alt="{{ $image->title }}"/>
                                                <div class="card-img-overlay">
                                                    <div class="p-1 card-footer font-weight-light d-flex">
                                                        <span class="me-3 d-flex align-items-center text-capitalize"><i class="fa fa-star me-1"></i> {{ $image->title }}</span>
                                                        <span class="d-flex align-items-center"><i class="i-Calendar-4 me-2"></i>{{ $image->created_at->now()->format('d/m/Y') }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <button class="btn btn-corp-b text-center rounded" onclick="copiarLinkImagem('imagePath{{ $image->id }}')"><i class="fa fa-copy"></i> Copiar endereço da Imagem</button>
                                    </div>
@endforeach
                                </div>
                            </div>
@section('script')
        <script>
            function copiarLinkImagem(imageId) {
                const imgElement = document.getElementById(imageId);
                const imageUrl = imgElement.src;
                const tempInput = document.createElement('input');
                tempInput.value = imageUrl;
                document.body.appendChild(tempInput);
                tempInput.select();
                document.execCommand('copy');
                document.body.removeChild(tempInput);
                Swal.fire({
                    title: 'Sucesso!',
                    text: 'Link copiado para a área de transferência!',
                    icon: 'info',
                    confirmButtonText: 'OK'
                })
            }
        </script>
@endsection
