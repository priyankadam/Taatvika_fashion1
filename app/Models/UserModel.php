<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

    protected $table = 'register_user';
    protected $primaryKey = 'user_id';

    protected $allowedFields = ['firstname', 'lastname', 'email', 'pass', 'contact', 'profile_pic', 'address', 'state_id', 'country_id', 'city_id'];

    public function emailExist($email)
    {
        $builder = $this->db->table('register_user');

        $builder->where('user_email', $email);

        $query = $builder->countAllResults();

        if ($query > 0) {
            return true;
        } else {
            return false;
        }
    }
     public function dataInsert(array $data) {
		$db      = \Config\Database::connect();
		$builder = $db->table('register_user'); 

		if ($builder->insert($data)) {
			return $db->insertID();
		} else {
			return FALSE;
		}
	}
     public function verifyEmail($email){
         //var_dump($email);exit();
        



        $builder = $this->db->table('register_user');
        $builder->select('*');
        $builder->where('email',$email);

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
    public function DIDExist($DID)
    {
        $builder = $this->db->table('registered_user');

        $builder->where('DID', $DID);

        $result = $builder->get();

        if (count($result->getResultArray()) == 1) {
            return $result->getRowArray();
        } else {
            return false;
        }
    }
}
