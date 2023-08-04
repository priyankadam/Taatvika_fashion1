<?php
namespace App\Models;

use CodeIgniter\Model;

class FabricModel extends Model
{

    protected $table = ' fabric_master';
    protected $primaryKey = 'id';

    protected $allowedFields = ['fabric'];
}
