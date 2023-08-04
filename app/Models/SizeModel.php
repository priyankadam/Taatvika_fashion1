<?php
namespace App\Models;

use CodeIgniter\Model;

class SizeModel extends Model
{

    protected $table = ' size_master';
    protected $primaryKey = 'id';

    protected $allowedFields = ['size'];
}
