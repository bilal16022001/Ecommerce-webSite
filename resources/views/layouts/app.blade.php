

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
        <link rel="shortcut icon" type="image/x-icon" href="http://127.0.0.1:8000/assets/dashboard/imgs/theme/favicon.svg" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <!-- Template CSS -->
        <link href="http://127.0.0.1:8000/assets/dashboard/css/main.css?v=1.1" rel="stylesheet" type="text/css" />
        @livewireStyles
    </head>

    <body>
        <div class="screen-overlay"></div>
        <aside class="navbar-aside" id="offcanvas_aside">
            <div class="aside-top">
                <a href="index.html" class="brand-wrap">
                    <img src="http://127.0.0.1:8000/assets/dashboard/imgs/theme/logo.svg" class="logo" alt="Nest Dashboard" />
                </a>
                <div>
                    <button class="btn btn-icon btn-aside-minimize"><i class="text-muted material-icons md-menu_open"></i></button>
                </div>
            </div>
            <nav>
                <ul class="menu-aside">
                    <li class="menu-item active">
                        <a class="menu-link" href="index.html">
                            <i class="icon material-icons md-home"></i>
                            <span class="text">Dashboard</span>
                        </a>
                    </li>
                    <li class="menu-item has-submenu">
                        <a class="menu-link" href="{{route('Products')}}">
                            <i class="icon material-icons md-shopping_bag"></i>
                            <span class="text">Products</span>
                        </a>

                        <div class="submenu">
                            <a class="nav-item" href="{{route('Products')}}">

                                PRODUCTS
                             </a>
                            <a class="nav-item" href="{{route('AddProducts')}}">

                               ADD PRODUCT
                            </a>
                        </div>

                    </li>

                    <li class="">
                        <a class="menu-link" href="{{route('category')}}">
                            <i class="icon material-icons md-shopping_bag"></i>
                            <span class="text">Category</span>
                        </a>
                    </li>


                    <li class="menu-item has-submenu">
                        <a class="menu-link" href="{{route('Products')}}">
                            <i class="icon material-icons md-shopping_bag"></i>
                            <span class="text">Sub Category</span>
                        </a>

                        <div class="submenu">
                            <a class="nav-item" href="{{route('Products')}}">

                                Sub Ctegory
                             </a>
                            <a class="nav-item" href="{{route('AddProducts')}}">

                               ADD Sub Category
                            </a>
                        </div>

                    </li>




                    <li class="">
                        <a class="menu-link" href="{{route('Orders')}}">
                            <i class="icon material-icons md-shopping_cart"></i>
                            <span class="text">Orders</span>
                        </a>

                    </li>



                    <li class="">
                        <a class="menu-link" href="page-form-product-1.html">
                            <i class="icon material-icons md-add_box"></i>
                            <span class="text">Report</span>
                        </a>


                    </li>



                    <li class="">
                        <a class="menu-link" href="page-form-product-1.html">
                            <i class="icon material-icons md-add_box"></i>
                            <span class="text">Search</span>
                        </a>

                    </li>


                    <li class="">
                        <a class="menu-link" href="#">
                            <i class="icon material-icons md-person"></i>
                            <span class="text">Account</span>
                        </a>

                    </li>



                </ul>
                <hr />

                <br />
                <br />
            </nav>
        </aside>

        <main class="main-wrap">
            <header class="main-header navbar">
                <div class="col-search">

                </div>
                <div class="col-nav">
                    <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"><i class="material-icons md-apps"></i></button>
                    <ul class="nav">



                        <li class="dropdown nav-item">
                            <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownAccount" aria-expanded="false"> <img class="img-xs rounded-circle" src="http://127.0.0.1:8000/assets/dashboard/imgs/people/avatar-2.png" alt="User" /></a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount">
                                <a class="dropdown-item" href="#"><i class="material-icons md-perm_identity"></i>Edit Profile</a>
                                <a class="dropdown-item" href="#"><i class="material-icons md-settings"></i>Account Settings</a>
                                <a class="dropdown-item" href="#"><i class="material-icons md-account_balance_wallet"></i>Wallet</a>
                                <a class="dropdown-item" href="#"><i class="material-icons md-receipt"></i>Billing</a>
                                <a class="dropdown-item" href="#"><i class="material-icons md-help_outline"></i>Help center</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"><i class="material-icons md-exit_to_app"></i>Logout</a>
                            </div>

                        </li>
                    </ul>
                </div>
            </header>
            {{ $slot }}
            <!-- content-main end// -->

        </main>
        <script src="{{asset('assets/dashboard/js/vendors/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('assets/dashboard/js/vendors/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/dashboard/js/vendors/select2.min.js')}}"></script>
        <script src="{{asset('assets/dashboard/js/vendors/perfect-scrollbar.js')}}"></script>
        <script src="{{asset('assets/dashboard/js/vendors/jquery.fullscreen.min.js')}}"></script>
        <script src="{{asset('assets/dashboard/js/vendors/chart.js')}}"></script>
        <!-- Main Script -->
        <script src="{{asset('assets//dashboard/js/main.js?v=1.1')}}" type="text/javascript"></script>
        <script src="{{asset('assets/js/custom-chart.js')}}" type="text/javascript"></script>
        {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

        <script>
            window.livewire.on('deleteproduct', function(){
                document.getElementById("exampleModal").modal('hide');
            });
        </script>
        @livewireScripts

    </body>
</html>
