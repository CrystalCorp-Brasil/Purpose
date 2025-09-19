@forelse ($posts as $post)
                            <div>
                                <p class="font-secondary text-body-tertiary mb-0">{{ $post->created_at->format('d/m/Y H:m') }}</p>
                                <h3 class="font-secondary">{{ $post->title }} - postado por: <span class="text-info text-capitalize">{{ $post->user->username }}</span></h3>
                                <img class="d-block w-100 mb-4 rounded" src="{{ $post->cover }}" alt="{{ $post->slug }}"/>
                                <p class="mt-4 text-justify">{!! Str::limit($post->publish,200,'...') !!}</p>
                                <a href="{ { $singlePost } }">continue lendo<span class="d-inline-block ms-1">&xrarr;</span></a><br/>
                                <a href="#!"><span class="fas fa-heart text-danger  mt-3 mr-2"></span><span class="font-secondary ps-1">{{ $post->visits }}</span></a>
                                <a href="#!"><span class="far fa-comment text-body-tertiary mt-3 mr-2 ml-5"></span><span class="font-secondary">{ { $comment } }</span></a>
                            </div><hr class="text-white">
@empty
                            <div class="mb-3 mb-xl-4 mt-3 mt-xl-4">
                                <h3 class="font-secondary">Ainda não temos Editoriais publicados!</h3>
                            </div>
@endforelse
