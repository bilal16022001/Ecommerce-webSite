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
        <link rel="shortcut icon" type="image/x-icon" href="assets/dashboard/imgs/theme/favicon.svg" />
        <!-- Template CSS -->
        <link href="assets/dashboard/css/main.css?v=1.1" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <main>
            <section class="content-main mt-80 mb-80">
                <div class="card mx-auto card-login">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Create an Account</h4>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" value="{{ __('Name') }}" >Name</label>
                                <input class="form-control" placeholder="Your Name"  name="name"  type="text" />
                                @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <!-- form-group// -->
                            <div class="mb-3">
                                <label class="form-label" value="{{ __('Email') }}">Email</label>
                                <input class="form-control" placeholder="Your email" name="email"  type="text" />
                                @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                             <!-- form-group// -->
                            <div class="mb-3">
                                <label class="form-label" value="{{ __('Password') }}">Password</label>
                                <input class="form-control" placeholder="Password"  name="password" type="password" />
                                @error('password')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                            <!-- form-group// -->
                            <div class="mb-3">
                                <label class="form-label" value="{{ __('Confirm Password') }}">Confirm password</label>
                                <input class="form-control" placeholder="Confirm Password" name="password_confirmation" type="password" />
                                @error('password_confirmation')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                            <!-- form-group// -->
                        
        
                            <!-- form-group  .// -->
                            <div class="mb-4">
                                <button type="submit" class="btn btn-primary w-100">{{ __('Register') }}</button>
                            </div>
                        </form>
                            <!-- form-group// -->
                        <p class="text-center mb-2">Already have an account? <a href="{{ route('login') }}">{{ __('Already registered?') }}</a></p>
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
        <script src="assets/dashboard/js/main.js?v=1.1" type="text/javascript"></script>
    </body>
</html> 
