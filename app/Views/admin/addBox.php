<?= $this->extend('admin/layouts/adminmain'); ?>

<?= $this->section('links') ?>
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/summernote/summernote-bs4.min.css') ?>">
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>/assets/MagicSuggest/magicsuggest.css" rel="stylesheet" />

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
<?= $this->endSection('links') ?>

<?= $this->section('breadcrumbs_links') ?>
<li class="breadcrumb-item active"></li>
<?= $this->endSection('breadcrumbs_links') ?>

<?= $this->section('contents') ?>
<!-- Edit modal -->
<div class="modal fade bd-example-modal-lg" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
       <form action="" method="post" id="RecordForm1" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">

                    <h2 class="modal-title" id="editModalLabel"><i class="fas fa-pencil-alt text-danger"></i> Edit Banner</h2>
                    <button type="button" class="close closeup" data-dismiss="modal" onClick="window.location.reload();" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <h5 class="">Banner Id: <span class="banner_id"></span></h5>
                                <input type="text" id="banner_id" name="banner_id" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="category" class="form-label">Tag Line</label>
                                <div><span class=""></span></div>
                                <input type="text" class="form-control ProductBrand" name="tagline" id="tagline" data-role="tagsinput" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="category" class="form-label">Sub Tag Line</label>
                                <div><span class=""></span></div>
                                <input type="text" class="form-control ProductBrand" name="subtagline" id="subtagline" data-role="tagsinput" required>
                            </div>
                        </div>
                    </div>


                    <div class="row">

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="category" class="form-label">Image </label><small style="color:red;">Image Size Only greater than or 470 * 570</small>
                                <input type="file" class="form-control myfile" id="banner1" name="banner1">
                                <div><span class="image"></span></div>
                            </div>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary closeup" data-dismiss="modal" onClick="window.location.reload();">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
        </form>
    </div>
</div>
</div>
<div class="row m-2 showkeyfeaturesdiv ">
    <div class="card  col-12">
        <div class="card-header">
            <h4 class="box-title m-b-0">Add Box Image</h4>
        </div>
              <div class="card-body">
                          


                <form  method="" enctype="multipart/form-data" id="RecordForm">

            <?php
            // $sn = 0;
            // foreach ($data as $FormData) {
            //     $sn++;
            ?>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="product_name">Title:</label>
                            <input type="text" class="form-control" placeholder="title" name="title">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="product_name">Sub Title:</label>
                            <input type="text" class="form-control" placeholder="sub title" name="sub_title">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Box Type</label>
                            <select class="form-control select2" style="width: 100%;" name="sub_type">
                                <option selected="selected">Box1</option>
                                <option>Box2</option>
                                <option>Box3</option>


                            </select>
                        </div>

                        <!-- /.col -->
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="product_img">Box Image:</label>
                            <small id="img_error" class="text-danger ms-3">Image Size Greater Than 370 *240 only </small>
                            <input type="file" class="form-control" placeholder="sub_img " name="sub_img" id="sub_img">
                        </div>
                    </div>

                </div>
                <!-- </?php }?> -->
                <!-- /.box-body -->

                <div class="box-footer">
                   <input type="submit" class="btn btn-sm submit-btn btn-success pull-left" form="RecordForm"
                            id="submit"  value="Add">
                    <!-- <button type="submit" class="btn btn-primary"value="submit" name="submit">Submit</button> -->
                </div>
        </form>
            </div>
                    </div>

                </div>
              
            </div>
<div class="row m-2 showkeyfeaturesdiv ">
    

        <div class="card  col-12">
            <div class="card-header">
                <h4 class="box-title m-b-0">List of Banner List</h4>
            </div>
            <div class="card-body">

                <table id="Profiletable" class="table ">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th>Box Type</th>
                            <th>Tag Line</th>
                            <th>Sub-title</th>
                            <th>Image</th>
                            <th>Active</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="Profiletable">


                        <!-- ajax data here -->
                    </tbody>
                </table>
            </div>
            <!-- <div class="card-footer ">
           
        </div> -->
        </div>
    
</div>
<!-- /.box -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <script src="<?= base_url(); ?>assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/vendor/modernizr-3.11.2.min.js"></script>


<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script>

$(document).ready(function() {

        load();
    });

    function load() {
        // alert(1);
        $('#Profiletable').DataTable({
            "payment": [
                [0, 'asc']
            ],
            ajax: {
                method: "GET",
                url: '<?= base_url('admin/getAllboxes'); ?>',
                dataSrc: 'boxes',
                // alert(students);
                // alert(dataSrc);
            },
            columns: [{
                    'data': 'ids'
                },
                {
                    'data': 'boxType'
                },
                {
                    'data': 'tag_line'
                },
                {
                    'data': 'subtag_line'
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return '<img src="' + data.banner + '" style="height:50px;" />';
                    },
                },
                {
                    'data': 'status'
                },
                {
                    data: null,
                    render: function(data, type, row) {
                        return '<button class="btn btn-outline-primary btn-sm activebtn" attrid="' + data.id + '" attrid1="' + data.boxType + '"><i class="fa fa-eye"></i></button>\
                               <button class="btn btn-outline-primary btn-sm editbtn" attrid="' + data.id + '"><i class="fa fa-pencil"></i></button>\
                               <button class="btn btn-outline-danger btn-sm deletebtn" attrid="' + data.id + '"><i class="fa fa-trash"></i></button>\
                    ';
                    },
                },

            ],
        });
    }
    $(document).on('click', '.editbtn', function() {
        let id = $(this).attr('attrid');
        alert(id);
        $.ajax({
            method: "POST",
            url: "<?php echo base_url('admin/editboxes') ?>",
            data: {
                'id': id
            },
            dataType: "JSON",
            success: function(response) {
                // var response = JSON.parse(response);
                //  alert(response['tag_line']);
                // banner_id
                alert(response);
                $('.banner_id').text(response['id']);
                $('#tagline').val(response['tag_line']);
                $('#subtagline').val(response['sub_tagline']);
                $('#banner_id').val(response['id']);
                $('.image').html("<img height='100px' src='<?php echo base_url();?>/public/product/" + response['image'] + "'>");
                $('#editModal').modal('show');
            }
        });
    });
      $("#RecordForm1").submit(function(e) {
      alert('record1');
        e.preventDefault();
        // alert('ok');
        var formData = new FormData(this);
        //  var fileInput = document.getElementById('banner1');
        //  alert(fileInput);
        //  formData.append('banner1', $('#banner1').get(0).files[0]);
        alert("you are submitting" + $(this).serialize());
        // alert(formdata.serialize());
        $.ajax({
            url: "<?= base_url() ?>admin/Updateboxes",
            dataType: 'json',
            method: 'post',
            processData: false,
            contentType: false,
            cache: false,
            data: formData,
            enctype: 'multipart/form-data',
            success: function(response) {
                 alert(response.msg);
                location.reload();
            }
        });
    });
    $(document).on('click', '.deletebtn', function() {
         alert('delete');
         let id = $(this).attr('attrid');
        alert(id);
          $.ajax({
            method: "POST",
            url: "<?php echo base_url('admin/boxesdelete') ?>",
            data: {
                'id': id,
            },
            success: function(response) {
                // var response = JSON.parse(response);
                alert(response);
                location.reload();
            }
            });
     });
      $(document).on('click', '.activebtn', function() {
         alert('active');
         let id = $(this).attr('attrid');
        // alert(id);
           let boxtype = $(this).attr('attrid1');
        // alert(boxtype);
          $.ajax({
            method: "POST",
            url: "<?php echo base_url('admin/boxesactive') ?>",
            data: {
                'id': id,
                'boxtype':boxtype
            },
            success: function(response) {
                // var response = JSON.parse(response);
                alert(response);
                location.reload();
            }
            });
     });
  $("#RecordForm").submit(function (e) {
     
            e.preventDefault();
         
            var formData = new FormData(this);
var _URL = window.URL || window.webkitURL;
 var fileInput = document.getElementById('sub_img');

var name = fileInput.value;

var file = fileInput.files[0];


img = new Image();
           var imgwidth = 0;
           var imgheight = 0;

           var maxwidth = 370;
           var maxheight = 240;
             // if(!name){
             //        error_name = 'Please Select Image';
             //        $('#img_error').text(error_name);
             //    }
           img.src = _URL.createObjectURL(file);
    
           img.onload = function() {
                  imgwidth = this.width;//270
                  imgheight = this.height;//270
 
                
                  if(imgwidth < maxwidth || imgheight < maxheight){
                  
                     error_name = 'Please Insert Large Size Image';
              
                     $('#img_error').text(error_name);
                     // location.reload();
                   }
                     // if (error_name != '') {
                     //     return false;
                     // }
                      else{
                
            $.ajax({
                type: "POST",
                url: "<?=base_url()?>admin/insertbox",
                dataType: 'json',
                data: formData,
                contentType: false,
                processData: false,

                success: function (resp){
                 
                    if (resp.succ) {
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
        }
    }
        });

    </script>
         <script type="text/javascript">
    function readMultipleFiles(evt) {

        const fileList = this.files[0];
        console.log(fileList);


        if (fileList) {

            // var file = fileList.files[0];
            //console.log(file);
            var _URL = window.URL || window.webkitURL;

            img = new Image();

            var imgwidth = 0;
            var imgheight = 0;

           var maxwidth = 370;
           var maxheight = 240;
            img.src = _URL.createObjectURL(fileList);
            img.onload = function() {
                imgwidth = this.width; //270
                imgheight = this.height; //270

                if (imgwidth < maxwidth || imgheight < maxheight) {

                    error_name = 'Please Insert Large Size Image';
                    alert(error_name);
                    //$('#img_error').text(error_name);
                    //  location.reload();
                       document.getElementById('banner1').value = "";
                }
            }

        } else {
            alert("Failed to load files");
        }

    }
    document.getElementById('banner1').addEventListener('change', readMultipleFiles, false);
    
</script>           
<?= $this->endSection('contents') ?>