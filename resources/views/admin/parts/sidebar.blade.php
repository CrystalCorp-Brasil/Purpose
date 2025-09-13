            <div class="side-content-wrap">
                <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
                    <ul class="navigation-left">
                        <li class="nav-item active" data-item="dashboard">
                            <a class="nav-item-hold" href="#"><i class="nav-icon i-Bar-Chart"></i><span class="nav-text">Dashboard</span></a>
                            <div class="triangle"></div>
                        </li>
                        <li class="nav-item" data-item="resource">
                            <a class="nav-item-hold" href="#"><i class="nav-icon i-Library"></i><span class="nav-text">Ícones</span></a>
                            <div class="triangle"></div>
                        </li>
@if (Auth::user()->rule == 'admin')
                        <li class="nav-item" data-item="extrakits">
                            <a class="nav-item-hold" href="#"><i class="nav-icon i-Suitcase"></i><span class="nav-text">Extra kits</span></a>
                            <div class="triangle"></div>
                        </li>
                        <li class="nav-item" data-item="apps">
                            <a class="nav-item-hold" href="#"><i class="nav-icon i-Computer-Secure"></i><span class="nav-text">Apps</span></a>
                            <div class="triangle"></div>
                        </li>
                        <li class="nav-item" data-item="forms">
                            <a class="nav-item-hold" href="#"><i class="nav-icon i-File-Clipboard-File--Text"></i><span class="nav-text">Forms</span></a>
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
                    <header><a href="{{ route('dashboard') }}"><div class="logo"><img class="logo-img" src="{{ asset('images/crystalcorp.png') }}" alt="CrystalCorp" /></div></a></header>
                    <div class="submenu-area" data-parent="dashboard">
                        <header>
                            <h6>Dashboard</h6>
                            <p>Bem vindo, {{ Auth::user()->name }}.</p>
                        </header>
                        <ul class="childNav">
                            <li class="nav-item"><a href="{{ route('image.upload') }}"><i class="nav-icon i-Clock-4"></i><span class="item-name">Adicionar Imagens</span></a></li>
                            <li class="nav-item"><a href="{{ route('profile.edit') }}"><i class="nav-icon i-Pen-3"></i><span class="item-name">Editar Perfil</span></a></li>
                            <li class="nav-item"><a href="{{ route('profile.delete') }}"><i class="nav-icon i-Remove-User"></i><span class="item-name">Excluir Conta</span></a></li>
                            <li class="nav-item"><a href="dashboard4.html"><i class="nav-icon i-Clock"></i><span class="item-name">Version 4</span></a></li>
                        </ul>
                    </div>
@if (Auth::user()->rule == 'admin')
                    <div class="submenu-area" data-parent="forms">
                        <header>
                            <h6>Forms</h6>
                            <p>Lorem ipsum dolor sit.</p>
                        </header>
                        <ul class="childNav">
                            <li class="nav-item"><a href="form.basic.html"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Basic Elements</span></a></li>
                            <li class="nav-item"><a href="form.layouts.html"><i class="nav-icon i-Split-Vertical"></i><span class="item-name">Form Layouts</span></a></li>
                            <li class="nav-item"><a href="form.input.group.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Input Groups</span></a></li>
                            <li class="nav-item"><a href="form.validation.html"><i class="nav-icon i-Close-Window"></i><span class="item-name">Form Validation</span></a></li>
                            <li class="nav-item"><a href="smart.wizard.html"><i class="nav-icon i-Width-Window"></i><span class="item-name">Smart Wizard</span></a></li>
                            <li class="nav-item"><a href="tag.input.html"><i class="nav-icon i-Tag-2"></i><span class="item-name">Tag Input</span></a></li>
                            <li class="nav-item"><a href="editor.html"><i class="nav-icon i-Pen-2"></i><span class="item-name">Rich Editor</span></a></li>
                        </ul>
                    </div>
                    <div class="submenu-area" data-parent="apps">
                        <header>
                            <h6>Apps</h6>
                            <p>Lorem ipsum dolor sit.</p>
                        </header>
                        <ul class="childNav">
                            <li class="nav-item"><a href="invoice.html"><i class="nav-icon i-Add-File"></i><span class="item-name">Invoice</span></a></li>
                            <li class="nav-item"><a href="inbox.html"><i class="nav-icon i-Email"></i><span class="item-name">Inbox</span></a></li>
                            <li class="nav-item"><a href="chat.html"><i class="nav-icon i-Speach-Bubble-3"></i><span class="item-name">Chat</span></a></li>
                        </ul>
                    </div>
                    <div class="submenu-area" data-parent="extrakits">
                        <header>
                            <h6>Extra Kits</h6>
                            <p>Lorem ipsum dolor sit.</p>
                        </header>
                        <ul class="childNav">
                            <li class="nav-item"><a href="image.cropper.html"><i class="nav-icon i-Crop-2"></i><span class="item-name">Image Cropper</span></a></li>
                            <li class="nav-item"><a href="loaders.html"><i class="nav-icon i-Loading-3"></i><span class="item-name">Loaders</span></a></li>
                            <li class="nav-item"><a href="ladda.button.html"><i class="nav-icon i-Loading-2"></i><span class="item-name">Ladda Buttons</span></a></li>
                            <li class="nav-item"><a href="toastr.html"><i class="nav-icon i-Bell"></i><span class="item-name">Toastr</span></a></li>
                            <li class="nav-item"><a href="sweet.alerts.html"><i class="nav-icon i-Approved-Window"></i><span class="item-name">Sweet Alerts</span></a></li>
                            <li class="nav-item"><a href="tour.html"><i class="nav-icon i-Plane"></i><span class="item-name">User Tour</span></a></li>
                            <li class="nav-item"><a href="upload.html"><i class="nav-icon i-Data-Upload"></i><span class="item-name">Upload</span></a></li>
                        </ul>
                    </div>
@endif
                    <div class="submenu-area" data-parent="resource">
                        <header>
                            <h6>Ícones</h6>
                            <p>Bem vindo, {{ Auth::user()->name }}.</p>
                        </header>
                        <ul class="childNav">
                            <li class="nav-item"><a href="{{ route('resource.index') }}"><i class="nav-icon i-Data-Upload"></i><span class="item-name">Ícones</span></a></li>
@if (Auth::user()->rule == 'admin')
                            <li class="nav-item"><a href="{{ route('resource.create') }}"><i class="nav-icon i-Split-Horizontal-2-Window"></i><span class="item-name">Adicionar Ícone</span></a></li>
@endif
                        </ul>
                    </div>
@if (Auth::user()->rule == 'admin')
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
@endif
                </div>
            </div>
