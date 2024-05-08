<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="{{ asset('admin/assets') }}/images/logo.svg"
                alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="index.html"><img
                src="{{ asset('admin/assets') }}/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="{{ asset('assets') }}/img/logo2.jpg" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
                        <span>Gold Member</span>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        {{-- Add Doctor --}}
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('doctor.create') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Add Doctors</span>
            </a>
        </li>
        {{-- View All Doctors --}}
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('doctor.all') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">All Doctors</span>
            </a>
        </li>
        {{-- View All Appointments --}}
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('doctor.appointments') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">All Appointments</span>
            </a>
        </li>
    </ul>
</nav>
