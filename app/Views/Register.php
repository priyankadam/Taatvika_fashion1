<?= $this->extend("layout/base"); ?>

<?= $this->section('content'); ?>

<style>
@media screen and (min-width: 768px) {
    .login-wrapper
    {
        margin: auto;
    width: 40%;
    background: #ffffffa1 none repeat scroll 0 0;
    box-shadow: 0px 0px 20px 0px black;
    padding: 50px;
    border-radius: 10px;
    }
}
@media screen and (max-width: 767px) {
     .login-wrapper
    {
        margin: auto;
    width: 100%;
    background: #ffffffa1 none repeat scroll 0 0;
    box-shadow: 0px 0px 20px 0px black;
    padding: 50px;
    border-radius: 10px;
    }
}
body
{
    background: url('assets/images/bg.jpg');
}
</style>
<!-- Login | Register Section Start -->
<div class="section section-margin">
    <div class="container">

        <div class="row mb-n10">
            <div class="col-lg-12 col-md-12  col-12 m-auto m-lg-0 pb-10">
                <!-- Login Wrapper Start -->
                <div class="login-wrapper">

                    <!-- Login Title & Content Start -->
                    <div class="section-content text-center mb-5">
                        <h2 class="title mb-2">Create Account</h2>
                        <p class="desc-content">Please Register using account detail bellow.</p>
                    </div>
                    <!-- Login Title & Content End -->

                    <form action="<?php echo base_url() ?>Register" method="post">
                        <?php if (isset($validation)) : ?>
                            <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                        <?php endif; ?>
                        <!-- Input First Name Start -->
                        <div class="single-input-item mb-3">
                            <input type="text" placeholder="First Name" name="name" required>
                        </div>
                        <!-- Input First Name End -->

                        <!-- Input Last Name Start -->
                        <div class="single-input-item mb-3">
                            <input type="text" placeholder="Last Name" name="lname" required>
                        </div>
                        <!-- Input Last Name End -->
                        <!-- Input phone Start -->
                        <div class="single-input-item mb-3">
                            <input type="text" placeholder="Your Number" name="phone" required>
                        </div>
                        <!-- Input phone End -->

                        <!-- Input Email Or Username Start -->
                        <div class="single-input-item mb-3">
                            <input type="email" placeholder="Email" name="email">
                        </div>
                        <!-- Input Email Or Username End -->

                        <!-- Input Password Start -->
                        <div class="single-input-item mb-3">
                            <input type="password" placeholder="Enter your Password" name="password">
                        </div>
                        <!-- Input Password End -->

                        <!-- Checkbox & Subscribe Label Start -->
                        <div class="single-input-item mb-3">
                            <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                <div class="remember-meta mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="rememberMe-2">
                                        <label class="custom-control-label" for="rememberMe-2">Subscribe Our Newsletter</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Checkbox & Subscribe Label End -->

                        <!-- Register Button Start -->
                        <div class="single-input-item mb-3">
                            <button type="submit" class="btn btn btn-dark btn-hover-primary rounded-0">Register</button>
                        </div>
                        <!-- Register Button End -->

                    </form>
                    <!-- Form Action End -->

                </div>
                <!-- Login Wrapper End -->
            </div>

        </div>

    </div>
</div>
<!-- Login | Register Section End -->

<?= $this->endSection(); ?>