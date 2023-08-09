<?= $this->extend("layout/base"); ?>

<?= $this->section('content'); ?>
<?php
$session = session();
if ((session()->has('msg'))) { ?>
    <div class="alertbox">

        <?php

        echo '<script>alert("Payment Completed")</script>';

        ?>
    </div>

<?php } ?>

<!-- Hero/Intro Slider Start -->
<div class="section">
    <div class="hero-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php
                $db = db_connect();
                $result = $db->query("SELECT * FROM `Banner_Master`");
                foreach ($result->getResult() as $key) {

                    $tagline = $key->tag_line;
                    $subtagline = $key->subtag_line;
                    $banner1 = $key->banner_img; 
                    $button=$key->button;                    ?>
                    <!-- Single Hero Slider Item Start -->
                    <div class="hero-slide-item-two swiper-slide">


                        <!-- Hero Slider Background Image Start-->
                        <div class="hero-slide-bg">
                            <img src="<?php echo base_url(); ?>assets/images/uploads/banner/<?php echo $banner1; ?>" alt="" />
                        </div>
                        <!-- Hero Slider Background Image End-->

                        <!-- Hero Slider Container Start -->
                        <div class="container">

                            <div class="row">
                                <div class="hero-slide-content col-lg-8 col-xl-6 col-12 text-lg-center text-left">
                                    <h2 class="title">
                                        <?php echo $tagline ?>
                                    </h2>
                                    <p><b><?php echo $subtagline ?></b></p>
                                    <a href="<?php echo base_url();?><?php echo $button ?>" class="btn btn-lg btn-primary btn-hover-dark">Shop Now</a>
                                </div>
                            </div>

                        </div>
                        <!-- Hero Slider Container End -->

                    </div>
                    <!-- Single Hero Slider Item End -->
                <?php } ?>
            </div>

            <!-- Swiper Pagination Start -->
            <div class="swiper-pagination d-md-none"></div>
            <!-- Swiper Pagination End -->

            <!-- Swiper Navigation Start -->
            <div class="home-slider-prev swiper-button-prev main-slider-nav d-md-flex d-none"><span><img src="assets/images/icons/left_angle.png" style="width:30px;"></span></div>
            <div class="home-slider-next swiper-button-next main-slider-nav d-md-flex d-none"><span><img src="assets/images/icons/right_angle.png" style="width:35px;"></span></div>
            <!-- Swiper Navigation End -->

        </div>
    </div>
</div>
<!-- Hero/Intro Slider End -->
<!--  here put-->
<!-- Banner Section Start -->
<div class="section" style="margin-top:80px;">
    <div class="container">
        <?php
        $db = db_connect();
        $result1 = $db->query("SELECT * FROM `box_master` WHERE `box_type`='Box1' and `status`='1'
                    ORDER  BY id  DESC
                    LIMIT 1 ");
        foreach ($result1->getResult() as $key1) {

            $title1 = $key1->title;
            $sub_title1 = $key1->sub_title;
            $box1img = $key1->surl;
        }
        ?>
        <!-- Banners Start -->
        <div class="row mb-n6">
            <!-- Banner Start -->
            <div class="col-lg-4 col-md-6 col-12 mb-6">
                <div class="banner" data-aos="fade-up" data-aos-delay="300">
                    <div class="banner-image">

                        <a href="<?php echo base_url(); ?>Men-Wear/Suit"><img src="<?php echo base_url(); ?>public/product/<?php echo $box1img; ?>" alt="" width: 100%; /></a>
                    </div>
                    <div class="info">
                        <div class="small-banner-content">
                            <h4 class="sub-title"><?php echo $sub_title1 ?></h4>
                            <h3 class="title"><?php echo $title1 ?></h3>
                            <a href="<?php echo base_url();?>Accessories/Nails" class="btn btn-dark btn-sm">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner End -->

            <!-- Banner Start -->
            <?php
            $db = db_connect();
            $result1 = $db->query("SELECT * FROM `box_master` WHERE `box_type`='Box2' and `status`='1'
                        ORDER  BY id  DESC
                        LIMIT 1 ");
            foreach ($result1->getResult() as $key1) {

                $title2 = $key1->title;
                $sub_title2 = $key1->sub_title;
                $box2img = $key1->surl;
            }
            ?>
            <div class="col-lg-4 col-md-6 col-12 mb-6">
                <div class="banner" data-aos="fade-up" data-aos-delay="500">
                    <div class="banner-image">
                        <a href="<?php echo base_url(); ?>Women-Wear/Blouse"><img src="<?php echo base_url(); ?>public/product/<?php echo $box2img; ?>" alt="" width: 100%; /></a>
                    </div>
                    <div class="info">
                        <div class="small-banner-content">
                            <h4 class="sub-title"><?php echo $sub_title2 ?></h4>
                            <h3 class="title"><?php echo $title2 ?></h3>
                            <a href="#" class="btn btn-dark btn-sm">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner End -->

            <!-- Banner Start -->
            <?php
            $db = db_connect();
            $result1 = $db->query("SELECT * FROM `box_master` WHERE `box_type`='Box3' and `status`='1'
                        ORDER  BY id  DESC
                        LIMIT 1 ");
            foreach ($result1->getResult() as $key1) {

                $title3 = $key1->title;
                $sub_title3 = $key1->sub_title;
                $box3img = $key1->surl;
            }
            ?>
            <div class="col-lg-4 col-md-6 col-12 mb-6">
                <div class="banner" data-aos="fade-up" data-aos-delay="700">
                    <div class="banner-image">
                        <a href="#"><img src="<?php echo base_url(); ?>public/product/<?php echo $box3img; ?>" alt="" width: 100%; /></a>
                    </div>
                    <div class="info">
                        <div class="small-banner-content">
                            <h4 class="sub-title"><?php echo $sub_title3 ?></h4>
                            <h3 class="title"><?php echo $title3 ?></h3>
                            <a href="#" class="btn btn-dark btn-sm">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner End -->

        </div>
        <!-- Banners End -->
    </div>
</div>
<!-- Banner Section End -->
<!-- Feature Section Start -->
<div class="section section-margin">
    <div class="container">
        <div class="feature-wrap">
            <div class="row row-cols-lg-4 row-cols-xl-auto row-cols-sm-2 row-cols-1 justify-content-between mb-n5">
                <!-- Feature Start -->
                <div class="col mb-5" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature">
                        <div class="icon text-primary align-self-center">
                            <img src="assets/images/icons/feature-icon-2.webp" alt="Feature Icon">
                        </div>
                        <div class="content">
                            <h5 class="title">Free Shipping</h5>
                            <p>Free shipping on all order</p>
                        </div>
                    </div>
                </div>
                <!-- Feature End -->

                <!-- Feature Start -->
                <div class="col mb-5" data-aos="fade-up" data-aos-delay="500">
                    <div class="feature">
                        <div class="icon text-primary align-self-center">
                            <img src="assets/images/icons/feature-icon-3.webp" alt="Feature Icon">
                        </div>
                        <div class="content">
                            <h5 class="title">Support 24/7</h5>
                            <p>Support 24 hours a day</p>
                        </div>
                    </div>
                </div>
                <!-- Feature End -->
                <!-- Feature Start -->
                <div class="col mb-5" data-aos="fade-up" data-aos-delay="700">
                    <div class="feature">
                        <div class="icon text-primary align-self-center">
                            <img src="assets/images/icons/feature-icon-4.webp" alt="Feature Icon">
                        </div>
                        <div class="content">
                            <h5 class="title">Money Return</h5>
                            <p>Back guarantee under 5 days</p>
                        </div>
                    </div>
                </div>
                <!-- Feature End -->

                <!-- Feature Start -->
                <div class="col mb-5" data-aos="fade-up" data-aos-delay="900">
                    <div class="feature">
                        <div class="icon text-primary align-self-center">
                            <img src="assets/images/icons/feature-icon-1.webp" alt="Feature Icon">
                        </div>
                        <div class="content">
                            <h5 class="title">Order Discount</h5>
                            <p>Onevery order over Rs150</p>
                        </div>
                    </div>
                </div>
                <!-- Feature End -->
            </div>
        </div>
    </div>
</div>
<!-- Feature Section End -->

<!-- Banner Section Start -->
<div class="section">
    <div class="container">
        <?php
        $db = db_connect();
        $result1 = $db->query("SELECT * FROM `mega_box_master` WHERE `mega_box_type`='Mega Box 1' and `status`='1'
                    ORDER  BY id  DESC
                    LIMIT 1 ");
        foreach ($result1->getResult() as $key1) {

            $title1 = $key1->tag_line;
            $sub_title1 = $key1->subtag_line;
            $mega1img = $key1->image1;
        }
        ?>

        <!-- Banners Start -->
        <!-- overflow-hidden -->
        <div class="row mb-n6 ">
            <!-- Banner Start -->
            <div class="col-md-6 col-12 mb-6">
                <div class="banner" data-aos="fade-right" data-aos-delay="300">
                    <div class="banner-image">
                        <a href="#"><img src="<?php echo base_url(); ?>assets/images/uploads/mega_box/<?php echo $mega1img; ?>" alt="" /></a>
                    </div>
                    <div class="info">
                        <div class="small-banner-content">
                            <h4 class="sub-title"><?php echo $sub_title1 ?></h4>
                            <h3 class="title"><?php echo $title1 ?></h3>
                            <a href="#" class="btn btn-dark btn-sm">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner End -->
            <?php
            $db = db_connect();
            $result1 = $db->query("SELECT * FROM `mega_box_master` WHERE `mega_box_type`='Mega Box 2' and `status`='1'
                    ORDER  BY id  DESC
                    LIMIT 1 ");
            foreach ($result1->getResult() as $key1) {

                $title2 = $key1->tag_line;
                $sub_title2 = $key1->subtag_line;
                $mega2img = $key1->image1;
            }
            ?>
            <!-- Banner Start -->
            <div class="col-md-6 col-12 mb-6">
                <div class="banner" data-aos="fade-left" data-aos-delay="500">
                    <div class="banner-image">
                        <a href="#"><img src="<?php echo base_url(); ?>assets/images/uploads/mega_box/<?php echo $mega2img; ?>" alt="" /></a>
                    </div>
                    <div class="info">
                        <div class="small-banner-content">
                            <h4 class="sub-title"><?php echo $sub_title2 ?></h4>
                            <h3 class="title"><?php echo $title2 ?></h3>
                            <a href="#" class="btn btn-dark btn-sm">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner End -->

        </div>
        <!-- Banners End -->
    </div>
</div>
<!-- Banner Section End -->

<!-- Product Section Start -->
<div class="section section-padding mt-0">
    <div class="container">
        <!-- Section Title & Tab Start -->
        <div class="row">
            <!-- Tab Start -->
            <div class="col-12">
                <ul class="product-tab-nav nav justify-content-center mb-10 title-border-bottom mt-n3">
                    <li class="nav-item" data-aos="fade-up" data-aos-delay="300"><a class="nav-link active mt-3" data-bs-toggle="tab" href="#tab-product-all">New Arrivals</a></li>
                    <li class="nav-item" data-aos="fade-up" data-aos-delay="400"><a class="nav-link mt-3" data-bs-toggle="tab" href="#tab-product-clothings">Best Sellers</a></li>

                </ul>
            </div>
            <!-- Tab End -->
        </div>
        <!-- Section Title & Tab End -->

        <!-- Products Tab Start -->
        <div class="row">
            <div class="col">
                <div class="tab-content position-relative">
                    <div class="tab-pane fade show active" id="tab-product-all">
                        <div class="product-carousel">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">

                                    <!-- Product Start -->
                                    <div class="swiper-slide product-wrapper">
                                        <?php
                                        $db = db_connect();
                                        $result1 = $db->query("SELECT * FROM `product`
                                                        WHERE `product_type`='Mens'
                                                        ORDER  BY prod_id  DESC
                                                        LIMIT 2 ");
                                        $p_data = $result1->getResultArray();
                                        // var_dump($p_data);exit();
                                        $mensData = array();
                                        foreach ($p_data as $key1) {

                                            $name = $key1['product_name'];
                                            $p_type = $key1['product_type'];
                                            $p_code = $key1['ProductCode'];
                                            $mensData[] = $key1;
                                        }
                                        // var_dump($mensData);exit();

                                        $table = 'Mens';

                                        $folder = 'mens';
                                        if (isset($mensData[0]['ProductCode'])) {
                                            $mensPcode1 = $mensData[0]['ProductCode'];

                                            $result2 = $db->query("SELECT * FROM `Mens` WHERE `ProductCode`= '$mensPcode1'");
                                            $m_data = $result2->getResultArray();

                                            foreach ($m_data as $key) {
                                                //var_dump($mensPcode2);
                                        ?>



                                                <!-- Single Product Start -->
                                                <div class="product product-border-left mb-10" data-aos="fade-up" data-aos-delay="300">
                                                    <div class="thumb">
                                                        <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $mensPcode1; ?>/<?php echo $table ?>/<?php echo $folder ?>" class="image">

                                                            <img class="first-image" src="<?php echo base_url(); ?>assets/images/uploads/mens/<?php echo $key['image1']; ?>" alt="Product" height=268 , width=268 />
                                                            <img class="second-image" src="<?php echo base_url(); ?>assets/images/uploads/mens/<?php echo $key['image2']; ?>" alt="Product" height=268 , width=268 />
                                                        </a>

                                                        <!--<div class="actions">-->
                                                        <!--    <a href="#" class="action wishlist"><i class="fa fa-heart"></i></a>-->
                                                        <!--    <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>-->
                                                        <!--    <a href="#" class="action compare"><i class="fa fa-random"></i></a>-->
                                                        <!--</div>-->
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="sub-title"><a href="#"><?php echo $key['Brand'] ?></a></h4>
                                                        <h5 class="title"><a href="#"><?php echo $key['Product_name'] ?></a></h5>

                                                        <span class="price">
                                                            <span class="new">₹.<?php echo $key['Product_price'] ?></span>
                                                            <!--<span class="old">Rs42.85</span>-->
                                                        </span>
                                                        <!-- <a href="</?php echo base_url(); ?>Add-to-cart"> -->
                                                        <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $mensPcode1; ?>/<?php echo $table ?>/<?php echo $folder ?>">
                                                            <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button></a>
                                                    </div>
                                                </div>
                                                <!-- Single Product End -->
                                        <?php }
                                        }
                                        ?>
                                        <?php

                                        $table = 'Mens';
                                        $folder = 'mens';
                                        if (isset($mensData[1]['ProductCode'])) {
                                            $mensPcode2 = $mensData[1]['ProductCode'];
                                            $result2 = $db->query("SELECT * FROM `Mens` WHERE `ProductCode`= '$mensPcode2'");
                                            $m_data = $result2->getResultArray();

                                            foreach ($m_data as $key2) {

                                        ?>

                                                <!-- Single Product Start -->
                                                <div class="product product-border-left" data-aos="fade-up" data-aos-delay="400">
                                                    <div class="thumb">
                                                        <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $mensPcode2; ?>/<?php echo $table ?>/<?php echo $folder ?>" class="image">
                                                            <img class="first-image" src="<?php echo base_url(); ?>assets/images/uploads/mens/<?php echo $key2['image1']; ?>" alt="Product" height=268 , width=268 />
                                                            <img class="second-image" src="<?php echo base_url(); ?>assets/images/uploads/mens/<?php echo $key2['image2']; ?>" alt="Product" height=268 , width=268 />
                                                        </a>
                                                        <!--<div class="actions">-->
                                                        <!--    <a href="#" class="action wishlist"><i class="fa fa-heart"></i></a>-->
                                                        <!--    <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>-->
                                                        <!--    <a href="#" class="action compare"><i class="fa fa-random"></i></a>-->
                                                        <!--</div>-->
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="sub-title"><a href="#"><?php echo $key2['Brand'] ?></a></h4>
                                                        <!-- <h5 class="title"><a href="#">Basic Jogging Shorts</a></h5> -->
                                                        <h5 class="title"><a href="#"><?php echo $key2['Product_name']; ?></a></h5>

                                                        <span class="price">
                                                            <span class="new">₹.<?php echo $key2['Product_price'] ?></span>
                                                            <!--<span class="old">Rs18.00</span>-->
                                                        </span>
                                                        <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $mensPcode2; ?>/<?php echo $table ?>/<?php echo $folder ?>">

                                                            <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button></a>
                                                    </div>
                                                </div>
                                                <!-- Single Product End -->

                                    </div>
                                    <!-- Product End -->
                            <?php }
                                        } ?>
                            <!-- Product Start -->
                            <div class="swiper-slide product-wrapper">
                                <?php
                                $db = db_connect();
                                $result1 = $db->query("SELECT * FROM `product`
                                                    WHERE `product_type`='Womens'
                                                    ORDER  BY prod_id  DESC
                                                    LIMIT 2 ");
                                $p_data = $result1->getResultArray();
                                //var_dump($p_data);exit();

                                foreach ($p_data as $key3) {

                                    $name = $key3['product_name'];
                                    $p_type = $key3['product_type'];
                                    $p_code = $key3['ProductCode'];
                                    $womensData[] = $key3;
                                }
                                //var_dump($mensData);exit();

                                $table = 'womens';
                                $folder = 'womens';
                                if (isset($womensData[0]['ProductCode'])) {
                                    $womensPcode1 = $womensData[0]['ProductCode'];
                                    $result2 = $db->query("SELECT * FROM `womens` WHERE `ProductCode`= '$womensPcode1'");
                                    $w_data = $result2->getResultArray();

                                    foreach ($w_data as $womens) {

                                ?>

                                        <!-- Single Product Start -->
                                        <div class="product product-border-left mb-10" data-aos="fade-up" data-aos-delay="400">
                                            <div class="thumb">
                                                <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $womensPcode1; ?>/<?php echo $table ?>/<?php echo $folder ?>" class="image">
                                                    <img class="first-image" src="<?php echo base_url(); ?>assets/images/uploads/womens/<?php echo $womens['image1']; ?>" alt="Product" height=268 , width=268 />
                                                    <img class="second-image" src="<?php echo base_url(); ?>assets/images/uploads/womens/<?php echo $womens['image2']; ?>" alt="Product" height=268 , width=268 />
                                                </a>
                                                <!--<span class="badges">-->
                                                <!--    <span class="sale">New</span>-->
                                                <!--</span>-->
                                                <!--<div class="actions">-->
                                                <!--    <a href="#" class="action wishlist"><i class="fa fa-heart"></i></a>-->
                                                <!--    <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>-->
                                                <!--    <a href="#" class="action compare"><i class="fa fa-random"></i></a>-->
                                                <!--</div>-->
                                            </div>
                                            <div class="content">
                                                <h4 class="sub-title"><a href="#"><?php echo $womens['Brand'] ?></a></h4>
                                                <!-- <h5 class="title"><a href="#">Simple Woven Fabrics</a></h5> -->
                                                <h5 class="title"><a href="#"><?php echo $womens['Product_name']; ?></a></h5>

                                                <span class="price">
                                                    <span class="new">₹.<?php echo $womens['Product_price'] ?></span>
                                                    <!--<span class="old">Rs48.85</span>-->
                                                </span>
                                                <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $womensPcode1; ?>/<?php echo $table ?>/<?php echo $folder ?>">

                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button></a>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                <?php }
                                } ?>
                                <?php

                                $table = 'womens';
                                $folder = 'womens';
                                if (isset($womensData[1]['ProductCode'])) {
                                    $womensPcode2 = $womensData[1]['ProductCode'];
                                    $result2 = $db->query("SELECT * FROM `womens` WHERE `ProductCode`= '$womensPcode2'");
                                    $w_data = $result2->getResultArray();

                                    foreach ($w_data as $key2) {

                                ?>
                                        <!-- Single Product Start -->
                                        <div class="product product-border-left" data-aos="fade-up" data-aos-delay="500">
                                            <div class="thumb">
                                                <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $womensPcode2; ?>/<?php echo $table ?>/<?php echo $folder ?>" class="image">

                                                    <img class="first-image" src="<?php echo base_url(); ?>assets/images/uploads/womens/<?php echo $key2['image1']; ?>" alt="Product" height=268 , width=268 />
                                                    <img class="second-image" src="<?php echo base_url(); ?>assets/images/uploads/womens/<?php echo $key2['image2']; ?>" alt="Product" height=268 , width=268 />
                                                </a>
                                                <!--<span class="badges">-->
                                                <!--    <span class="sale">Sold</span>-->
                                                <!--</span>-->
                                                <!--<div class="actions">-->
                                                <!--    <a href="#" class="action wishlist"><i class="fa fa-heart"></i></a>-->
                                                <!--    <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>-->
                                                <!--    <a href="#" class="action compare"><i class="fa fa-random"></i></a>-->
                                                <!--</div>-->
                                            </div>
                                            <div class="content">
                                                <h4 class="sub-title"><a href="#"><?php echo $key2['Brand'] ?></a></h4>
                                                <!-- <h5 class="title"><a href="#">Make Thing Happen T-Shirt</a></h5> -->
                                                <h5 class="title"><a href="#"><?php echo $key2['Product_name']; ?></a></h5>

                                                <span class="price">
                                                    <span class="new">₹.<?php echo $key2['Product_price'] ?></span>
                                                  
                                                </span>
                                                <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $womensPcode2; ?>/<?php echo $table ?>/<?php echo $folder ?>">
                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button></a>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                <?php }
                                } ?>
                            </div>
                            <!-- Product End -->
                            <!-- Product Start -->
                            <div class="swiper-slide product-wrapper">
                                <?php
                                $db = db_connect();
                                $result1 = $db->query("SELECT * FROM `product`
                                                WHERE `product_type`='Collection'
                                                ORDER  BY prod_id  DESC
                                                LIMIT 2");
                                $p_data = $result1->getResultArray();
                                //var_dump($p_data);exit();

                                foreach ($p_data as $key4) {

                                    $name = $key4['product_name'];
                                    $p_type = $key4['product_type'];
                                    $p_code = $key4['ProductCode'];
                                    $collectionData[] = $key4;
                                }
                                // var_dump($mensData);exit();

                                $table = 'collection';
                                $folder = 'collections';
                                if (isset($collectionData[0]['ProductCode'])) {
                                    $collePcode1 = $collectionData[0]['ProductCode'];
                                    $result2 = $db->query("SELECT * FROM `collection` WHERE `ProductCode`= '$collePcode1'");
                                    $c_data = $result2->getResultArray();

                                    foreach ($c_data as $collection) {

                                ?>

                                        <!-- Single Product Start -->
                                        <div class="product product-border-left mb-10" data-aos="fade-up" data-aos-delay="600">
                                            <div class="thumb">
                                                <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $collePcode1; ?>/<?php echo $table ?>/<?php echo $folder ?>" class="image">

                                                    <img class="first-image" src="<?php echo base_url(); ?>assets/images/uploads/collections/<?php echo $collection['image1']; ?>" alt="Product" height=268 , width=268 />
                                                    <img class="second-image" src="<?php echo base_url(); ?>assets/images/uploads/collections/<?php echo $collection['image2']; ?>" alt="Product" height=268 , width=268 />
                                                </a>
                                                <!--<div class="actions">-->
                                                <!--    <a href="#" class="action wishlist"><i class="fa fa-heart"></i></a>-->
                                                <!--    <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>-->
                                                <!--    <a href="#" class="action compare"><i class="fa fa-random"></i></a>-->
                                                <!--</div>-->
                                            </div>
                                            <div class="content">
                                                <h4 class="sub-title"><a href="#"><?php echo $collection['Brand'] ?></a></h4>
                                                <!-- <h5 class="title"><a href="#">Handmade Shoulder Bag</a></h5> -->
                                                <h5 class="title"><a href="#"><?php echo $collection['Product_name']; ?></a></h5>

                                                <span class="price">
                                                    <span class="new">₹.<?php echo $collection['Product_price'] ?></span>
                                                    <!--<span class="old">Rs100.00</span>-->
                                                </span>
                                                <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $collePcode1; ?>/<?php echo $table ?>/<?php echo $folder ?>">
                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button></a>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                <?php }
                                } ?>
                                <?php
                                $table = 'collection';
                                $folder = 'collections';
                                if (isset($collectionData[1]['ProductCode'])) {
                                    $collePcode2 = $collectionData[1]['ProductCode'];
                                    $result2 = $db->query("SELECT * FROM `collection` WHERE `ProductCode`= '$collePcode2'");
                                    $c_data = $result2->getResultArray();

                                    foreach ($c_data as $collection) {

                                ?>
                                        <!-- Single Product Start -->
                                        <div class="product product-border-left" data-aos="fade-up" data-aos-delay="700">
                                            <div class="thumb">
                                                <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $collePcode2; ?>/<?php echo $table ?>/<?php echo $folder ?>" class="image">

                                                    <img class="first-image" src="<?php echo base_url(); ?>assets/images/uploads/collections/<?php echo $collection['image1']; ?>" alt="Product" height=268 , width=268 />
                                                    <img class="second-image" src="<?php echo base_url(); ?>assets/images/uploads/collections/<?php echo $collection['image2']; ?>" alt="Product" height=268 , width=268 />
                                                </a>
                                                <!--<div class="actions">-->
                                                <!--    <a href="#" class="action wishlist"><i class="fa fa-heart"></i></a>-->
                                                <!--    <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>-->
                                                <!--    <a href="#" class="action compare"><i class="fa fa-random"></i></a>-->
                                                <!--</div>-->
                                            </div>
                                            <div class="content">
                                                <h4 class="sub-title"><a href="#"><?php echo $collection['Brand'] ?></a></h4>
                                                <!-- <h5 class="title"><a href="#">Enjoy The Rest T-Shirt</a></h5> -->
                                                <h5 class="title"><a href="#"><?php echo $collection['Product_name']; ?></a></h5>

                                                <span class="price">
                                                    <span class="new">₹.<?php echo $collection['Product_price'] ?></span>
                                                </span>
                                                <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $collePcode2; ?>/<?php echo $table ?>/<?php echo $folder ?>">
                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button></a>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                <?php }
                                } ?>
                            </div>
                            <!-- Product End -->

                            <!-- Product Start -->
                            <div class="swiper-slide product-wrapper">
                                <?php
                                $db = db_connect();
                                $result1 = $db->query("SELECT * FROM `product`
                                                WHERE `product_type`='Accessories'
                                                ORDER  BY prod_id  DESC
                                                LIMIT 4");
                                $p_data = $result1->getResultArray();
                                // var_dump($p_data);exit();
                                //$i=0;
                                foreach ($p_data as $access) {

                                    $name = $access['product_name'];
                                    $p_type = $access['product_type'];
                                    $p_code = $access['ProductCode'];
                                    $AcceData[] = $access;
                                }

                                $table = 'accessories';
                                $folder = 'accessories';
                                if (isset($AcceData[0]['ProductCode'])) {
                                    $wPcode = $AcceData[0]['ProductCode'];
                                    $result2 = $db->query("SELECT * FROM `accessories` WHERE `ProductCode`= '$wPcode' ");
                                    $aw_data = $result2->getResultArray();

                                    foreach ($aw_data as $accessories) {
                                        // var_dump($accessories['Product_name']);
                                ?>

                                        <!-- Single Product Start -->
                                        <div class="product product-border-left mb-10" data-aos="fade-up" data-aos-delay="500">
                                            <div class="thumb">
                                                <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $wPcode; ?>/<?php echo $table ?>/<?php echo $folder ?>" class="image">

                                                    <img class="first-image" src="<?php echo base_url(); ?>assets/images/uploads/accessories/<?php echo $accessories['image1']; ?>" alt="Product" height=268 , width=268 />
                                                    <img class="second-image" src="<?php echo base_url(); ?>assets/images/uploads/accessories/<?php echo $accessories['image2']; ?>" alt="Product" height=268 , width=268 />
                                                </a>
                                                <!--<div class="actions">-->
                                                <!--    <a href="#" class="action wishlist"><i class="fa fa-heart"></i></a>-->
                                                <!--    <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>-->
                                                <!--    <a href="#" class="action compare"><i class="fa fa-random"></i></a>-->
                                                <!--</div>-->
                                            </div>
                                            <div class="content">
                                                <h4 class="sub-title"><a href="#"><?php echo $accessories['Brand'] ?></a></h4>
                                                <!-- <h5 class="title"><a href="#">Basic Lather Sneaker</a></h5> -->
                                                <h5 class="title"><a href="#"><?php echo $accessories['Product_name']; ?></a></h5>

                                                <span class="price">
                                                    <span class="new">₹.<?php echo $accessories['Product_price'] ?></span>
                                                </span>
                                                <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $wPcode; ?>/<?php echo $table ?>/<?php echo $folder ?>">
                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button></a>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                <?php
                                    }
                                }
                                ?>
                                <!-- Single Product Start -->
                                <?php
                                $table = 'accessories';
                                $folder = 'accessories';
                                if (isset($AcceData[1]['ProductCode'])) {
                                    $wPcode = $AcceData[1]['ProductCode'];
                                    $result2 = $db->query("SELECT * FROM `accessories` WHERE `ProductCode`= '$wPcode' ");
                                    $aw_data = $result2->getResultArray();

                                    foreach ($aw_data as $accessories) {
                                        // var_dump($accessories['Product_name']);
                                ?>
                                        <div class="product product-border-left" data-aos="fade-up" data-aos-delay="600">
                                            <div class="thumb">
                                                <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $wPcode; ?>/<?php echo $table ?>/<?php echo $folder ?>" class="image">

                                                    <img class="first-image" src="<?php echo base_url(); ?>assets/images/uploads/accessories/<?php echo $accessories['image1']; ?>" alt="Product" height=268 , width=268 />
                                                    <img class="second-image" src="<?php echo base_url(); ?>assets/images/uploads/accessories/<?php echo $accessories['image2']; ?>" alt="Product" height=268 , width=268 />
                                                </a>
                                                <!--<div class="actions">-->
                                                <!--    <a href="#" class="action wishlist"><i class="fa fa-heart"></i></a>-->
                                                <!--    <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>-->
                                                <!--    <a href="#" class="action compare"><i class="fa fa-random"></i></a>-->
                                                <!--</div>-->
                                            </div>
                                            <div class="content">
                                                <h4 class="sub-title"><a href="#"><?php echo $accessories['Brand'] ?></a></h4>
                                                <!-- <h5 class="title"><a href="#">Simple Woven Fashion</a></h5> -->
                                                <h5 class="title"><a href="#"><?php echo $accessories['Product_name']; ?></a></h5>

                                                <span class="price">
                                                    <span class="new">₹.<?php echo $accessories['Product_price'] ?></span>
                                                    <!--<span class="old">Rs29.50</span>-->
                                                </span>
                                                <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $wPcode; ?>/<?php echo $table ?>/<?php echo $folder ?>">
                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button></a>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->

                            </div>
                            <!-- Product End -->
                    <?php }
                                }
                    ?>

                    <!-- Product Start -->
                    <div class="swiper-slide product-wrapper">
                        <?php
                        $table = 'accessories';
                        $folder = 'accessories';
                        if (isset($AcceData[2]['ProductCode'])) {
                            $wPcode = $AcceData[2]['ProductCode'];
                            $result2 = $db->query("SELECT * FROM `accessories` WHERE `ProductCode`= '$wPcode' ");
                            $am_data = $result2->getResultArray();

                            foreach ($am_data as $accessories2) {

                        ?>
                                <!-- Single Product Start -->
                                <div class="product product-border-left mb-10" data-aos="fade-up" data-aos-delay="700">
                                    <div class="thumb">
                                        <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $wPcode; ?>/<?php echo $table ?>/<?php echo $folder ?>" class="image">

                                            <img class="first-image" src="<?php echo base_url(); ?>assets/images/uploads/accessories/<?php echo $accessories2['image1']; ?>" alt="Product" height=268 , width=268 />
                                            <img class="second-image" src="<?php echo base_url(); ?>assets/images/uploads/accessories/<?php echo $accessories2['image2']; ?>" alt="Product" height=268 , width=268 />
                                        </a>
                                        <!--<div class="actions">-->
                                        <!--    <a href="#" class="action wishlist"><i class="fa fa-heart"></i></a>-->
                                        <!--    <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>-->
                                        <!--    <a href="#" class="action compare"><i class="fa fa-random"></i></a>-->
                                        <!--</div>-->
                                    </div>
                                    <div class="content">
                                        <h4 class="sub-title"><a href="#"><?php echo $accessories2['Brand'] ?></a></h4>
                                        <!-- <h5 class="title"><a href="#">Basic Lather Sneaker</a></h5> -->
                                        <h5 class="title"><a href="#"><?php echo $accessories2['Product_name']; ?></a></h5>

                                        <span class="price">
                                            <span class="new">₹.<?php echo $accessories2['Product_price'] ?></span>
                                        </span>
                                        <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $wPcode; ?>/<?php echo $table ?>/<?php echo $folder ?>">
                                            <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button></a>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                        <?php
                            }
                        } ?>
                        <!-- Single Product Start -->
                        <?php
                        $table = 'accessories';
                        $folder = 'accessories';
                        if (isset($AcceData[3]['ProductCode'])) {
                            $wPcode = $AcceData[3]['ProductCode'];
                            $result2 = $db->query("SELECT * FROM `accessories` WHERE `ProductCode`= '$wPcode' ");
                            $am_data = $result2->getResultArray();

                            foreach ($am_data as $accessories2) {

                        ?>
                                <div class="product product-border-left" data-aos="fade-up" data-aos-delay="800">
                                    <div class="thumb">
                                        <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $wPcode; ?>/<?php echo $table ?>/<?php echo $folder ?>" class="image">

                                            <img class="first-image" src="<?php echo base_url(); ?>assets/images/uploads/accessories/<?php echo $accessories2['image1']; ?>" alt="Product" height=268 , width=268 />
                                            <img class="second-image" src="<?php echo base_url(); ?>assets/images/uploads/accessories/<?php echo $accessories2['image2']; ?>" alt="Product" height=268 , width=268 />
                                        </a>
                                        <!--<div class="actions">-->
                                        <!--    <a href="#" class="action wishlist"><i class="fa fa-heart"></i></a>-->
                                        <!--    <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>-->
                                        <!--    <a href="#" class="action compare"><i class="fa fa-random"></i></a>-->
                                        <!--</div>-->
                                    </div>
                                    <div class="content">
                                        <h4 class="sub-title"><a href="#"><?php echo $accessories2['Brand'] ?></a></h4>
                                        <!-- <h5 class="title"><a href="#">Simple Woven Fashion</a></h5> -->
                                        <h5 class="title"><a href="#"><?php echo $accessories2['Product_name']; ?></a></h5>

                                        <span class="price">
                                            <span class="new">₹.<?php echo $accessories2['Product_price'] ?></span>
                                            <!--<span class="old">Rs29.50</span>-->
                                        </span>
                                        <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $wPcode; ?>/<?php echo $table ?>/<?php echo $folder ?>">
                                            <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button></a>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                        <?php }
                        } ?>
                    </div>
                    <!-- Product End -->






                                </div>
                                <!-- ------------------------------------------------------------------------------------- -->
                                <!-- Swiper Pagination Start -->
                                <div class="swiper-pagination d-md-none"></div>
                                <!-- Swiper Pagination End -->

                                <!-- Next Previous Button Start -->
                                <div class="swiper-product-button-next swiper-button-next swiper-button-white d-md-flex d-none"><i class="fa fa-angle-right"></i></div>
                                <div class="swiper-product-button-prev swiper-button-prev swiper-button-white d-md-flex d-none"><i class="fa fa-angle-left"></i></div>
                                <!-- Next Previous Button End -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-product-clothings">
                        <div class="product-carousel">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">

                                    <!-- Product Start -->
                                    <div class="swiper-slide product-wrapper">
                                        <?php
                                        $db = db_connect();
                                        $result1 = $db->query("SELECT * FROM `add_to_cart`
                                                WHERE `status`=1 and `table_name`='Mens'
                                                ORDER  BY id  DESC
                                                LIMIT 2");
                                        $p_data = $result1->getResultArray();

                                        foreach ($p_data as $key4) {

                                            $mens1Data[] = $key4;
                                        }
                                        // var_dump($mens1Data);exit();

                                        $table = 'Mens';
                                        $folder = 'mens';
                                        if (isset($mens1Data[0]['ProductCode'])) {
                                            $mensPcode1 = $mens1Data[0]['ProductCode'];
                                            $result22 = $db->query("SELECT * FROM `Mens` WHERE `ProductCode`='$mensPcode1'");
                                            $mens1_data = $result22->getResultArray();
                                            foreach ($mens1_data as $mens1) { ?>


                                                <!-- Single Product Start -->
                                                <div class="product product-border-left mb-10">
                                                    <div class="thumb">
                                                        <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $mensPcode1; ?>/<?php echo $table ?>/<?php echo $folder ?>" class="image">

                                                            <img class="first-image" src="<?php echo base_url(); ?>assets/images/uploads/mens/<?php echo $mens1['image1']; ?>" alt="Product" height=268 , width=268 />
                                                            <img class="second-image" src="<?php echo base_url(); ?>assets/images/uploads/mens/<?php echo $mens1['image2']; ?>" alt="Product" height=268 , width=268 />
                                                        </a>
                                                        <!--<div class="actions">-->
                                                        <!--    <a href="#" class="action wishlist"><i class="fa fa-heart"></i></a>-->
                                                        <!--    <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>-->
                                                        <!--    <a href="#" class="action compare"><i class="fa fa-random"></i></a>-->
                                                        <!--</div>-->
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="sub-title"><a href="#"><?php echo $mens1['Brand'] ?></a></h4>
                                                        <!-- <h5 class="title"><a href="#">Basic Jogging Shorts</a></h5> -->
                                                        <h5 class="title"><a href="#"><?php echo $mens1['Product_name']; ?></a></h5>

                                                        <span class="price">
                                                            <span class="new">₹.<?php echo $mens1['Product_price'] ?></span>
                                                            <!--<span class="old">Rs18.00</span>-->
                                                        </span>
                                                        <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $mensPcode1; ?>/<?php echo $table ?>/<?php echo $folder ?>">
                                                            <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button></a>
                                                    </div>
                                                </div>
                                                <!-- Single Product End -->
                                        <?php }
                                        } ?>
                                        <?php
                                        $table = 'Mens';
                                        $folder = 'mens';
                                        if (isset($mens1Data[1]['ProductCode'])) {
                                            $mensPcode2 = $mens1Data[1]['ProductCode'];
                                            $result22 = $db->query("SELECT * FROM `Mens`
                                                WHERE `ProductCode`='$mensPcode2'");
                                            $mens2_data = $result22->getResultArray();
                                            foreach ($mens2_data as $mens2) { ?>

                                                <!-- Single Product Start -->
                                                <div class="product product-border-left">
                                                    <div class="thumb">
                                                        <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $mensPcode2; ?>/<?php echo $table ?>/<?php echo $folder ?>" class="image">

                                                            <img class="first-image" src="<?php echo base_url(); ?>assets/images/uploads/mens/<?php echo $mens2['image1']; ?>" alt="Product" height=268 , width=268 />
                                                            <img class="second-image" src="<?php echo base_url(); ?>assets/images/uploads/mens/<?php echo $mens2['image2']; ?>" alt="Product" height=268 , width=268 />
                                                        </a>
                                                        <!--<div class="actions">-->
                                                        <!--    <a href="#" class="action wishlist"><i class="fa fa-heart"></i></a>-->
                                                        <!--    <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>-->
                                                        <!--    <a href="#" class="action compare"><i class="fa fa-random"></i></a>-->
                                                        <!--</div>-->
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="sub-title"><a href="#"><?php echo $mens2['Brand'] ?></a></h4>
                                                        <!-- <h5 class="title"><a
                                                                href="#">Brother Hoddies in Grey</a></h5> -->
                                                        <h5 class="title"><a href="#"><?php echo $mens2['Product_name']; ?></a></h5>

                                                        <span class="price">
                                                            <span class="new">₹.<?php echo $mens2['Product_price'] ?></span>
                                                            <!--<span class="old">Rs42.85</span>-->
                                                        </span>
                                                        <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $mensPcode2; ?>/<?php echo $table ?>/<?php echo $folder ?>">
                                                            <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button></a>
                                                    </div>
                                                </div>
                                                <!-- Single Product End -->
                                        <?php }
                                        } ?>
                                    </div>
                                    <!-- Product End -->

                                    <!-- Product Start -->
                                    <div class="swiper-slide product-wrapper">
                                        <?php
                                        $db = db_connect();
                                        $result1 = $db->query("SELECT * FROM `add_to_cart`
                                                WHERE `status`=1 and `table_name`='Womens'
                                                ORDER  BY id  DESC
                                                LIMIT 2");
                                        $p_data = $result1->getResultArray();

                                        foreach ($p_data as $key4) {

                                            $womens1Data[] = $key4;
                                        }

                                        $table = 'womens';
                                        $folder = 'womens';
                                        if (isset($womens1Data[0]['ProductCode'])) {
                                            $womensPcode1 = $womens1Data[0]['ProductCode'];
                                            $result22 = $db->query("SELECT * FROM `womens`
                                                WHERE `ProductCode`='$womensPcode1'");
                                            $womens1_data = $result22->getResultArray();
                                            foreach ($womens1_data as $womens1) { ?>


                                                <!-- Single Product Start -->
                                                <div class="product product-border-left mb-10">
                                                    <div class="thumb">
                                                        <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $womensPcode1; ?>/<?php echo $table ?>/<?php echo $folder ?>" class="image">

                                                            <img class="first-image" src="<?php echo base_url(); ?>assets/images/uploads/womens/<?php echo $womens1['image1']; ?>" alt="Product" height=268 , width=268 />
                                                            <img class="second-image" src="<?php echo base_url(); ?>assets/images/uploads/womens/<?php echo $womens1['image2']; ?>" alt="Product" height=268 , width=268 />
                                                        </a>
                                                        <!--<div class="actions">-->
                                                        <!--    <a href="#" class="action wishlist"><i class="fa fa-heart"></i></a>-->
                                                        <!--    <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>-->
                                                        <!--    <a href="#" class="action compare"><i class="fa fa-random"></i></a>-->
                                                        <!--</div>-->
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="sub-title"><a href="#"><?php echo $womens1['Brand'] ?></a></h4>
                                                        <!-- <h5 class="title"><a href="#">Handmade Shoulder Bag</a></h5> -->
                                                        <h5 class="title"><a href="#"><?php echo $womens1['Product_name']; ?></a></h5>

                                                        <span class="price">
                                                            <span class="new">₹.<?php echo $womens1['Product_price'] ?></span>
                                                            <!--<span class="old">Rs100.00</span>-->
                                                        </span>
                                                        <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $womensPcode1; ?>/<?php echo $table ?>/<?php echo $folder ?>">
                                                            <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button></a>
                                                    </div>
                                                </div>
                                                <!-- Single Product End -->
                                        <?php }
                                        } ?>
                                        <?php
                                        $table = 'womens';
                                        $folder = 'womens';
                                        if (isset($womens1Data[1]['ProductCode'])) {
                                            $womensPcode2 = $womens1Data[1]['ProductCode'];
                                            $result22 = $db->query("SELECT * FROM `womens`
                                                WHERE `ProductCode`='$womensPcode2'");
                                            $womens2_data = $result22->getResultArray();
                                            foreach ($womens2_data as $womens2) { ?>

                                                <!-- Single Product Start -->
                                                <div class="product product-border-left">
                                                    <div class="thumb">
                                                        <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $womensPcode2; ?>/<?php echo $table ?>/<?php echo $folder ?>" class="image">

                                                            <img class="first-image" src="<?php echo base_url(); ?>assets/images/uploads/womens/<?php echo $womens2['image1']; ?>" alt="Product" height=268 , width=268 />
                                                            <img class="second-image" src="<?php echo base_url(); ?>assets/images/uploads/womens/<?php echo $womens2['image2']; ?>" alt="Product" height=268 , width=268 />
                                                        </a>
                                                        <!--<div class="actions">-->
                                                        <!--    <a href="#" class="action wishlist"><i class="fa fa-heart"></i></a>-->
                                                        <!--    <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>-->
                                                        <!--    <a href="#" class="action compare"><i class="fa fa-random"></i></a>-->
                                                        <!--</div>-->
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="sub-title"><a href="#"><?php echo $womens2['Brand'] ?></a></h4>
                                                        <!-- <h5 class="title"><a href="#">Enjoy The Rest T-Shirt</a></h5> -->
                                                        <h5 class="title"><a href="#"><?php echo $womens2['Product_name']; ?></a></h5>

                                                        <span class="price">
                                                            <span class="new">₹.<?php echo $womens2['Product_price'] ?></span>
                                                        </span>
                                                        <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $womensPcode2; ?>/<?php echo $table ?>/<?php echo $folder ?>">
                                                            <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button></a>
                                                    </div>
                                                </div>
                                                <!-- Single Product End -->
                                        <?php }
                                        } ?>
                                    </div>
                                    <!-- Product End -->

                                    <!-- Product Start -->
                                    <div class="swiper-slide product-wrapper">
                                        <?php
                                        $db = db_connect();
                                        $result1 = $db->query("SELECT * FROM `add_to_cart`
                                                WHERE `status`=1 and `table_name`='collection'
                                                ORDER  BY id  DESC
                                                LIMIT 2");
                                        $c_data = $result1->getResultArray();

                                        foreach ($c_data as $key4) {

                                            $coll1Data[] = $key4;
                                        }
                                        //var_dump($coll1Data);die();

                                        $table = 'collection';
                                        $folder = 'collections';
                                        if (isset($coll1Data[0]['ProductCode'])) {
                                            $collPcode1 = $coll1Data[0]['ProductCode'];
                                            $result22 = $db->query("SELECT * FROM `collection`
                                                WHERE `ProductCode`='$collPcode1'");
                                            $coll1_data = $result22->getResultArray();
                                            foreach ($coll1_data as $coll1) { ?>
                                                <!-- Single Product Start -->
                                                <div class="product product-border-left mb-10">
                                                    <div class="thumb">
                                                        <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $collPcode1; ?>/<?php echo $table ?>/<?php echo $folder ?>" class="image">

                                                            <img class="first-image" src="<?php echo base_url(); ?>assets/images/uploads/collections/<?php echo $coll1['image1']; ?>" alt="Product" height=268 , width=268 />
                                                            <img class="second-image" src="<?php echo base_url(); ?>assets/images/uploads/collections/<?php echo $coll1['image2']; ?>" alt="Product" height=268 , width=268 />
                                                        </a>
                                                        <!--<span class="badges">-->
                                                        <!--    <span class="sale">New</span>-->
                                                        <!--</span>-->
                                                        <!--<div class="actions">-->
                                                        <!--    <a href="#" class="action wishlist"><i class="fa fa-heart"></i></a>-->
                                                        <!--    <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>-->
                                                        <!--    <a href="#" class="action compare"><i class="fa fa-random"></i></a>-->
                                                        <!--</div>-->
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="sub-title"><a href="#"><?php echo $coll1['Brand'] ?></a></h4>
                                                        <h5 class="title"><a href="#"><?php echo $coll1['Product_name'] ?></a></h5>

                                                        <span class="price">
                                                            <span class="new">₹.<?php echo $coll1['Product_price'] ?></span>
                                                          
                                                        </span>
                                                        <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $collPcode1; ?>/<?php echo $table ?>/<?php echo $folder ?>">
                                                            <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button></a>
                                                    </div>
                                                </div>
                                                <!-- Single Product End -->
                                        <?php
                                            }
                                        } ?>
                                        <?php
                                        $table = 'collection';
                                        $folder = 'collections';
                                        if (isset($coll1Data[1]['ProductCode'])) {
                                            $collPcode2 = $coll1Data[1]['ProductCode'];
                                            $result22 = $db->query("SELECT * FROM `collection`
                                                WHERE `ProductCode`='$collPcode2'");
                                            $coll2_data = $result22->getResultArray();
                                            foreach ($coll2_data as $coll2) { ?>

                                                <!-- Single Product Start -->
                                                <div class="product product-border-left">
                                                    <div class="thumb">
                                                        <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $collPcode2; ?>/<?php echo $table ?>/<?php echo $folder ?>" class="image">

                                                            <img class="first-image" src="<?php echo base_url(); ?>assets/images/uploads/collections/<?php echo $coll2['image1']; ?>" alt="Product" height=268 , width=268 />
                                                            <img class="second-image" src="<?php echo base_url(); ?>assets/images/uploads/collections/<?php echo $coll2['image2']; ?>" alt="Product" height=268 , width=268 />
                                                        </a>
                                                        <!--<span class="badges">-->
                                                        <!--    <span class="sale">Sold</span>-->
                                                        <!--</span>-->
                                                        <!--<div class="actions">-->
                                                        <!--    <a href="#" class="action wishlist"><i class="fa fa-heart"></i></a>-->
                                                        <!--    <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>-->
                                                        <!--    <a href="#" class="action compare"><i class="fa fa-random"></i></a>-->
                                                        <!--</div>-->
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="sub-title"><a href="#"><?php echo $coll2['Brand'] ?></a></h4>
                                                        <h5 class="title"><a href="#"><?php echo $coll2['Product_price'] ?></a></h5>

                                                        <span class="price">
                                                            <span class="new">₹.<?php echo $coll2['Product_price'] ?></span>
                                                            <!--<span class="old">Rs18.00</span>-->
                                                        </span>
                                                        <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $collPcode2; ?>/<?php echo $table ?>/<?php echo $folder ?>">
                                                            <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button></a>
                                                    </div>
                                                </div>
                                                <!-- Single Product End -->
                                        <?php }
                                        } ?>
                                    </div>
                                    <!-- Product End -->


                                    <!-- Product Start -->
                                    <div class="swiper-slide product-wrapper">
                                        <?php
                                        $db = db_connect();
                                        $result1 = $db->query("SELECT * FROM `add_to_cart`
                                                WHERE `status`=1 and `table_name`='accessories'
                                                ORDER  BY id  DESC
                                                LIMIT 4");
                                        $a_data = $result1->getResultArray();
                                        //var_dump($a_data);exit();
                                        foreach ($a_data as $key4) {

                                            $access1Data[] = $key4;
                                        }


                                        $table = 'accessories';
                                        $folder = 'accessories';
                                        if (isset($access1Data[0]['ProductCode'])) {
                                            $a1Pcode1 = $access1Data[0]['ProductCode'];
                                            $result22 = $db->query("SELECT * FROM `accessories`
                                                WHERE `ProductCode`='$a1Pcode1'");
                                            $a1_data = $result22->getResultArray();
                                            foreach ($a1_data as $a1) {

                                        ?>

                                                <!-- Single Product Start -->
                                                <div class="product product-border-left mb-10" data-aos="fade-up" data-aos-delay="500">
                                                    <div class="thumb">
                                                        <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $a1Pcode1; ?>/<?php echo $table ?>/<?php echo $folder ?>" class="image">

                                                            <img class="first-image" src="<?php echo base_url(); ?>assets/images/uploads/accessories/<?php echo $a1['image1']; ?>" alt="Product" height=268 , width=268 />
                                                            <img class="second-image" src="<?php echo base_url(); ?>assets/images/uploads/accessories/<?php echo $a1['image2']; ?>" alt="Product" height=268 , width=268 />
                                                        </a>
                                                        <!--<div class="actions">-->
                                                        <!--    <a href="#" class="action wishlist"><i class="fa fa-heart"></i></a>-->
                                                        <!--    <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>-->
                                                        <!--    <a href="#" class="action compare"><i class="fa fa-random"></i></a>-->
                                                        <!--</div>-->
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="sub-title"><a href="#"><?php echo $a1['Brand'] ?></a></h4>
                                                        <h5 class="title"><a href="#"><?php echo $a1['Product_name'] ?></a></h5>

                                                        <span class="price">
                                                            <span class="new">₹.<?php echo $a1['Product_price'] ?></span>
                                                        </span>
                                                        <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $a1Pcode1; ?>/<?php echo $table ?>/<?php echo $folder ?>">
                                                            <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button></a>
                                                    </div>
                                                </div>
                                                <!-- Single Product End -->
                                        <?php }
                                        }
                                        ?>
                                        <!-- Single Product Start -->
                                        <?php
                                        $table = 'accessories';
                                        $folder = 'accessories';
                                        if (isset($access1Data[1]['ProductCode'])) {
                                            $a2Pcode1 = $access1Data[1]['ProductCode'];
                                            $result22 = $db->query("SELECT * FROM `accessories` WHERE `ProductCode`='$a2Pcode1'");
                                            $a2_data = $result22->getResultArray();
                                            foreach ($a2_data as $a2) {

                                        ?>
                                                <div class="product product-border-left" data-aos="fade-up" data-aos-delay="600">
                                                    <div class="thumb">
                                                        <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $a2Pcode1; ?>/<?php echo $table ?>/<?php echo $folder ?>" class="image">

                                                            <img class="first-image" src="<?php echo base_url(); ?>assets/images/uploads/accessories/<?php echo $a2['image1']; ?>" alt="Product" height=268 , width=268 />
                                                            <img class="second-image" src="<?php echo base_url(); ?>assets/images/uploads/accessories/<?php echo $a2['image2']; ?>" alt="Product" height=268 , width=268 />
                                                        </a>
                                                        <!--<div class="actions">-->
                                                        <!--    <a href="#" class="action wishlist"><i class="fa fa-heart"></i></a>-->
                                                        <!--    <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>-->
                                                        <!--    <a href="#" class="action compare"><i class="fa fa-random"></i></a>-->
                                                        <!--</div>-->
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="sub-title"><a href="#"><?php echo $a2['Brand'] ?></a></h4>
                                                        <h5 class="title"><a href="#"><?php echo $a2['Product_name'] ?></a></h5>

                                                        <span class="price">
                                                            <span class="new">₹.<?php echo $a2['Product_price'] ?></span>
                                                            <!--<span class="old">Rs29.50</span>-->
                                                        </span>
                                                        <a href="<?php echo base_url(); ?>Add-to-cart_Home/<?php echo $a2Pcode1; ?>/<?php echo $table ?>/<?php echo $folder ?>">
                                                            <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button></a>
                                                    </div>
                                                </div>
                                                <!-- Single Product End -->

                                    </div>
                                    <!-- Product End -->
                            <?php }
                                        }
                            ?>

                            <!-- Product Start -->
                            <div class="swiper-slide product-wrapper">
                                <?php
                                $table = 'accessories';
                                $folder = 'accessories';
                                if (isset($access1Data[2]['ProductCode'])) {
                                    $a2Pcode1 = $access1Data[2]['ProductCode'];
                                    $result22 = $db->query("SELECT * FROM `accessories` WHERE `ProductCode`='$a2Pcode1'");
                                    $a2_data = $result22->getResultArray();
                                    foreach ($a2_data as $a2) {

                                ?>
                                        <!-- Single Product Start -->
                                        <div class="product product-border-left mb-10" data-aos="fade-up" data-aos-delay="700">
                                            <div class="thumb">
                                                <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $a2Pcode1; ?>/<?php echo $table ?>/<?php echo $folder ?>" class="image">

                                                    <img class="first-image" src="<?php echo base_url(); ?>assets/images/uploads/accessories/<?php echo $a2['image1']; ?>" alt="Product" height=268 , width=268 />
                                                    <img class="second-image" src="<?php echo base_url(); ?>assets/images/uploads/accessories/<?php echo $a2['image2']; ?>" alt="Product" height=268 , width=268 />
                                                </a>
                                                <!--<div class="actions">-->
                                                <!--    <a href="#" class="action wishlist"><i class="fa fa-heart"></i></a>-->
                                                <!--    <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>-->
                                                <!--    <a href="#" class="action compare"><i class="fa fa-random"></i></a>-->
                                                <!--</div>-->
                                            </div>
                                            <div class="content">
                                                <h4 class="sub-title"><a href="#"><?php echo $a2['Brand'] ?></a></h4>
                                                <h5 class="title"><a href="#"><?php echo $a2['Product_name'] ?></a></h5>

                                                <span class="price">
                                                    <span class="new">₹.<?php echo $a2['Product_price'] ?></span>
                                                    <!--<span class="old">Rs29.50</span>-->
                                                </span>
                                                <a href="<?php echo base_url(); ?>Add-to-cart_Home/<?php echo $a2Pcode1; ?>/<?php echo $table ?>/<?php echo $folder ?>">
                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button></a>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                <?php
                                    }
                                } ?>
                                <!-- Single Product Start -->
                                <?php
                                $table = 'accessories';
                                $folder = 'accessories';
                                if (isset($access1Data[3]['ProductCode'])) {
                                    $a2Pcode1 = $access1Data[3]['ProductCode'];
                                    $result22 = $db->query("SELECT * FROM `accessories` WHERE `ProductCode`='$a2Pcode1'");
                                    $a2_data = $result22->getResultArray();
                                    foreach ($a2_data as $a2) {

                                ?>
                                        <div class="product product-border-left" data-aos="fade-up" data-aos-delay="800">
                                            <div class="thumb">
                                                <a href="<?php echo base_url(); ?>Add-to-cart-Home/<?php echo $a2Pcode1; ?>/<?php echo $table ?>/<?php echo $folder ?>" class="image">

                                                    <img class="first-image" src="<?php echo base_url(); ?>assets/images/uploads/accessories/<?php echo $a2['image1']; ?>" alt="Product" height=268 , width=268 />
                                                    <img class="second-image" src="<?php echo base_url(); ?>assets/images/uploads/accessories/<?php echo $a2['image2']; ?>" alt="Product" height=268 , width=268 />
                                                </a>
                                                <!--<div class="actions">-->
                                                <!--    <a href="#" class="action wishlist"><i class="fa fa-heart"></i></a>-->
                                                <!--    <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>-->
                                                <!--    <a href="#" class="action compare"><i class="fa fa-random"></i></a>-->
                                                <!--</div>-->
                                            </div>
                                            <div class="content">
                                                <h4 class="sub-title"><a href="#"><?php echo $a2['Brand'] ?></a></h4>
                                                <h5 class="title"><a href="#"><?php echo $a2['Product_name'] ?></a></h5>

                                                <span class="price">
                                                    <span class="new">₹.<?php echo $a2['Product_price'] ?></span>
                                                    <!--<span class="old">Rs29.50</span>-->
                                                </span>
                                                <a href="<?php echo base_url(); ?>Add-to-cart_Home/<?php echo $a2Pcode1; ?>/<?php echo $table ?>/<?php echo $folder ?>">
                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button></a>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                <?php }
                                } ?>
                            </div>
                            <!-- Product End -->


                                </div>

                                <!-- Swiper Pagination Start -->
                                <div class="swiper-pagination d-md-none"></div>
                                <!-- Swiper Pagination End -->

                                <!-- Next Previous Button Start -->
                                <div class="swiper-product-button-next swiper-button-next swiper-button-white d-md-flex d-none"><i class="fa fa-angle-right"></i></div>
                                <div class="swiper-product-button-prev swiper-button-prev swiper-button-white d-md-flex d-none"><i class="fa fa-angle-left"></i></div>
                                <!-- Next Previous Button End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Products Tab End -->
    </div>
</div>
<!-- Product Section End -->

<!-- Banner Fullwidth Start -->
<div class="section">
    <div class="container">
        <?php
        $db = db_connect();
        $result1 = $db->query("SELECT * FROM `mini_banner_master` WHERE `status`='1'
                                                    ORDER  BY id  DESC
                                                    LIMIT 1 ");
        foreach ($result1->getResult() as $key1) {

            $title1 = $key1->tag_line;
            $sub_title1 = $key1->subtag_line;
            $miniBaneerImg = $key1->mini_banner_img;
        }
        ?>
        <div class="row">
            <div class="col-12" data-aos="fade-up" data-aos-delay="300">
                <div class="banner">
                    <div class="banner-image">
                        <a href="#"><img src="<?php echo base_url(); ?>assets/images/uploads/mini_banner/<?php echo $miniBaneerImg; ?>" alt="" /></a>
                        <!-- <a href="#"><img src="assets/images/banner/big-banner.webp" alt="Banner"></a> -->
                    </div>
                    <div class="info">
                        <div class="small-banner-content">
                            <h4 class="sub-title"><?php echo $sub_title1 ?></h4>
                            <h3 class="title"><?php echo $title1 ?></h3>
                            <!--<a href="#" class="btn btn-dark btn-sm">Shop Now</a>-->
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Fullwidth End -->




<!-- Banner Section End -->



<!-- Brand Logo Start -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Brand Logo Wrapper Start -->
                <div class="brand-logo-carousel p-0" style="margin-bottom:30px; margin-top:30px;">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">

                            <!-- Single Brand Logo Start -->
                            <div class="swiper-slide single-brand-logo" data-aos="fade-up" data-aos-delay="300">
                                <a href="#"><img src="assets/images/brand-logo/1.webp" alt="Brand Logo"></a>
                            </div>
                            <!-- Single Brand Logo End -->

                            <!-- Single Brand Logo Start -->
                            <div class="swiper-slide single-brand-logo" data-aos="fade-up" data-aos-delay="400">
                                <a href="#"><img src="assets/images/brand-logo/1.webp" alt="Brand Logo"></a>
                            </div>
                            <!-- Single Brand Logo End -->

                            <!-- Single Brand Logo Start -->
                            <div class="swiper-slide single-brand-logo" data-aos="fade-up" data-aos-delay="500">
                                <a href=""><img src="assets/images/brand-logo/2.webp" alt="Brand Logo"></a>
                            </div>
                            <!-- Single Brand Logo End -->

                            <!-- Single Brand Logo Start -->
                            <div class="swiper-slide single-brand-logo" data-aos="fade-up" data-aos-delay="600">
                                <a href="#"><img src="assets/images/brand-logo/3.webp" alt="Brand Logo"></a>
                            </div>
                            <!-- Single Brand Logo End -->

                            <!-- Single Brand Logo Start -->
                            <div class="swiper-slide single-brand-logo" data-aos="fade-up" data-aos-delay="700">
                                <a href="#"><img src="assets/images/brand-logo/4.webp" alt="Brand Logo"></a>
                            </div>
                            <!-- Single Brand Logo End -->

                        </div>
                    </div>
                </div>
                <!-- Brand Logo Wrapper End -->
            </div>
        </div>
    </div>
</div>
<!-- Brand Logo End -->





<?= $this->endSection(); ?>