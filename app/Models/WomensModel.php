<?php
namespace App\Models;

use CodeIgniter\Model;

class WomensModel extends Model
{

    protected $table = 'womens';
    protected $primaryKey = 'Id';

    protected $allowedFields = ['Women_id', 'Brand', 'Product_name', 'Product_price','ProductDesc', 'image1', 'image2', 'image3', 'image4', 'image5','image6','size','material','ProductCode','fabric','count','weave','care','fit'];
}