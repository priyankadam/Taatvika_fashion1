<?=$this->extend('admin/layouts/adminmain');?>


<?=$this->section('links')?>
<link rel="stylesheet" href="<?=base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css');?>">
<link rel="stylesheet" href="<?=base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css');?>">
<link rel="stylesheet" href="<?=base_url('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css');?>">
<link rel="stylesheet" href="<?=base_url('assets/plugins/summernote/summernote-bs4.min.css')?>">
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="<?=base_url()?>/assets/MagicSuggest/magicsuggest.css" rel="stylesheet" />

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
<?=$this->endSection('links')?>

<?=$this->section('breadcrumbs_links')?>
<li class="breadcrumb-item active"></li>
<?=$this->endSection('breadcrumbs_links')?>

<?=$this->section('contents')?>
<div class="row m-2 showkeyfeaturesdiv ">
    <div class="card  col-12">
        <div class="card-header">
            <h4 class="box-title m-b-0">User Details</h4>
        </div>
        <div class="card-body">


            <div class="message mb-3"></div>
            <table id="Profiletable" class="table ">
                <thead>
                    <tr>
                    <th scope="col">SN</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">Password</th>
                                  <th scope="col">Contact</th>
                                  <th scope="col">Address</th>
                                  

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

<?=$this->endSection('contents')?>
<?=$this->section('scripts')?>
<!-- Summernote -->
<script src="<?=base_url('assets/plugins/summernote/summernote-bs4.min.js');?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?=base_url('assets/plugins/datatables/jquery.dataTables.min.js');?>"></script>
<script src="<?=base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js');?>"></script>
<script src="<?=base_url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js');?>"></script>
<script src="<?=base_url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js');?>"></script>
<script src="<?=base_url('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js');?>"></script>
<script src="<?=base_url('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js');?>"></script>
<script src="<?=base_url('assets/plugins/jszip/jszip.min.js');?>"></script>
<script src="<?=base_url('assets/plugins/pdfmake/pdfmake.min.js');?>"></script>
<script src="<?=base_url('assets/plugins/pdfmake/vfs_fonts.js');?>"></script>
<script src="<?=base_url('assets/plugins/datatables-buttons/js/buttons.html5.min.js');?>"></script>
<script src="<?=base_url('assets/plugins/datatables-buttons/js/buttons.print.min.js');?>"></script>
<script src="<?=base_url('assets/plugins/datatables-buttons/js/buttons.colVis.min.js');?>"></script>
<!-- magicSuggest -->
<script src="<?=base_url()?>/assets/MagicSuggest/magicsuggest.js"></script>

<script>



        $(document).ready(function() {

                load();
            });


            function load() {
                // alert(1);
                $('#Profiletable').DataTable({
                        "table": [[ 0, 'asc' ]],
                    ajax: {
                        method: "GET",
                        url: '<?=base_url('admin/getAllUsers');?>',
                        dataSrc: 'table',
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
                    'data': 'email'
                },
                {
                    'data': 'password'
                },
                {
                    'data': 'contact'
                },
                {
                    'data': 'address'
                },

               

            ],
        });
    }
    // });
</script>
<?=$this->endSection('scripts')?>