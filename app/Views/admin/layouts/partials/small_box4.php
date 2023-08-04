<div class="col-lg-3 col-6">
  <!-- small box -->
  <div class="small-box bg-danger">
    <div class="inner">
    <?php
        $db = \Config\Database::connect();
        $result = $db->query("select * from  `checkout` where status='1'");
        $query =  $result->getResultArray();
        $amt[] = 0;
        foreach ($query as $key1) {
          $total_amount = $key1['total_amount'];
          $amt[]=$total_amount;
        }
        ?>
      <h3>Rs.<?php echo array_sum($amt); ?></h3>

      <p>Total Amount</p>
    </div>
    <div class="icon">
      <i class="ion ion-pie-graph"></i>
    </div>
    <a href="<?php echo base_url();?>/admin/paymentReport" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->