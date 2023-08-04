<?= $this->extend('admin/layouts/adminmain'); ?>



<?= $this->section('breadcrumbs_links') ?>
<li class="breadcrumb-item active"></li>
<?= $this->endSection('breadcrumbs_links') ?>

<?= $this->section('contents') ?>
<div class="row m-2 showkeyfeaturesdiv ">
    <div class="card  col-12">
        <div class="card-header">
            <h4 class="box-title m-b-0">Add Womens Product</h4>
        </div>
        <div class="card-body">
            

            <div class="message mb-3"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                          



                            <!-- <form action="</?=base_url('admin/Add-Product')?>" method="post"   id = "RecordForm"  enctype="multipart/form-data"> -->

                                <form  method="" enctype="multipart/form-data" id="RecordForm">
                                <div class="form-group col-md-12">
                                      <label for="Banner">Womens Category *</label>
                                        <select class="form-control" name="wom_cat" id="wom_cat" required onchange="showDiv('hidden_div', this)">
                                            <?php 
                                         $db = db_connect();
                                        $result = $db->query("SELECT * FROM `Womens_master` ");
                                         foreach ($result->getResult() as $key) {
                                                               
                                        $ID=$key->Id;
                                        $name=$key->women_category;?>
                                         <option value="<?php echo $ID ?>"><?php echo $name?> </option>
                                       
                            <?php    }?>
                                            
                                              
                                            </select>
                                 </div>
                               <!--  <div class="form-group col-md-12">
                                      <label for="tag">Brand *</label>  <span id="tag_val_error" class="text-danger ms-3"></span>
                                     <input type="text" class="form-control" id="Brand" name="Brand" placeholder="Enter Brand Name" required> 
                                  </div> -->
                                  <div class="form-group col-md-12">
                                    <label for="subTag">Product Name *</label><span id="subtag_val_error" class="text-danger ms-3"></span>
                                    <input type="text" class="form-control" id="ProductName" name="ProductName" placeholder="Enter Product Name" required> 
                                  </div>
                                  <div class="form-group col-md-12">
                                    <label for="subTag">Product Price *</label><span id="subtag_val_error" class="text-danger ms-3"></span>
                                    <input type="text" class="form-control" id="ProductPrice" name="ProductPrice" placeholder="Enter Price" required> 
                                  </div>
                                   <div class="form-group col-md-12">
                                    <label for="subTag">Product Description *</label><span id="subtag_val_error" class="text-danger ms-3"></span>
                                    <textarea id="ProductDesc" name="ProductDesc" placeholder="Enter Product Description" class="md-textarea form-control" rows="6" required></textarea>
                                   
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
                                        $ID=$key->id;
                                        $size=$key->size;?>
                                         <input type="radio" name="sizes[<?php echo $ID;?>]" value="<?php echo $ID ?>"  /> <?php echo $size?>
                                         
                            <?php    }?>
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
                                         <input type="radio" name="material[</?php echo $ID;?>]" value="</?php echo $ID ?>" required/> </?php echo $material?>
                                         
                            </?php    }?>
                              </div> -->
                                <!-- </div> -->
                                  </div>
                                  <div class="form-group col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="size">Fit</label>
                                                <br>
                                                <?php
                                                $db = db_connect();
                                                $result = $db->query("SELECT * FROM `fit_master` ");
                                                foreach ($result->getResult() as $key) {
                                                    //  var_dump($key);  
                                                    $ID = $key->id;
                                                    $fit = $key->fit; ?>
                                                    <input type="radio" name="fits[<?php echo $ID; ?>]" value="<?php echo $ID ?>"  /> <?php echo $fit ?>

                                                <?php    } ?>
                                            </div>
                                       
                                        </div>
                                    </div>
                                     <div class="form-group col-md-12 fabric ">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="Name">Fabric:</label>
                                            <input type="text" id="fabric" name="fabric" placeholder="">
                                            </div>
                                               <div class="form-group col-md-6">
                                                <label for="Name">Count:</label>
                                            <input type="text" id="count" name="count" placeholder="">
                                            </div>
                                               
                                       
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="Name">Weave/Pattern:</label>
                                            <input type="text" id="weave" name="weave" placeholder="">
                                            </div>
                                               <div class="form-group col-md-6">
                                                <label for="Name">Care:</label>
                                            <input type="text" id="care" name="care" placeholder="">
                                            </div>
                                               
                                       
                                        </div>
                                    </div>
                                  <div class="form-group col-md-12">
                                    <label for="Banner_Image">Choose Product Image 1 *</label><span style="color:red;">Image Size Only greater than  or 470 * 470</span>
                                    <input type="file" class="form-control" id="ProductImage1" name="ProductImage1" ><span id="img_error1" class="text-danger ms-3" required></span>
                                </div>
                                  <div class="form-group col-md-12">
                                    <label for="Banner_Image">Choose Product Image 2 *</label><span style="color:red;">Image Size Only greater than  or 470 * 470</span>
                                    <input type="file" class="form-control" id="ProductImage2" name="ProductImage2" ><span id="img_error2" class="text-danger ms-3"></span>
                                </div>
                                 <div class="form-group col-md-12">
                                    <label for="Banner_Image">Choose Product Image 3 *</label><span style="color:red;">Image Size Only greater than  or 470 * 470</span>
                                    <input type="file" class="form-control" id="ProductImage3" name="ProductImage3" ><span id="img_error3" class="text-danger ms-3"></span>
                                </div>
                                 <div class="form-group col-md-12">
                                    <label for="Banner_Image">Choose Product Image 4 *</label><span style="color:red;">Image Size Only greater than  or 470 * 470</span>
                                    <input type="file" class="form-control" id="ProductImage4" name="ProductImage4" ><span id="img_error4" class="text-danger ms-3"></span>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="Banner_Image">Choose Product Image 5 *</label><span style="color:red;">Image Size Only greater than  or 470 * 470</span>
                                    <input type="file" class="form-control" id="ProductImage5" name="ProductImage5" ><span id="img_error5" class="text-danger ms-3"></span>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="Banner_Image">Choose Product Image 6 *</label><span style="color:red;">Image Size Only greater than  or 470 * 470</span>
                                    <input type="file" class="form-control" id="ProductImage6" name="ProductImage6" ><span id="img_error6" class="text-danger ms-3"></span>
                                </div>
                                


                                <div class="form-group col-md-12">
                                     <input type="submit" class="btn btn-primary btn-lg" form="RecordForm"
                            id="submit"  value="Add">
                                 
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
        var id=document.getElementById("ProductImage1");

        var spanid=document.getElementById("span");
       
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
                    }else{
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
          
    },false);

          document.getElementById("ProductImage2").addEventListener("change", function() {
        var name = this.value;
        var id=document.getElementById("ProductImage2");

        var spanid=document.getElementById("span");
       
         

     
       
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
                    }else{
                        $('#img_error2').empty();
                    }
                };

            } else {
                alert("Failed to load files");
            }
         
          
    },false);
               document.getElementById("ProductImage3").addEventListener("change", function() {
        var name = this.value;
        var id=document.getElementById("ProductImage3");

        var spanid=document.getElementById("span");
       
         

     
       
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
                    }else{
                        $('#img_error3').empty();
                    }
                };

            } else {
                alert("Failed to load files");
            }
         
          
    },false);
                    document.getElementById("ProductImage4").addEventListener("change", function() {
        var name = this.value;
        var id=document.getElementById("ProductImage4");

        var spanid=document.getElementById("span");
       
         

     
       
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
                    }else{
                        $('#img_error4').empty();
                    }
                };

            } else {
                alert("Failed to load files");
            }
         
          
    },false);
                         document.getElementById("ProductImage5").addEventListener("change", function() {
        var name = this.value;
        var id=document.getElementById("ProductImage5");

        var spanid=document.getElementById("span");
       
         

     
       
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
                    }else{
                        $('#img_error5').empty();
                    }
                };

            } else {
                alert("Failed to load files");
            }
         
          
    },false);
                              document.getElementById("ProductImage6").addEventListener("change", function() {
        var name = this.value;
        var id=document.getElementById("ProductImage6");

        var spanid=document.getElementById("span");
       
         

     
       
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
                    }else{
                        $('#img_error6').empty();
                    }
                };

            } else {
                alert("Failed to load files");
            }
         
          
    },false);

</script>

<script>

  $("#RecordForm").submit(function (e) {
   
            e.preventDefault();
         
            var formData = new FormData(this);




            $.ajax({
                type: "POST",
                url: "<?=base_url()?>admin/Add-W-Product",
                dataType: 'json',
                data: formData,
                contentType: false,
                processData: false,

                success: function (resp){
                 
                    if (resp.success) {
                       
                        toastr.success('Data Saved');
 //location.reload();
                        setTimeout(function () {
                        location.reload();
                        }, 3000);
                    } else {
                        toastr.error('Data not Saved');
//location.reload();

                    }

                },
                error: function (data) {
                }
            });
        
    
        });



  $('input[type=radio]').click(function(){
    if (this.previous) {
        this.checked = false;
    }
    this.previous = this.checked;
});

    </script>
     <script>

    function showDiv(divId, element)
    {
       var el= document.getElementById('wom_cat');
       var text= el. options[el. selectedIndex]. text;
     alert(text);
         if(text=='Shirt'||text=='Skrit'||text=='Blouses'){
        document.getElementById('hidden_div').style.display = "block";
       } else{
        document.getElementById('hidden_div').style.display = "none";
       }

    }


      
     </script>


    
<?= $this->endSection('contents') ?>