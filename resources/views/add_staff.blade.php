@extends('layout/head')
@section('title','Add Staff | IBBUL - Staff Admin Record')   
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
                                        <p class="card-title-desc">Fill all information below (The starred (<span style="color: #e64b4b;">*</span>) filed are in important) </p>
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

                                                <div class="col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="date-apoint">Email<span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                        <input id="date-apoint" name="email" type="email" placeholder="Email (tescode@mail.com)" class="form-control" value="{{old('email')}}" @error('email') style="border-color:#e64b4b;" @enderror>
                                                        @error('email')
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
                                                        <label for="manufacturerbrand">Department <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                        <input id="manufacturerbrand" name="department" placeholder=" Department (e.g VC's office)" type="text" class="form-control" value="{{old('department')}}" @error('department') style="border-color:#e64b4b;" @enderror>
                                                        @error('department')
                                                            <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                        @enderror
                                                    </div>
                                                    
                                                    <div class="mb-3">
                                                        <label for="price">PFN <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                        <input id="price" name="pfn" type="number" placeholder="12323" class="form-control" value="{{old('pfn')}}" @error('pfn') style="border-color:#e64b4b;" @enderror>
                                                        @error('pfn')
                                                            <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                        @enderror
                                                    </div>
                                                </div>
        
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="control-label">Sex <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                        <select  class="col-md-12 form-control select2" name="sex" value="{{old('sex')}}" @error('sex')  style="border-color:#e64b4b;" @enderror>
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
                                                        <select  class="col-md-12 form-control select2" name="state" value="{{old('state')}}" @error('state')  style="border-color:#e64b4b;" @enderror>
                                                            <option value="">Select</option> 
                                                            <option value="osun">osun</option>
                                                        </select>
                                                        @error('state')
                                                            <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                        @enderror
                                                    </div>
                                                    
                                                    <div class="mb-3">
                                                        <label class="control-label">Local Government <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                        <select  class="col-md-12 form-control select2" name="local_government" value="{{old('local_government')}}" @error('local_government')  style="border-color:#e64b4b;" @enderror>
                                                            <option value="">Select</option> 
                                                            <option value="iwo">Iwo</option>
                                                        </select>
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
                                                        <select  class="col-md-12 select2 form-control select2-multiple" name="qualification[]" multiple="multiple" data-placeholder="Choose ..." value="{{old('qualification')}}" @error('qualification') style="border-color:#e64b4b;" @enderror>
                                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                                <option value="AK">Alaska</option>
                                                                <option value="HI">Hawaii</option>
                                                            </optgroup>
                                                            <optgroup label="Pacific Time Zone">
                                                                <option value="CA">California</option>
                                                                <option value="NV">Nevada</option>
                                                                <option value="OR">Oregon</option>
                                                                <option value="WA">Washington</option>
                                                            </optgroup>
                                                            <optgroup label="Mountain Time Zone">
                                                                <option value="AZ">Arizona</option>
                                                                <option value="CO">Colorado</option>
                                                                <option value="ID">Idaho</option>
                                                                <option value="MT">Montana</option>
                                                                <option value="NE">Nebraska</option>
                                                                <option value="NM">New Mexico</option>
                                                                <option value="ND">North Dakota</option>
                                                                <option value="UT">Utah</option>
                                                                <option value="WY">Wyoming</option>
                                                            </optgroup>
                                                            <optgroup label="Central Time Zone">
                                                                <option value="AL">Alabama</option>
                                                                <option value="AR">Arkansas</option>
                                                                <option value="IL">Illinois</option>
                                                                <option value="IA">Iowa</option>
                                                                <option value="KS">Kansas</option>
                                                                <option value="KY">Kentucky</option>
                                                                <option value="LA">Louisiana</option>
                                                                <option value="MN">Minnesota</option>
                                                                <option value="MS">Mississippi</option>
                                                                <option value="MO">Missouri</option>
                                                                <option value="OK">Oklahoma</option>
                                                                <option value="SD">South Dakota</option>
                                                                <option value="TX">Texas</option>
                                                                <option value="TN">Tennessee</option>
                                                                <option value="WI">Wisconsin</option>
                                                            </optgroup>
                                                            <optgroup label="Eastern Time Zone">
                                                                <option value="CT">Connecticut</option>
                                                                <option value="DE">Delaware</option>
                                                                <option value="FL">Florida</option>
                                                                <option value="GA">Georgia</option>
                                                                <option value="IN">Indiana</option>
                                                                <option value="ME">Maine</option>
                                                                <option value="MD">Maryland</option>
                                                                <option value="MA">Massachusetts</option>
                                                                <option value="MI">Michigan</option>
                                                                <option value="NH">New Hampshire</option>
                                                                <option value="NJ">New Jersey</option>
                                                                <option value="NY">New York</option>
                                                                <option value="NC">North Carolina</option>
                                                                <option value="OH">Ohio</option>
                                                                <option value="PA">Pennsylvania</option>
                                                                <option value="RI">Rhode Island</option>
                                                                <option value="SC">South Carolina</option>
                                                                <option value="VT">Vermont</option>
                                                                <option value="VA">Virginia</option>
                                                                <option value="WV">West Virginia</option>
                                                            </optgroup>
                                                        </select> 
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
                                                        <select  class="col-md-12 form-control select2" name="nature" value="{{old('nature')}}" @error('nature') style="border-color:#e64b4b;" @enderror>
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
                                                        <label for="qualification" class="control-label">Grade / Step <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                        <input type="text" name="grade_step" class="form-control" value="{{old('name')}}" @error('name') style="border-color:#e64b4b;" @enderror>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="qualification" class="control-label">Station <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                        <select  class="col-md-12 form-control select2" name="station"  value="{{old('station')}}" @error('station') style="border-color:#e64b4b;" @enderror>
                                                            <option value="">Select</option> 
                                                            <option value="lapai">LAPAI</option>
                                                            <option value="agaie"> AGAIE</option>
                                                            <option value="new bussa">NEW BUSSA</option>
                                                            <option value="ibeto">IBETO</option>
                                                        </select>
                                                        @error('station')
                                                            <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                        @enderror
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
