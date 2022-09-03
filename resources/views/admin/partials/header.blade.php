@php
$user = Auth::user()->id;
$profile_data = App\Models\User::find($user);
@endphp


<header id="page-topbar">

    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ url('/') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('logo/logo.png') }}" alt="logo-sm" height="40">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('logo/logo.png') }}" alt="logo-dark" height="40">
                    </span>
                </a>

                <a href="{{ url('/') }}" class="logo logo-light" target='_blank'>
                    <span class="logo-sm">
                        <img src="{{ asset('logo/logo.png') }}" alt="logo-sm-light" height="40">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('logo/logo.png') }}" alt="logo-light" height="40">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="ri-menu-2-line align-middle"></i>
            </button>



            <div class="dropdown dropdown-mega d-none d-lg-block ms-2">


            </div>
        </div>

        <div class="d-flex">







            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="ri-fullscreen-line"></i>
                </button>
            </div>


            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user"
                        src="{{ !empty($profile_data->profileimage)
                            ? url('/uploads/admin_images/' . $profile_data->profileimage)
                            : url('/backend/assets/images/no_image.jpg') }}"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1">
                        @if ($profile_data)
                            {{ $profile_data->name }}
                        @endif
                    </span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{ route('admin.profile') }}"><i
                            class="ri-user-line align-middle me-1"></i> Profile</a>
                    <a class="dropdown-item" href="{{ route('change.password') }}"><i
                            class="ri-wallet-2-line align-middle me-1"></i> Change Password</a>
                    <a class="dropdown-item text-danger" href="{{ route('admin.logout') }}"><i
                            class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                </div>
            </div>


        </div>
    </div>
</header>
