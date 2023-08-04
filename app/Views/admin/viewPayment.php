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
<div class="row m-2 showkeyfeaturesdiv ">
    <div class="card  col-12">
        <div class="card-header">
            <h4 class="box-title m-b-0">Payment Report</h4>
            
        </div>
        <div class="card-body">


            <div class="message mb-3"></div>
            <table id="Profiletable" class="table ">
                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                         <th scope="col">Address</th>
                        <th scope="col">Transaction Id</th>
                        <th scope="col">Total Amount</th>
                        
                        <th scope="col">Transaction Date</th>
                    

                    </tr>
                </thead>
                <tbody class="Profiletable">
                    <?php 
                   $db = \Config\Database::connect();
                  $query="SELECT * FROM register_user r JOIN checkout c on c.user_id=r.user_id WHERE c.status=1";
                  $query_s = $db->query($query);   
                     $result=$query_s->getResultArray();
                    $i = 1;
                    $amt[] = 0;
                    foreach ($result as $key1) {

                        $username = $key1['firstname'] . " " . $key1['lastname'];
                        $email = $key1['email'];
                        $TransactionId = $key1['transaction_id'];
                        $total_amount = $key1['total_amount'];
                        $address = $key1['address'];
                        $ids = $i;
                        $id = $key1['user_id'];
                        $transaction_date = $key1['transaction_date'];
                    
                    ?>
                    <!-- ajax data here -->
                    <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $username ?></td>
                    <td><?php echo $email ?></td>
                     <td><?php echo $address ?></td>
                     
                    <td><?php echo $TransactionId ?></td>
                    <td><?php echo $amt[]=$total_amount ?></td>
                   
                    <td><?php echo date('d-m-yy', strtotime($transaction_date)) ?></td>
                    </tr>
                    <?php }  ?>
                </tbody>
                <tr>
                    <th colspan="6" style="text-align: right;">Total (₹)</th>
                    <th><?php echo array_sum($amt); ?></th>
                </tr>
            </table>
        </div>
        <!-- <div class="card-footer ">

        </div> -->
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
        // Summernote
        $('.summernote').summernote();
        loadNews();
    });


    // ================================================================================ //
   
    // ======================================================================== //

    function loadNews() {
        $('#Profiletable').DataTable({
            dom: "B<'row p-2'><'row'<'col-md-2'l><'col-md-10'f>r>t<'row'<'col-md-4'i>>'row'<p>",
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            "ordering": true,
            "info": true,
            "paging": true,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        });
    }
</script>
<?= $this->endSection('scripts') ?>