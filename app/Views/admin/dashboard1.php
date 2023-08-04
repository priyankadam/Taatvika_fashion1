<?= $this->extend('admin/layouts/adminmain'); ?>

<?= $this->section('links') ?>
<?= $this->endSection('links') ?>


<?= $this->section('breadcrumbs_links') ?>
<li class="breadcrumb-item active"></li>
<?= $this->endSection('breadcrumbs_links') ?>


<?= $this->section('contents') ?>
<h5>Dashboard</h5>
<div class="row">
    <?= $this->include('admin/layouts/partials/small_box1');   ?>
     <?= $this->include('admin/layouts/partials/small_box2');   ?>
     <?= $this->include('admin/layouts/partials/small_box3');   ?>
     <?= $this->include('admin/layouts/partials/small_box4');   ?>
</div>




<?= $this->endSection('contents') ?>

<?= $this->section('scripts') ?>
<?= $this->endSection('scripts') ?>