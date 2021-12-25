<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote/layouts/crypto-ico-landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Aug 2021 01:33:17 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>ICO Landing | Skote - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- owl.carousel css -->
        <link rel="stylesheet" href="assets/libs/owl.carousel/assets/owl.carousel.min.css">

        <link rel="stylesheet" href="assets/libs/owl.carousel/assets/owl.theme.default.min.css">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-bs-spy="scroll" data-bs-target="#topnav-menu" data-bs-offset="60">

        <nav class="navbar navbar-expand-lg navigation fixed-top sticky">
            <div class="container">
                <a class="navbar-logo" href="index.html">
                    <img src="assets/images/logo-dark.png" alt="" height="19" class="logo logo-dark">
                    <img src="assets/images/logo-light.png" alt="" height="19" class="logo logo-light">
                </a>

                <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
              
                <div class="collapse navbar-collapse" id="topnav-menu-content">
                    <ul class="navbar-nav ms-auto" id="topnav-menu" >
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">Check Your Promotion Status</a>
                        </li>  
                    </ul>

                    <div class="my-2 ms-lg-2">
                        <a href="javascript: void(0);" class="btn btn-outline-success w-xs">Sign in</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- hero section start -->
        <section class="section hero-section bg-ico-hero" id="home">
            <div class="bg-overlay bg-primary"></div>
            <div class="container">
                <div class="row align-items-center"> 
                    <div class="col-lg-12 col-md-12 col-sm-10 ms-lg-auto">
                        <div class="card overflow-hidden mb-0 mt-5 mt-lg-0">
                            <div class="card-header text-center">
                                <h5 class="mb-0">Promotion Application Form</h5>
                            </div>
                            <div class="card-body">
                                <div class="text-center"> 
                                    <h5>Time left to Apply :</h5>
                                    <div class="mt-4">
                                        <div data-countdown="2022/1/30" class="counter-number ico-countdown"></div>
                                    </div>

                                   <form action="{{route('application')}}" method="post">
                                        @csrf
                                        <h3 class="mt-5">Enter your PFN to apply for promotion :</h3>

                                        <div class="mt-4">
                                            <center>
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <input id="price" name="pfn" type="number" placeholder="Please Enter Your PFN" class="form-control" value="{{old('pfn')}}" @error('pfn') style="border-color:#e64b4b;" @enderror>
                                                        @error('pfn')
                                                            <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                        @enderror
                                                    </div>
                                                </div>
                                            </center> 
                                            <button type="submit" class="btn btn-success w-md">Get Token</button>
                                        </div>
                                   </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- hero section end -->  

        <!-- Footer start -->
        <footer class="landing-footer">
            <div class="container">

                {{-- <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="mb-4 mb-lg-0">
                            <h5 class="mb-3 footer-list-title">Company</h5>
                            <ul class="list-unstyled footer-list-menu">
                                <li><a href="javascript: void(0);">About Us</a></li>
                                <li><a href="javascript: void(0);">Features</a></li>
                                <li><a href="javascript: void(0);">Team</a></li>
                                <li><a href="javascript: void(0);">News</a></li>
                                <li><a href="javascript: void(0);">FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="mb-4 mb-lg-0">
                            <h5 class="mb-3 footer-list-title">Resources</h5>
                            <ul class="list-unstyled footer-list-menu">
                                <li><a href="javascript: void(0);">Whitepaper</a></li>
                                <li><a href="javascript: void(0);">Token sales</a></li>
                                <li><a href="javascript: void(0);">Privacy Policy</a></li>
                                <li><a href="javascript: void(0);">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="mb-4 mb-lg-0">
                            <h5 class="mb-3 footer-list-title">Links</h5>
                            <ul class="list-unstyled footer-list-menu">
                                <li><a href="javascript: void(0);">Tokens</a></li>
                                <li><a href="javascript: void(0);">Roadmap</a></li>
                                <li><a href="javascript: void(0);">FAQs</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="mb-4 mb-lg-0">
                            <h5 class="mb-3 footer-list-title">Latest News</h5>
                            <div class="blog-post">
                                <a href="javascript: void(0);" class="post">
                                    <div class="badge badge-soft-success font-size-11 mb-3">Cryptocurrency</div>
                                    <h5 class="post-title">Donec pede justo aliquet nec</h5>
                                    <p class="mb-0"><i class="bx bx-calendar me-1"></i> 04 Mar, 2020</p>
                                </a>
                                <a href="javascript: void(0);" class="post">
                                    <div class="badge badge-soft-success font-size-11 mb-3">Cryptocurrency</div>
                                    <h5 class="post-title">In turpis, Pellentesque</h5>
                                    <p class="mb-0"><i class="bx bx-calendar me-1"></i> 12 Mar, 2020</p>
                                </a>

                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- end row -->

                <hr class="footer-border my-5">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-4">
                            <img src="assets/images/logo-light.png" alt="" height="20">
                        </div>
    
                        <p class="mb-2"><script>document.write(new Date().getFullYear())</script> © Skote. Design & Develop by Themesbrand</p>
                        <p>It will be as simple as occidental in fact, it will be to an english person, it will seem like simplified English, as a skeptical</p>
                    </div>

                </div>
            </div>
            <!-- end container -->
        </footer>
        <!-- Footer end -->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/libs/jquery.easing/jquery.easing.min.js"></script>

        <!-- Plugins js-->
        <script src="assets/libs/jquery-countdown/jquery.countdown.min.js"></script>

        <!-- owl.carousel js -->
        <script src="assets/libs/owl.carousel/owl.carousel.min.js"></script>

        <!-- ICO landing init -->
        <script src="assets/js/pages/ico-landing.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/skote/layouts/crypto-ico-landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Aug 2021 01:33:29 GMT -->
</html>
