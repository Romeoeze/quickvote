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

                    <h4 class="text-muted text-center font-size-18"><b>Sign Up</b></h4>

                    <div class="p-3">

                        <x-auth-validation-errors class="mb-4" style="color:red !important;"
                            :errors="$errors" />
                        <form class="form-horizontal mt-3" method="POST" action="{{ route('register') }}">

                            @csrf

                            <div class="form-group mb-3 row">
                                <label for="name">Name</label>
                                <div class="col-12">
                                    <input id="name" class="form-control" type="text" name="name"
                                        value="{{ old('name') }}" required autofocus />
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <label for="email">Email</label>
                                <div class="col-12">
                                    <input id="email" class="form-control" type="email" name="email"
                                        value="{{ old('email') }}" required autofocus />
                                </div>
                            </div>


                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <label for="phonenumber">Phone Number</label>
                                    <input id="phonenumber" class="form-control" type="text" name="phonenumber"
                                        value="{{ old('phonenumber') }}" required autofocus />
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-12">

                                    <label for="password">Password</label>
                                    <input id="password" class="form-control" type="password" name="password" required
                                        autocomplete="new-password" />
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <label for="password_confirmation">Confirm Password</label>

                                    <input id="password_confirmation" type="password" name="password_confirmation"
                                        class="form-control" required />
                                </div>
                            </div>



                            <div class="col-12">
                                <button class="btn btn-warning w-100 waves-effect waves-light"
                                    type="submit">Register</button>
                            </div>



                        </form><br>
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered? Sign In Here') }}
                        </a>

                    </div>
                    <!-- end -->
                </div>
                <!-- end cardbody -->
                <a href="/" class="text-center"> <button type="button"
                        class="btn btn-dark w-xs waves-effect waves-light"><i
                            class="ri-arrow-left-line align-middle ms-2"></i>
                        Back toHomepage
                    </button></a><br><br><br>
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















{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            <!-- PhoneNumber -->
            <div class="mt-4">
                <x-label for="phonenumber" :value="__('Phone Number')" />

                <x-input id="phonenumber" class="block mt-1 w-full" type="text" name="phonenumber" :value="old('phonenumber')" required autofocus />
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
