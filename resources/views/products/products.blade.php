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

    </li>
</ul>

<div class="clearfix"></div>
</nav>

</div>
<!-- Top Bar End -->

<!-- ==================
     PAGE CONTENT START
     ================== -->

<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="col-lg-12">
            <!-- body header starts -->
            <div class="card m-b-20">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-11">
                            <h4>Products</h4>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light" data-toggle="modal"
                                data-target="#addProductModal"><i class="ion-plus-round"></i>
                                 Product
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            <!-- body header ends -->

            <!-- table body starts -->
            <div class="card m-b-30">
                <div class="card-body">

                    <table class="table table-hover">

                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>


                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>
                                    <button type="button" class="btn btn-secondary waves-effect" data-toggle="modal"
                                        data-target="#editProductModal">
                                        <i class="ion-ios7-compose-outline"></i></button>

                                    <button type="button" class="btn btn-danger waves-effect waves-light"
                                        id="sa-params"><i class="ion-ios7-trash-outline"></i></button>

                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>
                                    <button type="button" class="btn btn-secondary waves-effect"><i
                                            class="ion-ios7-compose-outline"></i></button>
                                    <button type="button" class="btn btn-danger waves-effect waves-light"><i
                                            class="ion-ios7-trash-outline"></i></button>
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

<div class="col-sm-6 col-md-3 m-t-30">
    <!--  Modal content for the add product -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" id="addProductModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Create Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form class="" action="#">
                        <div class="form-group">
                            <label>Required</label>
                            <input type="text" class="form-control" required placeholder="Type something" />
                        </div>
                        <div class="form-group">
                            <label>Equal To</label>
                            <div>
                                <input type="password" id="pass2" class="form-control" required
                                    placeholder="Password" />
                            </div>
                            <div class="m-t-10">
                                <input type="password" class="form-control" required data-parsley-equalto="#pass2"
                                    placeholder="Re-Type Password" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>E-Mail</label>
                            <div>
                                <input type="email" class="form-control" required parsley-type="email"
                                    placeholder="Enter a valid e-mail" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>URL</label>
                            <div>
                                <input parsley-type="url" type="url" class="form-control" required placeholder="URL" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Digits</label>
                            <div>
                                <input data-parsley-type="digits" type="text" class="form-control" required
                                    placeholder="Enter only digits" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Number</label>
                            <div>
                                <input data-parsley-type="number" type="text" class="form-control" required
                                    placeholder="Enter only numbers" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alphanumeric</label>
                            <div>
                                <input data-parsley-type="alphanum" type="text" class="form-control" required
                                    placeholder="Enter alphanumeric value" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Textarea</label>
                            <div>
                                <textarea required class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alphanumeric</label>
                            <div>
                                <input data-parsley-type="alphanum" type="text" class="form-control" required
                                    placeholder="Enter alphanumeric value" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Textarea</label>
                            <div>
                                <textarea required class="form-control" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                        </div>
                        <div class="modal-footer" >
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Create</button>
                            <button type="button" class="btn btn-secondary waves-effect"
                                data-dismiss="modal">Close</button>

                        </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>

</div>
</form>
</div>
</div>
</div>
</div>

<div class="modal fade" id="editProductModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Edit product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                </button>
            </div>
            <div class="modal-body">
            </div>
        </div>
    </div>
</div>

@include('includes/footer_start')

<!-- Plugins js -->
<script src="{{ URL::asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js')}}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}" type="text/javascript">
</script>
<script src="{{ URL::asset('assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')}}"
    type="text/javascript"></script>
<script src="{{ URL::asset('assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')}}"
    type="text/javascript"></script>

<!-- Plugins Init js -->
<script src="{{ URL::asset('assets/pages/form-advanced.js')}}"></script>

<!-- Required datatable js -->
<script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{ URL::asset('assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/jszip.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/pdfmake.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/vfs_fonts.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/buttons.html5.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/buttons.print.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/buttons.colVis.min.js')}}"></script>
<!-- Responsive examples -->
<script src="{{ URL::asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
<!-- Sweet-Alert  -->
<script src="{{ URL::asset('assets/plugins/sweet-alert2/sweetalert2.min.js')}}"></script>
<script src="{{ URL::asset('assets/pages/sweet-alert.init.js')}}"></script>

<!-- Datatable init js -->
<script src="{{ URL::asset('assets/pages/datatables.init.js')}}"></script>

<!-- Parsley js -->
<script type="text/javascript" src="{{ URL::asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/bootstrap-notify.js')}}"></script>
<script src="{{ URL::asset('assets/js/jquery.notify.min.js')}}"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('form').parsley();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

});
$(document).on("wheel", "input[type=number]", function(e) {
    $(this).blur();
});
</script>


@include('includes/footer_end')