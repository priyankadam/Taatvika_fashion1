<?php
namespace App\Models;

use CodeIgniter\Model;

class BoxModel extends Model
{
    protected $table = 'box_master';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title','sub_title', 'box_type', 'surl'];

  public function getStatus1(){
            $builder = $this->db->table('box_master');

             $query = $builder->getWhere(['status' => '1']);
                   $builder->orderBy('id', 'DESC');
                   $builder->limit(1);
        $query = $builder->getWhere(['box_type' => 'Box1']);
       $box11=$query->getRowArray();

       $query = $builder->getWhere(['status' => '1']);
       $builder->orderBy('id', 'DESC');
                   $builder->limit(1);
        $query = $builder->getWhere(['box_type' => 'Box2']);
       $box22=$query->getRowArray();

       $query = $builder->getWhere(['status' => '1']);
              $builder->orderBy('id', 'DESC');
                   $builder->limit(1);
        $query = $builder->getWhere(['box_type' => 'Box3']);
       $box33=$query->getRowArray();
          //var_dump($box33);exit();
       $boxes=[
         'box1img'=>$box11,
         'box2img'=>$box22,
         'box3img'=>$box33,
       ];
 
    return $boxes;

 }
    public function findBoxData(){
        $builder = $this->db->table('box_master');

       $query = $builder->getWhere(['box_type' => 'Box1']);
       $box1=$query->getResultArray();

       
    
       
      

       $query = $builder->getWhere(['box_type' => 'Box2']);
       $box2=$query->getResultArray();

       $query = $builder->getWhere(['box_type' => 'Box3']);
       $box3=$query->getResultArray();



       $boxes=[
         'box1'=>$box1,
         'box2'=>$box2,
         'box3'=>$box3,
       ];
 
    return $boxes;
    }
    public function updateBox1($id1)
    {
        $builder = $this->db->table('box_master');
          $builder->set('status', 1);
          $builder->where('id', $id1);
        $result =$builder->update();
                return $result;

    }
     public function updateBox2($id2)
    {
        $builder = $this->db->table('box_master');
          $builder->set('status', 1);
          $builder->where('id', $id2);
        $result =$builder->update();
                return $result;

    }
     public function updateBox3($id3)
    {
        $builder = $this->db->table('box_master');
          $builder->set('status', 1);
          $builder->where('id', $id3);
        $result =$builder->update();
                return $result;

    }
}
