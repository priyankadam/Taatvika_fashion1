<?php
namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'prod_id';
    protected $allowedFields = ['product_name', 'product_type','ProductCode','product'];
}
