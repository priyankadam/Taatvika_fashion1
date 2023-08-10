<?php

namespace App\Models;

use CodeIgniter\Model;

class checkoutModal extends Model
{
    protected $table = 'checkout';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'cart_ids', 'order_id', 'total_amount', 'status','transaction_id','transaction_date','ProductCode'];

     
     public function dataInsert(array $data) {
		$db      = \Config\Database::connect();
		$builder = $db->table('checkout'); 

		if ($builder->insert($data)) {
			return $db->insertID();
		} else {
			return FALSE;
		}
	}
    public function getmycart($id){
        $builder = $this->db->table('checkout');
        $builder->select('*');
        $builder->where('id',$id);
        $result = $builder->get();
  
        if(count($result->getResultArray()) == 1)
        {
            return $result->getRowArray();
        } 
        else
        {
            return false;
        }
    }

  public function getUserOrderDetails(){
        $query="SELECT * FROM register_user r JOIN checkout c on c.user_id=r.user_id WHERE c.status=1";
       $query_s = $this->db->query($query);   
          $result=$query_s->getResultArray();
          
          return $result;
      }
}
