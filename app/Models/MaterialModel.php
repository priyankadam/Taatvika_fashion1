<?php
namespace App\Models;

use CodeIgniter\Model;

class MaterialModel extends Model
{

    protected $table = ' material_master';
    protected $primaryKey = 'Id';

    protected $allowedFields = ['material'];
}
