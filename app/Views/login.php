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
                    <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif;?>
                        <!-- Login Title & Content Start -->
                        <div class="section-content text-center mb-5">
                            <h2 class="title mb-2">Login</h2>
                            <p class="desc-content">Please login using account detail bellow.</p>
                        </div>
                        <!-- Login Title & Content End -->

                        <!-- Form Action Start -->
                        <form action="<?php echo base_url() ;?>logincheck" method="post">

                            <!-- Input Email Start -->
                            <div class="single-input-item mb-3">
                                <input type="email" placeholder="Email" name="email">
                            </div>
                            <!-- Input Email End -->

                            <!-- Input Password Start -->
                            <div class="single-input-item mb-3">
                                <input type="password" placeholder="Enter your Password" name="password">
                            </div>
                            <!-- Input Password End -->

                            <!-- Checkbox/Forget Password Start -->
                            <div class="single-input-item mb-3">
                                <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                    
                                    <a href="#" class="forget-pwd mb-3">Forget Password?</a>
                                </div>
                            </div>
                            <!-- Checkbox/Forget Password End -->

                            <!-- Login Button Start -->
                            <div class="single-input-item mb-3">
                                <button class="btn btn btn-dark btn-hover-primary rounded-0">Login</button>
                            </div>
                            <!-- Login Button End -->

                            <!-- Lost Password & Creat New Account Start -->
                            <div class="lost-password">
                                <a href="<?php echo base_url(); ?>Create-Account">Create Account</a>
                            </div>
                            <!-- Lost Password & Creat New Account End -->

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