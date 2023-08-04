<?php
namespace App\Models;

use CodeIgniter\Model;

class MiniBannerModel extends Model
{

    protected $table = 'mini_banner_master';
    protected $primaryKey = 'id';

    protected $allowedFields = [ 'tag_line', 'subtag_line', 'mini_banner_img','status'];

    
    
     
   
}
