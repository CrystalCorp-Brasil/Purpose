                    <div class="header-part-right">
@if (Auth::user()->rule == 'admin')
                        <div class="dropdown">
                            <i class="i-Safe-Box text-muted header-icon" role="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                            <div class="dropdown-menu dm-menu p-0 mt-3" aria-labelledby="dropdownMenuButton">
                                <div class="menu-icon-grid">
                                    <a href="#"><i class="i-Shop-4"></i> Home</a>
                                    <a href="#"><i class="i-Library"></i> UI Kits</a>
                                    <a href="#"><i class="i-Drop"></i> Apps</a>
                                    <a href="#"><i class="i-File-Clipboard-File--Text"></i> Forms</a>
                                    <a href="#"><i class="i-Checked-User"></i> Sessions</a>
                                    <a href="#"><i class="i-Ambulance"></i> Support</a>
                                </div>
                            </div>
                        </div>
@endif
                        <div class="dropdown">
                            <div class="badge-top-container" role="button" id="dropdownNotification" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="badge bg-primary text-warning">3</span><i class="i-Bell text-muted header-icon"></i></div>
                            <div class="dropdown-menu dropdown-menu-right notification-dropdown rtl-ps-none mt-3" aria-labelledby="dropdownNotification" data-perfect-scrollbar data-suppress-scroll-x="true">
                                <div class="dropdown-item d-flex">
                                    <div class="notification-icon"><i class="i-Speach-Bubble-6 text-primary me-1"></i></div>
                                    <div class="notification-details flex-grow-1">
                                        <p class="m-0 d-flex align-items-center">
                                            <span>New message</span>
                                            <span class="badge rounded-pill text-bg-primary ms-1 me-1">new</span>
                                            <span class="flex-grow-1"></span>
                                            <span class="text-small text-muted ms-auto">10 sec ago</span>
                                        </p>
                                        <p class="text-small text-muted m-0">James: Hey! are you busy?</p>
                                    </div>
                                </div>
                                <div class="dropdown-item d-flex">
                                    <div class="notification-icon"><i class="i-Receipt-3 text-success me-1"></i></div>
                                    <div class="notification-details flex-grow-1">
                                        <p class="m-0 d-flex align-items-center">
                                            <span>New order received</span>
                                            <span class="badge rounded-pill text-bg-success ms-1 me-1">new</span>
                                            <span class="flex-grow-1"></span>
                                            <span class="text-small text-muted ms-auto">2 hours ago</span>
                                        </p>
                                        <p class="text-small text-muted m-0">1 Headphone, 3 iPhone x</p>
                                    </div>
                                </div>
                                <div class="dropdown-item d-flex">
                                    <div class="notification-icon"><i class="i-Empty-Box text-danger me-1"></i></div>
                                    <div class="notification-details flex-grow-1">
                                        <p class="m-0 d-flex align-items-center">
                                            <span>Product out of stock</span>
                                            <span class="badge rounded-pill text-bg-danger ms-1 me-1">3</span>
                                            <span class="flex-grow-1"></span><span class="text-small text-muted ms-auto">10 hours ago</span>
                                        </p>
                                        <p class="text-small text-muted m-0">Headphone E67, R98, XL90, Q77</p>
                                    </div>
                                </div>
                                <div class="dropdown-item d-flex">
                                    <div class="notification-icon"><i class="i-Data-Power text-success me-1"></i></div>
                                    <div class="notification-details flex-grow-1">
                                        <p class="m-0 d-flex align-items-center">
                                            <span>Server Up!</span>
                                            <span class="badge rounded-pill text-bg-success ms-1 me-1">3</span>
                                            <span class="flex-grow-1"></span>
                                            <span class="text-small text-muted ms-auto">14 hours ago</span>
                                        </p>
                                        <p class="text-small text-muted m-0">Server rebooted successfully</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown">
                            <div class="user col align-self-end bg-white rounded-pill">
                                <img src="@if(Auth::user()->image == null){{ asset('images/adm/user.png') }}@else{{ asset(Auth::user()->image) }}@endif" alt="{{ Auth::user()->name }}" id="userDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"/>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                    <div class="dropdown-header"><i class="i-Lock-User me-1"></i> {{ Auth::user()->name }}</div>
                                    <a href="{{ route('home') }}" class="dropdown-item"><i class="far fa-home-lg-alt"></i><span class="ms-2"> Página Inicial</span></a>
@if (Auth::user()->rule == 'admin')
                                    <a href="" class="dropdown-item"><i class="far fa-sign-out-alt"></i><span class="ml-2"> Billing history</span></a>
@endif
                                    <div class="dropdown-item">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <button class="btn p-0 text-font-16" type="submit"><i class="far fa-sign-out-alt"></i><span class="ml-2"> Encerrar</span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
