<?php

namespace App\Models;

use CodeIgniter\Model;

class cartModel extends Model
{
    protected $table = 'add_to_cart';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'product_id','table_name','folder','ProductCode','size','bust','waist','hip','quantity','material','product_master_id','order_id', 'amount', 'status'];

    function fetch_cart($userid)
    {
      $query=$this->db->query("SELECT * FROM add_to_cart WHERE user_id='$userid' AND status=0");
      return $query->getResult();
    }
}