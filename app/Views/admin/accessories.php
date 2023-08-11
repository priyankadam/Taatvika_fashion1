<?= $this->extend('admin/layouts/adminmain'); ?>



<?= $this->section('breadcrumbs_links') ?>
<li class="breadcrumb-item active"></li>
<?= $this->endSection('breadcrumbs_links') ?>

<?= $this->section('contents') ?>
<div class="row m-2 showkeyfeaturesdiv ">
    <div class="card  col-12">
        <div class="card-header">
            <h4 class="box-title m-b-0">Add Accessories</h4>
        </div>
        <div class="card-body">


            <div class="message mb-3"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- <form action="</?=base_url('admin/Add-Product')?>" method="post"   id = "RecordForm"  enctype="multipart/form-data"> -->

                            <form method="" enctype="multipart/form-data" id="RecordForm">

                                <div class="form-group col-md-12">
                                    <label for="Banner">Accessories *</label>

                                    <select class="form-control" id="source" name="source">
                                        <option disabled="" selected="" value="">Select Accessories</option>
                                        <?php
                                        $db = db_connect();
                                        $result = $db->query("SELECT * FROM `accessories_master` ");

                                        foreach ($result->getResultArray() as $key) {

                                        ?>

                                            <option value="<?php echo $key['id']; ?>"><?php echo $key['accessories_type']; ?></option>
                                        <?php    } ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <!-- </?php var_dump($womens_acces); exit();?> -->


                                    <select id="mens_acces" name="mens_acces" aria-required="true">
                                        <option disabled="" selected="" value="">Mens Accessories</option>
                                        <?php if (!empty($mens_acces)) {
                                            foreach ($mens_acces as $key) { ?>


                                                <option value="<?php echo $key['Id']; ?>"><?php echo $key['men_acces']; ?></option>
                                        <?php }
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <select id="womens_acces" name="womens_acces" aria-required="true">
                                        <option disabled="" selected="" value="">Womens Accessories</option>
                                        <?php if (!empty($womens_acces)) {
                                            foreach ($womens_acces as $key) { ?>

                                                <option value="<?php echo $key['Id']; ?>"><?php echo $key['womens_acces']; ?></option>
                                        <?php
                                            }
                                        } ?>
                                    </select>




                                </div>

                                <!--  <div class="form-group col-md-12">
                                      <label for="tag">Brand *</label>  <span id="tag_val_error" class="text-danger ms-3"></span>
                                     <input type="text" class="form-control" id="Brand" name="Brand" placeholder="Enter Brand Name"> 
                                  </div> -->
                                <div class="form-group col-md-12">
                                    <label for="subTag">Product Name *</label><span id="subtag_val_error" class="text-danger ms-3"></span>
                                    <input type="text" class="form-control" id="ProductName" name="ProductName" placeholder="Enter Product Name">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="subTag">Product Price *</label><span id="subtag_val_error" class="text-danger ms-3"></span>
                                    <input type="text" class="form-control" id="ProductPrice" name="ProductPrice" placeholder="Enter Price">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="subTag">Product Description *</label><span id="subtag_val_error" class="text-danger ms-3"></span>
                                    <textarea id="ProductDesc" name="ProductDesc" placeholder="Enter Product Description" class="md-textarea form-control" rows="6"></textarea>

                                </div>
                                <div class="form-group col-md-12">
                                    <div class="row">
                                        <div class="form-group col-md-6"id="hidden_div"style="display: none;">
                                            <label for="size">Size</label>
                                            <br>
                                            <?php
                                            $db = db_connect();
                                            $result = $db->query("SELECT * FROM `size_master` ");
                                            foreach ($result->getResult() as $key) {
                                                //  var_dump($key);  
                                                $ID = $key->id;
                                                $size = $key->size; ?>
                                                <input type="radio" name="sizes[<?php echo $ID; ?>]" value="<?php echo $ID ?>" /> <?php echo $size ?>

                                            <?php    } ?>
                                        </div>
                                        <!-- <div class="form-group col-md-6">
                                    <label for="material">Material</label>
<br>
                                     </?php 
                                         $db = db_connect();
                             $result = $db->query("SELECT * FROM `material_master` ");
                                         foreach ($result->getResult() as $key) {
                                                     
                                        $ID=$key->Id;
                                        $material=$key->material;?>
                                         <input type="radio" name="material[</?php echo $ID;?>]" value="</?php echo $ID ?>" /> </?php echo $material?>
                                         
                            </?php    }?>
                              </div> -->
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="Banner_Image">Choose Product Image 1 *</label><span style="color:red;">Image Size Only greater than or 470 * 470</span>
                                    <input type="file" class="form-control" id="ProductImage1" name="ProductImage1"><span id="img_error1" class="text-danger ms-3" required></span>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="Banner_Image">Choose Product Image 2 *</label><span style="color:red;">Image Size Only greater than or 470 * 470</span>
                                    <input type="file" class="form-control" id="ProductImage2" name="ProductImage2"><span id="img_error2" class="text-danger ms-3"></span>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="Banner_Image">Choose Product Image 3 *</label><span style="color:red;">Image Size Only greater than or 470 * 470</span>
                                    <input type="file" class="form-control" id="ProductImage3" name="ProductImage3"><span id="img_error3" class="text-danger ms-3"></span>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="Banner_Image">Choose Product Image 4 *</label><span style="color:red;">Image Size Only greater than or 470 * 470</span>
                                    <input type="file" class="form-control" id="ProductImage4" name="ProductImage4"><span id="img_error4" class="text-danger ms-3"></span>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="Banner_Image">Choose Product Image 5 *</label><span style="color:red;">Image Size Only greater than or 470 * 470</span>
                                    <input type="file" class="form-control" id="ProductImage5" name="ProductImage5"><span id="img_error5" class="text-danger ms-3"></span>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="Banner_Image">Choose Product Image 6 *</label><span style="color:red;">Image Size Only greater than or 470 * 470</span>
                                    <input type="file" class="form-control" id="ProductImage6" name="ProductImage6"><span id="img_error6" class="text-danger ms-3"></span>
                                </div>



                                <div class="form-group col-md-12">
                                    <input type="submit" class="btn btn-primary btn-lg" form="RecordForm" id="submit" value="Add">

                                </div>
                            </form>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script> -->

<!-- <script src="</?= base_url(); ?>assets/js/vendor/bootstrap.bundle.min.js"></script> -->
<script src="<?= base_url(); ?>assets/js/vendor/jquery-3.6.0.min.js"></script>
<!-- <script src="</?= base_url(); ?>assets/js/vendor/jquery-migrate-3.3.2.min.js"></script> -->
<!-- <script src="</?= base_url(); ?>assets/js/vendor/modernizr-3.11.2.min.js"></script> -->


<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script type="text/javascript">
    document.getElementById("ProductImage1").addEventListener("change", function() {
        //var name = this.value;
        var id = document.getElementById("ProductImage1");

        var spanid = document.getElementById("span");

        const fileList = id.files[0];

        if (fileList) {

            // var file = fileList.files[0];
            //console.log(file);
            var _URL = window.URL || window.webkitURL;

            img = new Image();

            var imgwidth = 0;
            var imgheight = 0;

            var maxwidth = 470;
            var maxheight = 570;
            img.src = _URL.createObjectURL(fileList);
            img.onload = function() {
                imgwidth = this.width; //270
                imgheight = this.height; //270

                if (imgwidth < maxwidth || imgheight < maxheight) {
                    //_URL.revokeObjectURL(img.src);
                    error_name = 'Please Insert Large Size Image';
                    //alert(error_name);

                    $('#img_error1').text(error_name);
                    id.value = "";
                    //location.reload();
                } else {
                    $('#img_error1').empty();
                }
            };

        } else {
            alert("Failed to load files");
        }
        //alert(fileList);
        // var d=readMultipleFiles1(fileList,id);
        // alert(d);
        // if(d){

        // }else{
        //   error_name = 'Please Insert Large Size Image';
        //               //alert(error_name);

        //              $('#img_error').text(error_name);
        //           id.value = "";
        // }

    }, false);

    document.getElementById("ProductImage2").addEventListener("change", function() {
        var name = this.value;
        var id = document.getElementById("ProductImage2");

        var spanid = document.getElementById("span");





        const fileList = id.files[0];

        if (fileList) {

            // var file = fileList.files[0];
            //console.log(file);
            var _URL = window.URL || window.webkitURL;

            img = new Image();

            var imgwidth = 0;
            var imgheight = 0;

            var maxwidth = 470;
            var maxheight = 570;
            img.src = _URL.createObjectURL(fileList);
            img.onload = function() {
                imgwidth = this.width; //270
                imgheight = this.height; //270

                if (imgwidth < maxwidth || imgheight < maxheight) {
                    //_URL.revokeObjectURL(img.src);
                    error_name = 'Please Insert Large Size Image';
                    //alert(error_name);

                    $('#img_error2').text(error_name);
                    id.value = "";
                    //location.reload();
                } else {
                    $('#img_error2').empty();
                }
            };

        } else {
            alert("Failed to load files");
        }


    }, false);
    document.getElementById("ProductImage3").addEventListener("change", function() {
        var name = this.value;
        var id = document.getElementById("ProductImage3");

        var spanid = document.getElementById("span");





        const fileList = id.files[0];

        if (fileList) {

            // var file = fileList.files[0];
            //console.log(file);
            var _URL = window.URL || window.webkitURL;

            img = new Image();

            var imgwidth = 0;
            var imgheight = 0;

            var maxwidth = 470;
            var maxheight = 570;
            img.src = _URL.createObjectURL(fileList);
            img.onload = function() {
                imgwidth = this.width; //270
                imgheight = this.height; //270

                if (imgwidth < maxwidth || imgheight < maxheight) {
                    //_URL.revokeObjectURL(img.src);
                    error_name = 'Please Insert Large Size Image';
                    //alert(error_name);

                    $('#img_error3').text(error_name);
                    id.value = "";
                    //location.reload();
                } else {
                    $('#img_error3').empty();
                }
            };

        } else {
            alert("Failed to load files");
        }


    }, false);
    document.getElementById("ProductImage4").addEventListener("change", function() {
        var name = this.value;
        var id = document.getElementById("ProductImage4");

        var spanid = document.getElementById("span");





        const fileList = id.files[0];

        if (fileList) {

            // var file = fileList.files[0];
            //console.log(file);
            var _URL = window.URL || window.webkitURL;

            img = new Image();

            var imgwidth = 0;
            var imgheight = 0;

            var maxwidth = 470;
            var maxheight = 570;
            img.src = _URL.createObjectURL(fileList);
            img.onload = function() {
                imgwidth = this.width; //270
                imgheight = this.height; //270

                if (imgwidth < maxwidth || imgheight < maxheight) {
                    //_URL.revokeObjectURL(img.src);
                    error_name = 'Please Insert Large Size Image';
                    //alert(error_name);

                    $('#img_error4').text(error_name);
                    id.value = "";
                    //location.reload();
                } else {
                    $('#img_error4').empty();
                }
            };

        } else {
            alert("Failed to load files");
        }


    }, false);
    document.getElementById("ProductImage5").addEventListener("change", function() {
        var name = this.value;
        var id = document.getElementById("ProductImage5");

        var spanid = document.getElementById("span");





        const fileList = id.files[0];

        if (fileList) {

            // var file = fileList.files[0];
            //console.log(file);
            var _URL = window.URL || window.webkitURL;

            img = new Image();

            var imgwidth = 0;
            var imgheight = 0;

            var maxwidth = 470;
            var maxheight = 570;
            img.src = _URL.createObjectURL(fileList);
            img.onload = function() {
                imgwidth = this.width; //270
                imgheight = this.height; //270

                if (imgwidth < maxwidth || imgheight < maxheight) {
                    //_URL.revokeObjectURL(img.src);
                    error_name = 'Please Insert Large Size Image';
                    //alert(error_name);

                    $('#img_error5').text(error_name);
                    id.value = "";
                    //location.reload();
                } else {
                    $('#img_error5').empty();
                }
            };

        } else {
            alert("Failed to load files");
        }


    }, false);
    document.getElementById("ProductImage6").addEventListener("change", function() {
        var name = this.value;
        var id = document.getElementById("ProductImage6");

        var spanid = document.getElementById("span");





        const fileList = id.files[0];

        if (fileList) {

            // var file = fileList.files[0];
            //console.log(file);
            var _URL = window.URL || window.webkitURL;

            img = new Image();

            var imgwidth = 0;
            var imgheight = 0;

            var maxwidth = 470;
            var maxheight = 570;
            img.src = _URL.createObjectURL(fileList);
            img.onload = function() {
                imgwidth = this.width; //270
                imgheight = this.height; //270

                if (imgwidth < maxwidth || imgheight < maxheight) {
                    //_URL.revokeObjectURL(img.src);
                    error_name = 'Please Insert Large Size Image';
                    //alert(error_name);

                    $('#img_error6').text(error_name);
                    id.value = "";
                    //location.reload();
                } else {
                    $('#img_error6').empty();
                }
            };

        } else {
            alert("Failed to load files");
        }


    }, false);
</script>

<script>
    $("#RecordForm").submit(function(e) {

        e.preventDefault();

        var formData = new FormData(this);




        $.ajax({
            type: "POST",
            url: "<?= base_url() ?>admin/Add-Accessories",
            dataType: 'json',
            data: formData,
            contentType: false,
            processData: false,

            success: function(resp) {

                if (resp.success) {

                    toastr.success('Data Saved');
                    //location.reload();
                    setTimeout(function() {
                        location.reload();
                    }, 3000);
                } else {
                    toastr.error('Data not Saved');
                    //location.reload();

                }

            },
            error: function(data) {}
        });


    });



    $('input[type=radio]').click(function() {
        if (this.previous) {
            this.checked = false;
        }
        this.previous = this.checked;
    });

    $(document).ready(function() {

        $("#womens_acces").hide();



        $("#source").on('change', function() {
            //location.reload();
            var val = $("#source").val();
            if (val == 1) {

                $("#mens_acces").show();
                $("#womens_acces").hide();
            }
            if (val == 2) {
                $("#mens_acces").hide();
                $("#womens_acces").show();
            }
            //alert(val);
            // $.ajax({
            //    type: "POST",
            //    url: "<?php echo base_url(); ?>admin/getAccessories",
            //    data: { id: val},
            //    dataType: 'json',
            //     async: true,
            //    success : function(response){
            //        alert(response.data[0]);
            //       // $("#mens_acces").hide();
            //   //$('#mens_acces').html('<option value="">mens_acces</option>');
            //    // $("#mens_acces").html(result[0]);
            //    // $("#source").val(result[1]);
            //    }
            //    });
        });
    });
</script>


<?= $this->endSection('contents') ?>