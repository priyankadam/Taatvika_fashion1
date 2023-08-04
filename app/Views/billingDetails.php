<?= $this->extend("layout/base"); ?>

<?= $this->section('content'); ?>
<div class="section section-margin">
    <div class="container">
        <div class="row mb-n10">
            <div class="" style="border: 5px solid;margin: auto;width: 50%;padding: 10px;">
                <!-- Checkbox Form Start -->
                <form action="<?php echo base_url() ?>Continue-To-Payment" method="post">
                    <div class="checkbox-form">
                     
                        <!-- Checkbox Form Title Start -->
                        <h3 class="title" >Billing Details</h3>
                        <!-- Checkbox Form Title End -->
                        <h6 style="color:goldenrod;">Please Enter Complete Address </h6>
                        <div class="row">
                            <?php
                            if ((session()->has('logged_info'))) {
                                $data = session()->get('logged_info');
                                $userid = $data['user_id'];


                                $db  = \Config\Database::connect();
                                $fetch_userDet = $db->query("SELECT * FROM register_user WHERE user_id='$userid' ");
                                foreach ($fetch_userDet->getResult() as $key) {
                                    $firstname = $key->firstname;
                                    $lastname = $key->lastname;
                                    $contact = $key->contact;
                                    $email = $key->email;
                                    $address=$key->address;
                                }
                            }
                            ?>

                            <!-- First Name Input Start -->
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <input type="hidden" value="<?php echo  $userid ?>" name="userid">
                                    <label>First Name <span class="required">*</span></label>
                                    <input placeholder="<?php if (isset($firstname)) {
                                                            echo $firstname;
                                                        } else {
                                                            echo "";
                                                        } ?>" type="text" name="name"  readonly>
                                </div>
                            </div>
                            <!-- First Name Input End -->

                            <!-- Last Name Input Start -->
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Last Name <span class="required">*</span></label>
                                    <input placeholder="<?php if (isset($lastname)) {
                                                            echo $lastname;
                                                        } else {
                                                            echo "";
                                                        } ?>" type="text" name="lname"  readonly>
                                </div>
                            </div>
                            <!-- Last Name Input End -->



                            <!-- Address Input Start -->
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Address <span class="required">*</span></label>
                                    <input value="<?php if (isset($address)) {
                                                            echo $address;
                                                        } else {
                                                            echo "";
                                                        } ?>" type="text" name="address" required>
                                </div>
                            </div>
                            <!-- Address Input End -->


                            <!-- Email Address Input Start -->
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Email Address <span class="required">*</span></label>
                                    <input placeholder="<?php if (isset($email)) {
                                                            echo $email;
                                                        } else {
                                                            echo "";
                                                        } ?>" type="email" name="email"  readonly>
                                </div>
                            </div>
                            <!-- Email Address Input End -->

                            <!-- Phone Number Input Start -->
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Phone <span class="required">*</span></label>
                                    <input type="text" placeholder="<?php if (isset($contact)) {
                                                                        echo $contact;
                                                                    } else {
                                                                        echo "";
                                                                    } ?>" name="phone"  readonly>
                                </div>
                            </div>
                            <!-- Phone Number Input End -->
                           
                            <!-- Checkout Form List checkbox Start -->
                            <div class="col-md-12">       
                                    <input type="submit" Value="Continue To Payment">                             
                            </div>
                            <!-- Checkout Form List checkbox End -->

                        </div>


                    </div>
                </form>
                <!-- Checkbox Form End -->

            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>