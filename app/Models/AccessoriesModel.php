<?php
namespace App\Models;

use CodeIgniter\Model;

class AccessoriesModel extends Model
{

    protected $table = ' accessories';
    protected $primaryKey = 'id';

    protected $allowedFields = ['men_acces_id','women_acces_id', 'Brand', 'Product_name', 'Product_price','ProductDesc', 'image1', 'image2', 'image3', 'image4', 'image5','image6','size','material','ProductCode'];
}