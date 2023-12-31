                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <ul class="list-unstyled topbar-right-menu float-right mb-0">
                                <li class="dropdown notification-list">
                                    <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <span class="account-user-avatar">
                                        @isset(Auth::guard('admin')->user()->avatar)
                                        <img src="{{ asset('/storage/uploads/admin/'.Auth::guard('admin')->user()->avatar) }}" alt="user-image" class="rounded-circle">
                                        @else
                                        <img src="{{asset('assets/images/avatar.jpg')}}" alt="user-image" class="rounded-circle">
                                        @endisset
                                    </span>
                                    <span>
                                        <span class="account-user-name">{{Auth::guard('admin')->user()->name}}</span>
                                        <span class="account-position">Founder</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="{{route('admin.my-account.edit', Auth::guard('admin')->id())}}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle mr-1"></i>
                                        <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="{{ route('logout') }}" class="dropdown-item notify-item"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <form id="logout-form" action="{{ 'App\Admin' == Auth::getProvider()->getModel() ? route('admin.logout') : route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                    <i class="mdi mdi-logout mr-1"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>
                    <button class="button-menu-mobile open-left disable-btn">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </div>
                    <!-- end Topbar -->
