<?php
namespace App\Models;

use CodeIgniter\Model;

class MensModel extends Model
{

	protected $table = 'mens';
	protected $primaryKey = 'Id';

	protected $allowedFields = ['Men_id','Product_master_id', 'Brand', 'Product_name', 'Product_price','ProductDesc', 'image1', 'image2', 'image3', 'image4','image5','image6','size','material','ProductCode','fabric','count','weave','care','fit'];

	public function dataInsert(array $data) {
		$db      = \Config\Database::connect();
		$builder = $db->table('Mens'); 

		if ($builder->insert($data)) {
			return $db->insertID();
		} else {
			return FALSE;
		}
	}
	public function delete_row($id)
	{
		return $this->delete($id);
	}
	
	
}



