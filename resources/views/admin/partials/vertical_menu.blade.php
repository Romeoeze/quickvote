@php
$user = Auth::user()->id;
$profile_data = App\Models\User::find($user);

if (Auth::user()->Role == 'Vendor') {
    $user = Auth::user()->id;
    $vendorsingle = App\Models\Vendor::where('user_id', $user)->first();
}

@endphp


<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">

                <a href="{{ route('admin.profile') }}"><img
                        src="{{ !empty($profile_data->profileimage)
                            ? url('/uploads/admin_images/' . $profile_data->profileimage)
                            : url('/backend/assets/images/no_image.jpg') }}"
                        alt="" class="avatar-md rounded-circle"></a>
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{ Auth::user()->name }}</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i>
                    Online</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">


                @if (Auth::user()->Role == 'Vendor')
                    <li>
                        <a href="{{ route('contest.create') }}" class="waves-effect">
                            <i class="ri-dashboard-line"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                @endif


                @if (Auth::user()->Role == 'Admin')
                    <li>
                        <a href="/dashboard" class="waves-effect">
                            <i class="ri-dashboard-line"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                @endif

                @if (Auth::user()->Role == 'Admin')
                    <li class="menu-title">Manage Users</li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="ri-account-circle-line"></i>
                            <span>Users</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('admin.users.create') }}">Add User <i
                                        class="ri-user-add-line"></i></a></li>
                            <li><a href="{{ route('admin.users') }}">All users</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">Manage Brand Logos</li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="ri-mail-send-line"></i>
                            <span>Brands</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('brands.create') }}">Create Brand</a></li>
                            <li><a href="{{ route('brands.show') }}">All brands</a></li>

                        </ul>
                    </li>

                    <li class="menu-title">Manage Contests</li>


                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="ri-mail-send-line"></i>
                            <span>Contests</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('admin.contest') }}">All Contests</a></li>


                        </ul>
                    </li>
                @endif


                @if (Auth::user()->Role == 'Vendor')
                    <li class="menu-title">Vendor menu</li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="ri-account-circle-line"></i>
                            <span>Manage Vendor Profile</span>
                        </a>




                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('vendorprofile.show', $vendorsingle->id) }}">View Profile <i
                                        class="ri-eye-fill"></i></a>
                            </li>
                            <li><a href="{{ route('vendor.edit', $vendorsingle->id) }}">Edit Profile <i
                                        class="ri-edit-box-line"></i></a></li>

                        </ul>
                    </li>
                @endif






                <li class="menu-title"><i class="ri-arrow-down-s-fill"></i><span
                        style="color:black;font-size:1.5em; color:rgb(7, 97, 15) !important;">PAID
                        CONTESTS</span> <i class="ri-arrow-down-s-fill"></i></li>


                <li class="menu-title">SINGLE CATEGORY</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-zoom-in-line"></i>
                        <span>Explore Contests</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('contest.create') }}"><i class="ri-play-circle-line"></i> Create
                                Contest</a></li>


                        @if (Auth::user()->Role == 'Vendor')
                            @php
                                $vendor = App\Models\Vendor::where('user_id', $user)->first();
                                $vendor_id = $vendor->id;
                                $contests = App\Models\Contest::with('vendor')
                                    ->where('vendor_id', $vendor_id)
                                    ->get();
                            @endphp

                            @if (count($contests) > 0)
                                <li>
                                    <a href="{{ route('contest.all') }}" class="waves-effect">
                                        <i class="ri-dashboard-line"></i><span
                                            class="badge rounded-pill bg-success float-end">{{ count($contests) }}</span>
                                        <span>My Contests</span>
                                    </a>
                                </li>
                            @endif
                            <li>
                                <a href="{{ route('contestant.add') }}" class="waves-effect">
                                    <i class="ri-file-add-fill"></i>
                                    <span>Add Contestants</span>
                                </a>
                            </li>
                        @endif

                    </ul>
                </li>





                <li class="menu-title">MULTI-CATEGORY</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-zoom-in-line"></i>
                        <span>Explore Contests</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('contest.create') }}"><i class="ri-play-circle-line"></i> Create
                                Contest</a></li>


                        {{-- @if (Auth::user()->Role == 'Vendor')
                            @php
                                $vendor = App\Models\Vendor::where('user_id', $user)->first();
                                $vendor_id = $vendor->id;
                                $multicontests = App\Models\Multicontest::with('vendor')
                                    ->where('vendor_id', $vendor_id)
                                    ->get();
                            @endphp
                            @if (count($multicontests) > 0)
                                <li>
                                    <a href="{{ route('multicontest.all') }}" class="waves-effect">
                                        <i class="ri-dashboard-line"></i><span
                                            class="badge rounded-pill bg-success float-end">{{ count($multicontests) }}</span>
                                        <span>My Contests</span>
                                    </a>
                                </li>
                            @endif 

                            <li>
                                <a href="{{ route('multicontestcategoryadd.all') }}" class="waves-effect">
                                    <i class="ri-list-check"></i>Contest Categories</span>
                                </a>
                            </li>




                            <li>
                                <a href="{{ route('multicontestant.add') }}" class="waves-effect">
                                    <i class="ri-file-add-fill"></i>
                                    <span>Add Contestants</span>
                                </a>
                            </li>
                        @endif --}}

                    </ul>
                </li>









                <li class="menu-title"><i class="ri-arrow-down-s-fill"></i><span
                        style="color:black;font-size:1.5em; color:rgb(150, 7, 7) !important;">FREE
                        CONTESTS</span> <i class="ri-arrow-down-s-fill"></i></li>

                <li class="menu-title">SINGLE CATEGORY FREE</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-zoom-in-line"></i>
                        <span>Explore Contests</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('contest.create') }}"><i class="ri-play-circle-line"></i> Create
                                Contest</a></li>


                        {{-- @if (Auth::user()->Role == 'Vendor')
                            @php
                                $vendor = App\Models\Vendor::where('user_id', $user)->first();
                                $vendor_id = $vendor->id;
                                $corporatesinglecontests = App\Models\CorporateSingleContest::with('vendor')
                                    ->where('vendor_id', $vendor_id)
                                    ->get();
                            @endphp
                             @if (count($corporatesinglecontests) > 0)
                                <li>
                                    <a href="{{ route('corporatesinglecontest.all') }}" class="waves-effect">
                                        <i class="ri-dashboard-line"></i><span
                                            class="badge rounded-pill bg-success float-end">{{ count($corporatesinglecontests) }}</span>
                                        <span>My Contests</span>
                                    </a>
                                </li>
                            @endif 


                            <li>
                                <a href="{{ route('corporatesinglecontestant.add') }}" class="waves-effect">
                                    <i class="ri-file-add-fill"></i>
                                    <span>Add Contestants</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('corporatesinglevoter.all') }}" class="waves-effect">
                                    <i class="ri-user-follow-line"></i>
                                    <span>Accredited Voters</span>
                                </a>
                            </li>
                        @endif --}}

                    </ul>
                </li>








                <li class="menu-title">MULTI-CATEGORY FREE</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-zoom-in-line"></i>
                        <span>Explore Contests</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('contest.create') }}"><i class="ri-play-circle-line"></i> Create
                                Contest</a></li>


                        {{-- @if (Auth::user()->Role == 'Vendor')
                            @php
                                $vendor = App\Models\Vendor::where('user_id', $user)->first();
                                $vendor_id = $vendor->id;
                                $multicontests = App\Models\CorporateMulticontest::with('vendor')
                                    ->where('vendor_id', $vendor_id)
                                    ->get();
                            @endphp

                             @if (count($multicontests) > 0)
                                <li>
                                    <a href="{{ route('corporatemulticontest.all') }}" class="waves-effect">
                                        <i class="ri-dashboard-line"></i><span
                                            class="badge rounded-pill bg-success float-end">{{ count($multicontests) }}</span>
                                        <span>My Contests</span>
                                    </a>
                                </li>
                            @endif 

                            <li>
                                <a href="{{ route('corporatemulticontestcategoryadd.all') }}" class="waves-effect">
                                    <i class="ri-list-check"></i>Contest Categories</span>
                                </a>
                            </li>




                            <li>
                                <a href="{{ route('corporatemulticontestant.add') }}" class="waves-effect">
                                    <i class="ri-file-add-fill"></i>
                                    <span>Add Contestants</span>
                                </a>
                            </li>


                            <li>
                                <a href="{{ route('corporatemultivoter.all') }}" class="waves-effect">
                                    <i class="ri-user-follow-line"></i>
                                    <span>Accredited Voters</span>
                                </a>
                            </li>
                        @endif --}}

                    </ul>
                </li>









                {{-- @if (Auth::user()->Role == 'Vendor')
                    <li class="menu-title">RESULTS</li>
                    @php
                        $vendor = App\Models\Vendor::where('user_id', $user)->first();
                        $vendor_id = $vendor->id;
                        $multicontests = App\Models\CorporateMulticontest::with('vendor')
                            ->where('vendor_id', $vendor_id)
                            ->get();
                    @endphp

                    <li>
                        <a href="{{ route('result.add') }}" class="waves-effect">
                            <i class="ri-line-chart-line"></i> Check Contest Results
                        </a>
                    </li>
                @endif --}}

                {{-- @if (Auth::user()->Role == 'Vendor')
                    <li class="menu-title">PAYOUT</li>
                    @php
                        $vendor = App\Models\Vendor::where('user_id', $user)->first();
                        $vendor_id = $vendor->id;
                        $multicontests = App\Models\CorporateMulticontest::with('vendor')
                            ->where('vendor_id', $vendor_id)
                            ->get();
                        $payouts = App\Models\RequestPayout::where('vendor_id', $vendor_id)->get();
                        
                    @endphp

                    <li>
                        <a href="{{ route('payout.add') }}" class="waves-effect" target="">
                            <i class="ri-money-dollar-circle-line"></i> Request Payout
                        </a>
                    </li>

                     @if (count($payouts) > 0)
                        <li>
                            <a href="{{ route('payout.all') }}" class="waves-effect">
                                <i class="ri-pie-chart-line"></i><span
                                    class="badge rounded-pill bg-success float-end">{{ count($payouts) }}</span>
                                <span>My Payouts</span>
                            </a>
                        </li>
                    @endif 
                @endif --}}




                <li>
                    <a href="/" class="waves-effect" target="_blank">
                        <i class="ri-global-line"></i>QuickVote Homepage
                    </a>
                </li>

        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
