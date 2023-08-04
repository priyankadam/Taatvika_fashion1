<?php
namespace App\Models;

use CodeIgniter\Model;

class FitModel extends Model
{

    protected $table = ' fit_master';
    protected $primaryKey = 'id';

    protected $allowedFields = ['fit'];
}
