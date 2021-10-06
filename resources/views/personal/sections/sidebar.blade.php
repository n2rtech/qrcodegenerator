<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <!-- LOGO -->
    <a href="{{route('personal.dashboard')}}" class="logo text-center logo-light">
        {{-- <span class="logo-lg">
            <img src="{{asset('assets/images/logo.png')}}" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{asset('assets/images/logo_sm.png')}}" alt="" height="16">
        </span> --}}
        <span class="logo-lg">
            <img src="{{asset('assets/images/logo.jpg')}}" alt="Logo">
        </span>
        <span class="logo-sm">
            <img src="{{asset('assets/images/logo.jpg')}}" alt="Logo">
        </span>
    </a>

    <!-- LOGO -->
    <a href="{{route('personal.dashboard')}}" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{asset('assets/images/logo_sm_dark.png')}}" alt="" height="16">
        </span>
    </a>

    <div class="h-100" id="left-side-menu-container" data-simplebar>

        <!--- Sidemenu -->
        <ul class="metismenu side-nav">

            <li class="side-nav-item">
                <a href="{{route('personal.dashboard')}}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboard </span>
                </a>

            </li>

         <li class="side-nav-item">
                <a href="{{route('personal.enquiries.index')}}" class="side-nav-link">
                    <i class="mdi mdi-bell"></i>
                    <span> Enquires </span>
                </a>

            </li>


        <li class="side-nav-item">
            <a href="javascript: void(0);" class="side-nav-link">
                <i class="mdi mdi-tools"></i>
                <span> Settings </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-second-level" aria-expanded="false">
                <li>
                    <a href="{{route('personal.my-account.edit', Auth::User()->id)}}">My Account</a>
                </li>
                <li>
                    <a href="{{route('personal.password.form')}}">Change Password</a>
                </li>
            </ul>
        </li>
    </ul>

    <!-- Help Box -->
    <div class="help-box text-white text-center">
        <a  href="{{ route('logout') }}" class="btn btn-outline-light btn-sm"
        onclick="event.preventDefault(); document.getElementById('sidebar-logout-form').submit();">Logout</a>
        <form id="sidebar-logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
    <!-- end Help Box -->
    <!-- End Sidebar -->

    <div class="clearfix"></div>

</div>
<!-- Sidebar -left -->

</div>
        <!-- ========== Left Sidebar End ============ -->
