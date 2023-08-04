<?= $this->extend('admin/layouts/adminmain'); ?>

<?= $this->section('links') ?>
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/summernote/summernote-bs4.min.css') ?>">



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<?= $this->endSection('links') ?>

<?= $this->section('breadcrumbs_links') ?>
<li class="breadcrumb-item active"></li>
<?= $this->endSection('breadcrumbs_links') ?>

<?= $this->section('contents') ?>
<div class="row m-2 showkeyfeaturesdiv ">
    <div class="card  col-12">
        <div class="card-header">
            <h4 class="box-title m-b-0">Choose Product Type</h4>
        </div>
        <div class="card-body">

            <div class="message mb-3"></div>
            <div class="control-group mb-3">
                <label class="control-label">Product :</label>
                <div class="controls">
                    <select class="form-control" name="cat" id="cat">

                        <option value="">--Select Product Type--</option>
                        <?php
                        $db      = \Config\Database::connect();
                        $query11  = $db->query("SELECT Distinct product_type FROM product");
                        ?>
                        <?php foreach ($query11->getResult() as $row11) : ?>
                            <option value="<?php echo $row11->product_type; ?>"><?php echo $row11->product_type; ?></option>
                        <?php endforeach; ?>

                    </select>
                </div>
            </div>

        </div>
        <!-- <div class="card-footer ">
           
        </div> -->
    </div>
</div>
<div class="row m-2 buildcoursediv d-none">
    <div class="card  col-12">
        <div class="card-header">
            <h4 class="box-title m-b-0">List Of Produts</h4>
        </div>
        <div class="card-body">

            <table id="Profiletable" class="table ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Image</th>
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
    <!-- create modal -->
</div>
<!-- Edit modal -->
<div class="modal fade bd-example-modal-lg" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="" method="post" id="RecordForm" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">

                    <h2 class="modal-title" id="editModalLabel"><i class="fas fa-pencil-alt text-danger"></i> Edit Details</h2>
                    <button type="button" class="close closeup" data-dismiss="modal" onClick="window.location.reload();" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <h5 class="">Product Code: <span class="ProductCode"></span></h5>
                                <input type="hidden" id="PC" name="PC" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="category" class="form-label">Product Brand</label>
                                <div><span class=""></span></div>
                                <input type="text" class="form-control ProductBrand" name="Brand" id="ProductBrand" placeholder="Product Brand" data-role="tagsinput" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="category" class="form-label">Product Name</label>
                                <div><span class=""></span></div>
                                <input type="text" class="form-control ProductName" name="ProductName" id="ProductName" placeholder="Product Name" data-role="tagsinput" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="category" class="form-label">Product Price</label>
                                <div><span class=""></span></div>
                                <input type="text" class="form-control ProductPrice" name="ProductPrice" id="ProductPrice" placeholder="Product Name" data-role="tagsinput" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="category" class="form-label">Product Decription</label>
                                <div><span class=""></span></div>
                                <textarea class="form-control  msg" name="ProductDesc" id="ProductDesc" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="category" class="form-label">Size:</label><br>
                                <small style="color:red;">Please Select Default selected Size below if required same</small><br>
                                <?php
                                $db = db_connect();
                                $result = $db->query("SELECT * FROM `size_master` ");
                                foreach ($result->getResult() as $key) {

                                    $ID = $key->id;
                                    $size = $key->size; ?>
                                    <input type="radio" name="sizes[<?php echo $ID; ?>]" value="<?php echo $ID ?>" /> <?php echo $size ?>

                                <?php    } ?>
                                <span class="text-danger ml-1 author_error"></span>
                                <div><span class="author"></span></div>
                                <input type="text" class="form-control author" id="ms" name="author" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="category" class="form-label">Material</label><br>
                                <small style="color:red;">Please Select Default selected Size below if required same</small><br>
                                <?php
                                $db = db_connect();
                                $result = $db->query("SELECT * FROM `material_master` ");
                                foreach ($result->getResult() as $key) {

                                    $ID = $key->Id;
                                    $material = $key->material; ?>
                                    <input type="radio" name="material[<?php echo $ID; ?>]" value="<?php echo $ID ?>" /> <?php echo $material ?>

                                <?php    } ?>
                                <span class="text-danger ml-1 author_error"></span>
                                <div><span class="author"></span></div>
                                <input type="text" class="form-control author" id="ms1" name="author" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="category" class="form-label">Image 1</label><small style="color:red;">Image Size Only greater than or 470 * 570</small>
                                <input type="file" class="form-control myfile" id="cover" name="ProductImage1">
                                <div><span class="image1"></span></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="category" class="form-label">Image 2</label><small style="color:red;">Image Size Only greater than or 470 * 570</small>
                                <input type="file" class="form-control myfile" id="cover" name="ProductImage2">
                                <div><span class="image2"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="category" class="form-label">Image 3</label><small style="color:red;">Image Size Only greater than or 470 * 570</small>
                                <input type="file" class="form-control myfile" id="cover" name="ProductImage3">
                                <div><span class="image3"></span></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="category" class="form-label">Image 4</label><small style="color:red;">Image Size Only greater than or 470 * 570</small>
                                <input type="file" class="form-control myfile" id="cover" name="ProductImage4">
                                <div><span class="image4"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="category" class="form-label">Image 5</label><small style="color:red;">Image Size Only greater than or 470 * 570</small>
                                <input type="file" class="form-control myfile" id="cover" name="ProductImage5">
                                <div><span class="image5"></span></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="category" class="form-label">Image 6</label><small style="color:red;">Image Size Only greater than or 470 * 570</small>
                                <input type="file" class="form-control myfile" id="cover" name="ProductImage6">
                                <div><span class="image6"></span></div>
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
</div></div>
<!-- <script src="<?= base_url(); ?>assets/js/vendor/jquery-3.6.0.min.js"></script> -->
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
<script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>


<!-- magicSuggest -->
<script src="<?= base_url() ?>/assets/MagicSuggest/magicsuggest.js"></script>
<script type="text/javascript">
    function readMultipleFiles(evt) {

        const fileList = this.files[0];
        //console.log(fileList);


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

                    error_name = 'Please Insert Large Size Image';
                    alert(error_name);
                    //$('#img_error').text(error_name);
                    //  location.reload();
                }
            }

        } else {
            alert("Failed to load files");
        }

    }
    document.getElementById('ProductImage1').addEventListener('change', readMultipleFiles, false);
    document.getElementById('ProductImage2').addEventListener('change', readMultipleFiles, false);
    document.getElementById('ProductImage3').addEventListener('change', readMultipleFiles, false);
    document.getElementById('ProductImage4').addEventListener('change', readMultipleFiles, false);

    document.getElementById('ProductImage5').addEventListener('change', readMultipleFiles, false);

    document.getElementById('ProductImage6').addEventListener('change', readMultipleFiles, false);
</script>
<script>
    $("#RecordForm").submit(function(e) {

        e.preventDefault();
        // alert('ok');
        var formData = new FormData(this);
        //  formData.append('ProductImage1', $('#ProductImage1').get(0).files[0]);
        // alert("you are submitting" + $(this).serialize());
        // alert(formdata.serialize());
        $.ajax({
            url: "<?= base_url() ?>admin/UpdateProduct",
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
</script>
<script>
    // $(document).ready(function() {
    $(document).on('change', '#cat', function() {
        var name = $('select[name=cat]').val();
        // alert(name);
        $.ajax({
            type: "post",
            url: "<?php echo base_url('admin/getcat') ?> ",
            data: {
                'id': $('select[name=cat]').val(),
            },
            dataType: "JSON",
            success: function(response) {
                // alert(response);
                var id = response;
                // alert(id);
                // $('#Profiletable tbody').empty();
                load();
                // $('#mainTable').DataTable().ajax.reload();
                $('.buildcoursediv').removeClass('d-none');

                // $('#d').val(response.courserow.id);

            }
        });
    });

    function load() {
        // alert(id);
        $('#Profiletable').DataTable({
            destroy: true,
            ajax: {
                method: "POST",
                url: '<?= base_url('admin/showsubcategories'); ?>',
                data: {
                    'id': $('select[name=cat]').val(),
                },
                dataSrc: 'subbook',
                // alert(students);
                // alert(dataSrc);
            },
            columns: [{
                    'data': 'ids'
                },
                {
                    'data': 'table'
                },
                // {
                //     'data': 'image1'
                // },
                { data: null ,
                          render: function (data, type, row) {
                          return '<img src="https://digileadz.com/sirsonite/Beseen/assets/images/uploads/' + data.folder + '/' + data.image1 + '" width="100px">';
                              
                          }
                  },
                {
                    data: null,
                    render: function(data, type, row) {
                        return '<button class="btn btn-outline-primary btn-sm editbtn" attrid="' + data.id + '" attrid1="' + data.table + '"><i class="fa fa-pencil"></i></button>\
                            <button class="btn btn-outline-danger btn-sm deletebtn" attrid="' + data.id + '"  attrid1="' + data.table + '"><i class="fa fa-trash"></i></button>\
                    ';
                    },
                },

            ],
        });
    }

    $(document).on('click', '.editbtn', function() {
        let id = $(this).attr('attrid');
        let table = $(this).attr('attrid1');
        // alert(id);
        // alert(table);
        $.ajax({
            method: "POST",
            url: "<?php echo base_url('admin/editproductDetails') ?>",
            data: {
                'id': id,
                'table': table
            },
            success: function(response) {
                var response = JSON.parse(response);
                //  alert(response);
                $('.ProductCode').text(response.ProductCode);
                $('#ProductName').val(response.productname);
                $('#ProductPrice').val(response.ProductPrice);
                $('#ProductBrand').val(response.ProductBrand);
                $('#PC').val(response.ProductCode);
                $('#ProductDesc').val(response.ProductDesc);
               /// alert(response.material);
                $('#ms').val(response.size);
                $('#ms1').val(response.material);
                $('.image1').html("<img width='100' src='https://digileadz.com/sirsonite/Beseen/assets/images/uploads/" + response.folder + "/" + response.image1 + "'>");
                $('.image2').html("<img width='100' src='https://digileadz.com/sirsonite/Beseen/assets/images/uploads/" + response.folder + "/" + response.image2 + "'>");
                $('.image3').html("<img width='100' src='https://digileadz.com/sirsonite/Beseen/assets/images/uploads/" + response.folder + "/" + response.image3 + "'>");
                $('.image4').html("<img width='100' src='https://digileadz.com/sirsonite/Beseen/assets/images/uploads/" + response.folder + "/" + response.image4 + "'>");
                $('.image5').html("<img width='100' src='https://digileadz.com/sirsonite/Beseen/assets/images/uploads/" + response.folder + "/" + response.image5 + "'>");
                $('.image6').html("<img width='100' src='https://digileadz.com/sirsonite/Beseen/assets/images/uploads/" + response.folder + "/" + response.image6 + "'>");
                $('#editModal').modal('show');
            }
        });

    });
    $(document).on('click', '.deletebtn', function() {
        alert('ok');
        let id = $(this).attr('attrid');
        let table = $(this).attr('attrid1');
        // alert(id);
        // alert(table);
        $.ajax({
            method: "POST",
            url: "<?php echo base_url('admin/productdelete') ?>",
            data: {
                'id': id,
                'table': table
            },
            success: function(response) {
                // var response = JSON.parse(response);
                alert(response);
                location.reload();
            }
    });
});
</script>

<?= $this->endSection('scripts') ?>