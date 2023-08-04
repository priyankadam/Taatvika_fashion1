<?= $this->extend('admin/layouts/adminmain'); ?>



<?= $this->section('breadcrumbs_links') ?>
<li class="breadcrumb-item active"></li>
<?= $this->endSection('breadcrumbs_links') ?>

<?= $this->section('contents') ?>
<div class="row m-2 showkeyfeaturesdiv ">
    <div class="card  col-12">
        <div class="card-header">
            <h4 class="box-title m-b-0">Shipping Policy</h4>
        </div>
        <div class="card-body">
            

            <div class="message mb-3"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                           <?php $db = db_connect();
                                                $result = $db->query("select * from shipping_master");

                                                $query = $result->getResultArray();
                                                foreach ($query as $Data) { 
                                                    $policy=$Data['policy'];
                                                }?>

                          
                                <form  method="" enctype="multipart/form-data" id="RecordForm">
                               
                                
                                 
                                  <div class="form-group col-md-12">
                                    <label for="policy">Description</label>
                                   <textarea id="summernote" class="form-control" placeholder="content" name="content"value="" rows="10" cols="30"><?=$policy ; ?></textarea>
                                </div>


                                <div class="form-group col-md-12">
                                 <!-- <input type="submit"  value="Add" class="btn btn-primary btn-lg"> -->
                                 <input type="submit" class="btn btn-primary btn-lg" form="RecordForm"
                            id="submit"  value="Update">
                                </div>
                            </form>
                           

                        </div>
                    </div>

                </div>
              
            </div>
        </div>
    </div>
</div>
   
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <script src="<?= base_url(); ?>assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/vendor/jquery-3.6.0.min.js"></script>
 


<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<!-- include summernote css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- include summernote js-->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>

  $("#RecordForm").submit(function (e) {
     
            e.preventDefault();
         
            var formData = new FormData(this);

                
            $.ajax({
                type: "POST",
                url: "<?=base_url()?>admin/addPolicy",
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
        


    </script>

    <script>
      $('textarea#summernote').summernote({
       // placeholder: 'Hello bootstrap 4',
        tabsize: 2,
        height: 100,
  toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
      
        // ['para', ['ul', 'ol', 'paragraph']],
       ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'hr']],
        //['view', ['fullscreen', 'codeview']],
        ['help', ['help']]
      ],
      });
   
    </script>
    

    
<?= $this->endSection('contents') ?>