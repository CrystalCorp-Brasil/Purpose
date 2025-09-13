                    <div class="app-footer">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="footer-info">
                                    <h3>nhojunior</h3>
                                    <p>Rua Alziro Pinheiros Magalhães <br>1228, São Paulo<br><br><strong>Fone:</strong> +55 11 9 8850 9480<br><strong>Email:</strong> nhojunior@crystalcorp.info<br></p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 footer-links">
                                <h4>Serviços</h4>
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <a href="{{ route('dashboard') }}">Home</a></li>
                                    <li><i class="bi bi-chevron-right"></i> <a href="{{ ('projects.index') }}">Projetos</a></li>
                                    <li><i class="bi bi-chevron-right"></i> <a href="{{ ('forums.index') }}">Fóruns</a></li>
                                    <li><i class="bi bi-chevron-right"></i> <a href="{{ ('terms.index') }}">Termos de Uso</a></li>
                                    <li><i class="bi bi-chevron-right"></i> <a href="{{ ('policies.index') }}">Política de Privacidade</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 footer-links">
                                <h4>Links Úteis</h4>
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <a href="https://zonexus.ca/" target="_blank">Checador de Feats</a></li>
                                    <li><i class="bi bi-chevron-right"></i> <a href="https://dcuobloguide.com/tools/census/" target="_blank">DCUO Bloguide</a></li>
                                    <li><i class="bi bi-chevron-right"></i> <a href="https://www.daybreakgames.com/status" target="_blank">Verificador de Status</a></li>
                                    <li><i class="bi bi-chevron-right"></i> <a href="https://forums.daybreakgames.com/dcuo/index.php" target="_blank">DCUO Forums</a></li>
                                    <li><i class="bi bi-chevron-right"></i> <a href="https://dc.fandom.com/wiki/DC_Comics_Database" target="_blank">DC Database</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-md-6 footer-newsletter">
                                <h4>Newsletters</h4>
                                <p>Inscreva-se para ficar por dentro de todas as novidades publicadas!</p>
                                <form action="{{ ('email.store') }}" method="POST">
                                    @csrf

                                    <div class="input-group">
                                        <input class="form-control" type="email" name="email" id="email" placeholder="E-mail" aria-label="email" autocomplete="email"/>
                                        <div class="input-group-append">
                                            <button class="btn btn-corp-b" id="button-comment2" type="button">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="footer-bottom border-top pt-4 d-flex flex-column flex-sm-row align-items-center">
                            <div class="d-flex flex-column align-items-center align-items-lg-start">
                                <div class="copyright">&copy; Copyright <strong><span>NHOJunior Design</span></strong>. Todos os Direitos Reservados.</div>
                                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</div>
                            </div>
                        </div>
                    </div>
