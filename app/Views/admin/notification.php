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

                    <h2 class="modal-title" id="editModalLabel"><i class="fas fa-pencil-alt text-danger"></i> Edit Notification</h2>
                    <button type="button" class="close closeup" data-dismiss="modal" onClick="window.location.reload();" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <h5 class="">Notification Id: <span class="id"></span></h5>
                                <input type="hidden" id="id" name="id" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="category" class="form-label">Offer1</label>
                                <div><span class=""></span></div>
                                <input type="text" class="form-control ProductBrand" name="offer1" id="offer1" data-role="tagsinput" required>
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
                    <h4 class="box-title m-b-0">Notifications</h4>
                </div>
                <div class="card-body">

                    <table id="Profiletable" class="table ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th>Offer1</th>
                            <!--     <th>Sub-title</th>
                                <th>Image</th> -->
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
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <script src="<?= base_url(); ?>assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/vendor/modernizr-3.11.2.min.js"></script>


<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script type="text/javascript">
   
    
</script>
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
                url: '<?= base_url('admin/getNotification'); ?>',
                dataSrc: 'offer',
                // alert(students);
                // alert(dataSrc);
            },
            columns: [{
                    'data': 'ids'
                },
                {
                    'data': 'offer'
                },
                
                {
                    data: null,
                    render: function(data, type, row) {
                        return '<button class="btn btn-outline-primary btn-sm editbtn" attrid="' + data.id + '"><i class="fa fa-pencil"></i></button>';
                    },
                },

            ],
        });
    }
     $(document).on('click', '.deletebtn', function() {
         alert('delete');
         let id = $(this).attr('attrid');
        alert(id);
          $.ajax({
            method: "POST",
            url: "<?php echo base_url('admin/Bannerdelete') ?>",
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
     
     
    $(document).on('click', '.editbtn', function() {
        let id = $(this).attr('attrid');
        // alert(id);
        $.ajax({
            method: "POST",
            url: "<?php echo base_url('admin/editNotification') ?>",
            data: {
                'id': id
            },
            dataType: "JSON",
            success: function(response) {
                // var response = JSON.parse(response);
                //  alert(response['tag_line']);
                // banner_id
               // alert(response);
                $('.id').text(response['id']);
                $('#offer1').val(response['offer1']);
             
                $('#id').val(response['id']);
              
                $('#editModal').modal('show');
            }
        });
    });

        
       $("#RecordForm1").submit(function(e) {
    
        e.preventDefault();
        // alert('ok');
        var formData = new FormData(this);
       
        $.ajax({
            url: "<?= base_url() ?>admin/UpdateNotification",
            dataType: 'json',
            method: 'post',
            processData: false,
            contentType: false,
            cache: false,
            data: formData,
            enctype: 'multipart/form-data',
            success: function(response) {
                //   var response = JSON.parse(response);
                 alert(response.msg);
                location.reload();
            }
        });
    });

    </script>
    

    
<?= $this->endSection('contents') ?>