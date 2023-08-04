<?= $this->extend("layout/base"); ?>

<?= $this->section('content'); ?>

   <!-- Single Product Section Start -->
   <div class="section section-margin">
        <div class="container">
               <?php 
                 if ((session()->has('WomenACCProductID'))) { 
                         $WomenACCProductID = session()->get('WomenACCProductID');
                   }
                     if ((session()->has('WomenAccID'))) { 
                         $WomenAccID = session()->get('WomenAccID');
                   }
                   else{
                      return redirect()->to('/');
                   }
                 $db = db_connect();
                $result = $db->query("SELECT * FROM `accessories`  WHERE `women_acces_id`=$WomenAccID and ID=$WomenACCProductID");
                 foreach ($result->getResult() as $key) {
                                       
                                        	$Brand=$key->Brand;
                                            $Product_name=$key->Product_name;
                                            $Product_price=$key->Product_price;
                                            $image1=$key->image1;
                                            $image2=$key->image2;
                                            $image3=$key->image3;
                                            $image4=$key->image4;
                                            $image5=$key->image5;
                                            $image6=$key->image6;
                                            $Product_Desc=$key->ProductDesc;
                                            $size=$key->size;
                 }       
                                
                ?>
            <div class="row">
                <div class="col-lg-5 offset-lg-0 col-md-8 offset-md-2 col-custom">

                    <!-- Product Details Image Start -->
                    <div class="product-details-img">

                        <!-- Single Product Image Start -->
                        <div class="single-product-img swiper-container gallery-top">
                            <div class="swiper-wrapper popup-gallery">
                                <a class="swiper-slide w-100" href="<?php echo base_url();?>/assets/images/uploads/accessories/<?php echo $image1; ?>">
                                    <img class="w-100" src="<?php echo base_url();?>/assets/images/uploads/accessories/<?php echo $image1; ?>" alt="Product">
                                </a>
                                <a class="swiper-slide w-100" href="<?php echo base_url();?>/assets/images/uploads/accessories/<?php echo $image2; ?>">
                                    <img class="w-100" src="<?php echo base_url();?>/assets/images/uploads/accessories/<?php echo $image2; ?>" alt="Product">
                                </a>
                                <a class="swiper-slide w-100" href="<?php echo base_url();?>/assets/images/uploads/accessories/<?php echo $image3; ?>">
                                    <img class="w-100" src="<?php echo base_url();?>/assets/images/uploads/accessories/<?php echo $image3; ?>" alt="Product">
                                </a>
                                <a class="swiper-slide w-100" href="<?php echo base_url();?>/assets/images/uploads/accessories/<?php echo $image4; ?>">
                                    <img class="w-100" src="<?php echo base_url();?>/assets/images/uploads/accessories/<?php echo $image4; ?>" alt="Product">
                                </a>
                                <a class="swiper-slide w-100" href="<?php echo base_url();?>/assets/images/uploads/accessories/<?php echo $image5; ?>">
                                    <img class="w-100" src="<?php echo base_url();?>/assets/images/uploads/accessories/<?php echo $image5; ?>" alt="Product">
                                </a>
                                <a class="swiper-slide w-100" href="<?php echo base_url();?>/assets/images/uploads/accessories/<?php echo $image6; ?>">
                                    <img class="w-100" src="<?php echo base_url();?>/assets/images/uploads/accessories/<?php echo $image6; ?>" alt="Product">
                                </a>
                            </div>
                        </div>
                        <!-- Single Product Image End -->

                        <!-- Single Product Thumb Start -->
                        <div class="single-product-thumb swiper-container gallery-thumbs">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="<?php echo base_url();?>/assets/images/uploads/accessories/<?php echo $image1; ?>" alt="Product">
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo base_url();?>/assets/images/uploads/accessories/<?php echo $image2; ?>" alt="Product">
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo base_url();?>/assets/images/uploads/accessories/<?php echo $image3; ?>" alt="Product">
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo base_url();?>/assets/images/uploads/accessories/<?php echo $image4; ?>" alt="Product">
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo base_url();?>/assets/images/uploads/accessories/<?php echo $image5; ?>" alt="Product">
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo base_url();?>/assets/images/uploads/accessories/<?php echo $image6; ?>" alt="Product">
                                </div>
                            </div>

                            <!-- Next Previous Button Start -->
                            <div class="swiper-button-horizental-next  swiper-button-next"><span><img src="assets/images/icons/right_angle.png" style="width:30px;"></span></div>
                            <div class="swiper-button-horizental-prev swiper-button-prev"><span><img src="assets/images/icons/right_angle.png" style="width:30px;"></span></div>
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
                            <h2 class="product-title"><?php echo  $Product_name ?></h2>
                        </div>
                        <!-- Product Head End -->

                        <!-- Price Box Start -->
                        <div class="price-box mb-2">
                            <span class="regular-price"><?php echo  $Product_price ?></span>
                            <span class="old-price"><del>Rs.900.00</del></span>
                        </div>
                        <!-- Price Box End -->

                         <div class="row" id="myDIV">
                                    <div class="col-4"><label>Bust</label>
                                        <select class="form-select" aria-label="Default select example">
                                          <option selected>NA</option>
                                          <option value="1">One</option>
                                          <option value="2">Two</option>
                                          <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-4">  <label>Waist</label>
                                         <select class="form-select" aria-label="Default select example">
                                          <option selected>NA</option>
                                          <option value="1">One</option>
                                          <option value="2">Two</option>
                                          <option value="3">Three</option>
                                        </select>
                                    </div>
                                     <div class="col-4"> <label>Hip</label>
                                         <select class="form-select" aria-label="Default select example">
                                          <option selected>NA</option>
                                          <option value="1">One</option>
                                          <option value="2">Two</option>
                                          <option value="3">Three</option>
                                        </select>
                                     </div>
                            </div>

                        <!-- SKU Start -->
                        <div class="sku mb-3">
                            <span>SKU: 12345</span>
                        </div>
                        <!-- SKU End -->

                        <!-- Description Start -->
                        <p class="desc-content mb-5"><?php echo  $Product_Desc ?></p>
                        <!-- Description End -->

                        <!-- Product Meta Start -->
                        <div class="product-meta mb-3">
                            <!-- Product Size Start -->
                            <form>
                            <div class="product-size">
                                <span>Size :</span>
                                <?php 
                                
                                $size_ids = explode(",", $size);
                                    foreach ($size_ids as $key) {
                                               $db = db_connect();
                                                $result = $db->query("SELECT * FROM size_master WHERE id='$key'");
                                                 foreach ($result->getResult() as $key1) {
                                                     $sizename=$key1->size;
                                                
                                        ?>
                                         <input type="radio" id="size" name="size" value="<?php echo $key ?>" /> <?php echo $sizename ?>
                                 
                                    <?php      }}?>
                                <a href="#"><button onclick="myFunction()" class="btn btn-sm btn-outline-dark btn-hover-primary">Customize</button></a>
                               
                            </div>
                            </form>
                            
                            <!-- Product Size End -->
                        </div>
                        <!-- Product Meta End -->
                      <script>
                            function myFunction() {
                                alert('ok');
                              var x = document.getElementById("myDIV");
                              if (x.style.display === "none") {
                                x.style.display = "block";
                              } else {
                                x.style.display = "none";
                              }
                            }
                            </script>
                        <!-- Product Color Variation Start -->
                        <div class="product-color-variation mb-3">
                            <button type="button" class="btn bg-danger"></button>
                            <button type="button" class="btn bg-primary"></button>
                            <button type="button" class="btn bg-dark"></button>
                            <button type="button" class="btn bg-success"></button>
                        </div>
                        <!-- Product Color Variation End -->

                        <!-- Product Meta Start -->
                        <div class="product-meta mb-5">
                            <!-- Product Metarial Start -->
                            <div class="product-metarial">
                                <span>Metarial :</span>
                                <a href=""><strong>Metal</strong></a>
                                <a href=""><strong>Resin</strong></a>
                                <a href=""><strong>Lather</strong></a>
                                <a href=""><strong>Polymer</strong></a>
                            </div>
                            <!-- Product Metarial End -->
                        </div>
                        <!-- Product Meta End -->

                        <!-- Quantity Start -->
                        <div class="quantity mb-5">
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" value="0" type="text">
                                <div class="dec qtybutton"></div>
                                <div class="inc qtybutton"></div>
                            </div>
                        </div>
                        <!-- Quantity End -->

                        <!-- Cart & Wishlist Button Start -->
                        <div class="cart-wishlist-btn mb-4">
                            <div class="add-to_cart">
                               <a href="<?php echo base_url(); ?>Add-to-cart">
                                                <button class="btn btn-sm btn-outline-dark btn-hover-primary" style="height:50px;">Add To Cart</button></a>
                            </div>
                            <div class="add-to-wishlist">
                                <a  href="#"><button class="btn btn-outline-dark btn-hover-primary">Add to Wishlist</button></a>
                            </div>
                        </div>
                        <!-- Cart & Wishlist Button End -->

                        <!-- Social Shear Start -->
                        <div class="social-share">
                            <span>Share :</span>
                            <a href="#"><i class="fa fa-facebook-square facebook-color"></i></a>
                            <a href="#"><i class="fa fa-twitter-square twitter-color"></i></a>
                            <a href="#"><i class="fa fa-linkedin-square linkedin-color"></i></a>
                            <a href="#"><i class="fa fa-pinterest-square pinterest-color"></i></a>
                        </div>
                        <!-- Social Shear End -->

                        <!-- Product Delivery Policy Start -->
                        <ul class="product-delivery-policy border-top pt-4 mt-4 border-bottom pb-4">
                            <li> <i class="fa fa-check-square"></i> <span>Security Policy (Edit With Customer Reassurance Module)</span></li>
                            <li><i class="fa fa-truck"></i><span>Delivery Policy (Edit With Customer Reassurance Module)</span></li>
                            <li><i class="fa fa-refresh"></i><span>Return Policy (Edit With Customer Reassurance Module)</span></li>
                        </ul>
                        <!-- Product Delivery Policy End -->

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
                                <p class="mb-3"><?php echo $Product_Desc ?></p>
                               
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
                                                    echo $policy=$key->policy;
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
                                            <td class="cun-name"><span>S</span></td>
                                            <td>18</td>
                                            <td>20</td>
                                            <td>22</td>
                                            <td>24</td>
                                            <td>26</td>
                                        </tr>
                                        <tr>
                                            <td class="cun-name"><span>M</span></td>
                                            <td>46</td>
                                            <td>48</td>
                                            <td>50</td>
                                            <td>52</td>
                                            <td>54</td>
                                        </tr>
                                        <tr>
                                            <td class="cun-name"><span>XL</span></td>
                                            <td>14</td>
                                            <td>16</td>
                                            <td>18</td>
                                            <td>20</td>
                                            <td>22</td>
                                        </tr>
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Product Tab End -->
            </div>
</div>
</div>
<?= $this->endSection(); ?>