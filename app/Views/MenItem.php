<?= $this->extend("layout/base"); ?>

<?= $this->section('content'); ?>
<!-- Breadcrumb Section Start -->
<div class="section">

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-light">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h1 class="title">Shop List</h1>
                <ul>
                    <li>
                        <a href="index.html">Home </a>
                    </li>
                    <li class="active"> shop</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

</div>
<!-- Breadcrumb Section End -->

<!-- Shop Section Start -->
<div class="section section-margin">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!--shop toolbar start-->
                <div class="shop_toolbar_wrapper flex-column flex-md-row mb-10">

                    <!-- Shop Top Bar Left start -->
                    <div class="shop-top-bar-left mb-md-0 mb-2">
                        <div class="shop-top-show">
                            <span>Showing 1–12 of 39 results</span>
                        </div>
                    </div>
                    <!-- Shop Top Bar Left end -->

                    <!-- Shopt Top Bar Right Start -->
                    <div class="shop-top-bar-right">
                        <div class="shop-short-by mr-4">
                            <select class="nice-select" aria-label=".form-select-sm example">
                                <option selected>Show 24</option>
                                <option value="1">Show 24</option>
                                <option value="2">Show 12</option>
                                <option value="3">Show 15</option>
                                <option value="3">Show 30</option>
                            </select>
                        </div>

                        <div class="shop-short-by mr-4">
                            <select class="nice-select" aria-label=".form-select-sm example">
                                <option selected>Short by Default</option>
                                <option value="1">Short by Popularity</option>
                                <option value="2">Short by Rated</option>
                                <option value="3">Short by Latest</option>
                                <option value="3">Short by Price</option>
                                <option value="3">Short by Price</option>
                            </select>
                        </div>

                        <div class="shop_toolbar_btn">
                            <button data-role="grid_4" type="button" class="btn-grid-4" title="Grid"><i class="fa fa-th"></i></button>
                            <button data-role="grid_list" type="button" class="active btn-list" title="List"><i class="fa fa-th-list"></i></button>
                        </div>
                    </div>
                    <!-- Shopt Top Bar Right End -->

                </div>
                <!--shop toolbar end-->

                <!-- Shop Wrapper Start -->
                <div class="row shop_wrapper grid_list" data-aos="fade-up" data-aos-delay="200">

                    <!-- Single Product Start -->
                    <div class="col-12 product">
                        <div class="product-inner">
                            <div class="thumb">
                                <a href="#" class="image">
                                    <img class="first-image" src="<?php echo base_url(); ?>assets/images/products/small-product/1.webp" alt="Product" />
                                    <img class="second-image" src="assets/images/products/small-product/4.webp" alt="Product" />
                                </a>
                                <div class="actions">
                                    <a href="wishlist.html" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i></a>
                                    <a href="#" title="Quickview" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                    <a href="compare.html" title="Compare" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>
                                <h5 class="title"><a href="single-product.html">Basic Jogging Shorts</a></h5>
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                </span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                <span class="price">
                                    <span class="new">$40.50</span>
                                    <span class="old">$42.85</span>
                                </span>
                                <div class="shop-list-btn">
                                    <a title="Wishlist" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"><i class="fa fa-heart"></i></a>
                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary" title="Add To Cart">Add To Cart</button>
                                    <a title="Compare" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary compare"><i class="fa fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product End -->

                    <!-- Single Product Start -->
                    <div class="col-12 product">
                        <div class="product-inner">
                            <div class="thumb">
                                <a href="#" class="image">
                                    <img class="first-image" src="<?php echo base_url(); ?>assets/images/products/small-product/1.webp" alt="Product" />
                                    <img class="second-image" src="assets/images/products/small-product/4.webp" alt="Product" />
                                </a>
                                <div class="actions">
                                    <a href="wishlist.html" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i></a>
                                    <a href="#" title="Quickview" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                    <a href="compare.html" title="Compare" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>
                                <h5 class="title"><a href="single-product.html">Simple Woven Fabrics</a></h5>
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                </span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                    <span class="old">$42.85</span>
                                </span>
                                <div class="shop-list-btn">
                                    <a title="Wishlist" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"><i class="fa fa-heart"></i></a>
                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary" title="Add To Cart">Add To Cart</button>
                                    <a title="Compare" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary compare"><i class="fa fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product End -->

                    <!-- Single Product Start -->
                    <div class="col-12 product">
                        <div class="product-inner">
                            <div class="thumb">
                                <a href="#" class="image">
                                    <img class="first-image" src="<?php echo base_url(); ?>assets/images/products/small-product/1.webp" alt="Product" />
                                    <img class="second-image" src="assets/images/products/small-product/4.webp" alt="Product" />
                                </a>
                                <div class="actions">
                                    <a href="wishlist.html" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i></a>
                                    <a href="#" title="Quickview" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                    <a href="compare.html" title="Compare" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>
                                <h5 class="title"><a href="single-product.html">Make Thing Happen T-Shirt</a></h5>
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                </span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                    <span class="old">$42.85</span>
                                </span>
                                <div class="shop-list-btn">
                                    <a title="Wishlist" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"><i class="fa fa-heart"></i></a>
                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary" title="Add To Cart">Add To Cart</button>
                                    <a title="Compare" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary compare"><i class="fa fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product End -->

                    <!-- Single Product Start -->
                    <div class="col-12 product">
                        <div class="product-inner">
                            <div class="thumb">
                                <a href="#" class="image">
                                    <img class="first-image" src="<?php echo base_url(); ?>assets/images/products/small-product/1.webp" alt="Product" />
                                    <img class="second-image" src="assets/images/products/small-product/4.webp" alt="Product" />
                                </a>
                                <div class="actions">
                                    <a href="wishlist.html" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i></a>
                                    <a href="#" title="Quickview" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                    <a href="compare.html" title="Compare" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>
                                <h5 class="title"><a href="single-product.html">Basic Lather Sneaker</a></h5>
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                </span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                    <span class="old">$42.85</span>
                                </span>
                                <div class="shop-list-btn">
                                    <a title="Wishlist" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"><i class="fa fa-heart"></i></a>
                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary" title="Add To Cart">Add To Cart</button>
                                    <a title="Compare" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary compare"><i class="fa fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product End -->

                    <!-- Single Product Start -->
                    <div class="col-12 product">
                        <div class="product-inner">
                            <div class="thumb">
                                <a href="#" class="image">
                                    <img class="first-image" src="<?php echo base_url(); ?>assets/images/products/small-product/1.webp" alt="Product" />
                                    <img class="second-image" src="assets/images/products/small-product/4.webp" alt="Product" />
                                </a>
                                <div class="actions">
                                    <a href="wishlist.html" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i></a>
                                    <a href="#" title="Quickview" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                    <a href="compare.html" title="Compare" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>
                                <h5 class="title"><a href="single-product.html">Simple Woven Fashion</a></h5>
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                </span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                    <span class="old">$42.85</span>
                                </span>
                                <div class="shop-list-btn">
                                    <a title="Wishlist" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"><i class="fa fa-heart"></i></a>
                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary" title="Add To Cart">Add To Cart</button>
                                    <a title="Compare" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary compare"><i class="fa fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product End -->

                    <!-- Single Product Start -->
                    <div class="col-12 product">
                        <div class="product-inner">
                            <div class="thumb">
                                <a href="#" class="image">
                                    <img class="first-image" src="<?php echo base_url(); ?>assets/images/products/small-product/1.webp" alt="Product" />
                                    <img class="second-image" src="assets/images/products/small-product/4.webp" alt="Product" />
                                </a>
                                <div class="actions">
                                    <a href="wishlist.html" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i></a>
                                    <a href="#" title="Quickview" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                    <a href="compare.html" title="Compare" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>
                                <h5 class="title"><a href="single-product.html">Handmade Shoulder Bag</a></h5>
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                </span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                    <span class="old">$42.85</span>
                                </span>
                                <div class="shop-list-btn">
                                    <a title="Wishlist" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"><i class="fa fa-heart"></i></a>
                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary" title="Add To Cart">Add To Cart</button>
                                    <a title="Compare" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary compare"><i class="fa fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product End -->

                    <!-- Single Product Start -->
                    <div class="col-12 product">
                        <div class="product-inner">
                            <div class="thumb">
                                <a href="#" class="image">
                                    <img class="first-image" src="<?php echo base_url(); ?>assets/images/products/small-product/1.webp" alt="Product" />
                                    <img class="second-image" src="assets/images/products/small-product/4.webp" alt="Product" />
                                </a>
                                <div class="actions">
                                    <a href="wishlist.html" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i></a>
                                    <a href="#" title="Quickview" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                    <a href="compare.html" title="Compare" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>
                                <h5 class="title"><a href="single-product.html">Enjoy The Rest T-Shirt</a></h5>
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                </span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                    <span class="old">$42.85</span>
                                </span>
                                <div class="shop-list-btn">
                                    <a title="Wishlist" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"><i class="fa fa-heart"></i></a>
                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary" title="Add To Cart">Add To Cart</button>
                                    <a title="Compare" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary compare"><i class="fa fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product End -->

                    <!-- Single Product Start -->
                    <div class="col-12 product">
                        <div class="product-inner">
                            <div class="thumb">
                                <a href="#" class="image">
                                    <img class="first-image" src="<?php echo base_url(); ?>assets/images/products/small-product/1.webp" alt="Product" />
                                    <img class="second-image" src="assets/images/products/small-product/4.webp" alt="Product" />
                                </a>
                                <div class="actions">
                                    <a href="wishlist.html" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i></a>
                                    <a href="#" title="Quickview" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                    <a href="compare.html" title="Compare" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>
                                <h5 class="title"><a href="single-product.html">Basic Lather Sneaker</a></h5>
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                </span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                    <span class="old">$42.85</span>
                                </span>
                                <div class="shop-list-btn">
                                    <a title="Wishlist" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"><i class="fa fa-heart"></i></a>
                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary" title="Add To Cart">Add To Cart</button>
                                    <a title="Compare" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary compare"><i class="fa fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product End -->

                    <!-- Single Product Start -->
                    <div class="col-12 product">
                        <div class="product-inner">
                            <div class="thumb">
                                <a href="#" class="image">
                                    <img class="first-image" src="<?php echo base_url(); ?>assets/images/products/small-product/1.webp" alt="Product" />
                                    <img class="second-image" src="assets/images/products/small-product/4.webp" alt="Product" />
                                </a>
                                <div class="actions">
                                    <a href="wishlist.html" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i></a>
                                    <a href="#" title="Quickview" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                    <a href="compare.html" title="Compare" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>
                                <h5 class="title"><a href="single-product.html">Simple Woven Fashion</a></h5>
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                </span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                    <span class="old">$42.85</span>
                                </span>
                                <div class="shop-list-btn">
                                    <a title="Wishlist" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"><i class="fa fa-heart"></i></a>
                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary" title="Add To Cart">Add To Cart</button>
                                    <a title="Compare" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary compare"><i class="fa fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product End -->

                    <!-- Single Product Start -->
                    <div class="col-12 product">
                        <div class="product-inner">
                            <div class="thumb">
                                <a href="#" class="image">
                                    <img class="first-image" src="<?php echo base_url(); ?>assets/images/products/small-product/1.webp" alt="Product" />
                                    <img class="second-image" src="assets/images/products/small-product/4.webp" alt="Product" />
                                </a>
                                <div class="actions">
                                    <a href="wishlist.html" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i></a>
                                    <a href="#" title="Quickview" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                    <a href="compare.html" title="Compare" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>
                                <h5 class="title"><a href="single-product.html">Brother Hoddies in Grey</a></h5>
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                </span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                    <span class="old">$42.85</span>
                                </span>
                                <div class="shop-list-btn">
                                    <a title="Wishlist" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"><i class="fa fa-heart"></i></a>
                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary" title="Add To Cart">Add To Cart</button>
                                    <a title="Compare" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary compare"><i class="fa fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product End -->

                    <!-- Single Product Start -->
                    <div class="col-12 product">
                        <div class="product-inner">
                            <div class="thumb">
                                <a href="#" class="image">
                                    <img class="first-image" src="<?php echo base_url(); ?>assets/images/products/small-product/1.webp" alt="Product" />
                                    <img class="second-image" src="assets/images/products/small-product/4.webp" alt="Product" />
                                </a>
                                <div class="actions">
                                    <a href="wishlist.html" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i></a>
                                    <a href="#" title="Quickview" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                    <a href="compare.html" title="Compare" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>
                                <h5 class="title"><a href="single-product.html">Basic Lather Sneaker</a></h5>
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                </span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                    <span class="old">$42.85</span>
                                </span>
                                <div class="shop-list-btn">
                                    <a title="Wishlist" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"><i class="fa fa-heart"></i></a>
                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary" title="Add To Cart">Add To Cart</button>
                                    <a title="Compare" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary compare"><i class="fa fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product End -->

                    <!-- Single Product Start -->
                    <div class="col-12 product">
                        <div class="product-inner">
                            <div class="thumb">
                                <a href="#" class="image">
                                    <img class="first-image" src="<?php echo base_url(); ?>assets/images/products/small-product/1.webp" alt="Product" />
                                    <img class="second-image" src="assets/images/products/small-product/4.webp" alt="Product" />
                                </a>
                                <div class="actions">
                                    <a href="wishlist.html" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i></a>
                                    <a href="#" title="Quickview" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                    <a href="compare.html" title="Compare" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>
                                <h5 class="title"><a href="single-product.html">Simple Woven Fabrics</a></h5>
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                </span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                    <span class="old">$42.85</span>
                                </span>
                                <div class="shop-list-btn">
                                    <a title="Wishlist" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"><i class="fa fa-heart"></i></a>
                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary" title="Add To Cart">Add To Cart</button>
                                    <a title="Compare" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary compare"><i class="fa fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product End -->

                </div>
                <!-- Shop Wrapper End -->

                <!--shop toolbar start-->
                <div class="shop_toolbar_wrapper mt-10">

                    <!-- Shop Top Bar Left start -->
                    <div class="shop-top-bar-left">
                        <div class="shop-short-by mr-4">
                            <select class="nice-select rounded-0" aria-label=".form-select-sm example">
                                <option selected>Show 12 Per Page</option>
                                <option value="1">Show 12 Per Page</option>
                                <option value="2">Show 24 Per Page</option>
                                <option value="3">Show 15 Per Page</option>
                                <option value="3">Show 30 Per Page</option>
                            </select>
                        </div>
                    </div>
                    <!-- Shop Top Bar Left end -->

                    <!-- Shopt Top Bar Right Start -->
                    <div class="shop-top-bar-right">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Shopt Top Bar Right End -->

                </div>
                <!--shop toolbar end-->

            </div>
        </div>
    </div>
</div>
<!-- Shop Section End -->

<?= $this->endSection(); ?>