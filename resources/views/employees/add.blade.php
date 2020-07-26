<div class="col-sm-6 col-md-3 m-t-30">
    <!--  Modal content for the add Employee -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" id="addEmployeeModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Create Employee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form class="" action="#">

                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" required placeholder="Enter Your Name" />
                        </div>
                        <div class="form-group">
                            <label>NIC</label>
                            <input type="text" class="form-control" required placeholder="Enter Your NIC" />
                        </div>
                        <div class="form-group">
                            <label>Position</label>
                            <input type="text" class="form-control" required placeholder="Enter Your Position" />
                        </div>
                        <div class="form-group">
                            <label>E-Mail</label>
                            <div>
                                <input type="email" class="form-control" required parsley-type="email"
                                    placeholder="Enter Your E-Mail" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <div>
                                <input data-parsley-type="number" type="text" class="form-control" required
                                    placeholder="Enter Your Phone Number" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <div>
                                <textarea required class="form-control" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Create</button>
                            <button type="button" class="btn btn-secondary waves-effect"
                                data-dismiss="modal">Cancel</button>

                        </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
</div>