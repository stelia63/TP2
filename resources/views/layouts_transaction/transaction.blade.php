<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kofejob.dreamstechnologies.com/html/template/admin/transaction.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jun 2024 21:17:28 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Kofejob - Bootstrap Admin HTML Template</title>

    <link rel="shortcut icon" href="assets3/img/favicon.png">

    <link rel="stylesheet" href="assets3/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets3/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets3/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets3/css/feather.css">

    <link rel="stylesheet" href="assets3/css/bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" href="assets3/plugins/datatables/datatables.min.css">

    <link rel="stylesheet" href="assets3/css/style.css">
</head>

<body>

    <div class="main-wrapper">

       @include('layouts_transaction.header')


        <div class="sidebar" id="sidebar">
            {{-- sidebar --}}
         @include('layouts_transaction.sidebar')
        </div>


        <div class="page-wrapper">
           @include('layouts_transaction.content')
        </div>

    </div>


    <div class="modal fade transaction-modal" id="transaction-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header flex-wrap">
                    <div class="transaction-group">
                        <div class="head-transaction">
                            <h4>Transaction</h4>
                            <p> #TNX24586414</p>
                        </div>
                        <div class="complete-btn">
                            <a href="javascript:void(0);" class="btn btn-primary">Completed</a>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="table-avatar user-profile invest-acount">
                        <a href="profile.html"><img class="exchange case-icon" src="assets3/img/icon/icon-15.svg"
                                alt="Img">
                            <div>
                                <h5>200.00 USDT</h5>
                                <p class="receive-date">Apr 25, 2022 11:01 AM</p>
                            </div>
                        </a>
                    </div>
                    <div class="acount-transaction">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="basic-info ">
                                    <h4>IN ACCOUNT</h4>
                                    <div class="additional-info">
                                        <p> Amount </p>
                                        <h5>6,335.006 USD</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p>Fees </p>
                                        <h5>0.00 USD</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p> Freelancer Investment </p>
                                        <h5>6,335.006 USD</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p> Freelancer Account </p>
                                        <h5>UID00003</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p> Freelancer Email </p>
                                        <h5><a href="https://kofejob.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="b0c7d9dcdcd9d1ddf0d5c8d1ddc0dcd59ed3dfdd">[email&#160;protected]</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="basic-info">
                                    <h4>IN TRANSACTION</h4>
                                    <div class="additional-info">
                                        <p> Amount </p>
                                        <h5>6,335.006 USD</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p>Fees </p>
                                        <h5>0.00 USD</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p> Total Investment </p>
                                        <h5>6,335.006 USD</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p> Freelancer Account </p>
                                        <h5>UID00003</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p> Freelancer Email </p>
                                        <h5><a href="https://kofejob.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="e3948a8f8f8a828ea3869b828e938f86cd808c8e">[email&#160;protected]</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="basic-info additional-detail top-border">
                                    <h4>Order Details</h4>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="additional-info">
                                                <p>Order Date</p>
                                                <h5>Mar 13, 2022</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="additional-info">
                                                <p> Placed By</p>
                                                <h5>UID00001 </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="basic-info additional-detail">
                                    <h4 class="mt-0">Additional Details</h4>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="additional-info">
                                                <p>Transaction Type</p>
                                                <h5>Deposit</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="additional-info">
                                                <p> Payment Gateway</p>
                                                <h5>Paypal </h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="additional-info">
                                                <p>Payment To</p>
                                                <h5> usdttest87i2UK3JUWzR7iy6z5eRrxbAeT</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="basic-info additional-detail">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="additional-info">
                                                <p>Updated Balance</p>
                                                <h5 class="active-balance">13,144.626 USD</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade custom-modal" id="add-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header flex-wrap">
                    <div class="text-center w-100 mb-3">
                        <img src="assets3/img/logo-small.png" alt="Img">
                    </div>
                    <h4 class="modal-title">Add New User</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>User Type</label>
                            <select class="form-control form-select">
                                <option>Select</option>
                                <option>Frontend Developer</option>
                                <option>Graphic Designer</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade custom-modal" id="edit-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header flex-wrap">
                    <div class="text-center w-100 mb-3">
                        <img src="assets3/img/logo-small.png" alt="Img">
                    </div>
                    <h4 class="modal-title">Edit User</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" value=" George Wells">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" value="georgewells@example.com">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" value="*******">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" value="********">
                        </div>
                        <div class="form-group">
                            <label>User Type</label>
                            <select class="form-control form-select">
                                <option>Select</option>
                                <option selected>Frontend Developer</option>
                                <option>Graphic Designer</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal custom-modal fade" id="delete_category" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal"
                                    class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets3/js/jquery-3.7.1.min.js" type="eb7e0fadf289d11f92307d50-text/javascript"></script>

    <script src="assets3/js/bootstrap.bundle.min.js" type="eb7e0fadf289d11f92307d50-text/javascript"></script>

    <script src="assets3/js/feather.min.js" type="eb7e0fadf289d11f92307d50-text/javascript"></script>

    <script src="assets3/plugins/slimscroll/jquery.slimscroll.min.js" type="eb7e0fadf289d11f92307d50-text/javascript"></script>

    <script src="assets3/plugins/select2/js/select2.min.js" type="eb7e0fadf289d11f92307d50-text/javascript"></script>

    <script src="assets3/plugins/moment/moment.min.js" type="eb7e0fadf289d11f92307d50-text/javascript"></script>
    <script src="assets3/js/bootstrap-datetimepicker.min.js" type="eb7e0fadf289d11f92307d50-text/javascript"></script>

    <script src="assets3/plugins/datatables/jquery.dataTables.min.js" type="eb7e0fadf289d11f92307d50-text/javascript"></script>
    <script src="assets3/plugins/datatables/datatables.min.js" type="eb7e0fadf289d11f92307d50-text/javascript"></script>

    <script src="assets3/js/script.js" type="eb7e0fadf289d11f92307d50-text/javascript"></script>
    <script src="{{asset('scripts3/7d0fa10a/cloudflare-static/rocket-loader.min.js')}}"
        data-cf-settings="eb7e0fadf289d11f92307d50-|49" defer></script>
</body>

<!-- Mirrored from kofejob.dreamstechnologies.com/html/template/admin/transaction.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jun 2024 21:17:29 GMT -->

</html>
