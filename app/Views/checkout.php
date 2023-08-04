<?= $this->extend("layout/base"); ?>

<?= $this->section('content'); ?>
<!-- Checkout Section Start -->
<div class="section section-margin">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Coupon Accordion Start -->
                <!--<div class="coupon-accordion">-->

                    <!-- Title Start -->
                <!--    <h3 class="title">Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>-->
                    <!-- Title End -->

                    <!-- Checkout Coupon Start -->
                <!--    <div id="checkout_coupon" class="coupon-checkout-content">-->
                <!--        <div class="coupon-info">-->
                <!--            <form action="#">-->
                <!--                <p class="checkout-coupon d-flex">-->
                <!--                    <input placeholder="Coupon code" type="text">-->
                <!--                    <input class="btn btn-dark btn-hover-primary rounded-0" value="Apply Coupon" type="submit">-->
                <!--                </p>-->
                <!--            </form>-->
                <!--        </div>-->
                <!--    </div>-->
                    <!-- Checkout Coupon End -->

                <!--</div>-->
                <!-- Coupon Accordion End -->
            </div>
        </div>
        <div class="row mb-n4">
            <div class="col-lg-6 col-12 mb-4">

                <!-- Checkbox Form Start -->
                <form action="" method="post">
                    <div class="checkbox-form">

                        <!-- Checkbox Form Title Start -->
                        <h3 class="title">Billing Details</h3>
                        <!-- Checkbox Form Title End -->

                        <div class="row">
                            <?php
                            if ((session()->has('logged_info'))) {
                                $data = session()->get('logged_info');
                                // var_dump($data);exit();
                                $userid = $data['user_id'];


                                $db  = \Config\Database::connect();
                                $fetch_userDet = $db->query("SELECT * FROM register_user WHERE user_id='$userid' ");
                                foreach ($fetch_userDet->getResult() as $key) {
                                    $firstname = $key->firstname;
                                    $lastname = $key->lastname;
                                    $contact = $key->contact;
                                    $email = $key->email;
                                    $address=$key->address;
                                }
                            }
                            if ((session()->has('LastID'))) {
                                $userid = session()->get('LastID');
                                // var_dump($userid);exit();
                                // $userid = $data['user_id'];
                              

                                $db  = \Config\Database::connect();
                                $fetch_userDet = $db->query("SELECT * FROM register_user WHERE user_id='$userid' ");
                                foreach ($fetch_userDet->getResult() as $key) {
                                    $firstname = $key->firstname;
                                    $lastname = $key->lastname;
                                    $contact = $key->contact;
                                    $email = $key->email;
                                    $address=$key->address;
                                }
                            }
                            ?>

                            <!-- First Name Input Start -->
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>First Name <span class="required">*</span></label>
                                    <input placeholder="<?php if (isset($firstname)) {
                                                            echo $firstname;
                                                        } else {
                                                            echo "";
                                                        } ?>" type="text" name="name" readonly>
                                </div>
                            </div>
                            <!-- First Name Input End -->

                            <!-- Last Name Input Start -->
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Last Name <span class="required">*</span></label>
                                    <input placeholder="<?php if (isset($lastname)) {
                                                            echo $lastname;
                                                        } else {
                                                            echo "";
                                                        } ?>" type="text" name="lname" readonly>
                                </div>
                            </div>
                            <!-- Last Name Input End -->



                            <!-- Address Input Start -->
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Address <span class="required">*</span></label>
                                    <input placeholder="<?php if (isset($address)) {
                                                            echo $address;
                                                        } else {
                                                            echo "";
                                                        } ?>" type="text" readonly>
                                </div>
                            </div>
                            <!-- Address Input End -->


                            <!-- Email Address Input Start -->
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Email Address <span class="required">*</span></label>
                                    <input placeholder="<?php if (isset($email)) {
                                                            echo $email;
                                                        } else {
                                                            echo "";
                                                        } ?>" type="email" name="email" readonly>
                                </div>
                            </div>
                            <!-- Email Address Input End -->

                            <!-- Phone Number Input Start -->
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Phone <span class="required">*</span></label>
                                    <input type="text" placeholder="<?php if (isset($contact)) {
                                                                        echo $contact;
                                                                    } else {
                                                                        echo "";
                                                                    } ?>" name="phone" readonly>
                                </div>
                            </div>
                            <!-- Phone Number Input End -->

                            

                        </div>


                    </div>
                </form>
                <!-- Checkbox Form End -->

            </div>

            <div class="col-lg-6 col-12 mb-4">

                <!-- Your Order Area Start -->
                <div class="your-order-area border">

                    <!-- Title Start -->
                    <h3 class="title">Your order</h3>
                    <!-- Title End -->

                    <!-- Your Order Table Start -->
                    <div class="your-order-table table-responsive">
                        <table class="table">

                            <!-- Table Head Start -->
                            <thead>
                                <tr class="cart-product-head">
                                    <th class="cart-product-name text-start">Product</th>
                                    <th class="cart-product-total text-end">Total</th>
                                </tr>
                            </thead>
                            <!-- Table Head End -->

                            <!-- Table Body Start -->
                            <tbody>
                                <?php
                                if ((session()->has('logged_info'))) {
                                    $data = session()->get('logged_info');
                                    $userid = $data['user_id'];
                                    // var_dump($userid);exit();

                                    $db  = \Config\Database::connect();
                                    $fetch_cart = $db->query("SELECT * FROM add_to_cart WHERE user_id='$userid' AND status=0");
                                    $query = $fetch_cart->getNumRows();
                                    if ($query > 0) {
                                        foreach ($fetch_cart->getResult() as $key) {
                                            $cart_id[] = $key->id;
                                            //    $product = $key->product_id;
                                            $product = $key->id;
                                            $product_id = $key->product_id;
                                            $tabelName = $key->table_name;
                                             $ProductCode=$key->ProductCode;
                                            $builder = $db->table($tabelName);

                                            $builder->where('ProductCode',$ProductCode);
                                            $result = $builder->get();
                                            //    var_dump($result->getResult());
                                            foreach ($result->getResult() as $key1) {
                                                $Product_name = $key1->Product_name;
                                                $Product_price = $key1->Product_price;
                                                $image1 = $key1->image1;
                                            } ?>

                                            <tr class="cart_item">
                                                <td class="cart-product-name text-start ps-0"> <?php echo $Product_name ?></td>
                                                <td class="cart-product-total text-end pe-0"><span class="amount">₹<?php echo $sum[] = $Product_price; ?></span></td>
                                            </tr>
                                        <?php } //for loop
                                    }  ?>
                                       
                                        <?php  
                                } //session
                               ?>
                                <?php
                                if ((session()->has('LastID'))) {
                                    $userid  = session()->get('LastID');
                                    // $userid = $data['user_id'];


                                    $db  = \Config\Database::connect();
                                    $fetch_cart = $db->query("SELECT * FROM add_to_cart WHERE user_id='$userid' AND status=0");
                                    $query = $fetch_cart->getNumRows();
                                    if ($query > 0) {
                                        foreach ($fetch_cart->getResult() as $key) {
                                            $cart_id[] = $key->id;
                                            //    $product = $key->product_id;
                                            $product = $key->id;
                                            $product_id = $key->product_id;
                                            $tabelName = $key->table_name;
                                            $ProductCode=$key->ProductCode;
                                            $builder = $db->table($tabelName);

                                                $builder->where('ProductCode',$ProductCode);
                                            $result = $builder->get();
                                            //    var_dump($result->getResult());
                                            foreach ($result->getResult() as $key1) {
                                                $Product_name = $key1->Product_name;
                                                $Product_price = $key1->Product_price;
                                                $image1 = $key1->image1;
                                            } ?>

                                            <tr class="cart_item">
                                                <td class="cart-product-name text-start ps-0"> <?php echo $Product_name ?></td>
                                                <td class="cart-product-total text-end pe-0"><span class="amount">₹<?php echo $sum[] = $Product_price; ?></span></td>
                                            </tr>
                                        <?php } //for loop
                                    } else { ?>
                                        <tr class="cart_item">
                                            <td class="cart-product-name text-start ps-0"> <strong class="product-quantity">Yoursss Cart is empty !!</strong></td>

                                        </tr>
                                        <?php  }
                                } //session
                               ?>
                            </tbody>
                            <!-- Table Body End -->
                    <?php if ($query > 0) { ?>
                            
                            <!-- Table Footer Start -->
                            <tfoot>
                                <tr class="cart-subtotal">
                                    <th class="text-start ps-0">Cart Subtotal</th>
                                    <td class="text-end pe-0"><span class="amount"><?php echo $grand_tot = array_sum($sum); ?></span></td>
                                </tr>
                                <tr class="order-total">
                                    <th class="text-start ps-0">Order Total</th>
                                    <td class="text-end pe-0"><strong><span class="amount"><?php echo $grand = $grand_tot + 70 ?></span></strong></td>
                                </tr>
                            </tfoot>
                            <!-- Table Footer End -->
                            <?php } else {
                            }?>
                        </table>
                    </div>
                    <!-- Your Order Table End -->
                    <?php if ($query > 0) { ?>
                        <!-- Payment Accordion Order Button Start -->
                        <div class="payment-accordion-order-button">
                            <form method="post" action="<?php echo base_url(); ?>Payment">
                                <input type="hidden" name="user_id" value="<?php echo $userid; ?>">
                                <?php $cart_ids = implode(',', $cart_id); ?>
                                <input type="hidden" name="cart_ids" value="<?php echo $cart_ids; ?>">
                                <input type="hidden" name="order_id" value="8888">
                                <input type="hidden" name="total_amount" value="<?php echo $grand; ?>">
                                <input type="hidden" name="ProductCode" value="<?php echo $ProductCode; ?>">
                                <input type="submit" class="button alt" name="place_order" id="place_order" value="Place order" data-value="Place order" />
                            </form>

                        </div>
                    <?php }  ?>
                        
                   
                </div>
                <!-- Payment Accordion Order Button End -->
            </div>
            <!-- Your Order Area End -->
        </div>
    </div>
</div>
</div>
<!-- Checkout Section End -->
<?= $this->endSection(); ?>