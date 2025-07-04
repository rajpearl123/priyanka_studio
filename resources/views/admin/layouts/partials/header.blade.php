@php $websiteSetting = App\Models\WebsiteSetting::first(); @endphp
@php $admin_logo = Auth::guard('admin')->user()->profile; @endphp
<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{route('admin.dashboard')}}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ $websiteSetting->header_logo ? asset('assets/images/logo/' . $websiteSetting->header_logo) : asset('assets/images/logo/logo.jpg') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ $websiteSetting->header_logo ? asset('assets/images/logo/' . $websiteSetting->header_logo) : asset('assets/images/logo/logo.jpg') }}" alt="" height="17">
                    </span>
                </a>

                <a href="{{route('admin.dashboard')}}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ $websiteSetting->header_logo ? asset('assets/images/logo/' . $websiteSetting->header_logo) : asset('assets/images/logo/logo.jpg') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ $websiteSetting->header_logo ? asset('assets/images/logo/' . $websiteSetting->header_logo) : asset('assets/images/logo/logo.jpg') }}" alt="" height="60">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->
            {{-- <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="bx bx-search-alt"></span>
                </div>
            </form> --}}
        </div>

        <div class="d-flex">
            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">
                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                    <i class="bx bx-fullscreen"></i>
                </button>
            </div>

            <!-- Profile Dropdown -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-profile-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{asset('assets/images/admin/'.$admin_logo)}}"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{Auth::guard('admin')->user()->name}}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                {{-- <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{route('admin.profile_list')}}"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">View Profile</span></a>
                    <a class="dropdown-item" href="{{route('admin.profile')}}"><i class="bx bx-edit font-size-16 align-middle me-1"></i> <span key="t-edit-profile">Edit Profile</span></a>
                </div> --}}
            </div>

            <!-- Logout Dropdown -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-logout-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-power-off font-size-16 text-danger"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item text-danger" href="{{route('admin.logout')}}"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                </div>
            </div>
        </div>
    </div>
</header>