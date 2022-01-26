<!doctype html>
<html lang="en"> 
 <head> 
        <title>Staff Record | IBBUL - Staff Admin Record</title> 
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.png">

        <link href="../assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <!-- DataTables -->
        <link href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="../assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />     


        <!-- Bootstrap Css -->
        <link href="../assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="../assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

<style>
    .me-color {
    width: 100%;
}
</style>
 
</head>     
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
                                    <h4 class="mb-sm-0 font-size-18">Academic Staff List</h4>
                                    <div class="page-title-right">
                                        {{-- <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-ite">Staff</a></li>
                                            <li class="breadcrumb-item active"> List</li>
                                        </ol> --}}
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-12">
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
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <h4 class="card-title">Academic Staff Detail</h4>
                                        <p class="card-title-desc">
                                        </p>
        
                                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>Action</th>
                                                <th>Status</th>
                                                <th>Name</th>
                                                <th>Qualification</th> 
                                                <th>Grade/Step</th>
                                                <th>PFN</th>
                                                <th>Sex</th> 
                                                <th>Rank</th> 
                                                <th>Email</th>
                                                <td>Date of Birth</td>
                                                <td>State</td>
                                                <td>Local Government</td>
                                                <td>Nature of Appointment</td>
                                                <td>Date of First Appointment</td>
                                                <td>Date of Confirmation of Appointment</td>
                                                <td>Date of Present Appointment</td>
                                                <td>Station</td>
                                            </tr>
                                            </thead> 
                                            <tbody> 
                                                @php
                                                $count = 1;   
                                                @endphp
                                                @foreach ($fetch_staff as $staff_details)
                                                    <tr>
                                                        <td>{{$count++}}</td>
                                                        <td>
                                                            <button type="button" class="btn btn-danger btn-sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-sm{{$staff_details->PFN}}deactivate"><i class="fas fa-window-close"></i></button>
                                                            <button type="button" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-sm{{$staff_details->PFN}}activate"><i class="fas fa-check-circle"></i></button>
                                                            <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-sm{{$staff_details->PFN}}details"><i class="fas fa-edit"></i></button>
                                                        </td>
                                                        <td>
                                                            @if ($staff_details->status == '1') 
                                                                <span class="badge badge-pill badge-soft-success font-size-12">Active</span>
                                                            @elseif($staff_details->status == '2') 
                                                                <span class="badge badge-pill badge-soft-danger font-size-12">Fired</span>
                                                            @elseif($staff_details->status == '3') 
                                                                <span class="badge badge-pill badge-soft-warning font-size-12">Suspension</span>
                                                            @elseif($staff_details->status == '4') 
                                                                <span class="badge badge-pill badge-soft-danger font-size-12">Deactive</span>
                                                            @endif
                                                            {{-- {{$staff_details->status}} --}}
                                                        </td>
                                                        <td>{{$staff_details->name}}</td>
                                                        <td>{{$staff_details->qualification}}</td>
                                                        <td>{{$staff_details->grade_step}} / STEP {{$staff_details->step}}</td>
                                                        <td>{{$staff_details->PFN}}</td>
                                                        <td>{{$staff_details->sex}}</td>
                                                        <td>{{$staff_details->rank}}</td> 
                                                        <td>{{$staff_details->email}}</td>
                                                        <td>{{$staff_details->DOB}}</td>
                                                        <td>{{$staff_details->state}}</td>
                                                        <td>{{$staff_details->LG}}</td>
                                                        <td>{{$staff_details->nature}}</td>
                                                        <td>{{$staff_details->date_first_appoint}}</td>
                                                        <td>{{$staff_details->date_confirm_appoint}}</td>
                                                        <td>{{$staff_details->date_present_appoint}}</td>
                                                        <td>{{$staff_details->station}}</td> 
                                                        
                                                    </tr>

                                                      {{-- Deactivate modal start --}}
                                                      <div class="modal fade bs-example-modal-sm{{$staff_details->PFN}}deactivate" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title text-danger" id="mySmallModalLabel">Reject Application</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <center>
                                                                        <h4 class="text-danger mb-4">Are sure of this action!!!</h4>
                                                                        <h5>Changing Staff Status</h5>
                                                                        <h5 class="text-primary">PFN {{$staff_details->PFN}}</h5>
                                                                        <h5 class="text-success"> Current Status:</h5>
                                                                        <h2>
                                                                            @if ($staff_details->status == '1')
                                                                                active
                                                                            @elseif($staff_details->status == '2')
                                                                                fired
                                                                            @elseif($staff_details->status == '3')
                                                                                suspension
                                                                            @elseif($staff_details->status == '4')
                                                                                deactive
                                                                            @endif        
                                                                        </h2>
                                                                        <form action="{{route('staff_status')}}" method="post">
                                                                            @csrf
                                                                            <input type="hidden" name="pfn" value="{{$staff_details->PFN}}">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Select Staff Status</b></label>
                                                                                <div class="input-group auth-pass-inputgroup">
                                                                                   <select class="form-control" name="status" id="" required>
                                                                                        <option value="">Choose...</option>
                                                                                        <option value="2">Fired</option>
                                                                                        <option value="3">Suspension</option>
                                                                                        <option value="4">Deactive</option>
                                                                                   </select>
                                                                                </div> 
                                                                            </div> 
                                                                            <button class="btn btn-sm btn-warning mt-3 mb-4">Confirm</button>
                                                                        </form>
                                                                    </center>
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div>
                                                    {{-- Deactivate modal stop --}}


                                                    {{-- activate modal start --}}
                                                    <div class="modal fade bs-example-modal-sm{{$staff_details->PFN}}activate" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title text-warning" id="mySmallModalLabel">Approve Application</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <center>
                                                                        <h4 class="text-warning mb-4">Are sure of this action!!!</h4>
                                                                        <h4>Activating Staff Record Status</h4>
                                                                        <h5 class="text-primary">PFN {{$staff_details->PFN}}</h5>
                                                                        <h5 class="text-success"> Current Status:</h5>
                                                                        <h2>
                                                                            @if ($staff_details->status == '1')
                                                                                active
                                                                            @elseif($staff_details->status == '2')
                                                                                fired
                                                                            @elseif($staff_details->status == '3')
                                                                                suspension
                                                                            @elseif($staff_details->status == '4')
                                                                                deactive
                                                                            @endif        
                                                                        </h2>
                                                                        <form action="{{route('staff_status')}}" method="post">
                                                                            @csrf
                                                                            <input type="hidden" name="pfn" value="{{$staff_details->PFN}}">
                                                                            <input type="hidden" name="status" value="1">
                                                                            <button class="btn btn-sm btn-success mt-3 mb-4">Activate Staff</button>
                                                                        </form>
                                                                    </center>
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div>



                                                    <div class="modal fade bs-example-modal-sm{{$staff_details->PFN}}details" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="myLargeModalLabel">Staff Details</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="card">
                                                                        <div class="card-body">  
                                                                                <h4 class="card-title">Staff Information</h4>
                                                                                <p class="card-title-desc">Fill all information below (The starred (<span style="color: #e64b4b;">*</span>) filed are important) </p>
                                                
                                                                                <form action="{{route('update_staff_record')}}" method="POST">

                                                                                    @csrf
                                                                                    <input type="hidden" name="id" value="{{$staff_details->id}}">
                                                                                    <div class="row"> 
                                                                                        <div class="col-sm-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="date-apoint">Email<span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                                                                <input id="date-apoint" name="email" type="email" placeholder="Email (tescode@mail.com)" class="form-control" value="{{$staff_details->email}}" @error('email') style="border-color:#e64b4b;" @enderror required>
                                                                                                @error('email')
                                                                                                    <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-6">
                                                                                            <div class="mb-3">
                                                                                                <label class="control-label">Staff Category <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                                                                <select style="width: 100%;" class="col-md-12 form-control " name="category" value="{{old('category')}}" @error('category')  style="border-color:#e64b4b;" @enderror >
                                                                                                    <option value="" >Select Staff Category </option>
                                                                                                    <option @if ($staff_details->category == 'academic') {{'selected '}}@else {{''}} @endif  value="academic">Academic</option>
                                                                                                    <option @if ($staff_details->category == 'non academic') {{'selected '}}@else {{''}} @endif  value="non academic">Non Academic</option>
                                                                                                </select>
                                                                                                @error('category')
                                                                                                    <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                                                                @enderror
                                                                                            </div> 
                                                                                        </div>
                                        
                                                                                        <div class="col-sm-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="productname">Name <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                                                                <input id="productname" name="name" type="text" placeholder="Fullname" class="form-control" value="{{$staff_details->name}}"  @error('name') style="border-color:#e64b4b;" @enderror required>
                                                                                                @error('name')
                                                                                                    <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                                                                @enderror
                                                                                            </div>
                                        
                                                                                            <div class="mb-3">
                                                                                                <label for="manufacturername">Rank <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                                                                <input id="manufacturername" name="rank" type="text" placeholder="Rank e.g (Burser) " class="form-control" value="{{$staff_details->rank}}"  @error('rank') style="border-color:#e64b4b;" @enderror required>
                                                                                                @error('rank')
                                                                                                    <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                                                                @enderror
                                                                                            </div>
                                        
                                                                                            <div class="mb-3">
                                                                                                <label for="manufacturerbrand">Department / Unit <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                                                                <input id="manufacturerbrand" name="department" placeholder=" Department (e.g VC's office)" type="text" class="form-control" value="{{$staff_details->department}}" @error('department') style="border-color:#e64b4b;" @enderror required>
                                                                                                @error('department')
                                                                                                    <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                                                                @enderror
                                                                                            </div>
                                                                                            
                                                                                            <div class="mb-3">
                                                                                                <label for="price">PFN <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                                                                <input id="price" name="pfn" type="number" min="0" placeholder="12323" class="form-control" value="{{$staff_details->PFN}}" @error('pfn') style="border-color:#e64b4b;" @enderror required>
                                                                                                @error('pfn')
                                                                                                    <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                
                                                                                        <div class="col-sm-6">
                                                                                            <div class="mb-3">
                                                                                                <label class="control-label">Sex <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                                                                <select style="width: 100%;" class="col-md-12 form-control" name="sex" value="{{$staff_details->sex}}" @error('sex')  style="border-color:#e64b4b;" @enderror required>
                                                                                                    <option @if ($staff_details->sex == '') {{'selected '}}@else {{''}} @endif value="" >Select</option>
                                                                                                    <option @if ($staff_details->sex == 'male') {{'selected '}}@else {{''}} @endif value="male">Male</option>
                                                                                                    <option @if ($staff_details->sex == 'female') {{'selected '}}@else {{''}} @endif value="female">Female</option>
                                                                                                </select>
                                                                                                @error('sex')
                                                                                                    <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                                                                @enderror
                                                                                            </div>
                                        
                                                                                            <div class="mb-3">
                                                                                                <label for="price">Date of Birth <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                                                                <input id="price" name="date_of_birth" type="date" class="form-control" value="{{$staff_details->DOB}}"  @error('date_of_birth') style="border-color:#e64b4b;" @enderror required>
                                                                                                @error('date_of_birth')
                                                                                                    <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                                                                @enderror
                                                                                            </div>
                                                                                             
                                                                                            <div class="mb-3">
                                                                                                <label class="control-label">State <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                                                                <input id="price" name="state" type="text" class="form-control" placeholder="State" value="{{$staff_details->state}}"   @error('state') style="border-color:#e64b4b;" @enderror required>
                                                                                                @error('state')
                                                                                                    <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                                                                @enderror 
                                                                                            </div>
                                                                                            
                                                                                            <div class="mb-3">
                                                                                                <label class="control-label">Local Government Area <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                                                                <input id="price" name="local_government" type="text" class="form-control" placeholder="Local Government Area" value="{{$staff_details->LG}}"  @error('local_government') style="border-color:#e64b4b;" @enderror required>
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
                                                                                                <input id="date-apoint" name="qualification" type="text" placeholder="Qualification (BSc.Computer, BSc. Science ...)" class="form-control" value="{{$staff_details->qualification}}"  required>
                                                                                                @error('qualification')
                                                                                                    <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                                                                @enderror
                                                                                            </div>
                                        
                                                                                            <div class="mb-3">
                                                                                                <label for="date-apoint">Date of First Appointment <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                                                                <input id="date-apoint" name="date_first_appoint" type="date" class="form-control" value="{{$staff_details->date_first_appoint}}" @error('date_first_appoint') style="border-color:#e64b4b;" @enderror required>
                                                                                                @error('date_first_appoint')
                                                                                                    <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                                                                @enderror
                                                                                            </div>

                                                                                            {{-- <div class="mb-3">
                                                                                                <label for="date-apoint">Date of Last Appointment <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                                                                <input id="date-apoint" name="date_last_appoint" type="date" class="form-control" value="{{$staff_details->date_last_appoint}}" @error('date_last_appoint') style="border-color:#e64b4b;" @enderror required>
                                                                                                @error('date_last_appoint')
                                                                                                    <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                                                                @enderror
                                                                                            </div> --}}
                                        
                                                                                            <div class="mb-3">
                                                                                                <label for="date-apoint">Date of Present Appointment <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                                                                <input id="date-apoint" name="date_present_appoint" type="date" class="form-control" value="{{$staff_details->date_present_appoint}}" @error('date_present_appoint') style="border-color:#e64b4b;" @enderror required>
                                                                                            </div>
                                                                                            @error('date_present_appoint')
                                                                                                <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                                                            @enderror
                                                                                        </div> 
                                                                                        <div class="col-sm-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="qualification" class="control-label">Nature of Appointment <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                                                                <select style="width: 100%  @error('nature') border-color:#e64b4b; @enderror" class="col-md-12 form-control" name="nature" value="{{$staff_details->nature}}" @error('nature') style="border-color:#e64b4b;" @enderror required>
                                                                                                    <option value="">Select</option> 
                                                                                                    <option @if ($staff_details->nature == 'tenure') {{'selected '}}@else {{''}} @endif value="tenure">TENURE</option>
                                                                                                    <option @if ($staff_details->nature == 'contract') {{'selected '}}@else {{''}} @endif value="contract">CONTRACT</option>
                                                                                                    <option @if ($staff_details->nature == 'sabbatical') {{'selected '}}@else {{''}} @endif value="sabbatical">SABBATICAL</option>
                                                                                                    <option @if ($staff_details->nature == 'visiting') {{'selected '}}@else {{''}} @endif value="visiting">VISITING</option>
                                                                                                </select>
                                                                                                @error('nature')
                                                                                                    <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                                                                @enderror
                                                                                            </div>
                                        
                                                                                            <div class="mb-3">
                                                                                                <label for="qualification" class="control-label">Grade / Step <span style="color: #e64b4b; margin-left: 5px;">*</span> <code>Current Grade/Step: {{$staff_details->grade_step}} </code> </label>
                                                                                                <div class="input-daterange input-group" id="datepicker6" data-date-format="dd M, yyyy" data-date-autoclose="true" data-provide="datepicker" data-date-container='#datepicker6'>
                                                                                                    <input type="number" class="form-control" min="0" name="conuass_or_contiss" placeholder="Grade" value="{{old('grade')}}" @error('grade') style="border-color:#e64b4b;" @enderror required/>
                                                                                                    <input type="number" class="form-control" min="0" name="step" placeholder="Step" value="{{old('step')}}" @error('step') style="border-color:#e64b4b;" @enderror required/>
                                                                                                </div>
                                                                                                @error('grade')
                                                                                                    <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>,
                                                                                                @enderror
                                                                                                @error('step')
                                                                                                    <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                                                                @enderror
                                                                                            </div>
                                        
                                                                                            <div class="mb-3">
                                                                                                <label for="qualification" class="control-label">Station <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                                                                <select style="width: 100%;" class="col-md-12 form-control" name="station"  value="{{old('station')}}" @error('station') style="border-color:#e64b4b;" @enderror required>
                                                                                                    <option @if ($staff_details->station == '') {{'selected '}}@else {{''}} @endif value="">Select</option> 
                                                                                                    <option @if ($staff_details->station == 'lapai') {{'selected '}}@else {{''}} @endif value="lapai">LAPAI</option>
                                                                                                    <option @if ($staff_details->station == 'agaie') {{'selected '}}@else {{''}} @endif value="agaie"> AGAIE</option>
                                                                                                    <option @if ($staff_details->station == 'new bussa') {{'selected '}}@else {{''}} @endif value="new bussa">NEW BUSSA</option>
                                                                                                    <option @if ($staff_details->station == 'ibeto') {{'selected '}}@else {{''}} @endif value="ibeto">IBETO</option>
                                                                                                    <option @if ($staff_details->station == 'minna') {{'selected '}}@else {{''}} @endif value="minna">MINNA</option>
                                                                                                </select>
                                                                                                @error('station')
                                                                                                    <span style="color:#e64b4b; font-size: 10px; margin-top:2px;">{{$message}}</span>    
                                                                                                @enderror
                                                                                            </div>
                                        
                                                                                        </div>
                                                                                        <div class="col-sm-12">
                                                                                            <div class="mb-3">
                                                                                                <label for="date-apoint">Date of Confirmation Appointment <span style="color: #e64b4b; margin-left: 5px;">*</span> </label>
                                                                                                <input id="date-apoint" name="date_confirm_appoint" type="date" class="form-control" value="{{$staff_details->date_confirm_appoint}}" @error('date_confirm_appoint') style="border-color:#e64b4b;" @enderror>
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
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->

                                                    {{-- activate modal stop --}}
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © IBBUL STAFF RECORD.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by Tescodepro
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
       

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="../assets/libs/jquery/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="../assets/libs/simplebar/simplebar.min.js"></script>
    <script src="../assets/libs/node-waves/waves.min.js"></script>

    <!-- Required datatable js -->
    <script src="../assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="../assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="../assets/libs/jszip/jszip.min.js"></script>
    <script src="../assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="../assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="../assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    
    <!-- Responsive examples -->
    <script src="../assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="../assets/js/pages/datatables.init.js"></script>    
    <script src="../assets/libs/select2/js/select2.min.js"></script>

    <script src="../assets/js/pages/form-advanced.init.js"></script>


    <script src="../assets/js/app.js"></script>



    </body> 
 </html>
