<?=$this->extend("layout/base");?>

<?=$this->section('content');?>
<style type="text/css">
        /* For this page only */
        /* body { font-family:Arial, Helvetica, sans-serif; font-size:13px; }
        .wrap { text-align:center; line-height:21px; padding:20px; } */

        /* For pagination function. */
        ul.pagination {
            text-align:center;
            color:red;
        }
        ul.pagination li {
            display:inline;
            padding:0 3px;
        }
        ul.pagination a {
            color:red;
            display:inline-block;
            padding:5px 10px;
            border:1px solid #cde0dc;
            text-decoration:none;
        }
        ul.pagination a:hover,
        ul.pagination a.current {
            background:red;
            color:#fff;
        }
        </style>
        <?php
function pagination($per_page = 4, $page = 1, $url = '?')
{
    $db = db_connect();
    // mysql_select_db("db", $db);
    $result = $db->query("SELECT COUNT(*) as `num` FROM womens");
    $row = $result->getResultArray();

    //$total = $row['num'];
    // var_dump($row[0]['num']);
    $total = $row[0]['num'];
    $adjacents = "2";

    $prevlabel = "&lsaquo; Prev";
    $nextlabel = "Next &rsaquo;";
    $lastlabel = "Last &rsaquo;&rsaquo;";

    $page = ($page == 0 ? 1 : $page);
    $start = ($page - 1) * $per_page;

    $prev = $page - 1;
    $next = $page + 1;

    $lastpage = ceil($total / $per_page);

    $lpm1 = $lastpage - 1; // //last page minus 1

    $pagination = "";
    if ($lastpage > 1) {
        $pagination .= "<ul class='pagination'>";
        $pagination .= "<li class='page_info'></li>";

        if ($page > 1) {
            $pagination .= "<li><a href='{$url}page={$prev}'>{$prevlabel}</a></li>";
        }

        if ($lastpage < 7 + ($adjacents * 2)) {
            for ($counter = 1; $counter <= $lastpage; $counter++) {
                if ($counter == $page) {
                    $pagination .= "<li><a class='current'>{$counter}</a></li>";
                } else {
                    $pagination .= "<li><a href='{$url}page={$counter}'>{$counter}</a></li>";
                }

            }

        } elseif ($lastpage > 5 + ($adjacents * 2)) {

            if ($page < 1 + ($adjacents * 2)) {

                for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++) {
                    if ($counter == $page) {
                        $pagination .= "<li><a class='current'>{$counter}</a></li>";
                    } else {
                        $pagination .= "<li><a href='{$url}page={$counter}'>{$counter}</a></li>";
                    }

                }
                $pagination .= "<li class='dot'>...</li>";
                $pagination .= "<li><a href='{$url}page={$lpm1}'>{$lpm1}</a></li>";
                $pagination .= "<li><a href='{$url}page={$lastpage}'>{$lastpage}</a></li>";

            } elseif ($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2)) {

                $pagination .= "<li><a href='{$url}page=1'>1</a></li>";
                $pagination .= "<li><a href='{$url}page=2'>2</a></li>";
                $pagination .= "<li class='dot'>...</li>";
                for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++) {
                    if ($counter == $page) {
                        $pagination .= "<li><a class='current'>{$counter}</a></li>";
                    } else {
                        $pagination .= "<li><a href='{$url}page={$counter}'>{$counter}</a></li>";
                    }

                }
                $pagination .= "<li class='dot'>..</li>";
                $pagination .= "<li><a href='{$url}page={$lpm1}'>{$lpm1}</a></li>";
                $pagination .= "<li><a href='{$url}page={$lastpage}'>{$lastpage}</a></li>";

            } else {

                $pagination .= "<li><a href='{$url}page=1'>1</a></li>";
                $pagination .= "<li><a href='{$url}page=2'>2</a></li>";
                $pagination .= "<li class='dot'>..</li>";
                for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++) {
                    if ($counter == $page) {
                        $pagination .= "<li><a class='current'>{$counter}</a></li>";
                    } else {
                        $pagination .= "<li><a href='{$url}page={$counter}'>{$counter}</a></li>";
                    }

                }
            }
        }

        if ($page < $counter - 1) {
            $pagination .= "<li><a href='{$url}page={$next}'>{$nextlabel}</a></li>";
            $pagination .= "<li><a href='{$url}page=$lastpage'>{$lastlabel}</a></li>";
        }

        $pagination .= "</ul>";
    }

    return $pagination;
}
?>
 <!-- Breadcrumb Section Start -->
 <div class="section">

<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-light">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <h1 class="title">Shop Grid</h1>
            <ul>
                <li>
                    <a href="#">Home </a>
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
                    <div class="shop_toolbar_btn">
                        <button data-role="grid_4" type="button" class="active btn-grid-4" title="Grid"><i class="fa fa-th"></i></button>
                        <button data-role="grid_list" type="button" class="btn-list" title="List"><i class="fa fa-th-list"></i></button>
                    </div>
                    <!--<div class="shop-short-by mr-4">-->
                    <!--    <select class="nice-select" aria-label=".form-select-sm example">-->
                    <!--        <option selected>Show 24</option>-->
                    <!--        <option value="1">Show 24</option>-->
                    <!--        <option value="2">Show 12</option>-->
                    <!--        <option value="3">Show 15</option>-->
                    <!--        <option value="3">Show 30</option>-->
                    <!--    </select>-->
                    <!--</div>-->

                    <!--<div class="shop-short-by mr-4">-->
                    <!--    <select class="nice-select" aria-label=".form-select-sm example">-->
                    <!--        <option selected>Short by Default</option>-->
                    <!--        <option value="1">Short by Popularity</option>-->
                    <!--        <option value="2">Short by Rated</option>-->
                    <!--        <option value="3">Short by Latest</option>-->
                    <!--        <option value="3">Short by Price</option>-->
                    <!--        <option value="3">Short by Price</option>-->
                    <!--    </select>-->
                    <!--</div>-->

                    
                </div>
                <!-- Shopt Top Bar Right End -->

            </div>
            <!--shop toolbar end-->

            <!-- Shop Wrapper Start -->
            <div class="row shop_wrapper grid_4">
                  <?php
$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
if ($page <= 0) {
    $page = 1;
}

$per_page = 4; // Set how many records do you want to display per page.

$startpoint = ($page * $per_page) - $per_page;
if ((session()->has('WomenID'))) {
    $WID = session()->get('WomenID');
}
$db = db_connect();
$result = $db->query("SELECT * FROM `womens` WHERE `Women_id`= $WID ORDER BY `Id` ASC LIMIT {$startpoint} , {$per_page}");

// $result = $db->query("SELECT * FROM `womens` WHERE Women_id=$WID");
foreach ($result->getResult() as $key) {
    $fold = 'womens';
    $table = 'womens';
    $id = $key->Id;
    // $Product_master_id = $key->Product_master_id;
    $Brand = $key->Brand;
    $Product_name = $key->Product_name;
    $Product_price = $key->Product_price;
    $image1 = $key->image1;
    $image2 = $key->image2;
    $image3 = $key->image3;
    $image4 = $key->image4;

    ?>
                <!-- Single Product Start -->
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 product" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-inner">
                        <div class="thumb">
                        <a href="<?php echo base_url(); ?>WomenProduct-Details/<?php echo $id ?> " class="image">
                                <img class="first-image" src="<?php echo base_url(); ?>/assets/images/uploads/womens/<?php echo $image1; ?>" alt="Product" />
                                <img class="second-image" src="<?php echo base_url(); ?>/assets/images/uploads/womens/<?php echo $image2; ?>" alt="Product" />
                            </a>
                            
                        </div>
                        <div class="content">
                            <h4 class="sub-title"><a href="#"><?php echo $Brand ?></a></h4>
                            <h5 class="title"><a href="#"><?php echo $Product_name ?></a></h5>

                            <span class="price">
                                    <span class="new">₹.<?php echo $Product_price ?></span>
                            <!--<span class="old">Rs.600</span>-->
                            </span>
                            <div class="shop-list-btn">
                                <a title="Wishlist" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"><i class="fa fa-heart"></i></a>
                                <a href="<?php echo base_url(); ?>WomenProduct-Details/<?php echo $id ?> ">
                                            <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button></a>
                                <a title="Compare" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary compare"><i class="fa fa-random"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Product End -->

<?php }?>


            </div>
            <!-- Shop Wrapper End -->

            <!--shop toolbar start-->
            <div class="shop_toolbar_wrapper mt-10">

                <!-- Shop Top Bar Left start -->
                <div class="shop-top-bar-left">
                    <div class="shop-short-by mr-4">
                        <select class="nice-select rounded-0" aria-label=".form-select-sm example">
                        <option selected>Show 6 Per Page</option>
                                <!-- <option value="1">Show 12 Per Page</option>
                                <option value="2">Show 24 Per Page</option>
                                <option value="3">Show 15 Per Page</option>
                                <option value="3">Show 30 Per Page</option> -->
                        </select>
                    </div>
                </div>
                <!-- Shop Top Bar Left end -->

                <!-- Shopt Top Bar Right Start -->
                <div class="shop-top-bar-right">
                    <nav>
                        <ul class="pagination">
                            <!-- <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li> -->
                            <?php
echo pagination($per_page, $page, $url = '?'); ?>
                            <!-- <li class="page-item"><a class="page-link active" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li> -->
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
<?=$this->endSection();?>