<?php
namespace App\Models;

use CodeIgniter\Model;

class ShippingPolicyModel extends Model
{

    protected $table = 'shipping_master';
    protected $primaryKey = 'Id';

    protected $allowedFields = ['policy'];

    
    
     
   
}
