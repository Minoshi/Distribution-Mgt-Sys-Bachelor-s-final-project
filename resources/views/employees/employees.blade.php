@include('includes/header_start')

<link href="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet"
    type="text/css" />
<link href="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet"
    type="text/css" />
<link href="{{ URL::asset('assets/plugins/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">

<!-- Plugins css -->
<link href="{{ URL::asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}"
    rel="stylesheet" />
<link href="{{ URL::asset('assets/css/custom_checkbox.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/css/jquery.notify.css')}}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('assets/css/mdb.css')}}" rel="stylesheet" type="text/css">

<meta name="csrf-token" content="{{ csrf_token() }}" />


@include('includes/header_end')

<!-- Page title -->
<ul class="list-inline menu-left mb-0">
    <li class="list-inline-item">
        <button type="button" class="button-menu-mobile open-left waves-effect">
            <i class="ion-navicon"></i>
        </button>
    </li>
    <li class="hide-phone list-inline-item app-search">
        <h3 class="page-title">{{ $title }}</h3>
    </li>
</ul>

<div class="clearfix"></div>
</nav>

</div>
<!-- Top Bar End -->
<!-- ================= PAGE CONTENT START================== -->

<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="col-lg-12">
            <!-- table body starts -->
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-10">
                            <form class="form-group">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <input class="form-control border-0" type="search"
                                            placeholder="Search Employee By Name" aria-label="Search">
                                    </div>
                                    <button type="submit"
                                        class="pull-right btn btn-light btn-sm waves-effect waves-light border-0"><i
                                            class="ion-search"></i>
                                        Search
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-2">
                            <button type="submit" class="pull-right btn btn-primary btn-sm waves-effect waves-light"
                                data-toggle="modal" data-target="#addEmployeeModal"><b><i class="ion-plus-round"></i>
                                    Employee</b>
                            </button>
                        </div>
                    </div>
                    <br /><br />
                    <table class="table table-hover">

                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Start date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <!-- DB part -->
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>Manager</td>
                                <td>System@Architect.com</td>
                                <td>0774748564</td>
                                <td>2011/04/25</td>
                                <td><span class="badge badge-default font-14 font-weight-normal">Active</td>
                                <td>
                                    <button type="button" class="btn btn-secondary btn-sm waves-effect"
                                        data-toggle="modal" data-target="#editEmployeeModal" title="Update">
                                        <i class="typcn typcn-edit"></i></button>

                                    <button type="button" class="btn btn-warning btn-sm waves-effect"
                                        data-toggle="modal" data-target="#editEmployeePswdModal"
                                        title="Change Password">
                                        <i class="mdi mdi-key"></i></button>

                                    <button type="button" class="btn btn-danger btn-sm waves-effect waves-light"
                                        title="Deativate">
                                        <i class="typcn typcn-lock-closed"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- pagination starts -->
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-end">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <!-- pagination hard coded -->
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- pagination ends -->
                </div>
            </div>
        </div>
    </div><!-- container -->
</div> <!-- Page content Wrapper -->
@include('employees/add')
@include('employees/edit')
@include('employees/change_password')

@include('includes/footer_start')

<script src="{{ URL::asset('assets/js/bootstrap.js')}}"></script>
<script src="{{ URL::asset('assets/js/app.js')}}"></script>

@include('includes/footer_end')