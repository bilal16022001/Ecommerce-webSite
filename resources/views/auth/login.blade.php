<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Nest Dashboard</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg" />
        <!-- Template CSS -->
        <link href="assets/dashboard/css/main.css?v=1.1" rel="stylesheet" type="text/css" />
    </head>
    @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
   @endif


    <body>


        <main>
            <section class="content-main mt-80 mb-80">
                <div class="card mx-auto card-login">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Sign in</h4>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <input class="form-control" placeholder="Username or email" name="email" type="text" value="{{ __('email') }}" />
                            </div>
                            <!-- form-group// -->
                            <div class="mb-3">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="{{ __('Password') }}" />
                            </div>
                            <!-- form-group// -->
                            <div class="mb-3">
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="float-end font-sm text-muted">
                                    {{ __('Forgot your password?') }}
                                 </a>
                                 @endif
                                <label class="form-check">
                                    <input type="checkbox" class="form-check-input" checked="" />
                                    <span class="form-check-label">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                            <!-- form-group form-check .// -->
                            <div class="mb-4">
                                <button type="submit" class="btn btn-primary w-100">{{ __('Log in') }}</button>
                            </div>
                            <!-- form-group// -->
                        </form>
                        <p class="text-center mb-4">Don't have account? <a href="{{route('register')}}">Sign up</a></p>
                    </div>
                </div>
            </section>
            <footer class="main-footer text-center">
                <p class="font-xs">
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    &copy; Nest - HTML Ecommerce Template .
                </p>
                <p class="font-xs mb-30">All rights reserved</p>
            </footer>
        </main>
        <script src="assets/dashboard/js/vendors/jquery-3.6.0.min.js"></script>
        <script src="assets/dashboard/js/vendors/bootstrap.bundle.min.js"></script>
        <script src="assets/dashboard/js/vendors/jquery.fullscreen.min.js"></script>
        <!-- Main Script -->
        <script src="assets/dashborad/js/main.js?v=1.1" type="text/javascript"></script>
    </body>
</html>
