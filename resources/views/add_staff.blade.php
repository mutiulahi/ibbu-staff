@extends('layout/head')
@section('title','Login | IBBUL - Staff Admin Record')   
{{-- @endsection --}}
    <body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

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
                                    <h4 class="mb-sm-0 font-size-18">Add Staff</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Staff</a></li>
                                            <li class="breadcrumb-item active"> List</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Basic Information</h4>
                                        <p class="card-title-desc">Fill all information below</p>
        
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="productname">Name</label>
                                                        <input id="productname" name="name" type="text" placeholder="Fullname" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="manufacturername">Rank</label>
                                                        <input id="manufacturername" name="rank" type="text" placeholder="Rank e.g (Burser) " class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="manufacturerbrand">Department</label>
                                                        <input id="manufacturerbrand" name="department" placeholder=" Department (e.g VC's office)" type="text" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="price">PFN</label>
                                                        <input id="price" name="pfn" type="number" placeholder="12323" class="form-control">
                                                    </div>
                                                </div>
        
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="control-label">Sex</label>
                                                        <select class="form-control select2" name="sex">
                                                            <option>Select</option>
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                        </select>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="price">Date of Birth</label>
                                                        <input id="price" name="DOB" type="date" class="form-control">
                                                    </div>
                                                     
                                                    <div class="mb-3">
                                                        <label class="control-label">State</label>
                                                        <select class="form-control select2" name="state">
                                                            <option>Select</option> 
                                                            <option value="osun">osun</option>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="mb-3">
                                                        <label class="control-label">Local Government</label>
                                                        <select class="form-control select2" name="LG">
                                                            <option>Select</option> 
                                                            <option value="iwo">Iwo</option>
                                                        </select>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="qualification" class="control-label">Qualification</label>
                                                        <input type="text" name="qualification" placeholder="Qualification (Bcs, MSC, M.Tech ...)" class="form-control">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="date-apoint">Date of First Appointment</label>
                                                        <input id="date-apoint" name="date_first_appoint" type="date" class="form-control">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="date-apoint">Date of Present Appointment</label>
                                                        <input id="date-apoint" name="date_present_appoint" type="date" class="form-control">
                                                    </div>
                                                </div> 
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="qualification" class="control-label">Nature of Appointment</label>
                                                        {{-- <input type="text" name="nature"  class="form-control"> --}}
                                                        <select class="form-control select2" name="nature">
                                                            <option>Select</option> 
                                                            <option value="tenure">TENURE</option>
                                                            <option value="contract">CONTRACT</option>
                                                            <option value="sabbatical">SABBATICAL</option>
                                                            <option value="visiting">VISITING</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="qualification" class="control-label">Grade / Step</label>
                                                        <input type="text" name="grade_step" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="qualification" class="control-label">Station</label>
                                                        <select class="form-control select2" name="Station">
                                                            <option>Select</option> 
                                                            <option value="lapai">LAPAI</option>
                                                            <option value="agaie"> AGAIE</option>
                                                            <option value="new bussa">NEW BUSSA</option>
                                                            <option value="ibeto">IBETO</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="d-flex flex-wrap gap-2">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                                {{-- <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button> --}}
                                            </div>
                                        </form>
        
                                    </div>
                                </div> 
                            </div>
                        </div>
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
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
        {{-- <div class="right-bar">
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
        </div> --}}
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

        <script src="{{asset('assets/js/app.js')}}"></script>

    </body>

    {{-- $table->string('name');
            $table->string('rank');
            $table->string('department');
            $table->string('PFN');
            $table->string('sex');
            $table->string('DOB');
            $table->string('state');
            $table->string('LG');
            $table->string('qualification');
            $table->string('nature');
            $table->string('date_first_appoint');
            $table->string('date_present_appoint');
            $table->string('grade_step');
            $table->string('grade_step');
            $table->string('station');
            $table->string('status'); --}}
 </html>
