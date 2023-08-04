<?php
namespace App\Controllers;
use App\Controllers\BaseController;

use App\Models\BoxModel;
// use App\Models\BannerModel;
// use App\Models\MensModel;
class BoxController extends BaseController
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
    public function boxview()
	{

         $model = new BoxModel;
         $data['title'] = 'Include Box';
        $data['boxData'] = $model->findBoxData();
         $data['imgData']= $model->getStatus1();
     
        	return view('admin/box',$data);
	}
	public function add_box_img_view()
    {
             
        return view('admin/addBox');
    }


	 public function add_box_img()
    {
        helper(['form', 'url']);
        // $session = session();
       
        $model = new BoxModel;
        $file_name = $this->request->getFile('sub_img'); 
         
        $fileName = $_FILES["sub_img"]["tmp_name"];
        //  $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        // $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        // if (in_array($fileType, $allowTypes)) {

        //----------------------------------------

        //$resize_image = $folder . $file_name . "_resize.jpg";

        if ($file_name->isValid() || !$file_name->hasMoved()) {

            list($width, $height) = getimagesize($file_name);

            $newwidth = 370;
            $newheight = 240;
            if ($width >= $newwidth && $height >= $newheight) {


                $targetLayer = imagecreatetruecolor($newwidth, $newheight);
                imagealphablending($targetLayer, false);
                imagesavealpha($targetLayer, true);
                if ($_FILES['sub_img']['type'] == 'image/jpeg') {
                    $source = imagecreatefromjpeg($fileName);
                    $newsize = imagecopyresized($targetLayer, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
                    $file_name = time() . '.jpg';
                    $img = imagejpeg($targetLayer, 'public/product/' . $file_name);
                }
                if ($_FILES['sub_img']['type'] == 'image/png') {
                    $source = imagecreatefrompng($fileName);

                    $newsize = imagecopyresized($targetLayer, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
                    $file_name = time() . '.png';

                    $img = imagepng($targetLayer, 'public/product/' . $file_name);
                }
                if ($_FILES['sub_img']['type'] == 'image/gif') {
                    $source = imagecreatefromgif($fileName);
                    $newsize = imagecopyresized($targetLayer, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
                    $file_name = time() . '.gif';
                    $img = imagegif($targetLayer, 'public/product/' . $file_name);
                }


                $data = [
                    'title' => $_POST['title'],
                    'sub_title' => $_POST['sub_title'],
                    'box_type' => $_POST['sub_type'],
                    'surl' => $file_name,
                    //'status' => 1,
                ];
                $result = $model->insert($data);

                if ($result) {
                    // $session->setFlashdata('msg', 'Data Added Successfully!');
                    //     // return redirect()->to('/');
                    //     return view('admin/add_subBannerImg');

                    echo json_encode(array(
                        "succ" => true,
                        "msg" => "Data added, Successfully",
                    ));
                } else {
                    echo json_encode(array(
                        "succ" => false,
                        "msg" => "not added",
                    ));
                }
            } else {
                echo json_encode(array(
                    "success" => false,
                    "msg" => "Insert Valid Image",
                ));
            }

            //$new_file_name = $file_name->getRandomName();

            // $out_image = addslashes(file_get_contents($resize_image));

            //$file_name->move('public/product/', $new_file_name);


        }
    }
    public function updatebox()
     {
             $model = new BoxModel;
     if($_POST['id1']){
        $id1=$_POST['id1'];
        $result = $model->updateBox1($id1);

     }
     if($_POST['id2']){
        $id2=$_POST['id2'];
        $result = $model->updateBox1($id2);

     }
     if($_POST['id3']){
        $id3=$_POST['id3'];
        $result = $model->updateBox1($id3);

     }


      if ($result){
                // $session->setFlashdata('msg', 'Data Added Successfully!');
                //     // return redirect()->to('/');
                //     return view('admin/add_subBannerImg');
                 
                echo json_encode(array(
                    "success" => true,
                    "msg" => "Data Updated, Successfully",
                ));
            } else {
                echo json_encode(array(
                    "success" => false,
                    "msg" => "not Update",
                ));
            }
    }
    public function logout(){

        session()->remove('adminloggedid');
        session()->remove('adminloggedname');
        session()->remove('adminloggedid');

       return view('admin/login');
}

}