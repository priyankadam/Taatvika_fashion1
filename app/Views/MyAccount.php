<?= $this->extend("layout/base"); ?>

<?= $this->section('content'); ?>
<?php if (isset($msg)) {
    echo '<script>alert("Address Updated Successfully")</script>';
} ?>
<div class="message"></div>
<!-- My Account Section Start -->
<div class="section section-margin">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">

                <!-- My Account Page Start -->
                <div class="myaccount-page-wrapper">
                    <!-- My Account Tab Menu Start -->
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="myaccount-tab-menu nav" role="tablist">
                                <!-- <a href="#dashboad" class="active" data-bs-toggle="tab"><i class="fa fa-dashboard"></i>
                                        Dashboard</a> -->
                                <a href="#orders" class="active" data-bs-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>
                                <!-- <a href="#download" data-bs-toggle="tab"><i class="fa fa-cloud-download"></i> Download</a> -->
                                <a href="#address-edit" data-bs-toggle="tab"><i class="fa fa-map-marker"></i> Your Address</a>
                                <a href="#payment-method" data-bs-toggle="tab"><i class="fa fa-pencil"></i> Change Your Address</a>


                                <!-- <a href="#account-info" data-bs-toggle="tab"><i class="fa fa-user"></i> Account Details</a> -->
                                <!-- <a href="login-register.html"><i class="fa fa-sign-out"></i> Logout</a> -->
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->

                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-md-8">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <!-- <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3 class="title">Dashboard</h3>
                                            <div class="welcome">
                                                <p>Hello, <strong>Alex Aya</strong> (If Not <strong>Aya !</strong><a href="login-register.html" class="logout"> Logout</a>)</p>
                                            </div>
                                            <p class="mb-0">From your account dashboard. you can easily check & view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
                                        </div>
                                    </div> -->
                                <!-- Single Tab Content End -->
                                <?php
                                if ((session()->has('logged_info'))) {
                                    $data = session()->get('logged_info');
                                    $cart = $data['user_id'];
                                    // echo "<br/><a href='logout.php'>logout</a>";
                                    $db = db_connect();
                                    $result = $db->query("select * from checkout where user_id=$cart and status=1");

                                    $query = $result->getResultArray();
                                }
                                ?>
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="orders" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3 class="title">Orders</h3>


                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Order</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                        <th>Add Review</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php

                                                    if (isset($query)) {
                                                        $i = 1;
                                                        foreach ($query as $mydata) { ?>



                                                            <tr>
                                                                <td><?= $i++; ?></td>
                                                                <td><?= $mydata['transaction_date']; ?></td>
                                                                <td><?= $mydata['order_status']; ?></td>
                                                                <td><?= $mydata['total_amount']; ?></td>
                                                                <td><button class="btn btn-sm btn-outline-dark btn-hover-primary" id="review" attrid="<?= $mydata['ProductCode']; ?>">Review</button></td>
                                                            </tr>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </tbody>


                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="download" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3 class="title">Downloads</h3>
                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Date</th>
                                                        <th>Expire</th>
                                                        <th>Download</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Haven - Free Real Estate PSD Template</td>
                                                        <td>Aug 22, 2023</td>
                                                        <td>Yes</td>
                                                        <td><a href="#" class="btn btn btn-dark btn-hover-primary rounded-0"><i class="fa fa-cloud-download me-1"></i> Download File</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>HasTech - Profolio Business Template</td>
                                                        <td>Sep 12, 2023</td>
                                                        <td>Never</td>
                                                        <td><a href="#" class="btn btn btn-dark btn-hover-primary rounded-0"><i class="fa fa-cloud-download me-1"></i> Download File</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                                <?php
                                if ((session()->has('logged_info'))) {
                                    $data = session()->get('logged_info');
                                    $cart = $data['user_id'];
                                ?>
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                        <form method="post" action="<?php echo base_url(); ?>EditAddress">
                                            <div class="myaccount-content">
                                                <?php $db = db_connect();
                                                $result = $db->query("select * from register_user where user_id=$cart");

                                                $query = $result->getResultArray();
                                                foreach ($query as $addressData) {
                                                ?>
                                                    <h3 class="title">Your Current Address</h3>
                                                    <input type="hidden" value="<?= $addressData['user_id']; ?>" name="userid">
                                                    <div class="col-lg-6">
                                                        <div class="single-input-item mb-3">
                                                            <textarea rows="5" cols="50" name="address"><?= $addressData['address']; ?> </textarea><br>
                                                        </div>
                                                    </div>
                                                    <div class="single-input-item single-item-button">
                                                        <button class="btn btn btn-dark btn-hover-primary rounded-0">Save Changes</button>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Single Tab Content End -->
                                <?php }
                                ?>
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                    <div class="myaccount-content">
                                        <?php $db = db_connect();

                                        if ((session()->has('logged_info'))) {
                                            $data = session()->get('logged_info');
                                            $cart = $data['user_id'];

                                            $result = $db->query("select * from register_user where user_id=$cart");

                                            $query = $result->getResultArray();
                                            foreach ($query as $addressData) {
                                        ?>
                                                <h3 class="title">Billing Address</h3>
                                                <address>
                                                    <p><strong><?= $addressData['firstname'] . '  ' . $addressData['lastname']; ?></strong></p>

                                                    <p><?= $addressData['address']; ?></p>
                                                </address>

                                        <?php }
                                        } ?>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                                <div class="tab-pane fade" id="address-info-data" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3 class="title">Address Details1</h3>
                                        <div class="account-details-form">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="single-input-item mb-3">
                                                            <label for="first-name" class="required mb-1">Address</label>
                                                            <textarea rows="4" cols="50"><?= $addressData['address']; ?></textarea>
                                                        </div>
                                                        <!--  </div>
                                                        <div class="col-lg-6">
                                                            <div class="single-input-item mb-3">
                                                                <label for="last-name" class="required mb-1">Last Name</label>
                                                                <input type="text" id="last-name" placeholder="Last Name" />
                                                            </div> -->
                                                    </div>
                                                </div>
                                                <!-- <div class="single-input-item mb-3">
                                                        <label for="display-name" class="required mb-1">Display Name</label>
                                                        <input type="text" id="display-name" placeholder="Display Name" />
                                                    </div>
                                                    <div class="single-input-item mb-3">
                                                        <label for="email" class="required mb-1">Email Addres</label>
                                                        <input type="email" id="email" placeholder="Email Address" />
                                                    </div> -->

                                                <div class="single-input-item single-item-button">
                                                    <button class="btn btn btn-dark btn-hover-primary rounded-0">Save Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content Start -->
                                <!-- <div class="tab-pane fade" id="account-info" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3 class="title">Account Details</h3>
                                            <div class="account-details-form">
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="single-input-item mb-3">
                                                                <label for="first-name" class="required mb-1">First Name</label>
                                                                <input type="text" id="first-name" placeholder="First Name" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="single-input-item mb-3">
                                                                <label for="last-name" class="required mb-1">Last Name</label>
                                                                <input type="text" id="last-name" placeholder="Last Name" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-input-item mb-3">
                                                        <label for="display-name" class="required mb-1">Display Name</label>
                                                        <input type="text" id="display-name" placeholder="Display Name" />
                                                    </div>
                                                    <div class="single-input-item mb-3">
                                                        <label for="email" class="required mb-1">Email Addres</label>
                                                        <input type="email" id="email" placeholder="Email Address" />
                                                    </div>
                                                    <fieldset>
                                                        <legend>Password change</legend>
                                                        <div class="single-input-item mb-3">
                                                            <label for="current-pwd" class="required mb-1">Current Password</label>
                                                            <input type="password" id="current-pwd" placeholder="Current Password" />
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item mb-3">
                                                                    <label for="new-pwd" class="required mb-1">New Password</label>
                                                                    <input type="password" id="new-pwd" placeholder="New Password" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item mb-3">
                                                                    <label for="confirm-pwd" class="required mb-1">Confirm Password</label>
                                                                    <input type="password" id="confirm-pwd" placeholder="Confirm Password" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div class="single-input-item single-item-button">
                                                        <button class="btn btn btn-dark btn-hover-primary rounded-0">Save Changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>  -->
                                <!-- Single Tab Content End -->
                            </div>
                        </div> <!-- My Account Tab Content End -->




                    </div>
                </div>
                <!-- My Account Page End -->

            </div>
        </div>

    </div>
</div>
<!-- My Account Section End -->
<div class="modal" tabindex="-1" id="editModal">
    <div class="modal-dialog">
    <form method="post" class="row  comment-form-area" action="" id="update_form" enctype="multipart/form-data">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Review</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <h5 class="">Product Name: <span class="ProductName"></span></h5>
                                <input type="hidden" id="PC" name="PC" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <div><span class="image1"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 account-details-form">
                        <div class="comment-form-comment mb-3">
                                <label for="user_id">Add Your Valuable Review *</label><small id="error_name" class="text-danger ms-3"></small>
                                <textarea rows="5" cols="50" name="review" id="addre" class="comment-notes"></textarea><br>
                            </div>
                        </div>
                    </div>

                </div>
                
                  
                <div class="comment-form-submit modal-footer">
                                                    <button type="submit" class="btn btn-dark btn-hover-primary">Submit</button>
                                                </div>
               
            </form>

        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).on('submit', '#update_form', function(e) {
        // alert('ok');
        e.preventDefault();
        if ($.trim($('#addre').val()).length == 0) {
            // alert('ok');
            error_name = 'Please Enter your review about product';
            $('#error_name').text(error_name);
        } else {
            error_name = '';
            $('#error_name').text(error_name);
        }
        if (error_name != '') {
            return false;
        } else {
            var formData = new FormData(this);
            $.ajax({
                url: "<?php echo base_url('/submitreview'); ?>",
                dataType: 'json',
                method: 'post',
                processData: false,
                contentType: false,
                cache: false,
                data: formData,
                enctype: 'multipart/form-data',
                success: function(response) {
                    alert(response.success);
                    location.reload();

                    $('.message').append(' <div class="alert alert-success alert-dismissible fade show" role="alert"><strong>' + response.success + '</strong> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                }
            });
        }

    });
    $(document).on('click', '#review', function() {
        let PC = $(this).attr('attrid');
        // alert(PC);
        $.ajax({
            type: "post",
            url: "<?php echo base_url('addReview') ?> ",
            data: {
                'PC': PC,
            },
            dataType: "JSON",
            success: function(response) {
                // var response = JSON.parse(response);
                //  alert(response);
                // $('.ProductName').text(response.Product_name);
                // alert(response[0]['Product_name']);
                // var id = response;
                // // alert(id);
                // // $('#Profiletable tbody').empty();
                // load();
                // // $('#mainTable').DataTable().ajax.reload();
                // $('.buildcoursediv').removeClass('d-none');
                $('#PC').val(response[0]['ProductCode']);
                $('.ProductName').text(response[0]['Product_name']);
                $('.image1').html("<img width='100' src='https://mediventurz.com/sirsonite/Taatvika_fashion/assets/images/uploads/" + response[0]['folder'] + "/" + response[0]['image1'] + "'>");
                $('#editModal').modal('show');
            }
        });

    });

    function menuTab() {
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    hamburger.addEventListener("click", menuTab);
</script>

<?= $this->endSection(); ?>