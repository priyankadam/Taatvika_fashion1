<?= $this->extend("layout/base"); ?>

<?= $this->section('content'); ?>
<div class="section section-margin">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Shop Wrapper Start -->
                <div class="row shop_wrapper grid_4">
                    <!-- Single Product Start -->
                    <?php
                    foreach ($data as $key) {
                    ?>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 product" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-inner">
                                <div class="thumb">
                                    <a href="<?php echo base_url();?>Acces-Product-Details/<?php echo $key['Product_code'] ?>" class="image">
                                        <img class="first-image" src="<?php echo base_url(); ?>/assets/images/uploads/accessories/<?php echo $key['image1']; ?>" alt="Product" />
                                        <img class="second-image" src="<?php echo base_url(); ?>/assets/images/uploads/accessories/<?php echo $key['image2']; ?>" alt="Product" />
                                    </a>

                                </div>
                                <div class="content">

                                    <h4 class="title"><a href="#"><?php echo $key['Product_name'] ?></a></h4>

                                    <h6 class="title"><a href="#"><?php echo $key['Product_code'] ?></a></h6>
                                    <span class="price">
                                        <span class="new">₹.<?php echo $key['Product_price'] ?></span>

                                    </span>
                                    <a href="">
                                            <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button></a>
                                </div>
                            </div>
                        </div>
                        
                    <?php } ?>
                    <!-- Single Product End -->
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>