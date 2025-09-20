            <section class="text-center p-5" id="LeagueAbout">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <p class="lead">Integram o <span class="text-orange fw-bold">Grupo CrystalCorp</span> as Ligas CrystalCorp Brasil (heróis) e CrystalCorp Dark (vilões).</p>
                            <p class="lead">Visite e acompanhe nosso canal no <a class="font-secondary text-uppercase text-info fw-black fs-8 text-decoration-none" href="https://www.youtube.com/@crystalcorpbrasil4353" target="_blank"><span class="fw-bold">YouTube</span></a> com gameplays/tutoriais do início da aventura no universo DC Universe Online!</p>
                            <h6 class="mt-5"> Miss FireCrystal, C.E.O.</h6>
                            <img src="{{ asset('images/web/banner/MissFireCrystal.jpg') }}" alt="CrystalCorp" width="220" /><br/>
                            <a class="btn btn-outline-info mt-6" href="#!">Sobre nós</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="text-center p-5 overflow-hidden bg-black-russian" id="bicycleCta">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col px-4">
                            <div class="position-relative overflow-hidden rounded">
                                <div class="bg-holder overlay" style="background-image:url({{ asset('images/web/banner/LeagueHall.jpg') }});" data-parallax="" data-rellax-percentage="0.5" data-rellax-speed="-3"></div>
                                <div class="position-relative py-8 py-md-11" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                    <h2 class="fs-5 px-4 px-sm-0 display-4 mb-4" data-zanim-xs='{"delay":0.1}'>venha conhecer nossos salões</h2>
                                    <div data-zanim-xs='{"delay":0.2}'><a class="btn btn-outline-primary border-2 mt-3" href="#!">aventure-se</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="text-center p-5" id="leagueMembers">
                <div class="container-fluid">
                    <div class="row m-0">
@foreach ($images as $image)
                        <div class="col-md-6 mt-4 mt-md-0">
                            <div class="position-relative overflow-hidden rounded">
                                <div class="bg-holder" style="background-image:url({{ asset($image->image) }});"></div>
                                <div class="position-relative py-8 py-md-11">
                                    <div data-zanim-timeline='{"delay":0.1}' data-zanim-trigger="scroll">
                                        <div class="overflow-hidden"><h6 class="ls text-uppercase" data-zanim-xs='{"delay":0}'>{!! Str::limit($image->descr,50,'...') !!}</h6></div>
                                        <div class="overflow-hidden"><h2 class="fs-7 fs-sm-6" data-zanim-xs='{"delay":0.1}'>{{ $image->title }}</h2></div>
                                        <div data-zanim-xs='{"delay":0.2}'><a class="btn btn-primary mt-4" href="#!">biografia</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
@endforeach
                    </div>
                </div>
            </section>
            <section class="bg-black-russian p-5" id="editorials">
                <div class="container-fluid">
                    <div class="row m-0">
@foreach ($posts as $post)
                        <div class="col-sm-6 col-lg-3 mt-4 mt-sm-0">
                            <a class="d-block" href="{{ route('editorial.show',$post->slug) }}">
                                <img class="w-100 rounded" src="{{ $post->cover }}" alt="" data-zanim-xs='{"delay":0.1,"animation":"zoom-in"}' data-zanim-trigger="scroll"/>
                                <h6 class="d-inline-block ls text-uppercase fw-normal mb-0 mt-3 text-body-secondary">{{ $post->title }}</h6>
                                <h4>{{ $post->user->username }}</h4>
                                <p class="text-body d-inline-block">{!! Str::limit($post->publish,50,'...') !!}</p>
                            </a>
                        </div>
@endforeach
                    </div>
                </div>
            </section>
