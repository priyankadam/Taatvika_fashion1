<?php
namespace App\Models;

use CodeIgniter\Model;

class CollectionModel extends Model
{

    protected $table = 'collection';
    protected $primaryKey = 'Id';

    protected $allowedFields = ['Collection_id', 'Brand', 'Product_name', 'Product_price','ProductDesc', 'image1', 'image2', 'image3', 'image4', 'image5','image6','size','material','ProductCode'];
}