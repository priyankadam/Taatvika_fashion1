<?=$this->extend('admin/layouts/adminmain');?>



<?=$this->section('breadcrumbs_links')?>
<li class="breadcrumb-item active"></li>
<?=$this->endSection('breadcrumbs_links')?>

<?=$this->section('contents')?>
<div class="row m-2 showkeyfeaturesdiv ">
    <div class="card  col-12">
        <div class="card-header">
            <h4 class="box-title m-b-0">Add Size & Materials</h4>
        </div>
              <div class="card-body">


              <div class="row">
                    <div class="col-md-6">
                 <form  method="" enctype="multipart/form-data" id="RecordForm">


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="product_name">Size:</label>
                            <input type="text" class="form-control" placeholder="Size" name="size" id="size">
                        </div>
                    </div>
                </div>
                <button type="submit"  class="btn-success "id="addsize">Add</button>
              </form>
        </div>




                    <div class="col-md-6">
                 <form  method="" enctype="multipart/form-data" id="RecordForm">



                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="product_name">Materials:</label>
                            <input type="text" class="form-control" placeholder="Materials" name="materials"  id="materials">
                        </div>
                    </div>
                </div>



                <button type="submit" class="btn-success "id="addmaterial">Add</button>
        </form>
        </div>

            </div>
        </div>
    </div>
</div>
<!-- /.box -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <script src="<?=base_url();?>assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url();?>assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="<?=base_url();?>assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="<?=base_url();?>assets/js/vendor/modernizr-3.11.2.min.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script>


  $("#addsize").on("click", function(e) {
 // e.preventDefault();

var size=$("#size").val();

$.ajax({type: "POST",
        url:"<?=base_url('admin/addSizeMaterial')?>",
         dataType: 'json',
        data: {size},

        success:function(resp) {
            if (resp.success) {
          toastr.success('Data Added');

                        setTimeout(function () {
                        //location.reload();
                        }, 10000);
                        } else {
                        toastr.error('Data not Saved');

                    }

        },
        error:function(success) {
          toastr.error('Data not Added');
        }
    });
});
$("#addmaterial").on("click", function(e) {
  //e.preventDefault();
  var material=$("#materials").val();


$.ajax({type: "POST",
        url:"<?=base_url('admin/addSizeMaterial')?>",
         dataType: 'json',
        data: {material},

        success:function(resp) {
            if (resp.success) {
          toastr.success('Data Added');

                        setTimeout(function () {
                        //location.reload();
                        }, 10000);
                        } else {
                        toastr.error('Data not Saved');

                    }

        },
        error:function(success) {
          toastr.error('Data not Added');
        }
    });
});


    </script>

<?=$this->endSection('contents')?>