<?= $this->extend("layout/base"); ?>

<?= $this->section('content'); ?>
<!-- Breadcrumb Section Start -->
<div class="section">

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-light">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h1 class="title">Shopping Cart</h1>
                <ul>
                    <li>
                        <a href="<?php echo base_url();?>">Home </a>
                    </li>
                    <li class="active"> Shopping Cart</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

</div>
<!-- Breadcrumb Section End -->

<!-- Shopping Cart Section Start -->
<div class="section section-margin">
    <div class="container">

        <div class="row">
            <div class="col-12">

                <!-- Cart Table Start -->
                <div class="cart-table table-responsive">
                    <table class="table table-bordered">

                        <!-- Table Head Start -->
                        <thead>
                            <tr>
                                <th class="pro-thumbnail">Image</th>
                                <th class="pro-title">Product</th>
                                <th class="pro-price">Price</th>
                               
                                <th class="pro-remove">Remove</th>
                            </tr>
                        </thead>
                        <!-- Table Head End -->

                        <!-- Table Body Start -->
                        <tbody>
                            <?php
                            if ((session()->has('logged_info'))) {
                                $data = session()->get('logged_info');
                                $userid = $data['user_id'];
                                

                                $db  = \Config\Database::connect();
                                $fetch_cart = $db->query("SELECT * FROM add_to_cart WHERE user_id='$userid' AND status=0");
                                foreach ($fetch_cart->getResult() as $key) {
                                    //    $product = $key->product_id;
                                    $query =  $fetch_cart->getNumRows();
                                    //if fetct
                                    $product = $key->id;
                                    $product_id = $key->product_id;
                                    $productCode=$key->ProductCode;
                                    $tabelName = $key->table_name;
                                        $folder=$key->folder;
                                    $builder = $db->table($tabelName);

                                   $builder->where('ProductCode',$productCode);
                                    $result = $builder->get();
                                    //    var_dump($result->getResult());
                                    foreach ($result->getResult() as $key1) {
                                        $Product_name = $key1->Product_name;
                                        $Product_price = $key1->Product_price;
                                        $image1 = $key1->image1;
                                    }
                                    if ($query > 0) { ?>

                                        <tr>
                                            <td class="pro-thumbnail"><a href="#"><img class="" height="200px" src="<?php echo base_url(); ?>assets/images/uploads/<?php echo $folder ?>/<?php echo $image1 ?>" alt="Product" /></a></td>
                                            <td class="pro-title"><a href="#"><?php echo $Product_name ?></a></td>
                                            <td class="pro-price"><span>₹ <?php echo $sum[] = $Product_price; ?></span></td>
                                          
                                           
                                            <td class="pro-remove"><a href="#"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                    <?php } else { ?>
                                        <tr>
                                            <td colspan="6"> Your Cart is empty !!! </td>
                                        </tr>
                                    <?php }
                                    }
                            }
                            ?>
                            <?php
                            if ((session()->has('logged1_info'))) {
                                $data = session()->get('logged1_info');
                                $userid = $data['user_id'];
                                // var_dump($userid);exit();

                                $db  = \Config\Database::connect();
                                $fetch_cart = $db->query("SELECT * FROM add_to_cart WHERE user_id='$userid' AND status=0");
                                foreach ($fetch_cart->getResult() as $key) {
                                    //    $product = $key->product_id;
                                    $query =  $fetch_cart->getNumRows();
                                    //if fetct
                                    $product = $key->id;
                                    $product_id = $key->product_id;
                                     $productCode=$key->ProductCode;
                                    $tabelName = $key->table_name;
                                    $folder=$key->folder;
                                    $builder = $db->table($tabelName);

                                    $builder->where('ProductCode',$productCode);
                                    $result = $builder->get();
                                    //    var_dump($result->getResult());
                                    foreach ($result->getResult() as $key1) {
                                        $Product_name = $key1->Product_name;
                                        $Product_price = $key1->Product_price;
                                        $image1 = $key1->image1;
                                    }
                                    if ($query > 0) { ?>

                                        <tr>
                                            <td class="pro-thumbnail"><a href="#"><img class="" height="200px" src="<?php echo base_url(); ?>assets/images/uploads/<?php echo $folder ?>/<?php echo $image1 ?>" alt="Product" /></a></td>
                                            <td class="pro-title"><a href="#"><?php echo $Product_name ?></a></td>
                                            <td class="pro-price"><span>₹ <?php echo $sum[] = $Product_price; ?></span></td>
                                           
                                         
                                            <td class="pro-remove"><a href="#"><i onclick="deleteCartItem('<?= $product ?>')"  class="fa fa-trash"></i></a></td>
                                        </tr>
                                    <?php } else { ?>
                                        <tr>
                                            <td> Your Cart is empty !!! </td>
                                        </tr>
                                    <?php }
                                    }
                            }
                            ?>

                        </tbody>
                        <!-- Table Body End -->

                    </table>
                </div>
                <!-- Cart Table End -->

                <!-- Cart Update Option Start -->
                <!--<div class="cart-update-option d-block d-md-flex justify-content-between">-->

                    <!-- Apply Coupon Wrapper Start -->
                    <!--<div class="apply-coupon-wrapper">-->
                    <!--    <form action="#" method="post" class=" d-block d-md-flex">-->
                    <!--        <input type="text" placeholder="Enter Your Coupon Code" required />-->
                    <!--        <button class="btn btn-dark btn-hover-primary rounded-0">Apply Coupon</button>-->
                    <!--    </form>-->
                    <!--</div>-->
                    <!-- Apply Coupon Wrapper End -->

                    <!-- Cart Update Start -->
                    <!--<div class="cart-update mt-sm-16">-->
                    <!--    <a href="#" class="btn btn-dark btn-hover-primary rounded-0">Update Cart</a>-->
                    <!--</div>-->
                    <!-- Cart Update End -->

                <!--</div>-->
                <!-- Cart Update Option End -->

            </div>
        </div>
        <?php
        if ((session()->has('logged_info'))) {
            $data = session()->get('logged_info');
            $userid = $data['user_id'];


            $db  = \Config\Database::connect();
            $fetch_cart = $db->query("SELECT * FROM add_to_cart WHERE user_id='$userid' AND status=0");
            // foreach ($fetch_cart->getResult() as $key) {
                //    $product = $key->product_id;
                $query =  $fetch_cart->getNumRows();
                if ($query > 0) { ?>
                    <div class="row">
                        <div class="col-lg-5 ms-auto col-custom">

                            <!-- Cart Calculation Area Start -->
                            <div class="cart-calculator-wrapper">

                                <!-- Cart Calculate Items Start -->
                                <div class="cart-calculate-items">

                                    <!-- Cart Calculate Items Title Start -->
                                    <h3 class="title">Cart Totals</h3>
                                    <!-- Cart Calculate Items Title End -->

                                    <!-- Responsive Table Start -->
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <td>Sub Total</td>
                                                <td>₹ <?php echo $grand_tot = array_sum($sum); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Shipping</td>
                                                <td><?php echo 70 ?></td>
                                            </tr>
                                            <tr class="total">
                                                <td>Total</td>
                                                <td class="total-amount"><?php echo $grand = $grand_tot + 70 ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <!-- Responsive Table End -->

                                </div>
                                <!-- Cart Calculate Items End -->

                                <!-- Cart Checktout Button Start -->
                                <!-- <a href="Checkout" class="btn btn-dark btn-hover-primary rounded-0 w-100">Proceed To Checkout</a>? -->
                                <?php if (session()->has('logged_info')) { ?>
                                    <a href="<?php echo base_url(); ?>Billing-Details" class="btn btn-dark btn-hover-primary rounded-0 w-100">Proceed To Checkout</a>
                                    <!-- Cart Checktout Button End -->
                                <?php }
                                ?>
                            </div>
                            <!-- Cart Calculation Area End -->

                        </div>
                    </div>
        <?php }
            // }
        } ?>
         <?php
        if ((session()->has('logged1_info'))) {
            $data = session()->get('logged1_info');
            $userid = $data['user_id'];
        //    var_dump($userid);exit();

            $db  = \Config\Database::connect();
            $fetch_cart = $db->query("SELECT * FROM add_to_cart WHERE user_id='$userid' AND status=0");
            // var_dump($fetch_cart->getResult());exit();
            // foreach ($fetch_cart->getResult() as $key) {
                //    $product = $key->product_id;
                $query =  $fetch_cart->getNumRows();
                //  var_dump($query);exit();
                if ($query > 0) { ?>
                    <div class="row">
                        <div class="col-lg-5 ms-auto col-custom">

                            <!-- Cart Calculation Area Start -->
                            <div class="cart-calculator-wrapper">

                                <!-- Cart Calculate Items Start -->
                                <div class="cart-calculate-items">

                                    <!-- Cart Calculate Items Title Start -->
                                    <h3 class="title">Cart Total</h3>
                                    <!-- Cart Calculate Items Title End -->

                                    <!-- Responsive Table Start -->
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <td>Sub Total</td>
                                                <td>₹ <?php echo $grand_tot = array_sum($sum); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Shipping</td>
                                                <td><?php echo 70 ?></td>
                                            </tr>
                                            <tr class="total">
                                                <td>Total</td>
                                                <td class="total-amount"><?php echo $grand = $grand_tot + 70 ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <!-- Responsive Table End -->

                                </div>
                                <!-- Cart Calculate Items End -->

                                <!-- Cart Checktout Button Start -->
                                <!-- <a href="Checkout" class="btn btn-dark btn-hover-primary rounded-0 w-100">Proceed To Checkout</a>? -->
                                <?php
                                if (session()->has('logged1_info')) { ?>
                                    <a href="<?php echo base_url(); ?>Billing-Detail" class="btn btn-dark btn-hover-primary rounded-0 w-100">Proceed To Checkout</a>
                                <?php } ?>
                            </div>
                            <!-- Cart Calculation Area End -->

                        </div>
                    </div>
        <?php }
            // }
        } ?>
    </div>
</div>
<!-- Shopping Cart Section End -->




<?= $this->endSection(); ?>