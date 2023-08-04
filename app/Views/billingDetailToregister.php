<?= $this->extend("layout/base"); ?>

<?= $this->section('content'); ?>
<div class="section section-margin">
    <div class="container">
        <div class="row mb-n10">
            <div class="" style="border: 5px solid;margin: auto;width: 50%;padding: 10px;">
                <!-- Checkbox Form Start -->
                <form action="<?php echo base_url() ?>ContinueToPayment" method="post">
                    <div class="checkbox-form">
                     
                        <!-- Checkbox Form Title Start -->
                        <h3 class="title" >Billing Details</h3>
                        <!-- Checkbox Form Title End -->
                        <h6 style="color:goldenrod;">Please Enter Following detail first</h6>
                        <div class="row">
                            <?php
                            if ((session()->has('logged1_info'))) {
                                $data = session()->get('logged1_info');
                                $userid = $data['user_id'];
                            }
                            ?>

                            <!-- First Name Input Start -->
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <input type="hidden" value="<?php echo  $userid ?>" name="userid">
                                    <label>First Name <span class="required">*</span></label>
                                    <input placeholder="Enter Your Name" type="text" name="name" required >
                                </div>
                            </div>
                            <!-- First Name Input End -->

                            <!-- Last Name Input Start -->
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Last Name <span class="required">*</span></label>
                                    <input placeholder="Enter Last Name" type="text" name="lname" required >
                                </div>
                            </div>
                            <!-- Last Name Input End -->



                            <!-- Address Input Start -->
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Address <span class="required">*</span></label>
                                    <input placeholder="Street address" type="text" name="address" required>
                                </div>
                            </div>
                            <!-- Address Input End -->


                            <!-- Email Address Input Start -->
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Email Address <span class="required">*</span></label>
                                    <input placeholder="Enter Mail Id" type="email" name="email"  required>
                                </div>
                            </div>
                            <!-- Email Address Input End -->

                            <!-- Phone Number Input Start -->
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Contact <span class="required">*</span></label>
                                    <input type="text" placeholder="Enter Mobile Number" name="phone" required >
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