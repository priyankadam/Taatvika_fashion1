<?php
namespace App\Models;

use CodeIgniter\Model;

class MegaBoxModel extends Model
{

    protected $table = 'mega_box_master';
    protected $primaryKey = 'id';

    protected $allowedFields = ['mega_box_type', 'tag_line', 'subtag_line', 'image1','status'];

    
    
     
   
}
