@extends('layout/head')
@section('title','Applied Staff | IBBUL - Staff Admin Record')   
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
                                    <h4 class="mb-sm-0 font-size-18">View Staff Applications</h4>
                                    {{-- <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascrip: void(0);">Staff</a></li>
                                            <li class="breadcrumb-item active"> Applications</li>
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
                                        <h4 class="card-title">Staff Applications Detail</h4>
                                        <p class="card-title-desc">
                                        </p>
        
                                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>Action</th>
                                                <th>App. Status</th>
                                                <th>PFN / TPN</th>
                                                <th>Name</th> 
                                                <th>Qualification</th>
                                                <th>Date of First Appt.</th>
                                                <th>Date of Confrimation of Appt.</th>
                                                <th>Date of Last Promotion</th> 
                                                <th>Present Rank</th>
                                                <th>(CONTISS / CONUASS) / STEP</th>
                                                <th>Year of App.</th>
                                                <th>Application Number</th>
                                                <th>Application Date</th> 
                                            </tr>
                                            </thead> 
                                            <tbody> 
                                                @php
                                                $count = 1;   
                                                @endphp
                                                @foreach ($applications as $staff_application)
                                                    <tr>
                                                        <td>{{$count++}}</td>
                                                        <td>
                                                            <button type="button" class="btn btn-danger btn-sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-sm{{$staff_application->PFN}}deactivate"><i class="fas fa-window-close"></i></button>
                                                            <button type="button" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-sm{{$staff_application->PFN}}activate"><i class="fas fa-check-circle"></i></button>
                                                            <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-sm{{$staff_application->PFN}}details"><i class="fas fa-eye"></i></button>
                                                        </td>
                                                        <td> 
                                                            @if ($staff_application->app_status == 'accept') 
                                                            <span class="badge badge-pill badge-soft-success font-size-12">Accept</span> 
                                                            @elseif($staff_application->app_status == 'reject') 
                                                                <span class="badge badge-pill badge-soft-danger font-size-12">Reject</span>
                                                            @elseif($staff_application->app_status == 'pending') 
                                                                <span class="badge badge-pill badge-soft-warning font-size-12">Pending</span>
                                                            @endif
                                                        </td>
                                                        <td>{{$staff_application->PFN}}</td> 
                                                        <td>{{$staff_application->name}}</td>
                                                        <td>{{$staff_application->qualification}}</td>
                                                        <td>{{$staff_application->date_first_appoint}}</td>
                                                        <td>{{$staff_application->date_confirm_appoint}}</td>
                                                        <td>{{$staff_application->date_present_appoint}}</td>
                                                        <td>{{$staff_application->rank}}</td>
                                                        <td>{{$staff_application->grade_step}}</td>
                                                        <td>{{$staff_application->session}}</td> 
                                                        <td>{{$staff_application->application_number}}</td> 
                                                        <td>{{$staff_application->created_at}}</td>
                                                    </tr> 
                                                        {{-- Deactivate modal start --}}
                                                        <div class="modal fade bs-example-modal-sm{{$staff_application->PFN}}deactivate" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-sm">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title text-danger" id="mySmallModalLabel">Reject Application</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <center>
                                                                            <h4 class="text-danger mb-4">Are sure of this action!!!</h4>
                                                                            <h5>Rejecting Staff Promotion Application</h5>
                                                                            <h5 class="text-primary">With PFN {{$staff_application->PFN}}</h5>
                                                                            <form action="{{route('reject_app')}}" method="post">
                                                                                @csrf
                                                                                <input type="hidden" name="pfn" value="{{$staff_application->PFN}}">
                                                                                <button class="btn btn-sm btn-danger mt-3 mb-4">Confirm</button>
                                                                            </form>
                                                                        </center>
                                                                    </div>
                                                                </div><!-- /.modal-content -->
                                                            </div><!-- /.modal-dialog -->
                                                        </div>
                                                        {{-- Deactivate modal stop --}}


                                                        {{-- activate modal start --}}
                                                        <div class="modal fade bs-example-modal-sm{{$staff_application->PFN}}activate" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-sm">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title text-warning" id="mySmallModalLabel">Approve Application</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <center>
                                                                            <h4 class="text-warning mb-4">Are sure of this action!!!</h4>
                                                                            <h4>Approving Staff Promotion Application</h4>
                                                                            <h5 class="text-primary">With PFN {{$staff_application->PFN}}</h5>
                                                                            <h5 class="text-success"> Current Grade/Step:</h5>
                                                                            <h2>{{$staff_application->grade_step}}</h2>
                                                                            <form action="{{route('accept_app')}}" method="post">
                                                                                @csrf
                                                                                <input type="hidden" name="pfn" value="{{$staff_application->PFN}}">
                                                                                <input type="hidden" name="category" value="{{$staff_application->category}}">
                                                                                <div class="mb-3">
                                                                                    <label class="form-label">Change the <b> Grade/Step </b></label>
                                                                                    <div class="input-group auth-pass-inputgroup">
                                                                                        <input type="number" class="form-control" name="grade" placeholder="CONUASS / CONTISS" required>
                                                                                    </div>
                                                                                    <br>
                                                                                    <div class="input-group auth-pass-inputgroup">
                                                                                        <input type="number" class="form-control" name="step" placeholder="Step" required>
                                                                                    </div>
                                                                                </div> 
                                                                                <div class="mb-3">
                                                                                    <label class="form-label">Change the <b> Rank </b></label>
                                                                                    <div class="input-group auth-pass-inputgroup">
                                                                                        <input type="text" class="form-control" name="rank" placeholder="Next Rank" required>
                                                                                    </div>
                                                                                     
                                                                                </div> 
                                                                                <button class="btn btn-sm btn-warning mt-3 mb-4">Confirm</button>
                                                                            </form>
                                                                        </center>
                                                                    </div>
                                                                </div><!-- /.modal-content -->
                                                            </div><!-- /.modal-dialog -->
                                                        </div>
                                                        {{-- activate modal stop --}}


                                                        {{-- details modal start --}}
                                                        {{-- <div class="modal fade bs-example-modal-sm{{$staff_application->PFN}}details" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-sm">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title text-danger" id="mySmallModalLabel">Reject Application</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <center>
                                                                            <h4 class="text-danger mb-4">Are sure of this action!!!</h4>
                                                                            <h4>Rejecting Staff Promotion Application</h4>
                                                                            <button class="btn btn-sm btn-danger mt-3 mb-4">Confirm</button>
                                                                        </center>
                                                                    </div>
                                                                </div><!-- /.modal-content -->
                                                            </div><!-- /.modal-dialog -->
                                                        </div> --}}

                                                        <div class="modal fade bs-example-modal-sm{{$staff_application->PFN}}details" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="myLargeModalLabel">Staff Details</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <h4 class="card-title">Staff Details</h4>
                                                                                {{-- <p class="card-title-desc">Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p>     --}}
                                                                                <div class="row">
                                                                                    <div>
                                                                                        <div class="col-md-12" >
                                                                                            <div class="col-md-6"><b>Sex:</b></div>         <div class="col-md-5" style="margin-top: -20px; margin-left: 50%" >{{$staff_application->sex}}</div> 
                                                                                        </div> <hr>

                                                                                        <div class="col-md-12" >
                                                                                            <div class="col-md-6"><b>Date of Birth:</b></div>         <div class="col-md-5" style="margin-top: -20px; margin-left: 50%" >{{$staff_application->DOB}}</div> 
                                                                                        </div> <hr>

                                                                                        <div class="col-md-12" >
                                                                                            <div class="col-md-6"><b>State:</b></div>         <div class="col-md-5" style="margin-top: -20px; margin-left: 50%" >{{$staff_application->state}}</div> 
                                                                                        </div> <hr>

                                                                                        <div class="col-md-12" >
                                                                                            <div class="col-md-6"><b>LGA:</b></div>         <div class="col-md-5" style="margin-top: -20px; margin-left: 50%" >{{$staff_application->LG}}</div> 
                                                                                        </div> <hr>

                                                                                        <div class="col-md-12" >
                                                                                            <div class="col-md-6"><b>Qualification:</b></div>         <div class="col-md-5" style="margin-top: -20px; margin-left: 50%" >{{$staff_application->qualification}}</div> 
                                                                                        </div> <hr>

                                                                                        <div class="col-md-12" >
                                                                                            <div class="col-md-6"><b>Date of First Appointment:</b></div>         <div class="col-md-5" style="margin-top: -20px; margin-left: 50%" >{{$staff_application->date_first_appoint}}</div> 
                                                                                        </div> <hr>

                                                                                        <div class="col-md-12" >
                                                                                            <div class="col-md-6"><b>Date of Present Appointment:</b></div>         <div class="col-md-5" style="margin-top: -20px; margin-left: 50%" >{{$staff_application->date_present_appoint}}</div> 
                                                                                        </div> <hr>

                                                                                        <div class="col-md-12" >
                                                                                            <div class="col-md-6"><b>Rank:</b></div>         <div class="col-md-5" style="margin-top: -20px; margin-left: 50%" >{{$staff_application->rank}}</div> 
                                                                                        </div> <hr>

                                                                                        <div class="col-md-12" >
                                                                                            <div class="col-md-6"><b>Department:</b></div>         <div class="col-md-5" style="margin-top: -20px; margin-left: 50%" >{{$staff_application->department}}</div> 
                                                                                        </div> <hr>

                                                                                        <div class="col-md-12" >
                                                                                            <div class="col-md-6"><b>Nature of Appointment:</b></div>         <div class="col-md-5" style="margin-top: -20px; margin-left: 50%" >{{$staff_application->nature}}</div> 
                                                                                        </div> <hr>

                                                                                        <div class="col-md-12" >
                                                                                            <div class="col-md-6"><b>Station:</b></div>         <div class="col-md-5" style="margin-top: -20px; margin-left: 50%" >{{$staff_application->station}}</div> 
                                                                                        </div> <hr>

                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- /.modal-content -->
                                                            </div><!-- /.modal-dialog -->
                                                        </div><!-- /.modal -->


                                                        
                                                        {{-- details modal stop --}}
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
        <div class="rightbar-overlay"></div>

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
 
         <script src="{{asset('assets/js/app.js')}}"></script>
    </body> 
 </html>
