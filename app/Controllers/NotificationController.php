<?php
namespace App\Controllers;
use App\Controllers\BaseController;

use App\Models\NotificationModel;

class NotificationController extends BaseController
{
    public function __construct()
    {
      helper(['url', 'session', 'cookie', 'form']);
      if (!isset($session)) {
         $session = session();
     }
     $session = \Config\Services::session();
     $session = session();
     $request = \Config\Services::request();
 }
 public function index()
 {
        // return redirect()->to( base_url('/admin') );
  return view('admin/login');
}
public function notification(){
  return view('admin/notification');
}
public function getNotification(){
   $model = new NotificationModel();
   $offers=$model->findAll();
   
   $i = 1;
   foreach ($offers as $key) {
    $id=$key['id'];
            // var_dump($id);exit();
    $offer= $key['offer1'];
    
    $bannerdata[]=array(
        'offer'=>$offer,
        
        'id'=>$id,
        'ids'=>$i
    );
    $i++;
}
$data['offer'] = $bannerdata;
            // var_dump($banner);exit();
return $this->response->setJSON($data);

}
public function editNotification(){
        // echo '1';
    $db  = \Config\Database::connect();
    $id = $this->request->getVar('id');
        // var_dump($id);exit();
    
    $builder = $db->table('notification');
    $builder->where('id',$id);
    $result = $builder->get();
    foreach ($result->getResult() as $key11) {
        $offer1 = $key11->offer1;
       

        $ss = array(
            'offer1' => $offer1 ,
            'id'=>$id,
            
            
        );
        echo json_encode($ss);
    }
    
}
public function UpdateNotification()
{
    helper(['form', 'url']);
    $model = new NotificationModel();
    $db  = \Config\Database::connect();
       
    $id = $_POST['id'];
    // var_dump($_POST['id']);exit();
   $data = [

    'offer1'    => $_POST['offer1'],
   

];

$builder = $db->table('notification');
$builder->where('id', $id);
$result = $builder->update($data);
if ($result) {
    echo json_encode(array(
        "success" => true,
        "msg" => "Updated Successfully",
    ));
} else {
    echo json_encode(array(
        "success" => false,
        "msg" => "not added",
    ));

            //return redirect()->to('/admin/banner');

}
        // echo '1';
}



}