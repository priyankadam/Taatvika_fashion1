2<?= $this->extend('admin/layouts/adminmain'); ?>


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
<div class="row m-2 showkeyfeaturesdiv ">   
    <div class="card  col-12">
        <div class="card-header">
            <h4 class="box-title m-b-0">Orders</h4>
        </div>
        <div class="card-body">
            

            <div class="message mb-3"></div>
            <table id="Profiletable" class="table ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                         <th scope="col">Product Name</th>
                        <th scope="col" width="100px">Action</th>
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
<!-- //update/edit model -->
<div class="modal fade bd-example-modal-lg" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                
                <form  method="post" id="update_form" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/statusupdate">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="editModalLabel"><i class="fas fa-pencil-alt text-danger"></i> Edit Details</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="col-12">
                                <div class="mb-3">
                                <h5 class="">Order id: <span class="id"></span></h5>
                                
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                        <div class="mb-3">
                                            <label class="radio-inline">
                                             <input type="radio" name="order_sta" class="order_sta" value="Dispatch"> Dispatch
                                            </label>
                                             <label class="radio-inline">
                                                <input type="radio" name="order_sta" class="order_sta" value="Ordered" checked> Ordered
                                            </label>
                                             <input type="hidden"  name="idc" class="idc" id="idc" >
                                        </div>
                                </div>
                     
                            </div>
                        </div>    

                           
                      
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" id="edit_categorylist" class="btn btn-primary">update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
<!-----edit modal---->
<!-- view Model -->
<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="post" id="update_form" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Order Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="">Order id: <span class="id_view"></span></h5>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="productname" class="form-label">Client Name :</label>
                                <div><span class="cname"></span></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="price" class="form-label namelable">Client Email :</label>
                                <div><span class="cemail"></span></div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="price" class="form-label namelable">Client Address :</label>
                                <div><span class="caddress"></span></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="price" class="form-label namelable">Client Mobile :</label>
                                <div><span class="cmobile"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="productname" class="form-label">Product Name :</label>
                                <div><span class="productname"></span></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="price" class="form-label namelable">Product Price :</label>
                                <div><span class="productprice"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="code" class="form-label namelable">Product Code</label> <span class="pass_edit_error text-danger ml-2 "></span>
                               <div><span class="productcode"></span></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                               <label for="code" class="form-label namelable">Size</label> <span class="pass_edit_error text-danger ml-2 "></span>
                              <div><span class="size"></span></div>
                            </div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-6">
                                <div class="mb-3">
                                    <label for="code" class="form-label namelable">Bust</label> <span class="pass_edit_error text-danger ml-2 "></span>
                                    <div><span class="Bust"></span></div>
                                </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="code" class="form-label namelable">waist</label> <span class="pass_edit_error text-danger ml-2 "></span>
                                 <div><span class="waist"></span></div>
                            </div>     
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                               <label for="code" class="form-label namelable">Hip</label> <span class="pass_edit_error text-danger ml-2 "></span>
                               <div><span class="hip"></span></div>
                           </div>
                        </div>   
                        <div class="col-6">
                            <div class="mb-3">
                               <label for="code" class="form-label namelable">Material</label> <span class="pass_edit_error text-danger ml-2 "></span>
                               <div><span class="material"></span></div>
                           </div>
                        </div>   
                   </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                               <label for="code" class="form-label namelable">Image</label> <span class="pass_edit_error text-danger ml-2 "></span>
                               <div><span class="image1"></span></div>
                           </div>
                        </div>   
                   </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="submit" class="btn btn-primary">Update</button> -->
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection('contents') ?>
<?= $this->section('scripts') ?>
<!-- Summernote -->
<script src="<?= base_url('assets/plugins/summernote/summernote-bs4.min.js'); ?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/jszip/jszip.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/pdfmake/pdfmake.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/pdfmake/vfs_fonts.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>
<!-- magicSuggest -->
<script src="<?= base_url() ?>/assets/MagicSuggest/magicsuggest.js"></script>

<script>

  
 
        $(document).ready(function() {

                load();
            });
           

            function load() {
                // alert(1);
                $('#Profiletable').DataTable({
                        "order": [[ 0, 'asc' ]],
                    ajax: {
                        method: "GET",
                        url: '<?= base_url('admin/ordersget'); ?>',
                        dataSrc: 'orders',
                        // alert(students);
                        // alert(dataSrc);
                    },
                    columns: [{
                    'data': 'ids'
                },
                {
                    'data': 'username'
                },
                {
                    'data': 'Product_name'
                },
                 
                {
                    data: null,
                    render: function(data, type, row) {
                        return '<button class="btn btn-outline-primary btn-sm editbtn"attrid="' + data.id + '"><i class="fa fa-pencil"></i></button>\
                               <button class="btn btn-outline-danger btn-sm viewbtn"attrid="' + data.id + '"><i class="fa fa-eye"></i></button>\
                    ';
                    },
                },

            ],
        });
    }
    
 $(document).ready(function() {
       $(document).on('click', '.editbtn', function() {
 
        let id = $(this).attr('attrid');
        alert('Change Order Status ?');
            $.ajax({
                method: "POST",
                url: "<?php echo base_url('/admin/get-edit-orders') ?>",
                data: {
                    'id': id,
                },
                success: function(response) {
                    // alert(response);
                    var response = JSON.parse(response);
                    //   alert(response[0]['order_id']);
                    $('.id').text(response[0]['order_id']);
                    //   $('.productname').text(response[1]['Product_name']);
                    
                    $('#idc').val(response[0]['order_id']);
                  $('#editModal').modal('show');
                }
            });
        });
        $(document).on('click', '#edit_categorylist1', function() {
             let id = $('#order_sta').val();
            //   let id1 = $('#order_sta').val();
            //  alert(id);  alert(id1);
             $.ajax({
            method: "POST",
            url: "<?= base_url('admin/statusupdate'); ?>",
            data: {
                   'status':$('#order_sta').val(),
                   'orderid':$('#idc').val()
                },
            success: function(response) {
                // var response = JSON.parse(response);
              alert(response);
               if (response.success != null) {
                       alert("Update successfully");
                         location.reload();
               }
              

            }
        });
        });
         $(document).on('click', '.viewbtn', function() {
            let id = $(this).attr('attrid');
            //   alert(id);
            // $('#editModal').modal('show');

            $.ajax({
                method: "POST",
                url: "<?php echo base_url('admin/view-order') ?>",
                data: {
                    'id': id,

                },

                success: function(response) {

                    var response = JSON.parse(response);
                    // alert(response);
                    // $('.ids').val(response.id);
                    $('.id_view').text(response[0]['order_id']);
                     $('.cmobile').text(response[0]['contact']);
                     $('.cname').text(response[0]['name']);
                      $('.cemail').text(response[0]['email']);
                       $('.caddress').text(response[0]['address']);
                    $('.productname').text(response[0]['Product_name']);
                    $('.productprice').text(response[0]['amt']);
                    $('.productcode').text(response[0]['ProductCode']);
                    $('.size').text(response[0]['size']);
                    $('.Bust').text(response[0]['bust']);
                    $('.waist').text(response[0]['waist']);
                    $('.hip').text(response[0]['hip']);
                      $('.material').text(response[0]['material']);
                    // var folder=text(response[0]['folder']);
                     $('.image1').html("<img width='100' src='https://digileadz.com/sirsonite/Beseen/assets/images/uploads/" + response[0]['folder'] +"/" + response[0]['productimage'] + "'>");
                    $('#viewModal').modal('show');
                }
            });
        });
    });
    // });
</script>
<?= $this->endSection('scripts') ?>