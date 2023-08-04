<?= $this->extend('admin/layouts/adminmain'); ?>



<?= $this->section('breadcrumbs_links') ?>
<li class="breadcrumb-item active"></li>
<?= $this->endSection('breadcrumbs_links') ?>

<?= $this->section('contents') ?>
<div class="row m-2 showkeyfeaturesdiv ">
    <div class="card  col-12">
        <div class="card-header">
            <h4 class="box-title m-b-0">Box Master</h4>
        </div>
        <div class="card-body">
           <a href="<?php echo base_url();?>admin/create-box" class="btn btn-primary float-start createmodalbtn mb-3">Add New Box Image</a>
              

            <div class="message mb-3"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="box-title m-b-0">Select Box to display</h5>


                           <form action="" method="post" enctype="multipart/form-data" id = "RecordForm">




                                <div class="form-group col-md-6">
                                 
                                    <!-- <input type="text" class="form-control" id="certification_code" name="certification_code" placeholder="Enter Certification Code"> -->
                                    <?php $i=1;

foreach ($boxData['box1'] as $box1){
 
$alltitle1[]=$box1;
$i++;
             }
            

?>
<?php $i=1;

foreach ($boxData['box2'] as $box2){
 
$alltitle2[]=$box2;
$i++;
             }
 
?>
<?php $i=1;

foreach ($boxData['box3'] as $box3){
 
$alltitle3[]=$box3;
$i++;
             }


?>                                  
                                    <div class="row">
                                        <div class="col-md-6">
                                    <select class="form-control" name="box1" id="box1">
                                        <option value="">--Select Box1--</option>
                                         <?php $i=1;

foreach ($alltitle1 as $box1){  ?>
                                        <option value="<?php echo $box1['id'] ?>"><?php echo $box1['title'] ?></option>

                                      <?php }?>

                               
                                    </select>
                                </div>

                                    <div class="col-md-4">
                             <button class="btn-success" id="addbox1">select</button>
                                  </div>
                                     <div class="col-md-2">



                <img src="<?php echo base_url(); ?>public/product/<?php echo $imgData['box1img']['surl'] ?>"  height="150px">
              
                                  
                              </div>
    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                    <select class="form-control" name="box2" id="box2">
                                        <option value="">--Select Box2--</option>

                                         <?php $i=1;

foreach ($alltitle2 as $box2){ ?>
                                        <option value="<?php echo $box2['id'] ?>"><?php echo $box2['title'] ?></option>

                                      <?php }?>

                                    </select>
                                    </div>

                                    <div class="col-md-4">
                             <button class="btn-success "id="addbox2">select</button>
                                  </div>
                                  <div class="col-md-2">


                <img src="<?php echo base_url(); ?>public/product/<?php echo $imgData['box2img']['surl'] ?>"  height="150px">
                      
                              </div>
    </div>
                                    <br>
                                     <div class="row">
                                        <div class="col-md-6">
                                    <select class="form-control" name="box3" id="box3">
                                        <option value="">--Select Box3--</option>

                                         <?php $i=1;

foreach ($alltitle3 as $box3){?>
                                        <option value="<?php echo $box3['id'] ?>"><?php echo $box3['title'] ?></option>

                                      <?php }?>
                                    </select>
                                     </div>

                                    <div class="col-md-4">
                             <button class="btn-success "id="addbox3">select</button>
                                  </div>
                                  <div class="col-md-2">

   
                <img src="<?php echo base_url(); ?>public/product/<?php echo $imgData['box3img']['surl'] ?>"  height="150px">
              
                                  
                              </div>
    </div>



                                </div>


                                
                       



    </div>
    <!-- </?php }?> -->
            <!-- /.box-body -->

           <!--  <div class="box-footer">
            <input type="submit" class="btn btn-sm submit-btn btn-success pull-left" form="RecordForm"
                            id="submit"  value="</?php echo isset($FormData['id']) ? 'Update' : 'Add' ?>">
             
            </div> -->
            </form>


                        </div>
                    </div>

                </div>
                <!--<div class="col-md-6">-->
                <!--    <div class="card">-->
                <!--        <div class="card-body">-->
                <!--            <h3 class="box-title m-b-0">Add Images details</h3>-->



                <!--            <div class="table-responsive m-t-40">-->

                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <script src="<?= base_url(); ?>assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/vendor/modernizr-3.11.2.min.js"></script>
    
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script>


  $("#addbox1").on("click", function(e) {
    e.preventDefault();
    // var box1 = document.getElementById('box1');
    // var btn = document.getElementById('addbox1');
//alert(box1.value);

$.ajax({type: "POST",
        url:"<?=base_url('/updatebox')?>",
         dataType: 'json',
        //data: formData,
        data: { id1: $("#box1").val(),id2: $("#box2").val(),id3: $("#box3").val() },
        success:function(resp) {
            if (resp.success) {
          toastr.success('Data Updated');
//location.reload();
                        setTimeout(function () {
                        location.reload();
                        }, 3000);
                        } else {
                        toastr.error('Data not Saved');

                    }

        },
        error:function(success) {
          toastr.error('Data not Updated');
        }
    });
});
  $("#addbox2").on("click", function(e) {
    e.preventDefault();


$.ajax({type: "POST",
        url:"<?=base_url('/updatebox')?>",
         dataType: 'json',
        //data: formData,
        data: { id1: $("#box1").val(),id2: $("#box2").val(),id3: $("#box3").val() },
        success:function(resp) {
            if (resp.success) {
          toastr.success('Data Updated');
//location.reload();
                        setTimeout(function () {
                        location.reload();
                        }, 3000);
                        } else {
                        toastr.error('Data not Saved');

                    }

        },
        error:function(success) {
          toastr.error('Data not Updated');
        }
    });
});
  $("#addbox3").on("click", function(e) {
    e.preventDefault();
  
$.ajax({type: "POST",
        url:"<?=base_url('/updatebox')?>",
         dataType: 'json',
        //data: formData,
        data: { id1: $("#box1").val(),id2: $("#box2").val(),id3: $("#box3").val() },
        success:function(resp) {
            if (resp.success) {
          toastr.success('Data Updated');
//location.reload();
                        setTimeout(function () {
                        location.reload();
                        }, 3000);
                        } else {
                        toastr.error('Data not Saved');

                    }

        },
        error:function(success) {
          toastr.error('Data not Updated');
        }
    });
});


//         $("#RecordForm").submit(function (e) {
//           // e.preventDefault();
//             toastr.options.timeOut = 1500;
//             // $elm = $(".submit-btn");
//             // $elm.hide();
//             // $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw  pull-right submit-loading"></i>');

//             // $(".summernote").each(function () {
//             //     $(this).val($(this).code());
//             // });

//             var formData = new FormData(this);


//             $.ajax({
//                 type: "POST",
//               // url: "</?=base_url('/addbox')?>",
//                 dataType:'json',
//                 data: formData,
//                 contentType: false,
//                 processData: false,

//                 success: function (resp) {
//                     alert(resp);
//                     if (resp.success) {
//                         toastr.success('Data Saved');
// location.reload();
//                         // setTimeout(function () {
//                         // location.reload();
//                         // }, 3000);
//                     } else {
//                         toastr.error('Data not Saved ');


//                     }

//                 },
//                 error: function (data) {
//                 }
//             });
//         });

    </script>

<?= $this->endSection('contents') ?>