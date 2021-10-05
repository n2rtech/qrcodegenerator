<div class="row">
    <header>
        <nav class="navbar">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Enquiries</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="#">Individuals</a></li>
                    <li><a href="#">Enquiries</a></li>
                    <li><a href="#">Why Enquiries ?</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @guest
                        <a href="{{ route('login') }}" class="btn btn-default">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-primary">Get Started</a>
                    @endguest
                    @auth
                    <li>
                        <img src="{{Auth::user()->profile_picture}}" alt="user-image"class="rounded-circle" width="60" height="60">
                    </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false">
                                    @role('Business')
                                        <p>{{ Auth::user()->business_name }}</p>
                                    @else
                                        <p style="margin-left:5px;">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</p>
                                    @endrole
                            </a>
                            <ul class="dropdown-menu">
                                @role('Business')
                                <li><a href="{{ route('business.dashboard') }}">Dashboard</a></li>
                                <li><a href="{{ route('business.my-account.edit', Auth::User()->id) }}">My Profile</a></li>
                                @else
                                <li><a href="{{ route('personal.dashboard') }}">Dashboard</a></li>
                                <li><a href="{{ route('personal.my-account.edit', Auth::User()->id) }}">My Profile</a></li>
                                @endrole
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </header>
</div>
