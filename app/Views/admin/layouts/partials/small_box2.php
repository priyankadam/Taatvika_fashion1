 <div class="col-lg-3 col-6">

  <div class="small-box bg-success">
    <div class="inner">
    <?php
        $db = \Config\Database::connect();
        $result = $db->query("select * from  `checkout` where status='1' ");
        $query =  $result->getNumRows();
        ?>
    <h3><?= $query ?></h3>

<p>Orders</p>
    </div>
    <div class="icon">
      <i class="ion ion-stats-bars"></i>
    </div>
    <a href="<?php echo base_url()?>admin/orders" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div>
<!-- ./col -->