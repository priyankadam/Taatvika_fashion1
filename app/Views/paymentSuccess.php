<?= $this->extend("layout/base"); ?>

<?= $this->section('content'); ?>

<div class="section section-margin">
    <div class="container">
    <div class="row mb-n10">
            <div class="col-lg-12 col-md-12  col-12 m-auto m-lg-0 pb-10">
                <!-- Login Wrapper Start -->
                <div class="login-wrapper" style="border: 5px solid;margin: auto;width: 50%;padding: 10px;">

                <!-- Checkbox Form Start -->
                <form action="<?php echo base_url() ?>RegisterUS" method="post">
                    <div class="checkbox-form">

                        <!-- Checkbox Form Title Start -->
                        <h3 class="title">Billing Details</h3>
                        <!-- Checkbox Form Title End -->

                        <div class="row">
                            

                            <!-- First Name Input Start -->
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>First Name <span class="required">*</span></label>
                                    <input placeholder="Enter Name" type="text" name="name">
                                </div>
                            </div>
                            <!-- First Name Input End -->

                            <!-- Last Name Input Start -->
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Last Name <span class="required">*</span></label>
                                    <input placeholder="" type="text" name="lname">
                                </div>
                            </div>
                            <!-- Last Name Input End -->



                            <!-- Address Input Start -->
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Address <span class="required">*</span></label>
                                    <input placeholder="Street address" type="text">
                                </div>
                            </div>
                            <!-- Address Input End -->


                            <!-- Email Address Input Start -->
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Email Address <span class="required">*</span></label>
                                    <input placeholder="" type="email" name="email">
                                </div>
                            </div>
                            <!-- Email Address Input End -->

                            <!-- Phone Number Input Start -->
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Phone <span class="required">*</span></label>
                                    <input type="text" placeholder="" name="phone">
                                </div>
                            </div>
                            <!-- Phone Number Input End -->

                            <!-- Register Button Start -->
                        <div class="single-input-item mb-3">
                            <button type="submit" class="btn btn btn-dark btn-hover-primary rounded-0">Save</button>
                        </div>
                        <!-- Register Button End -->
                        </div>

                        
                    </div>
                </form>
                <!-- Checkbox Form End -->

            </div>

            
        
        </div>
    </div>
</div>  
<?= $this->endSection(); ?>