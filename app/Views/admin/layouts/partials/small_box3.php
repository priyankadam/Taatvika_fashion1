<div class="col-lg-3 col-6">
  <!-- small box -->
  <div class="small-box bg-warning">
    <div class="inner">
    <?php
        $db = \Config\Database::connect();
        $result = $db->query("select * from  `product`");
        $query =  $result->getNumRows();
        ?>
    <h3><?= $query ?></h3>
      <p>Products</p>
    </div>
    <div class="icon">
      <i class="ion ion-person-add"></i>
    </div>
    <a href="<?php echo base_url();?>admin/List-Product" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div>
<!-- ./col -->