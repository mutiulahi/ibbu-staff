@extends('layout/head')
@section('title','View Staff | IBBUL - Staff Admin Record')   
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
                                    <h4 class="mb-sm-0 font-size-18">View Staff</h4>
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
        
                                        <h4 class="card-title">Staff Detail</h4>
                                        <p class="card-title-desc">
                                        </p>
        
                                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                <th>Name</th>
                                                <th>Sex</th>
                                                <th>PFN</th>
                                                <th>Rank</th>
                                                <th>Qualification</th> 
                                                <td>Date of Birth</td>
                                                <td>State</td>
                                                <td>Local Government</td>
                                                <td>Nature of Appointment</td>
                                                <td>Date of First Appointment</td>
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
                                                        <td>{{$staff_details->status}}</td>
                                                        <td>
                                                            <button class="btn btn-sm btn-danger">Deactivate</button> 
                                                            <button class="btn btn-sm btn-success">active</button>
                                                        </td>
                                                        <td>{{$staff_details->name}}</td>
                                                        <td>{{$staff_details->sex}}</td>
                                                        <td>{{$staff_details->PFN}}</td>
                                                        <td>{{$staff_details->rank}}</td>
                                                        <td>{{$staff_details->qualification}}</td>
                                                        <td>{{$staff_details->DOB}}</td>
                                                        <td>{{$staff_details->state}}</td>
                                                        <td>{{$staff_details->LG}}</td>
                                                        <td>{{$staff_details->nature}}</td>
                                                        <td>{{$staff_details->date_first_appoint}}</td>
                                                        <td>{{$staff_details->date_present_appoint}}</td>
                                                        <td>{{$staff_details->station}}</td> 
                                                        
                                                    </tr>
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
