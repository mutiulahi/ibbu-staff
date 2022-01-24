<!doctype html>
<html lang="en"> 
 <head> 
        <title>Add Staff | IBBUL - Staff Admin Record</title> 
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}">

        <link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- DataTables -->
        <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="{{asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />     


        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

<style>
    .me-color {
    width: 100%;
}
</style>
</head> 

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
                                    {{-- <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Staff</a></li>
                                            <li class="breadcrumb-item active"> List</li>
                                        </ol>
                                    </div> --}}

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Staff Information</h4>
                                        <p class="card-title-desc">Fill all information below <code>(The starred (<span style="color: #e64b4b;">*</span>) field are important) </code> </p>
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
                                        
        
                                        <form accept="{{route('add_staff')}}" method="POST">
                                            @csrf
                                            <div class="row">

                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="date-apoint">Email </label>
                                                        <input id="date-apoint" name="email" type="email" placeholder="Email (tescode@mail.com)" class="form-control" value="{{old('email')}}" @error('email') style="border-color:#e64b4b;" @enderror>
                                                        @error('email')
                                                            <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="control-label">Staff Category <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                        <select style="width: 100%;" class="col-md-12 form-control select2" name="category" value="{{old('category')}}" @error('category')  style="border-color:#e64b4b;" @enderror >
                                                            <option value="" >Select Staff Category </option>
                                                            <option value="academic">Academic</option>
                                                            <option value="non academic">Non Academic</option>
                                                        </select>
                                                        @error('category')
                                                            <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                        @enderror
                                                    </div> 
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="productname">Name <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                        <input id="productname" name="name" type="text" placeholder="Fullname" class="form-control" value="{{old('name')}}"  @error('name') style="border-color:#e64b4b;" @enderror>
                                                        @error('name')
                                                            <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="manufacturername">Rank <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                        <input id="manufacturername" name="rank" type="text" placeholder="Rank e.g (Burser) " class="form-control" value="{{old('rank')}}"  @error('rank') style="border-color:#e64b4b;" @enderror>
                                                        @error('rank')
                                                            <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="manufacturerbrand">Department / Unit <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                        <input id="manufacturerbrand" name="department_or_unit" placeholder=" Department or Unit (e.g VC's office)" type="text" class="form-control" value="{{old('department_or_unit')}}" @error('department_or_unit') style="border-color:#e64b4b;" @enderror>
                                                        @error('department_or_unit')
                                                            <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                        @enderror
                                                    </div>
                                                    
                                                    <div class="mb-3">
                                                        <label for="price">PFN <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                        <input id="price" name="pfn" type="number" min="0" placeholder="12323" class="form-control" value="{{old('pfn')}}" @error('pfn') style="border-color:#e64b4b;" @enderror>
                                                        @error('pfn')
                                                            <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                        @enderror
                                                    </div>
                                                </div>
        
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="control-label">Sex <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                        <select style="width: 100%;" class="col-md-12 form-control select2" name="sex" value="{{old('sex')}}" @error('sex')  style="border-color:#e64b4b;" @enderror >
                                                            <option value="" >Select</option>
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                        </select>
                                                        @error('sex')
                                                            <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="price">Date of Birth <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                        <input id="price" name="date_of_birth" type="date" class="form-control" value="{{old('date_of_birth')}}"  @error('date_of_birth') style="border-color:#e64b4b;" @enderror>
                                                        @error('date_of_birth')
                                                            <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                        @enderror
                                                    </div>
                                                     
                                                    <div class="mb-3">
                                                        <label class="control-label">State <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                        <input id="price" name="state" type="text" class="form-control" placeholder="State" value="{{old('state')}}"   @error('state') style="border-color:#e64b4b;" @enderror>
                                                        @error('state')
                                                            <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                        @enderror
                                                         
                                                    </div>
                                                    
                                                    <div class="mb-3">
                                                        <label class="control-label">Local Government Area <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                        <input id="price" name="local_government" type="text" class="form-control" placeholder="Local Government Area" value="{{old('local_government')}}"  @error('local_government') style="border-color:#e64b4b;" @enderror>
                                                        @error('local_government')
                                                            <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                        @enderror
                                                        
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Qualification <span style="color: #e64b4b; margin-left: 5px;">*</span></label>
                                                        <input id="price" name="qualification" type="text" class="form-control" placeholder="Local Government Area" value="{{old('qualification')}}"  @error('qualification') style="border-color:#e64b4b;" @enderror>
                                                        @error('qualification')
                                                            <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="date-apoint">Date of First Appointment <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                        <input id="date-apoint" name="date_first_appoint" type="date" class="form-control" value="{{old('date_first_appoint')}}" @error('date_first_appoint') style="border-color:#e64b4b;" @enderror>
                                                        @error('date_first_appoint')
                                                            <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="date-apoint">Date of Present Appointment <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                        <input id="date-apoint" name="date_present_appoint" type="date" class="form-control" value="{{old('date_present_appoint')}}" @error('date_present_appoint') style="border-color:#e64b4b;" @enderror>
                                                    </div>
                                                    @error('date_present_appoint')
                                                        <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                    @enderror
                                                </div> 
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="qualification" class="control-label">Nature of Appointment <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                        <select style="width: 100%  @error('nature') border-color:#e64b4b; @enderror" class="col-md-12 form-control select2" name="nature" value="{{old('nature')}}" @error('nature') style="border-color:#e64b4b;" @enderror>
                                                            <option value="">Select</option> 
                                                            <option value="tenure">TENURE</option>
                                                            <option value="contract">CONTRACT</option>
                                                            <option value="sabbatical">SABBATICAL</option>
                                                            <option value="visiting">VISITING</option>
                                                        </select>
                                                        @error('nature')
                                                            <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">

                                                        {{-- <label for="qualification" class="control-label">CONUASS / Step <span style="color: #e64b4b; margin-left: 5px;">*</span> </label> --}}
                                                        <label for="qualification" class="control-label"> Grade <code>(CONUASS or CONTISS)</code> / Step <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>

                                                        <div class="input-daterange input-group" id="datepicker6" data-date-format="dd M, yyyy" data-date-autoclose="true" data-provide="datepicker" data-date-container='#datepicker6'>
                                                            <input type="number" min="0" class="form-control" name="conuass_or_contiss" placeholder="conuass_or_contiss" value="{{old('conuass_or_contiss')}}" @error('conuass_or_contiss') style="border-color:#e64b4b;" @enderror/>
                                                            <input type="number" min="0" class="form-control" name="step" placeholder="Step" value="{{old('step')}}" @error('step') style="border-color:#e64b4b;" @enderror/>
                                                        </div>
                                                        @error('conuass_or_contiss')
                                                            <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span> <code>,</code>
                                                        @enderror
                                                        @error('step')
                                                            <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="qualification" class="control-label">Station <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                        <select style="width: 100%;" class="col-md-12 form-control select2" name="station"  value="{{old('station')}}" @error('station') style="border-color:#e64b4b;" @enderror>
                                                            <option value="">Select</option> 
                                                            <option value="lapai">LAPAI</option>
                                                            <option value="agaie"> AGAIE</option>
                                                            <option value="new bussa">NEW BUSSA</option>
                                                            <option value="ibeto">IBETO</option>
                                                            <option value="minna">MINNA</option>
                                                        </select>
                                                        @error('station')
                                                            <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                        @enderror
                                                    </div> 
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="date-apoint">Date of Confirmation Appointment <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                        <input id="date-apoint" name="date_confirm_appoint" type="date" class="form-control" value="{{old('date_confirm_appoint')}}" @error('date_confirm_appoint') style="border-color:#e64b4b;" @enderror>
                                                    </div>
                                                    @error('date_confirm_appoint')
                                                        <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                    @enderror
                                                </div>
                                            </div>
        
                                            <div class="d-flex flex-wrap gap-2">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
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
       

        <!-- Right bar overlay-->
   

        <!-- JAVASCRIPT -->
        <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

        <!-- Required datatable js -->
        <script src="{{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('assets/libs/jszip/jszip.min.js')}}"></script>
        <script src="{{asset('assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
        <script src="{{asset('assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
        <script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
        
        <!-- Responsive examples -->
        <script src="{{asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

        <!-- Datatable init js -->
        <script src="{{asset('assets/js/pages/datatables.init.js')}}"></script>    
        <script src="{{asset('assets/libs/select2/js/select2.min.js')}}"></script>

        <script src="{{asset('assets/js/pages/form-advanced.init.js')}}"></script>


        <script src="{{asset('assets/js/app.js')}}"></script>

    </body> 
 </html>
