<?php
namespace App\Models;

use CodeIgniter\Model;

class BannerModel extends Model
{

    protected $table = 'banner_master';
    protected $primaryKey = 'banner_id';

    protected $allowedFields = ['banner_type', 'tag_line', 'subtag_line', 'banner_img','status','button'];

    
    
     
   
}
