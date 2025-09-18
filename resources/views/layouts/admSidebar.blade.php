            <div class="side-content-wrap">
                <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
                    <ul class="navigation-left">
                        <li class="nav-item active" data-item="dashboard">
                            <a class="nav-item-hold" href="#"><i class="nav-icon i-Home-4"></i><span class="nav-text">Dashboard</span></a>
                            <div class="triangle"></div>
                        </li>
                        <li class="nav-item" data-item="images">
                            <a class="nav-item-hold" href="#"><i class="i-Folder-Pictures"></i><span class="nav-text">Galeria de Imagens</span></a>
                            <div class="triangle"></div>
                        </li>
                        <li class="nav-item" data-item="profile">
                            <a class="nav-item-hold" href="#"><i class="nav-icon i-Checked-User"></i><span class="nav-text">Editar Perfil</span></a>
                            <div class="triangle"></div>
                        </li>
@if (Auth::user()->rule != 'user')
                        <li class="nav-item" data-item="resource">
                            <a class="nav-item-hold" href="#"><i class="nav-icon i-Library"></i><span class="nav-text">Ícones</span></a>
                            <div class="triangle"></div>
                        </li>
                        <li class="nav-item" data-item="finance">
                            <a class="nav-item-hold" href="#"><i class="nav-icon i-Receipt-4"></i><span class="nav-text">Editoriais</span></a>
                            <div class="triangle"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item-hold" href="datatables.html"><i class="nav-icon i-File-Horizontal-Text"></i><span class="nav-text">Datatables</span></a>
                            <div class="triangle"></div>
                        </li>
                        <li class="nav-item" data-item="sessions">
                            <a class="nav-item-hold" href="#"><i class="nav-icon i-Administrator"></i><span class="nav-text">Sessions</span></a>
                            <div class="triangle"></div>
                        </li>
                        <li class="nav-item" data-item="others">
                            <a class="nav-item-hold" href="#"><i class="nav-icon i-Double-Tap"></i><span class="nav-text">Others</span></a>
                            <div class="triangle"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item-hold" href="http://demos.ui-lib.com/gull-htms-doc/" target="_blank"><i class="nav-icon i-Safe-Box1"></i><span class="nav-text">Doc</span></a>
                            <div class="triangle"></div>
                        </li>
@endif
                    </ul>
                </div>
                <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
                    <i class="sidebar-close i-Close" (click)="toggelSidebar()"></i>
                    <header>
                        <a href="{{ route('dashboard') }}">
                            @include('layouts.admLogo')
                        </a>
                        <p>Bem vindo, <span class="text-orange">{{ Auth::user()->name }}</span>.</p>
                    </header>
                    <div class="submenu-area" data-parent="dashboard">
                        <header>
                            <h6>Dashboard</h6>
                            <p>Informações básicas de perfil.</p>
                        </header>
                        <ul class="childNav">
                            <li class="nav-item"><a href="{{ route('dashboard') }}"><i class="nav-icon i-Home-2"></i><span class="item-name">Dashboard</span></a></li>
                        </ul>
                    </div>
                    <div class="submenu-area" data-parent="images">
                        <header>
                            <h6>Imagens</h6>
                            <p>Adicione ou visualize suas imagens.</p>
                        </header>
                        <ul class="childNav">
                            <li class="nav-item"><a href="{{ route('image.create') }}"><i class="nav-icon i-Upload-Window"></i><span class="item-name">Adicionar Imagem</span></a></li>
                            <li class="nav-item"><a href="{{ route('image.index') }}"><i class="nav-icon i-Folder-Pictures"></i><span class="item-name">Galeria de Imagens</span></a></li>
                        </ul>
                    </div>
                    <div class="submenu-area" data-parent="profile">
                        <header>
                            <h6>Perfil</h6>
                            <p>Atualize, edite ou exclua seu perfil.</p>
                        </header>
                        <ul class="childNav">
                            <li class="nav-item"><a href="{{ route('profile.edit') }}"><i class="nav-icon i-Pen-3"></i><span class="item-name">Editar Perfil</span></a></li>
                            <li class="nav-item"><a href="{{ route('profile.delete') }}"><i class="nav-icon i-Remove-User"></i><span class="item-name">Excluir Conta</span></a></li>
                        </ul>
                    </div>
                    <div class="submenu-area" data-parent="finance">
                        <header>
                            <h6>Editoriais</h6>
                        </header>
                        <ul class="childNav">
                            <li class="nav-item"><a href="{{ route('editorial.index') }}"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Editoriais</span></a></li>
                            <li class="nav-item"><a href="{{ route('editorial.create') }}"><i class="nav-icon i-Pen-2"></i><span class="item-name">Novo Editorial</span></a></li>
                        </ul>
                    </div>
                    <div class="submenu-area" data-parent="resource">
                        <header>
                            <h6>Ícones</h6>
                            <p>Bem vindo, {{ Auth::user()->name }}.</p>
                        </header>
                        <ul class="childNav">
                            <li class="nav-item"><a href="{{ route('resource.index') }}"><i class="nav-icon i-Data-Upload"></i><span class="item-name">Ícones</span></a></li>
                            <li class="nav-item"><a href="{{ route('resource.create') }}"><i class="nav-icon i-Split-Horizontal-2-Window"></i><span class="item-name">Adicionar Ícone</span></a></li>
                        </ul>
                    </div>
                    <div class="submenu-area" data-parent="sessions">
                        <header>
                            <h6>Session Pages</h6>
                            <p>Lorem ipsum dolor sit.</p>
                        </header>
                        <ul class="childNav">
                            <li class="nav-item"><a href="../sessions/signin.html"><i class="nav-icon i-Checked-User"></i><span class="item-name">Sign in</span></a></li>
                            <li class="nav-item"><a href="../sessions/signup.html"><i class="nav-icon i-Add-User"></i><span class="item-name">Sign up</span></a></li>
                            <li class="nav-item"><a href="../sessions/forgot.html"><i class="nav-icon i-Find-User"></i><span class="item-name">Forgot</span></a></li>
                        </ul>
                    </div>
                    <div class="submenu-area" data-parent="others">
                        <header>
                            <h6>Others</h6>
                            <p>Lorem ipsum dolor sit.</p>
                        </header>
                        <ul class="childNav" data-parent="">
                            <li class="nav-item"><a href="../sessions/not-found.html"><i class="nav-icon i-Error-404-Window"></i><span class="item-name">Not Found</span></a></li>
                            <li class="nav-item"><a href="user.profile.html"><i class="nav-icon i-Male"></i><span class="item-name">User Profile</span></a></li>
                            <li class="nav-item"><a href="blank.html"><i class="nav-icon i-File-Horizontal"></i><span class="item-name">Blank Page</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
