<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'admins';
	protected $primaryKey           = 'id';
	// protected $useAutoIncrement     = true;
	// protected $insertID             = 0;
	// protected $returnType           = 'array';
	// protected $useSoftDeletes       = true;
	// protected $protectFields        = true;
	protected $allowedFields        = [
		'username',
		'email',
		'password',
	];

	// Dates
	// protected $useTimestamps        = true;
	// protected $dateFormat           = 'datetime';
	// protected $createdField         = 'created_at';
	// protected $updatedField         = 'updated_at';
	// protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [
		'username'  => 'required',
		'email' => 'required|valid_email',
		'password' => 'required',
	];

	protected $validationMessages   = [
		'username' => [
			'required' => '{field} is required',
		],
		'email' => [
			'required' => '{field} is required',
			'valid_email' => '{field} is invalid',
		],
		'password' => [
			'required' => '{field} is required',
		],
	];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];

	public function fetch_all()
	{
		return $this->findAll();
	}

	public function fetch_row($id)
	{
		return $this->find($id);
	}

	public function create($data)
	{
		if ($this->save($data)) {
			if ($this->insertID != 0) {
				return $this->insertID;
			} else {
				$data['error'] = $this->errors();
				return $data;
			}
		} else {
			$data['error'] = $this->errors();
			return $data;
		}
	}

	public function update_row($id, $data)
	{
		if ($this->update($id, $data)) {
			return true;
		} else {
			$data['error'] = $this->errors();
			return $data;
		}
	}

	public function delete_row($id)
	{
		return $this->delete($id);
	}
}

