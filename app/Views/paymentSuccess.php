<?= $this->extend("layout/base"); ?>

<?= $this->section('content'); ?>

<div class="section section-margin">
    <div class="container">
    <div class="row mb-n10">
            <div class="col-lg-12 col-md-12  col-12 m-auto m-lg-0 pb-10">
                <!-- Login Wrapper Start -->
                <div class="login-wrapper" style="border: 5px solid;margin: auto;width: 50%;padding: 10px;">

        
                <h4 class="text-center text-dark mt-4">Payment <span style="color:#ff4f01">Successfull ! </span></h4>
            <p class="text-center">Thank You, your payment transaction was successfull.</p>
            <p class="text-center">Confirmation message will be sent to your registered email address</p>
            <div class="text-center">
            <a href="<?=base_url('/') ?>" style="background:#131d3b;" class="btn text-light mt-4">Home Page </a>

            </div>

            
        
        </div>
    </div>
</div>  
<?= $this->endSection(); ?>