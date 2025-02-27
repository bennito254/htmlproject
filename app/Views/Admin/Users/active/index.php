<?php
/***
 * Created by Patrick Karungari
 *
 * Github: https://github.com/patrick-Karungari
 * E-Mail: PKARUNGARI@GMAIL.COM
 */

//$users = (new \App\Models\Users());
$users = (new \App\Libraries\Auth())->select('users.id, username, email, phone, account, registration, referred_by, first_name, last_name')->users(2);
//$dd = json_encode($users, JSON_PRETTY_PRINT);
//dd($dd);
?>



<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css"
    href="<?php echo base_url('assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css') ?>">
<link rel="stylesheet" type="text/css"
    href="<?php echo base_url('assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css') ?>">
<link rel="stylesheet" type="text/css"
    href="<?php echo base_url('assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css') ?>">
<!-- END: Vendor CSS-->

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/plugins/forms/form-validation.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/plugins/forms/form-validation.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/pages/app-user.css') ?>">
<!-- END: Page CSS-->



<div class="app-content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- users list start -->
            <section class="app-user-list">
                <!-- users filter start -->
                <div class="card">
                    <h5 class="card-header">Search Filter</h5>
                    <div class="d-flex justify-content-between align-items-center mx-50 row pt-0 pb-2">
                        <div class="col-md-4 user_role"></div>
                        <div class="col-md-4 user_plan"></div>
                        <div class="col-md-4 user_status"></div>
                    </div>
                </div>
                <!-- users filter end -->
                <!-- list section start -->
                <div class="card">
                    <div class="card-datatable table-responsive pt-0">
                        <table class="user-list-table table">
                            <thead class="thead-light">
                                <tr>
                                    <th></th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Balance</th>
                                    <th>Status</th>
                                    <th>Referred By</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <!-- Modal to add new user starts-->
                    <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
                        <div class="modal-dialog">
                            <form class="add-new-user modal-content pt-0">
                                <?php echo csrf_field(); ?>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                                <div class="modal-header mb-1">
                                    <h5 class="modal-title" id="exampleModalLabel">New User</h5>
                                </div>
                                <div class="modal-body flex-grow-1">
                                    <div class="form-group">
                                        <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                                        <input type="text" class="form-control dt-full-name"
                                            id="basic-icon-default-fullname" placeholder="John Doe" name="user-fullname"
                                            aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="basic-icon-default-uname">Username</label>
                                        <input type="text" id="basic-icon-default-uname" class="form-control dt-uname"
                                            placeholder="Web Developer" aria-label="jdoe1"
                                            aria-describedby="basic-icon-default-uname2" name="user-name" />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="basic-icon-default-email">Email</label>
                                        <input type="text" id="basic-icon-default-email" class="form-control dt-email"
                                            placeholder="john.doe@example.com" aria-label="john.doe@example.com"
                                            aria-describedby="basic-icon-default-email2" name="user-email" />
                                        <small class="form-text text-muted"> You can use letters, numbers & periods
                                        </small>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="user-role">User Role</label>
                                        <select id="user-role" class="form-control">
                                            <option value="subscriber">Subscriber</option>
                                            <option value="editor">Editor</option>
                                            <option value="maintainer">Maintainer</option>
                                            <option value="author">Author</option>
                                            <option value="admin">Admin</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="user-plan">Select Plan</label>
                                        <select id="user-plan" class="form-control">
                                            <option value="basic">Basic</option>
                                            <option value="enterprise">Enterprise</option>
                                            <option value="company">Company</option>
                                            <option value="team">Team</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-1 data-submit">Submit</button>
                                    <button type="reset" class="btn btn-outline-secondary"
                                        data-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Modal to add new user Ends-->
                </div>
                <!-- list section end -->
            </section>
            <!-- users list ends -->

        </div>
    </div>
</div>

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>
<script>
document.getElementById("active-users").className += " active";
</script>
<!-- BEGIN: Page Vendor JS-->
<script src="<?php echo base_url('assets/vendors/js/tables/datatable/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendors/js/tables/datatable/dataTables.responsive.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendors/js/tables/datatable/responsive.bootstrap4.js') ?>"></script>
<script src="<?php echo base_url('assets/vendors/js/tables/datatable/datatables.buttons.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendors/js/forms/validation/jquery.validate.min.js') ?>"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->

<!-- END: Page JS-->
