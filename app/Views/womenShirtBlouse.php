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
                        <form method="post" action="<?php echo base_url(); ?>Add-To-Cart" id="myform">
                            <div class="product-size">
                                <span style="font-size:20px;padding-bottom:5px;">Size :</span><br>
                                <?php

                                $size_ids = explode(",", $data['size']);
                                foreach ($size_ids as $key) {
                                    $db = db_connect();
                                    $result = $db->query("SELECT * FROM size_master WHERE id='$key'");
                                    foreach ($result->getResult() as $key1) {
                                        $sizename = $key1->size;

                                ?>
                                        <input type="radio" id="size" name="size" value="<?php echo $key ?>" required /> <?php echo $sizename ?>

                                <?php      }
                                } ?>



                            </div>


                            <!-- Product Size End -->
                    </div>
                    <!-- Product Meta End -->

                    <!-- Product Meta Start -->

                    <!-- Product Meta Start -->
                    <div class="product-meta mb-3">
                        <!-- Product Size Start -->
                        <!-- <span style="font-size:20px;padding-bottom:5px;">Fit :</span><br>
                        </?php
                                $fit_ids=explode(',',$data['fit']);
                                foreach ($fit_ids as $key) {
                                    $db = db_connect();
                                     $result = $db->query("SELECT * FROM fit_master WHERE id='$key'");
                                      foreach ($result->getResult() as $key1) {
                                          $fitname=$key1->fit;
                                     
                             ?>

                                    <input type="radio" id="size" name="fit" value="</?php echo $key ?>" required /> </?php echo $fitname  ?>
                                </?php }} ?> -->
                        <!-- Product Size End -->
                    </div>
                    <!-- Product Meta End -->
                    <input type="hidden" value="<?php echo $data['folder'] ?>" name="folder">
                    <input type="hidden" value="<?php echo $data['table'] ?>" name="table">
                    <input type="hidden" value="<?php echo $data['userid'] ?>" name="userid">
                    <input type="hidden" value="<?php echo $data['Product_price'] ?>" name="productprice">
                    <input type="hidden" value="<?php echo $data['Product_code'] ?>" name="productcode">
                    <!-- Product Meta Start -->
                    <div class="product-meta mb-5">
                        <!-- Product Metarial Start -->
                        <!--   <div class="product-metarial">
                            <span style="font-size:20px;padding-bottom:5px;">Fabric Details:</span><br><br>
                            <p><b>Fabric</b> :Fine Merino Wool Blend </p>
                            <p><b>Count</b>:Super 110s</p>
                            <p><b>Weave/Pattern</b>:Plain</p>
                            <p><b>Care</b>:Dry</p>
                        </div> -->
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

                    </form>
                    <!-- Product Meta End -->





                    <!--<div class="cart-wishlist-btn mb-4">-->

                    <!--    <div class="add-to-wishlist">-->
                    <!--        <a  href="#"><button class="btn btn-outline-dark btn-hover-primary">Add to Wishlist</button></a>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!-- Social Shear Start -->




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
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" id="profile-tab" data-bs-toggle="tab" href="#connect-2" role="tab" aria-selected="false">Reviews</a>
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
                                        <td class="cun-name"><span>POINT OF MEASUREMENT</span></td>
                                        <td class="cun-name"><span>XS</span></td>
                                        <td class="cun-name"><span>S</span></td>
                                        <td class="cun-name"><span>M</span></td>
                                        <td class="cun-name"><span>L</span></td>
                                        <td class="cun-name"><span>XL</span></td>
                                        <td class="cun-name"><span>XXL</span></td>

                                    </tr>
                                    <tr>

                                        <td>Shoulder</td>
                                        <td>14</td>
                                        <td>14.5</td>
                                        <td>15</td>
                                        <td>15.5</td>
                                        <td>16</td>
                                        <td>16.5</td>
                                    </tr>
                                    <tr>

                                        <td>Chest</td>
                                        <td>34</td>
                                        <td>36</td>
                                        <td>38</td>
                                        <td>40</td>
                                        <td>42</td>
                                        <td>44</td>
                                    </tr>
                                    <tr>

                                        <td>Waist</td>
                                        <td>31.5</td>
                                        <td>33.5</td>
                                        <td>35.5</td>
                                        <td>37.5</td>
                                        <td>39.5</td>
                                        <td>41.5</td>
                                    </tr>
                                    <tr>

                                        <td>Hip</td>
                                        <td>48</td>
                                        <td>48</td>
                                        <td>48</td>
                                        <td>48</td>
                                        <td>48</td>
                                        <td>48</td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="connect-2" role="tabpanel" aria-labelledby="profile-tab">
                    <!-- Start Single Content -->
                    <div class="product_tab_content  border p-3">
                        <!-- Start Single Review -->
                        <?php
                        if (!empty($query)) {
                            foreach ($query as $kay) {
                                // var_dump($kay);exit();
                        ?>
                                <div class="single-review d-flex mb-4">

                                    <!-- Review Thumb Start -->
                                    <div class="review_thumb">
                                        <img alt="review images" src="assets/images/review/1.jpg">
                                    </div>
                                    <!-- Review Thumb End -->

                                    <!-- Review Details Start -->
                                    <div class="review_details">
                                        <div class="review_info mb-2">

                                            <!-- Rating Start -->
                                            <span class="ratings justify-content-start mb-3">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 100%"></span>
                                                </span>
                                                <span class="rating-num">(1)</span>
                                            </span>
                                            <!-- Rating End -->

                                            <!-- Review Title & Date Start -->
                                            <div class="review-title-date d-flex">
                                                <?php
                                                $date = date_create($kay->date);
                                                $newdate =  date_format($date, "d M Y"); ?>
                                                <h5 class="title"><?php echo $kay->user; ?>- </h5><span> <?php echo $newdate; ?></span>
                                            </div>
                                            <!-- Review Title & Date End -->

                                        </div>
                                        <p><?php echo $kay->product_review; ?></p>
                                    </div>
                                    <!-- Review Details End -->

                                </div>
                            <?php }
                        } else { ?>
                            <p>No Reviews for this product </p>
                        <?php } ?>
                        <!-- End Single Review -->




                    </div>
                    <!-- End Single Content -->
                </div>
            </div>
            <!-- Single Product Tab End -->
        </div>
    <?php } ?>
    </div>
</div>
<?= $this->endSection(); ?>