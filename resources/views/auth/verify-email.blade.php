<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Register | QuickVote - Admin & Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('logo/logo.png') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->

    <link href="{{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body class="auth-body-bg">
    <div class="bg-overlay"></div>
    <div class="wrapper-page">
        <div class="container-fluid p-0">
            <div class="card">
                <div class="card-body">

                    <div class="text-center mt-4">
                        <div class="mb-3">
                            <a href="{{ url('/') }}" class="auth-logo">
                                <img src="{{ asset('logo/logo.png') }}" height="90" class="logo-dark mx-auto" alt="">
                                <img src="{{ asset('logo/logo.png') }}" height="90" class="logo-light mx-auto" alt="">
                            </a>
                        </div>
                    </div>

                    <h4 class="text-muted text-center font-size-18"><b>Verify Email</b></h4>

                    <div class="p-3">

                        <x-auth-validation-errors class="mb-4" style="color:red !important;"
                            :errors="$errors" />
                        <form class="form-horizontal mt-3" method="POST" action="{{ route('register') }}">
                            <div class="mb-4 text-sm text-gray-600">
                                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                            </div>

                            @if (session('status') == 'verification-link-sent')
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                </div>
                            @endif

                            <div class="mt-4 flex items-center justify-between">
                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf

                                    <div>



                                        <center><button class="btn btn-info text-center" type="submit">Resend
                                                Verification Email
                                                <i class="ri-mail-send-line align-middle ms-2"></i>

                                            </button></center>
                                    </div>
                                </form><br>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <center><button class="btn btn-danger text-center mt-10" type="submit">Log Out
                                            <i class="ri-shut-down-line align-middle ms-2"></i>
                                        </button></center>

                                </form>
                            </div>

                    </div>
                    <!-- end -->
                </div>
                <!-- end cardbody -->

            </div>
            <!-- end card -->
        </div>
        <!-- end container -->
    </div>
    <!-- end -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>

    <script src="{{ asset('backend/assets/js/app.js') }}"></script>

</body>

</html>
