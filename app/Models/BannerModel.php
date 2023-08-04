<?php
namespace App\Models;

use CodeIgniter\Model;

class BannerModel extends Model
{

    protected $table = 'Banner_Master';
    protected $primaryKey = 'banner_id';

    protected $allowedFields = ['banner_type', 'tag_line', 'subtag_line', 'banner_img','status'];

    
    
     
   
}
