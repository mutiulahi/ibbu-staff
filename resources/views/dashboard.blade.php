<!doctype html>
<html lang="en">
    <head>
        
        <meta charset="utf-8" />
        <title>Dashboard | IBBUL STAFF RECORD</title>
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Ibbul staff portal" name="description" />
        <meta content="Ibbu" name="author" /> --}}
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.png">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

<body data-sidebar="dark"> 

        <!-- Begin page -->
        <div id="layout-wrapper"> 
           @include('layout.header')
            <!-- ========== Left Sidebar Start ========== -->
            @include('layout.side_bar')
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Dashboard</h4> 
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        @if (session('success'))
                            <center>
                                <div class="col-sm-6" style="text-align: center">
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <i class="mdi mdi-check-all me-2"></i>
                                            {{session('success')}}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                </div>
                            </center>
                        @endif
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                
                                                <div class="d-flex flex-wrap">
                                                    <div class="me-3">
                                                        <p class="text-muted mb-2">Total Promotion </p>
                                                        <h5 class="mb-0">{{$total_app_prom}}</h5>
                                                    </div>
    
                                                    <div class="avatar-sm ms-auto">
                                                        <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                                            <i class="bx bxs-group"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4">
                                        <div class="card blog-stats-wid">
                                            <div class="card-body">

                                                <div class="d-flex flex-wrap">
                                                    <div class="me-3">
                                                        <p class="text-muted mb-2">Approved Pro... </p>
                                                        <h5 class="mb-0">{{$total_app_accept}}</h5>
                                                    </div>
    
                                                    <div class="avatar-sm ms-auto">
                                                        <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                                            <i class="bx bxs-group"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card blog-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex flex-wrap">
                                                    <div class="me-3">
                                                        <p class="text-muted mb-2">Rejected Pro... </p>
                                                        <h5 class="mb-0">{{$total_app_reject}}</h5>
                                                    </div>
    
                                                    <div class="avatar-sm ms-auto">
                                                        <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                                            <i class="bx bxs-group"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="card">
                                    <div class="card-body p-4 mt-4 mb-4">
                                        <div class="text-center">  
                                            <div class="row justify-content-center">
                                                <div class="col-xl-10">
                                                    <h4 class="text-primary">Activate Promotion Page</h4>
                                                    <p class="text-muted font-size-14 mb-4">The Application for Promotion page is : <code>
                                                    @if (!empty($select_me[0]))
                                                        {{$select_me[0]->promotion_page}}
                                                    @else
                                                        pending                                                        
                                                    @endif
                                                    
                                                    </code></p>

                                                    <div class="input-group bg-light rounded">
                                                        <span class="form-control bg-transparent border-0"> <code>localhost</code> </span>
                                                    </div>
                                                    <div style="margin-left: 30%; margin-top:10px;">
                                                        <div class="input-daterange input-group" id="datepicker6" data-date-format="dd M, yyyy" data-date-autoclose="true" data-provide="datepicker" data-date-container='#datepicker6'>
                                                            <form action="{{route('promo_page')}}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="status" value="activated">
                                                                <button class="btn btn-success btn-sm">Activate page</button>
                                                            </form>
                                                            <form action="{{route('promo_page')}}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="status" value="deactivated">
                                                                <button class="btn btn-danger btn-sm">Deactivate page</button>
                                                            </form>
                                                        </div>
                                                    </div >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                {{-- <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-sm rounded-circle img-thumbnail"> --}}
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <div class="text-muted">
                                                            <h5 class="mb-1">{{auth()->user()->name}}</h5>
                                                            <p class="mb-0">{{auth()->user()->email}}</p>
                                                        </div>
                                                    </div> 
                                                </div>
                                                 
                                            </div>

                                            
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-start">
                                            <h5 class="card-title mb-3 me-2">Staff's</h5> 
                                        </div>

                                        <div class="d-flex flex-wrap">
                                            <div>
                                                <p class="text-muted mb-1">Total Staff</p>
                                                <h4 class="mb-3">{{$staff}}</h4>
                                                {{-- <p class="text-success mb-0"><span>0.6 % <i class="mdi mdi-arrow-top-right ms-1"></i></span></p> --}}
                                            </div>
                                            <div class="ms-auto align-self-end">
                                                <i class="bx bx-group display-4 text-light"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                {{-- <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-sm rounded-circle img-thumbnail"> --}}
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <div class="row justify-content-center">
                                                            <div class="text-muted">
                                                                <h5 class="mb-1">Auto Update Set</h5>
                                                                <p class="mb-0"> 
                                                                    <button  type="button" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#subscribeModal">Increase Staff's Step</button>
                                                                </p>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                                 
                                            </div>

                                            
                                        </div>
                                        
                                    </div>
                                </div>

                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row --> 
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                  <!-- subscribeModal -->
                  <div class="modal fade" id="subscribeModal" tabindex="-1" aria-labelledby="subscribeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header border-bottom-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center mb-4">
                                    <div class="avatar-md mx-auto mb-4">
                                        <div class="avatar-title bg-light rounded-circle text-primary h1">
                                            <i  class="mdi mdi-account-alert-outline"></i>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col-xl-10">
                                            <h4 class="text-danger">Note !!!</h4>
                                            <p class="text-muted font-size-14 mb-4">This action will increase all staff's step by one (1).<br>It is not revarsible.</p>

                                            <form action="{{route('increase_step')}}" method="post">
                                                @csrf
                                                <button class="btn btn-primary" type="submit" id="button-addon2">
                                                    CONFIRM <i class="bx bxs-paper-plane"></i>
                                                </button> 
                                            </form> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end modal -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Skote.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">
            
                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.jpg" class="img-thumbnail" alt="layout images">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-thumbnail" alt="layout images">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-thumbnail" alt="layout images">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-4.jpg" class="img-thumbnail" alt="layout images">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-rtl-mode-switch">
                        <label class="form-check-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- dashboard blog init -->
        <script src="assets/js/pages/dashboard-blog.init.js"></script>

        <script src="assets/js/app.js"></script>
        {{-- <script>
            $(document).ready(function() {
                $("#subscribeModal").modal('show');
            });
        </script> --}}
    </body>

</html>
