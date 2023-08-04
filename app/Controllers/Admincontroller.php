<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\BoxModel;
use App\Models\BannerModel;
use App\Models\MensModel;
use App\Models\WomensModel;
use App\Models\MegaBoxModel;
use App\Models\MiniBannerModel;
use App\Models\CollectionModel;
use App\Models\AccessoriesModel;
use App\Models\ShippingPolicyModel;
use App\Models\UserModel;
use App\Models\ProductModel;
use App\Models\cartModel;
use App\Models\checkoutModal;

use App\Models\SizeModel;
use App\Models\MaterialModel;
use App\Models\FitModel;
use App\Models\FabricModel;
class Admincontroller extends BaseController
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


public function listProduct(){
  return view('admin/listproducts');
}
public function getcat(){
    
    $id = $this->request->getVar('id');

    return json_encode($id);
}
public function getSearchCat()
{
    $db  = \Config\Database::connect();
    $category = $this->request->getVar('category');
    if($category=='Mens Suit'){
       $result = $db->query("SELECT * FROM product WHERE product='$category'");
       
       foreach ($result->getResultArray() as $key1) {
        $prod_code[]=$key1['ProductCode'];
        
    }
              // $data['prod_code']=$prod_code;
    foreach($prod_code as $code){
       $result = $db->query("SELECT * FROM mens WHERE ProductCode='$code'");
       
       foreach ($result->getResultArray() as $key) {
           $mens_data[]=$key;
           
       }
       
   }
              // $data['mens_data']=$mens_data;
           // var_dump($mens_data);
   return $this->response->setJSON($mens_data);
           //return view('MensCollection',$data);
}

      // return view('admin/mens');
}
public function showsubcategories(){
 $db  = \Config\Database::connect();
 $i = 1;
         $tablename = $this->request->getVar('id');//table name
         if ($tablename == 'Mens') {
            $folder = 'mens';
        }
        if ($tablename == 'womens') {
            $folder = 'womens';
        }
        if ($tablename == 'collection') {
            $folder = 'collections';
        }
        if ($tablename == 'accessories') {
            $folder = 'accessories';
        }
        //   $id = '';//table name
        $builder = $db->table($tablename);
        $result12 = $builder->get();
        //   var_dump($result12);exit();
        foreach ($result12->getResult() as $key11) {
            if($tablename=='accessories'){
                $id=$key11->id;
            }
            else{
               $id=$key11->Id;
           }
           $productname=$key11->Product_name;
           $image1=$key11->image1;
           $ssw[]=array(
            'ids'=>$i,
            'productname'=>$productname,
            'image1'=>$image1,
            'folder'=>$folder,
            'id'=>$id,
            'table'=>$tablename
        );
           $i++;
       }
       $data['subbook']=$ssw;
       
       return $this->response->setJSON($data);
   }
   
   public function fit_fabricView()
   {
    return view('admin/add_fit_fabric');
}
public function addFitFabric()
{
    $fitModel = new FitModel();
    $fabricModel = new FabricModel();

    if (isset($_POST['fit'])) {

        $fitdata = [
            'fit' => $_POST['fit'],
        ];

        $query = $fitModel->save($fitdata);
        if ($query) {
            echo json_encode(array("success" => true, "msg" => "Data Added, Successfully"));
        } else {
            echo json_encode(array("success" => false, "msg" => "Data not, Added"));
        }

    }

    if (isset($_POST['fabric'])) {

        $fabricdata = [
            'fabric' => $_POST['fabric'],
        ];

        $query = $fabricModel->save($fabricdata);
        if ($query) {
            echo json_encode(array("success" => true, "msg" => "Data Added, Successfully"));
        } else {
            echo json_encode(array("success" => false, "msg" => "Data not, Added"));
        }
    }

}
public function size_materialView()
{
    return view('admin/add_size_materials');
}
public function addSizeMaterial()
{
    $sizeModel = new SizeModel();
    $materialModel = new MaterialModel();

    if (isset($_POST['size'])) {

        $sizedata = [
            'size' => $_POST['size'],
        ];

        $query = $sizeModel->save($sizedata);
        if ($query) {
            echo json_encode(array("success" => true, "msg" => "Data Added, Successfully"));
        } else {
            echo json_encode(array("success" => false, "msg" => "Data not, Added"));
        }

    }

    if (isset($_POST['material'])) {

        $materialdata = [
            'material' => $_POST['material'],
        ];

        $query = $materialModel->save($materialdata);
        if ($query) {
            echo json_encode(array("success" => true, "msg" => "Data Added, Successfully"));
        } else {
            echo json_encode(array("success" => false, "msg" => "Data not, Added"));
        }
    }

}
public function editproductDetails()
{
    $db  = \Config\Database::connect();
        $table = $this->request->getVar('table'); //table name
        if ($table == 'Mens') {
            $folder = 'mens';
        }
        if ($table == 'womens') {
            $folder = 'womens';
        }
        if ($table == 'collection') {
            $folder = 'collections';
        }
        if ($table == 'accessories') {
            $folder = 'accessories';
        }
        $id = $this->request->getVar('id'); //id
        // $table='Mens';
        // $id='38';
        $builder = $db->table($table);
        $builder->where('Id', $id);
        $result12 = $builder->get();
        foreach ($result12->getResult() as $key11) {
            $ProductCode = $key11->ProductCode;
            $productname = $key11->Product_name;
            $image1 = $key11->image1;
            $Product_price = $key11->Product_price;
            $Brand = $key11->Brand;
            $size = $key11->size;
            $size_ids = explode(",", $size);
            
            foreach ($size_ids as $key) {
                $db = db_connect();
                
                $result = $db->query("SELECT * FROM size_master WHERE id='$key'");
                
                foreach ($result->getResult() as $key1) {
                    $sizename[] = $key1->size;
                }
            }
            $material = $key11->material;
            $material_ids = explode(",", $material);
            foreach ($material_ids as $key1) {
                $db = db_connect();
                $result1 = $db->query("SELECT * FROM material_master WHERE id='$key1'");
                foreach ($result1->getResult() as $key2) {
                    $materialname[] = $key2->material;
                }
            }
            $image1 = $key11->image1;
            $image2 = $key11->image2;
            $image3 = $key11->image3;
            $image4 = $key11->image4;
            $image5 = $key11->image5;
            $image6 = $key11->image6;
            $ProductDesc = $key11->ProductDesc;

            $ss = array(
                'productname' => $productname,
                'image1' => $image1,
                'ProductCode' => $ProductCode,
                'ProductPrice' => $Product_price,
                'ProductBrand' => $Brand,
                'size' => $sizename,
                'material' => $materialname,
                'image1' => $image1,
                'image2' => $image2,
                'image3' => $image3,
                'image4' => $image4,
                'image5' => $image5,
                'image6' => $image6,
                'ProductDesc' => $ProductDesc,
                'folder' => $folder
            );
        }
        echo json_encode($ss);
    }
    public function UpdateProduct()
    {
        $db  = \Config\Database::connect();
        $ProductCode = $_POST['PC'];
        // var_dump($ProductCode);
        $builder = $db->table('product');
        $builder->where('ProductCode', $ProductCode);
        $query = $builder->get();

        foreach ($query->getResult() as $row) {
            $product_type = $row->product_type;
        }


        // foreach ($result->getResult() as $key11) {
        //     $product_type = $key11->Product_type;
        // }

        if ($product_type == 'Mens') {
            $table = 'Mens';
            $folder = 'assets/images/uploads/mens/';
        }
        if ($product_type == 'womens') {
            $table = 'womens';
            $folder = 'assets/images/uploads/womens/';
        }
        if ($product_type == 'collection') {
            $table = 'collection';
            $folder = 'assets/images/uploads/collections/';
        }
        if ($product_type == 'accessories') {
            $table = 'accessories';
            $folder = 'assets/images/uploads/accessories/';
        }
        $Brand = $_POST['Brand'];
        $ProductName = $_POST['ProductName'];
        $ProductName = $_POST['ProductName'];
        $ProductPrice = $_POST['ProductPrice'];
        $ProductDesc = $_POST['ProductDesc'];
        $size = $_POST['sizes'];
        
        foreach ($size as $val) {
            $sizes[] = $val;
        }
        $size_ids = implode(',', $sizes);
        
        $material = $_POST['material'];
        

        foreach ($material as $mat) {
            $materials[] = $mat;
        }

        $material_ids = implode(',', $materials);
        

        $image1 = $this->request->getFile('ProductImage1');
        // var_dump($image1);exit();
        $image1temp = $_FILES["ProductImage1"]["tmp_name"];
        $image1Type = $_FILES['ProductImage1']['type'];

        $image2 = $this->request->getFile('ProductImage2');
        $image2temp = $_FILES["ProductImage2"]["tmp_name"];
        $image2Type = $_FILES['ProductImage2']['type'];

        $image3 = $this->request->getFile('ProductImage3');
        $image3temp = $_FILES["ProductImage3"]["tmp_name"];
        $image3Type = $_FILES['ProductImage3']['type'];

        $image4 = $this->request->getFile('ProductImage4');
        $image4temp = $_FILES["ProductImage4"]["tmp_name"];
        $image4Type = $_FILES['ProductImage4']['type'];

        $image5 = $this->request->getFile('ProductImage5');
        $image5temp = $_FILES["ProductImage5"]["tmp_name"];
        $image5Type = $_FILES['ProductImage5']['type'];

        $image6 = $this->request->getFile('ProductImage6');
        $image6temp = $_FILES["ProductImage6"]["tmp_name"];
        $image6Type = $_FILES['ProductImage6']['type'];
        if (!empty($_FILES['ProductImage1']['name'])) {
            if ($image1->isValid() || !$image1->hasMoved()) {
                $image11 = $this->resizeProductImage($image1, $image1temp, $image1Type, $folder);
            }
        }
        if (!empty($_FILES['ProductImage2']['name'])) {
            if ($image2->isValid() || !$image2->hasMoved()) {

                $image22 =  $this->resizeProductImage($image2, $image2temp, $image2Type, $folder);
            }
        }
        if (!empty($_FILES['ProductImage3']['name'])) {
            if ($image3->isValid() || !$image3->hasMoved()) {
                $image33 = $this->resizeProductImage($image3, $image3temp, $image3Type, $folder);
            }
        }
        if (!empty($_FILES['ProductImage4']['name'])) {
            if ($image4->isValid() || !$image4->hasMoved()) {
                $image44 = $this->resizeProductImage($image4, $image4temp, $image4Type, $folder);
            }
        }
        if (!empty($_FILES['ProductImage5']['name'])) {
            if ($image5->isValid() || !$image5->hasMoved()) {
                $image55 = $this->resizeProductImage($image5, $image5temp, $image5Type, $folder);
            }
        }
        if (!empty($_FILES['ProductImage6']['name'])) {
            if ($image6->isValid() || !$image6->hasMoved()) {
                $image66 = $this->resizeProductImage($image6, $image6temp, $image6Type, $folder);
            }
        }
        if (isset($image55)) {
            $data['image5'] = $image55;
        }
        if (isset($image44)) {
            $data['image4'] = $image44;
        }
        if (isset($image33)) {
            $data['image3'] = $image33;
        }
        if (isset($image22)) {
            $data['image2'] = $image22;
        }
        if (isset($image11)) {
            $data['image1'] = $image11;
        }
        if (isset($image66)) {
            $data['image6'] = $image66;
        }
        $data['Brand'] = $Brand;
        $data['Product_name'] = $ProductName;
        $data['Product_price'] = $ProductPrice;
        $data['ProductDesc'] = $ProductDesc;
        $data['size'] = $size_ids;
        $data['material'] = $material_ids;
        // $data = [
        //     'Brand' => $Brand,
        //     'Product_name' => $ProductName,
        //     'Product_price' => $ProductPrice,
        //     'ProductDesc' => $ProductDesc,
        //     'size' => $size_ids,
        //     'material' => $material_ids
        // ];

        $builder = $db->table($table);
        $builder->where('ProductCode', $ProductCode);
        $result = $builder->update($data);
        if ($result) {
            echo json_encode(array(
                "success" => true,
                "msg" => "Product Updated, Successfully",
            ));
        } else {
            echo json_encode(array(
                "success" => false,
                "msg" => "not Added",
            ));

            //return redirect()->to('/admin/banner');

        }
    }
    // public function productdelete(){
    //     	 $db  = \Config\Database::connect();
    //      $id = $this->request->getVar('id');
    //       $table = $this->request->getVar('table');
    //     // var_dump($id);exit();
    //     //create obj for db
    //     // $id='38';
    //     // $addb = new MensModel();
    //      $builder = $db->table($table);
    //      $builder->where('id', $id);
    //     //   $builder->delete();
    //     //delete code
    //     if ($builder->delete()) {
    //         $data['success'] = ' deleted Successfully';
    //         return json_encode($data);
    //     } else {
    //         $data['fail'] = 'oops!!! Unable to delete, Please try again.';
    //         return json_encode($data);
    //     }
    // }
    public function productdelete()
    {
        $db  = \Config\Database::connect();
        $id = $this->request->getVar('id');
        $table = $this->request->getVar('table');
        //   echo  $id = '49';
        //   echo  $table = 'mens';
        $builder1 = $db->table($table);
        $builder1->where('Id', $id);
        $result12 = $builder1->get();
        foreach ($result12->getResult() as $key11) {
            $Pc = $key11->ProductCode;
            // var_dump($Pc);exit();
        }
        // $update = $db->query("delete from product where ProductCode='$Pc'" );
        // var_dump($update);exit();
        $builder2 = $db->table('add_to_cart');
        $builder2->where('ProductCode', $Pc);
        $builder2->delete();
        $builder3 = $db->table('product');
        $builder3->where('ProductCode', $Pc);
        $builder3->delete();
        // var_dump($id);exit();
        //create obj for db
        // $id='38';
        // $addb = new MensModel();
        $builder = $db->table($table);
        $builder->where('Id', $id);
        //   $builder->delete();
        //delete code
        if ($builder->delete()) {
            $data['success'] = ' deleted Successfully';
            return json_encode($data);
        } else {
            $data['fail'] = 'oops!!! Unable to delete, Please try again.';
            return json_encode($data);
        }
    }
    public function orders(){
      return view('admin/orders');
  }
  public function ordersget()
  {
		// echo json_encode(1);
      $cart = new cartModel();

      $db  = \Config\Database::connect();
      $i=1;
      $data12= $cart->where('status', '1')->findAll();
        // $json_data['data'] = $data['students'] ; 
      foreach ($data12 as $key) {
         $id=$key['order_id'];
         $ProductCode=$key['ProductCode'];
         $user_id=$key['user_id'];
				// var_dump($user_id);exit();
         $tabelName=$key['table_name'];
         $builder = $db->table('register_user');
         $builder->where('user_id',$user_id);
         $result12 = $builder->get();
                                        // var_dump($result12->getResult());exit();
         foreach ($result12->getResult() as $key11) {
           $username=$key11->firstname ;
       }
       $tabelName=$key['table_name'];
       
       $builder = $db->table($tabelName);
       $builder->where('ProductCode',$ProductCode);
       $result = $builder->get();
                                        // var_dump($result->getResult());
       foreach ($result->getResult() as $key1) {
        $Product_name = $key1->Product_name;
        $Product_price = $key1->Product_price;
        $image1 = $key1->image1;
    }
    $ss1[] = array(
        'ids' => $i,
        'id' => $id,
        'Product_name'=>$Product_name,
        'username'=>$username
    );
    $i++;
}
$data['orders'] = $ss1;
return $this->response->setJSON($data); /** Change $data to $json_data for DataTable */
}
public function orderstoedit(){
 $id = $this->request->getPost('id');
 
 $check = new checkoutModal();
 $data = $check->find($id);
 $data=$check->where('order_id',$id)->find();
// 	  $data['id']=$id;
 echo json_encode($data);
}
public function orderupdate(){
   $status = $this->request->getPost('order_sta');
   $orderid = $this->request->getPost('idc');
   $db  = \Config\Database::connect();
   $update = $db->query("update checkout set order_status='$status' WHERE order_id='$orderid'" );
   return view('admin/orders');
}
public function vieworder(){
  $id = $this->request->getPost('id');
	   //  $id = '202306260749';
  $cart = new cartModel();
  $data12= $cart->where('order_id',$id)->first();
  $db  = \Config\Database::connect();
  $id=$data12['order_id'];
  $ProductCode=$data12['ProductCode'];
  $user_id=$data12['user_id'];
  $builder = $db->table('register_user');
  $builder->where('user_id',$user_id);
  $result12 = $builder->get();
                                        // var_dump($result12->getResult());exit();
  foreach ($result12->getResult() as $key11) {
   $username=$key11->firstname.$key11->lastname ;
   $address=$key11->address;
   $email=$key11->email;
   $contact=$key11->contact;
}
$size=$data12['size'];
$material=$data12['material'];
$builder12 = $db->table('material_master');
$builder12->where('id ',$material);
$result12 = $builder12->get();
foreach ($result12->getResult() as $key22) {
   $material=$key22->material;
}
$builder123 = $db->table('size_master');
$builder123->where('id ',$size);
$result123 = $builder123->get();
foreach ($result123->getResult() as $key113) {
   $size=$key113->size;
   
   $bust=$data12['bust'];
   $waist=$data12['waist'];
   $hip=$data12['hip'];
   $qty=$data12['quantity'];
   $amt=$data12['amount'];
   $folder=$data12['folder'];
   
   $tablename=$data12['table_name'];
   $builder = $db->table($tablename);
   $builder->where('ProductCode',$ProductCode);
   $result = $builder->get();
   foreach ($result->getResult() as $key11) {
       $Productname=$key11->Product_name;
       $productimage=$key11->image1;
       $ss[] = array(
         
         'order_id'=>$id,
         'Product_name'=>$Productname,
         'ProductCode'=>$ProductCode,
         'size'=>$size,
         'bust'=>$bust,
         'waist'=>$waist,
         'hip'=>$hip,
         'qty'=>$qty,
         'amt'=>$amt,
         'productimage'=>$productimage,
         'folder'=>$folder,
         'material'=>$material,
         'name'=>$username,
         'address'=>$address,
         'email'=>$email,
         'contact'=>$contact
     );
       
       echo json_encode($ss);
   }}
}
public function users_list()
{
    $userModel = new \App\Models\UserModel ();

    return view('admin/alluser_details');

}
public function getAllUsers()
{
    $userModel = new \App\Models\UserModel ();

    $result = $userModel->findAll();
    $i = 1;
    foreach ($result as $key1) {

        $username = $key1['firstname'] . " " . $key1['lastname'];
        $email = $key1['email'];
        $password = $key1['pass'];
        $contact = $key1['contact'];
        $address = $key1['address'];
        $ids = $i;
        $id = $key1['user_id'];

        $ss1[] = array(
            'ids' => $ids,
            'id' => $id,
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'contact' => $contact,
            'address' => $address,
        );
        $i++;
    }

    $data['table'] = $ss1;
    return $this->response->setJSON($data);

}
public function view_user($user_id)
{
    $userModel = new \App\Models\UserModel ();

    $user['FormData'] = $userModel->find($user_id);

    return view('admin/view_userDetails',$user);

}
public function payment_view()
{

    return view('admin/viewPayment');

}
public function getAllPayment()
{
    $checkoutModel = new checkoutModal();

    $result = $checkoutModel->getUserOrderDetails();
    $i = 1;
    foreach ($result as $key1) {

        $username = $key1['firstname'] . " " . $key1['lastname'];
        $email = $key1['email'];
        $TransactionId = $key1['transaction_id'];
        $total_amount = $key1['total_amount'];
        $address = $key1['address'];
        $ids = $i;
        $id = $key1['user_id'];
        $transaction_date = $key1['transaction_date'];

        $ss1[] = array(
            'ids' => $ids,
            'id' => $id,
            'username' => $username,
            'email' => $email,
            'TransactionId' => $TransactionId,
            'total_amount' => $total_amount,
            'address' => $address,
            'transaction_date' => $transaction_date,
        );
        $i++;
    }

    $data['payment'] = $ss1;
    return $this->response->setJSON($data);

}
public function login()
{
        // return redirect()->to( base_url('/admin') );
  return view('admin/login');
}
public function Banner()
{
        // return redirect()->to( base_url('/admin') );
  return view('admin/Banner');
}
public function shipping_view()
{
 
    return view('admin/add_shippingPolicy');
}
public function mega_boxview()
{

             //$model = new BoxModel;
 
    return view('admin/add_megaBox');
}
public function mini_bannerview()
{

    
 
    return view('admin/add_miniBanner');
}
public function addShippingPolicy()
{
 $db = \Config\Database::connect();
 
 helper(['form', 'url']);
 $model = new ShippingPolicyModel();
 $description = $_POST['content'];

 
 $data = [
    'policy'   =>$description
    
];


$db  = \Config\Database::connect();
$update = $db->query("update shipping_master set policy='$description' " );

if($update){
 echo json_encode(array(
    "success" => true,
    "msg" => "Data Updated, Successfully",
));
} else {
    echo json_encode(array(
        "success" => false,
        "msg" => "not added",
    ));

    

}

}
public function loginsubmit()
{
  
        //validation on request
    $validation = $this->validate([
            //validation rules and messages
        'username' => [
            'label'  => 'User Name',
                //rules can be added alpha_numeric
            'rules'  => 'required',
            'errors' => [
                'required' => 'Please enter {field} to proceed',
            ],
        ],
        'password' => [
            'label'  => 'Password',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Please enter {field} to proceed',
            ],
        ],
    ]);

        //check validation and send errors
    if (!$validation) {
            //send errors
        $data['error'] = $this->validator->getErrors();
        return view('admin/login', $data);
    }
    
        // get formdata
    $username = trim($this->request->getVar('username'));
    $password = $this->request->getVar('password');
    $admin = new AdminModel();

    if($row = $admin->where('username',$username)->first()) {
        if ($row['password'] === $password) {
            session()->set('adminloggedid', $row['id']);
            session()->set('adminloggedname', $row['username']);
            session()->set('adminloggedid', $row);
                // return view('admin/dashboard1');
                // return redirect()->route('/admin/dashboard');
            return redirect()->to(base_url(route_to('admin.dashboard')) );
            
        }else {
            $data['error']['username'] = 'Invalid Password';
            return view('admin/login', $data);
        }
    }else {
        $data['error']['username'] = 'Invalid Username';
        return view('admin/login', $data);
    }
    
    
}
public function dashboard()
{
  $data['title'] = 'Dashboard';
  return view('admin/dashboard1',$data);
}

public function addBox()
{
  $data['title'] = 'Include Box';
  return view('admin/addBox',$data);
}

function generate_string()
{
  $input = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $input_length = strlen($input);
  $random_string = '';
  for ($i = 0; $i < 5; $i++) {
     $random_character = $input[mt_rand(0, $input_length - 1)];
     $random_string .= $random_character;
 }
 return $random_string;
}


public function addbanner(){
  $db = \Config\Database::connect();
	  //include helper form
  helper(['form', 'url']);
  $model = new BannerModel();
    //  $banner_type = $_POST['bannertype'];
  
  $file_name = $this->request->getFile('banner');
  $fileName = $_FILES["banner"]["tmp_name"];

  $imageType = $_FILES['banner']['type'];
  $image = "Banner";
  $folder = 'assets/images/uploads/banner/';
  $cover1 = $this->resizeImage($file_name, $fileName, $imageType, $image, $folder);
        //  $update = $db->query("update Banner_Master set status='0' where banner_type= '$banner_type'");
        //   var_dump($file_name);exit();
  $data = [
                // 'banner_type'   =>$banner_type,
   'tag_line'    => $_POST['tag'],
   'subtag_line' => $_POST['subtag'],
   'banner_img' =>$cover1,
   'status'=>1
];


$result=$model->save($data);
if($result){
 echo json_encode(array(
    "success" => true,
    "msg" => "Data Added, Successfully",
));
} else {
    echo json_encode(array(
        "success" => false,
        "msg" => "not added",
    ));
    
        	 //return redirect()->to('/admin/banner');
    
}
}
public function getAllBanner(){
   $banner = new BannerModel();
   $banner=$banner->findAll();
   
   $i = 1;
   foreach ($banner as $key) {
    $id=$key['banner_id'];
            // var_dump($id);exit();
    $tagline= $key['tag_line'];
    $subtagline=$key['subtag_line'] ;
    $banner=$key['banner_img'];
    $folder = 'https://digileadz.com/sirsonite/Beseen/assets/images/uploads/banner/';
    $bannerdata[]=array(
        'tag_line'=>$tagline,
        'subtag_line'=>$subtagline,
        'banner'=>$folder.$banner,
        'id'=>$id,
        'ids'=>$i
    );
    $i++;
}
$data['banner'] = $bannerdata;
            // var_dump($banner);exit();
return $this->response->setJSON($data);

}
public function editbanner(){
        // echo '1';
    $db  = \Config\Database::connect();
    $id = $this->request->getVar('id');
        // var_dump($id);exit();
    
    $builder = $db->table('Banner_Master');
    $builder->where('banner_id',$id);
    $result = $builder->get();
    foreach ($result->getResult() as $key11) {
        $tag_line = $key11->tag_line;
        $image=$key11->banner_img;
        $sub_tagline=$key11->subtag_line;

        $ss = array(
            'tag_line' => $tag_line ,
            'id'=>$id,
            'image' => $image,
            'sub_tagline' => $sub_tagline,
            
        );
        echo json_encode($ss);
    }
    
}
public function Updatebanner()
{
    helper(['form', 'url']);
    $model = new BannerModel();
    $db  = \Config\Database::connect();
        //    var_dump($banner_type);exit();
    $banner_id = $_POST['banner_id'];
        // var_dump($banner_id);exit();
    $file_name = $this->request->getFile('banner1');
    if(!empty($_FILES['banner1']['name'])){
        // var_dump($file_name);
        $fileName = $_FILES["banner1"]["tmp_name"];

        $imageType = $_FILES['banner1']['type'];

        $image = "Banner";
        $folder = 'assets/images/uploads/banner/';
        $cover1 = $this->resizeImage($file_name, $fileName, $imageType, $image, $folder);
    }
    else{
       $builder = $db->table('Banner_Master');
       $builder->where('banner_id',$banner_id);
       $result = $builder->get();
       foreach ($result->getResult() as $key11) {
           $cover1 = $key11->banner_img;
       }
   }
        // $update = $db->query("update Banner_Master set status='0' where banner_type= '$banner_type'");
        //   var_dump($file_name);exit();
   $data = [

    'tag_line'    => $_POST['tagline'],
    'subtag_line' => $_POST['subtagline'],
    'banner_img' => $cover1,

];
        //    echo json_encode($data);

$builder = $db->table('Banner_Master');
$builder->where('banner_id', $banner_id);
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
public function Bannerdelete(){
  $db  = \Config\Database::connect();
  $id = $this->request->getVar('id');
  $builder = $db->table('Banner_Master');
  $builder->where('banner_id',$id);
  if ($builder->delete()) {
    echo json_encode(array(
        "success" => true,
        "msg" => "Banner Deleted Successfully",
    ));
} else {
    echo json_encode(array(
        "success" => false,
        "msg" => "Not Deleted",
    ));

            //return redirect()->to('/admin/banner');

}

}
public function resizeImage($file_name, $fileName, $imageType, $image, $folder)
{

    if ($file_name->isValid() || !$file_name->hasMoved()) {

        list($width, $height) = getimagesize($file_name);
        if ($image == 'Banner') {
            $newwidth = 1920;
            $newheight = 753;
        }
        if ($image == 'MiniBanner') {
            $newwidth = 1170;
            $newheight = 250;
        }
        if ($image == 'MegaBox') {
            $newwidth = 570;
            $newheight = 300;
        }
        if ($image == 'Boxes') {
         $newwidth = 370;
         $newheight = 370;
     }
            // var_dump($newwidth);var_dump($newheight);exit();
     if ($width >= $newwidth && $height >= $newheight) {


        $targetLayer = imagecreatetruecolor($newwidth, $newheight);
        imagealphablending($targetLayer, false);
        imagesavealpha($targetLayer, true);
        if ($imageType == 'image/jpeg') {
            $source = imagecreatefromjpeg($fileName);
            $newsize = imagecopyresized($targetLayer, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
            $newfile_name=$file_name->getRandomName();
            
            $img = imagejpeg($targetLayer, $folder . $newfile_name);
        }
        if ($imageType == 'image/png') {
            $source = imagecreatefrompng($fileName);

            $newsize = imagecopyresized($targetLayer, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
            $newfile_name=$file_name->getRandomName();
            
            $img = imagejpeg($targetLayer, $folder . $newfile_name);
        }
        if ($imageType == 'image/gif') {
            $source = imagecreatefromgif($fileName);
            $newsize = imagecopyresized($targetLayer, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
            $newfile_name=$file_name->getRandomName();
            
            $img = imagejpeg($targetLayer, $folder . $newfile_name);
        }
    }else {
        echo json_encode(array(
            "success" => false,
            "msg" => "Image size is small",
        ));
        die();
        
             //return redirect()->to('/admin/banner');
        
    }
}
        //filename canot be empty

return $newfile_name;
}
public function aaa()
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
        $newheight = 370;
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
public function getAllboxes(){
  $model = new BoxModel();
  $model=$model->findAll();
  
  $i = 1;
  foreach ($model as $key) {
    $id=$key['id'];
            // var_dump($id);exit();
    $tagline= $key['title'];
    $subtagline=$key['sub_title'] ;
    $banner=$key['surl'];
    $box_type=$key['box_type'];
    $status=$key['status'];           
    if($status==1){
        $status1='Active Image';
    }
    else{
       $status1='Inactive Image';
   }
   $folder = 'https://digileadz.com/sirsonite/Beseen/public/product/';
   $bannerdata[]=array(
    'tag_line'=>$tagline,
    'subtag_line'=>$subtagline,
    'banner'=>$folder.$banner,
    'id'=>$id,
    'ids'=>$i,
    'boxType'=>$box_type,
    'status'=>$status1
);
   $i++;
}
$data['boxes'] = $bannerdata;
            // var_dump($banner);exit();
return $this->response->setJSON($data);

}
public function editboxes(){
   $db  = \Config\Database::connect();
   $id = $this->request->getVar('id');
        // var_dump($id);exit();
   
   $builder = $db->table('box_master');
   $builder->where('id',$id);
   $result = $builder->get();
   foreach ($result->getResult() as $key11) {
    $tag_line = $key11->title;
    $image=$key11->surl;
    $sub_tagline=$key11->sub_title;

    $ss = array(
        'tag_line' => $tag_line ,
        'id'=>$id,
        'image' => $image,
        'sub_tagline' => $sub_tagline,
        
    );
    echo json_encode($ss);
}

}
public function Updateboxes(){
    helper(['form', 'url']);
    $model = new BoxModel();
    $db  = \Config\Database::connect();
        //    var_dump($banner_type);exit();
    $banner_id = $_POST['banner_id'];
    $file_name = $this->request->getFile('banner1');
    if(!empty($_FILES['banner1']['name'])){
        // var_dump($file_name);
        $fileName = $_FILES["banner1"]["tmp_name"];

        $imageType = $_FILES['banner1']['type'];

        $image = "Boxes";
        $folder = 'public/product/';
        $cover1 = $this->resizeImage($file_name, $fileName, $imageType, $image, $folder);
    }
    else{
       $builder = $db->table('box_master');
       $builder->where('id',$banner_id);
       $result = $builder->get();
       foreach ($result->getResult() as $key11) {
           $cover1 = $key11->surl;
       }
   }
        // $update = $db->query("update Banner_Master set status='0' where banner_type= '$banner_type'");
        //   var_dump($file_name);exit();
   $data = [

    'title'    => $_POST['tagline'],
    'sub_title' => $_POST['subtagline'],
    'surl' => $cover1,

];
        //    echo json_encode($data);

$builder = $db->table('box_master');
$builder->where('id', $banner_id);
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
}


}
public function boxesdelete(){
    $db  = \Config\Database::connect();
    $id = $this->request->getVar('id');
    
    $builder = $db->table('box_master');
    $builder->where('id',$id);
    if ($builder->delete()) {
        echo json_encode(array(
            "success" => true,
            "msg" => "Banner Deleted Successfully",
        ));
    } else {
        echo json_encode(array(
            "success" => false,
            "msg" => "Not Deleted",
        ));

            //return redirect()->to('/admin/banner');

    }
    
}
public function boxesactive(){
   $db  = \Config\Database::connect();
   $id = $this->request->getVar('id');
   $boxtype = $this->request->getVar('boxtype');
   $data = [
    'status'    => '1',
];
$update = $db->query("update box_master set status='0' where box_type= '$boxtype' and status='1'");

$builder = $db->table('box_master');
$builder->where('id',$id);
$result = $builder->update($data);
if ($result) {
    echo json_encode(array(
        "success" => true,
        "msg" => "Activated Successfully",
    ));
} else {
    echo json_encode(array(
        "success" => false,
        "msg" => "not added",
    ));

            //return redirect()->to('/admin/banner');

}

}

public function add_mega_img()
{
    $image11='null';
    $image22='null';
    
    
    helper(['form', 'url']);
    $megamodel = new MegaBoxModel();
    $MegaBoxType = $_POST['megaboxtype'];
    
    
    
    $folder ='assets/images/uploads/mega_box/';
    
    $image1 = $this->request->getFile('mega_box');
    $image1temp = $_FILES["mega_box"]["tmp_name"];
    $image1Type= $_FILES['mega_box']['type'];

        //   $image2 = $this->request->getFile('mega_box2');
        //   $image2temp = $_FILES["mega_box2"]["tmp_name"];
        //   $image2Type= $_FILES['mega_box2']['type'];
    $image= 'MegaBox';
    
    if(!empty($_FILES['mega_box']['name'])){
      if ($image1->isValid() || !$image1->hasMoved()) {
        $image11 = $this->resizeImage($image1, $image1temp,$image1Type,$image, $folder);
    } 
}
    // if(!empty($_FILES['mega_box2']['name'])){
    //     if ($image2->isValid() || !$image2->hasMoved()) {

    //         $image22 =  $this->resizeImage($image2, $image2temp,$image2Type,$image,$folder);
    //     } 
    // }





$data = [
    'mega_box_type'   =>$MegaBoxType,
    'tag_line'    => $_POST['tag'],
    'subtag_line' => $_POST['subtag'],
    'image1' =>$image11,
           // 'image2' =>$image22,
    'status'=>1
];
        //var_dump($data);exit();

$result=$megamodel->save($data);
            //$mensProduct_id = $mens->getInsertID();

if($result){
 echo json_encode(array(
    "success" => true,
    "msg" => "Data Added, Successfully",
));
} else {
    echo json_encode(array(
        "success" => false,
        "msg" => "not Added",
    ));

                         //return redirect()->to('/admin/banner');

}



}
public function getAllmegabox(){
    $model = new MegaBoxModel();
    $model=$model->findAll();
    
    $i = 1;
    foreach ($model as $key) {
        $id=$key['id'];
            // var_dump($id);exit();
        $tagline= $key['tag_line'];
        $subtagline=$key['subtag_line'] ;
        $banner=$key['image1'];
        $box_type=$key['mega_box_type'];
        $folder = 'https://digileadz.com/sirsonite/Beseen/assets/images/uploads/mega_box/';
        $bannerdata[]=array(
            'tag_line'=>$tagline,
            'subtag_line'=>$subtagline,
            'banner'=>$folder.$banner,
            'id'=>$id,
            'ids'=>$i,
            'boxType'=>$box_type
        );
        $i++;
    }
    $data['minibanner'] = $bannerdata;
            // var_dump($banner);exit();
    return $this->response->setJSON($data);
    
}
public function editmegabox(){
  $db  = \Config\Database::connect();
  $id = $this->request->getVar('id');
        // var_dump($id);exit();
  
  $builder = $db->table('mega_box_master');
  $builder->where('id',$id);
  $result = $builder->get();
  foreach ($result->getResult() as $key11) {
    $tag_line = $key11->tag_line;
    $image=$key11->image1;
    $sub_tagline=$key11->subtag_line;

    $ss = array(
        'tag_line' => $tag_line ,
        'id'=>$id,
        'image' => $image,
        'sub_tagline' => $sub_tagline,
        
    );
    echo json_encode($ss);
}

}
public function Updatemegabox(){
    helper(['form', 'url']);
    $model = new MegaBoxModel();
    $db  = \Config\Database::connect();
        //    var_dump($banner_type);exit();
    $banner_id = $_POST['banner_id'];
    $file_name = $this->request->getFile('banner1');
    if(!empty($_FILES['banner1']['name'])){
        // var_dump($file_name);
        $fileName = $_FILES["banner1"]["tmp_name"];

        $imageType = $_FILES['banner1']['type'];

        $image = "MegaBox";
        $folder = 'assets/images/uploads/mega_box/';
        $cover1 = $this->resizeImage($file_name, $fileName, $imageType, $image, $folder);
    }
    else{
       $builder = $db->table('mega_box_master');
       $builder->where('id',$banner_id);
       $result = $builder->get();
       foreach ($result->getResult() as $key11) {
           $cover1 = $key11->image1;
       }
   }
        // $update = $db->query("update Banner_Master set status='0' where banner_type= '$banner_type'");
        //   var_dump($file_name);exit();
   $data = [

    'tag_line'    => $_POST['tagline'],
    'subtag_line' => $_POST['subtagline'],
    'image1' => $cover1,

];
        //    echo json_encode($data);

$builder = $db->table('mega_box_master');
$builder->where('id', $banner_id);
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
}

}
public function megaboxdelete(){
  $db  = \Config\Database::connect();
  $id = $this->request->getVar('id');
  
  $builder = $db->table('mega_box_master');
  $builder->where('id',$id);
  if ($builder->delete()) {
    echo json_encode(array(
        "success" => true,
        "msg" => "Banner Deleted Successfully",
    ));
} else {
    echo json_encode(array(
        "success" => false,
        "msg" => "Not Deleted",
    ));

            //return redirect()->to('/admin/banner');

}

}
public function megaboxactive(){
   $db  = \Config\Database::connect();
   $id = $this->request->getVar('id');
   $boxtype = $this->request->getVar('boxtype');
   $data = [
    'status'    => '1',
];
$update = $db->query("update mega_box_master set status='0' where mega_box_type= '$boxtype' and status='1'");

$builder = $db->table('mega_box_master');
$builder->where('id',$id);
$result = $builder->update($data);
if ($result) {
    echo json_encode(array(
        "success" => true,
        "msg" => "Activated Successfully",
    ));
} else {
    echo json_encode(array(
        "success" => false,
        "msg" => "not added",
    ));

            //return redirect()->to('/admin/banner');

}

}

public function add_miniBanner_img()
{
 helper(['form', 'url']);
 $model = new MiniBannerModel();
 
 
 
 
 $folder ='assets/images/uploads/mini_banner/';
 
 $image1 = $this->request->getFile('minibanner');
 $image1temp = $_FILES["minibanner"]["tmp_name"];
 $image1Type= $_FILES['minibanner']['type'];

 $image='MiniBanner';

 
 if ($image1->isValid() || !$image1->hasMoved()) {
    $image11 = $this->resizeImage($image1, $image1temp,$image1Type, $image ,$folder);
} 

$data = [
    
    'tag_line'    => $_POST['tag'],
    'subtag_line' => $_POST['subtag'],
    'mini_banner_img' =>$image11,
    
    'status'=>1
];
        //var_dump($data);exit();

$result=$model->save($data);
            //$mensProduct_id = $mens->getInsertID();

if($result){
 echo json_encode(array(
    "success" => true,
    "msg" => "Data Added, Successfully",
));
} else {
    echo json_encode(array(
        "success" => false,
        "msg" => "not Added",
    ));

                         //return redirect()->to('/admin/banner');

}



}
public function getAllminibanner(){
 $model = new MiniBannerModel();
 $model=$model->findAll();
 
 $i = 1;
 foreach ($model as $key) {
    $id=$key['id'];
            // var_dump($id);exit();
    $tagline= $key['tag_line'];
    $subtagline=$key['subtag_line'] ;
    $banner=$key['mini_banner_img'];
    $folder = 'https://digileadz.com/sirsonite/Beseen/assets/images/uploads/mini_banner/';
    $bannerdata[]=array(
        'tag_line'=>$tagline,
        'subtag_line'=>$subtagline,
        'banner'=>$folder.$banner,
        'id'=>$id,
        'ids'=>$i
    );
    $i++;
}
$data['minibanner'] = $bannerdata;
            // var_dump($banner);exit();
return $this->response->setJSON($data);
}     
public function editminibanner(){
   $db  = \Config\Database::connect();
   $id = $this->request->getVar('id');
        // var_dump($id);exit();
   
   $builder = $db->table('mini_banner_master');
   $builder->where('id',$id);
   $result = $builder->get();
   foreach ($result->getResult() as $key11) {
    $tag_line = $key11->tag_line;
    $image=$key11->mini_banner_img;
    $sub_tagline=$key11->subtag_line;

    $ss = array(
        'tag_line' => $tag_line ,
        'id'=>$id,
        'image' => $image,
        'sub_tagline' => $sub_tagline,
        
    );
    echo json_encode($ss);
}
} 
public function Updateminibanner(){
 helper(['form', 'url']);
 $model = new MiniBannerModel();
 $db  = \Config\Database::connect();
        //    var_dump($banner_type);exit();
 $banner_id = $_POST['banner_id'];
 $file_name = $this->request->getFile('banner1');
 if(!empty($_FILES['banner1']['name'])){
        // var_dump($file_name);
    $fileName = $_FILES["banner1"]["tmp_name"];

    $imageType = $_FILES['banner1']['type'];

    $image = "MiniBanner";
    $folder = 'assets/images/uploads/mini_banner/';
    $cover1 = $this->resizeImage($file_name, $fileName, $imageType, $image, $folder);
}
else{
   $builder = $db->table('mini_banner_master');
   $builder->where('id',$banner_id);
   $result = $builder->get();
   foreach ($result->getResult() as $key11) {
       $cover1 = $key11->mini_banner_img;
   }
}
        // $update = $db->query("update Banner_Master set status='0' where banner_type= '$banner_type'");
        //   var_dump($file_name);exit();
$data = [

    'tag_line'    => $_POST['tagline'],
    'subtag_line' => $_POST['subtagline'],
    'mini_banner_img' => $cover1,

];
        //    echo json_encode($data);

$builder = $db->table('mini_banner_master');
$builder->where('id', $banner_id);
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
        // echo '1'
}
public function miniBannerdelete(){
  $db  = \Config\Database::connect();
  $id = $this->request->getVar('id');
  
  $builder = $db->table('mini_banner_master');
  $builder->where('id',$id);
  if ($builder->delete()) {
    echo json_encode(array(
        "success" => true,
        "msg" => "Banner Deleted Successfully",
    ));
} else {
    echo json_encode(array(
        "success" => false,
        "msg" => "Not Deleted",
    ));

            //return redirect()->to('/admin/banner');

}
}
public function miniBanneractive(){
  $db  = \Config\Database::connect();
  $data = [
    'status'    => '1',
];
$update = $db->query("update mini_banner_master set status='0' where status= '1'");
$id = $this->request->getVar('id');
$builder = $db->table('mini_banner_master');
$builder->where('id',$id);
$result = $builder->update($data);
if ($result) {
    echo json_encode(array(
        "success" => true,
        "msg" => "Activated Successfully",
    ));
} else {
    echo json_encode(array(
        "success" => false,
        "msg" => "not added",
    ));

            //return redirect()->to('/admin/banner');

}
}
public function logout(){

    session()->remove('adminloggedid');
    session()->remove('adminloggedname');
    session()->remove('adminloggedid');

    return view('admin/login');
}


public function resizeProductImage($file_name, $fileName, $imageType, $folder)
{
 
   if (!$fileName==""){

    list($width, $height) = getimagesize($file_name);

    $newwidth = 470;
    $newheight = 570;
    if ($width >= $newwidth && $height >= $newheight) {


        $targetLayer = imagecreatetruecolor($newwidth, $newheight);
        imagealphablending($targetLayer, false);
        imagesavealpha($targetLayer, true);
        if ($imageType == 'image/jpeg') {
            $source = imagecreatefromjpeg($fileName);
            $newsize = imagecopyresized($targetLayer, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
            $newfile_name=$file_name->getRandomName();
            
            $img = imagejpeg($targetLayer, $folder . $newfile_name);

        }
        if ($imageType == 'image/png') {
            $source = imagecreatefrompng($fileName);

            $newsize = imagecopyresized($targetLayer, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
            $newfile_name=$file_name->getRandomName();
            

            $img = imagepng($targetLayer, $folder . $newfile_name);
        }
        if ($imageType == 'image/gif') {
            $source = imagecreatefromgif($fileName);
            $newsize = imagecopyresized($targetLayer, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
            $newfile_name=$file_name->getRandomName();
            
            
            $img = imagegif($targetLayer, $folder . $newfile_name);
        }
    }else {
        echo json_encode(array(
            "success" => false,
            "msg" => "Image size is small",
        ));
        die();
        
             //return redirect()->to('/admin/banner');
        
    }


    
}


return $newfile_name;



}

}