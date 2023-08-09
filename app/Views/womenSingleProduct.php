<?= $this->extend("layout/base"); ?>

<?= $this->section('content'); ?>

<!-- Single Product Section Start -->
<div class="section section-margin">
    <div class="container">

        <div class="row">
            <div class="col-lg-5 offset-lg-0 col-md-8 offset-md-2 col-custom">
                <?php
                foreach ($data as $data) { ?>
                    <!-- Product Details Image Start -->
                    <div class="product-details-img">

                        <!-- Single Product Image Start -->
                        <div class="single-product-img swiper-container gallery-top">
                            <div class="swiper-wrapper popup-gallery">
                                <?php if (isset($data['image1'])) { ?>
                                    <a class="swiper-slide w-100" href="<?php echo base_url(); ?>/assets/images/uploads/womens/<?php echo $data['image1']; ?>">
                                        <img class="w-100" src="<?php echo base_url(); ?>/assets/images/uploads/womens/<?php echo $data['image1']; ?>" alt="Product">
                                    </a>
                                <?php } ?>
                                <?php if (isset($data['image2'])) { ?>
                                    <a class="swiper-slide w-100" href="<?php echo base_url(); ?>/assets/images/uploads/womens/<?php echo $data['image1']; ?>">
                                        <img class="w-100" src="<?php echo base_url(); ?>/assets/images/uploads/womens/<?php echo $data['image1']; ?>" alt="Product">
                                    </a>
                                <?php } ?>
                                <?php if (isset($data['image3'])) { ?>
                                    <a class="swiper-slide w-100" href="<?php echo base_url(); ?>/assets/images/uploads/womens/<?php echo $data['image1']; ?>">
                                        <img class="w-100" src="<?php echo base_url(); ?>/assets/images/uploads/womens/<?php echo $data['image1']; ?>" alt="Product">
                                    </a>
                                <?php } ?>
                                <?php if (isset($data['image4'])) { ?>
                                    <a class="swiper-slide w-100" href="<?php echo base_url(); ?>/assets/images/uploads/womens/<?php echo $data['image4']; ?>">
                                        <img class="w-100" src="<?php echo base_url(); ?>/assets/images/uploads/womens/<?php echo $data['image4']; ?>" alt="Product">
                                    </a>
                                <?php } ?>
                                <?php if (isset($data['image5'])) { ?>
                                    <a class="swiper-slide w-100" href="<?php echo base_url(); ?>/assets/images/uploads/womens/<?php echo $data['image5']; ?>">
                                        <img class="w-100" src="<?php echo base_url(); ?>/assets/images/uploads/womens/<?php echo $data['image5']; ?>" alt="Product">
                                    </a>
                                <?php } ?>
                                <?php if (isset($data['image6'])) { ?>
                                    <a class="swiper-slide w-100" href="<?php echo base_url(); ?>/assets/images/uploads/womens/<?php echo $data['image6']; ?>">
                                        <img class="w-100" src="<?php echo base_url(); ?>/assets/images/uploads/womens/<?php echo $data['image6']; ?>" alt="Product">
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- Single Product Image End -->

                        <!-- Single Product Thumb Start -->
                        <div class="single-product-thumb swiper-container gallery-thumbs">
                            <div class="swiper-wrapper">
                                <?php if (isset($data['image1'])) { ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo base_url(); ?>/assets/images/uploads/womens/<?php echo $data['image1']; ?>" alt="Product">
                                    </div>
                                <?php } ?>
                                <?php if (isset($data['image2'])) { ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo base_url(); ?>/assets/images/uploads/womens/<?php echo $data['image2']; ?>" alt="Product">
                                    </div>
                                <?php } ?>
                                <?php if (isset($data['image3'])) { ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo base_url(); ?>/assets/images/uploads/womens/<?php echo $data['image3']; ?>" alt="Product">
                                    </div>
                                <?php } ?>
                                <?php if (isset($data['image4'])) { ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo base_url(); ?>/assets/images/uploads/womens/<?php echo $data['image4']; ?>" alt="Product">
                                    </div>
                                <?php } ?>
                                <?php if (isset($data['image5'])) { ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo base_url(); ?>/assets/images/uploads/womens/<?php echo $data['image5']; ?>" alt="Product">
                                    </div>
                                <?php } ?>
                                <?php if (isset($data['image6'])) { ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo base_url(); ?>/assets/images/uploads/womens/<?php echo $data['image6']; ?>" alt="Product">
                                    </div>
                                <?php } ?>
                            </div>

                            <!-- Next Previous Button Start -->
                            <div class="swiper-button-horizental-next  swiper-button-next"><span><img src="<?php echo base_url(); ?>assets/images/icons/right_angle.png" style="width:30px;"></span></div>
                            <div class="swiper-button-horizental-prev swiper-button-prev"><span><img src="<?php echo base_url(); ?>assets/images/icons/left_angle.png" style="width:30px;"></span></div>
                            <!-- Next Previous Button End -->

                        </div>
                        <!-- Single Product Thumb End -->

                    </div>
                    <!-- Product Details Image End -->

            </div>

            <div class="col-lg-7 col-custom">

                <!-- Product Summery Start -->
                <div class="product-summery position-relative">
                    <!-- Product Head Start -->
                    <div class="product-head mb-3">
                        <h2 class="product-title"><?php echo  $data['Product_name'] ?></h2>
                    </div>
                    <!-- Product Head End -->

                    <!-- Price Box Start -->
                    <div class="price-box mb-2">
                        <span class="regular-price">₹.<?php echo  $data['Product_price'] ?></span>
                        <!--<span class="old-price"><del>Rs.900.00</del></span>-->
                    </div>
                    <!-- Price Box End -->



                    <!-- SKU Start -->
                    <div class="sku mb-3">
                        <span><?php echo $data['Product_code'] ?></span>
                    </div>
                    <!-- SKU End -->

                    <!-- Description Start -->
                    <p class="desc-content mb-5"><?php echo  $data['ProductDesc'] ?></p>
                    <!-- Description End -->

                    <!-- Product Meta Start -->
                    <div class="product-meta mb-3">
                        <!-- Product Size Start -->
                    



                            <!-- Product Size End -->
                    </div>
                    <!-- Product Meta End -->

                    <!-- Product Meta Start -->
                    <!--  -->
                    <form method="post" action="<?php echo base_url(); ?>Add-To-Cart" id="myform">
                        <!-- Product Meta Start -->
                        <div class="contact-form">
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                <span>Size :</span>
                                <div class="input-item mb-4">
                                    <input class="input-item" style=" border: none;border-bottom: 2px solid red; width:200px" type="number" placeholder="select size *" name="size" min="36" max="44" value="36">
                                </div>
                            </div>
                            <div class="product-meta mb-3" data-aos="fade-up" data-aos-delay="300">
                                <!-- Product Size Start -->
                                <span style="font-size:20px;padding-bottom:5px;">Fit :</span><br>
                                <?php
                                $fit_ids=explode(',',$data['fit']);
                                foreach ($fit_ids as $key) {
                                    $db = db_connect();
                                     $result = $db->query("SELECT * FROM fit_master WHERE id='$key'");
                                      foreach ($result->getResult() as $key1) {
                                          $fitname=$key1->fit;
                                     
                             ?>

                                    <input type="radio" id="size" name="fit" value="<?php echo $key ?>" required /> <?php echo $fitname  ?>
                                <?php }} ?>

                                <!-- Product Size End -->
                            </div>
                            <!-- Product Meta End -->
                            <input type="text" value="<?php echo $data['userid'] ?>" name="userid">
                            <input type="text" value="<?php echo $data['Product_price'] ?>" name="productprice">
                            <input type="text" value="<?php echo $data['Product_code'] ?>" name="productcode">
                          

                            <!-- Product Meta Start -->
                            <div class="product-meta mb-5" data-aos="fade-up" data-aos-delay="300">
                                <!-- Product Metarial Start -->
                                <div class="product-metarial">
                                    <span style="font-size:20px;padding-bottom:5px;">Fabric Details:</span><br><br>
                                    <p><b>Fabric</b> :Fine Merino Wool Blend </p>
                                    <p><b>Count</b>:Super 110s</p>
                                    <p><b>Weave/Pattern</b>:Plain</p>
                                    <p><b>Care</b>:Dry</p>
                                </div>
                                <!-- Product Metarial End -->
                            </div>
                            <!-- Product Meta End -->

                            <!-- Quantity Start -->
                            <div class="quantity mb-5">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" value="1" type="text" name="QTY">
                                    <div class="dec qtybutton"></div>
                                    <div class="inc qtybutton"></div>
                                </div>
                            </div>
                            <!-- Quantity End -->

                            <!-- Cart & Wishlist Button Start -->
                            <div class="cart-wishlist-btn mb-4">
                                <div class="add-to_cart">
                                    <a href=""><input type="submit" class="btn btn-sm btn-outline-dark btn-hover-primary" style="height:50px;" value="Add To Cart"></a>
                                </div>

                            </div>
                            <!-- Cart & Wishlist Button End -->
                        </div>
                    </form>
                    <!-- Product Meta End -->


                

                   
                    <!--<div class="cart-wishlist-btn mb-4">-->

                    <!--    <div class="add-to-wishlist">-->
                    <!--        <a  href="#"><button class="btn btn-outline-dark btn-hover-primary">Add to Wishlist</button></a>-->
                    <!--    </div>-->
                    <!--</div>-->



                </div>
                <!-- Product Summery End -->

            </div>
        </div>

        <div class="row section-margin">
            <!-- Single Product Tab Start -->
            <div class="col-lg-12 col-custom single-product-tab">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" id="home-tab" data-bs-toggle="tab" href="#connect-1" role="tab" aria-selected="true">Description</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-uppercase" id="contact-tab" data-bs-toggle="tab" href="#connect-3" role="tab" aria-selected="false">Shipping Policy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" id="review-tab" data-bs-toggle="tab" href="#connect-4" role="tab" aria-selected="false">Size Chart</a>
                    </li>
                </ul>
                <div class="tab-content mb-text" id="myTabContent">
                    <div class="tab-pane fade show active" id="connect-1" role="tabpanel" aria-labelledby="home-tab">
                        <div class="desc-content border p-3">
                            <p class="mb-3"><?php echo $data['ProductDesc'] ?></p>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="connect-3" role="tabpanel" aria-labelledby="contact-tab">
                        <!-- Shipping Policy Start -->
                        <div class="shipping-policy mb-n2">
                            <h4 class="title-3 mb-4">Shipping policy for our store</h4>

                            <ul class="policy-list mb-2">
                                <?php
                                $db = db_connect();
                                $result = $db->query("SELECT * FROM `shipping_master`");
                                foreach ($result->getResult() as $key) {
                                    echo $policy = $key->policy;
                                }
                                ?>
                            </ul>

                        </div>
                        <!-- Shipping Policy End -->
                    </div>
                    <div class="tab-pane fade" id="connect-4" role="tabpanel" aria-labelledby="review-tab">
                        <div class="size-tab table-responsive-lg">
                            <h4 class="title-3 mb-4">Size Chart</h4>
                            <table class="table border mb-0">
                                <tbody>
                                    <tr>
                                        <th class="cun-name"><span>Size</span></th>
                                        <th class="cun-name"><span>Chest</span></th>
                                        <th class="cun-name"><span>Waist</span></th>
                                        <th class="cun-name"><span>Hip</span></th>
                                    </tr>
                                    <?php
                                    $j = 34;
                                    $k = 30;
                                    $l = 35;
                                    for ($i = 30; $i <= 44; $i++) {
                                    ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $j ?></td>
                                            <td><?php echo $k ?></td>
                                            <td><?php echo $l ?></td>
                                        </tr>
                                    <?php
                                        $j++;
                                        $k++;
                                        $l++;
                                    } ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Product Tab End -->
        </div>
    <?php } ?>
    </div>
</div>
<?= $this->endSection(); ?>