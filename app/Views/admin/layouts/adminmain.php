<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <title>Admin</title>
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/logo/png logo for web-01 (1).png">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Ionicons
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <!-- <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/summernote/summernote-bs4.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

    <!-- ======================================================================== -->
    <?= $this->renderSection('links'); ?>
    <style>
     [class*=sidebar-dark-] {
    background-color: #ffffff !important;
}
[class*=sidebar-dark] .brand-link, [class*=sidebar-dark] .brand-link .pushmenu {
        color: rgb(0 0 0 / 80%) !important;
    height: 116px;
}
.brand-link .brand-image {
    float: left;
    line-height: .8;
    margin-left: 0.8rem;
    margin-right: 0.5rem;
    margin-top: -3px;
    max-height: 96px !important;
    width: auto;
}

    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?= $this->include('admin/layouts/partials/header'); ?>

        <?= $this->include('admin/layouts/partials/sidebar'); ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h4 class="m-0"></h4>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url(route_to('admin.dashboard')); ?>">Home</a></li>
                                <?= $this->renderSection('breadcrumbs_links'); ?>
                            </ol>
                        </div><!-- /.col -->
                        
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <?= $this->renderSection('contents'); ?>

                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- ./wrapper -->

        <?= $this->include('admin/layouts/partials/footer');   ?>


        <!-- REQUIRED SCRIPTS -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <script src="<?= base_url() ?>/assets/MagicSuggest/magicsuggest.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
        <!-- jQuery -->
        <script src="<?= base_url('assets/frontend/js/jquery-3.6.0.min.js') ?>"></script>



        <!-- Bootstrap 4 -->
        <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url('assets/dist/js/adminlte.min.js') ?>"></script>
        <!-- alertify -->
        <script src="<?= base_url('assets/plugins/alertify0.3.11/alertify.js') ?>"></script>
        <!-- <script src="/public/magicsuggest.js"></script> -->

       <!-- DataTables -->
 


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
        <script>


  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
     //'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

        <?= $this->renderSection('scripts'); ?>
</body>

</html>