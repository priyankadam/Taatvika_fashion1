<?php

namespace App\Controllers;

use App\Models\cartModel;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
    public function MensView()
    {
        return view('MensCollection');
    }
     public function MensViewWc()
    {
        return view('wc');
    }
     public function aboutus()
    {
        return view('aboutus');
    }
    public function MensView1($ss)
    {
        // var_dump($ss);exit();
        // $data['ss']=$ss;
         $this->getjjj();
        // return view('MensCollection');
    }
    public function getjjj(){
        return view('MensCollection');
    }
    public function WomensView()
    {
        return view('WomensCollection');
    }
    public function AccessoriesView()
    {
        return view('Accessories');
    }
     public function AccessoriessView()
    {
        return view('Accessoriess');
    }
    public function Mens()
    {
        return view('MenItem');
    }
    public function Collection()
    {
        return view('collection');
    }
    public function ViewCart()
    {
        return view('viewCart');
    }
    public function wishlist()
    {
        return view('wishlist');
    }
    public function checkout()
    {
        return view('checkout');
    }
    public function login()
    {
        return view('login');
    }
    public function Register()
    {
        return view('Register');
    }
    public function singleProduct()
    {
        return view('singleproduct');
    }
    public function Product($vv){
        // $data['Id']=$ID;
        $session = \Config\Services::session();
        $session = session();
      
            $session->set('MenProductID', $vv);
          return redirect()->to('ProductSuit');
    }
     public function WomenProduct($WP){
        // $data['Id']=$ID;
        $session = \Config\Services::session();
        $session = session();
      
            $session->set('WomenProductID', $WP);
          return redirect()->to('WomenProduct');
    }
       public function CollectionProduct($CP){
        // $data['Id']=$ID;
        $session = \Config\Services::session();
        $session = session();
      
            $session->set('CollectionProductID', $CP);
          return redirect()->to('CollectionProduct');
    }
     public function AcessoriesProduct($AWP){
        // $data['Id']=$ID;
        $session = \Config\Services::session();
        $session = session();
      
            $session->set('WomenACCProductID', $AWP);
          return redirect()->to('WomenAccProduct');
    }
         public function AcessoriessProduct($AMP){
        // $data['Id']=$ID;
        $session = \Config\Services::session();
        $session = session();
      
            $session->set('MenACCProductID', $AMP);
          return redirect()->to('MenAccProduct');
    }
     public function WomenAccProductView()
    {
        return view('womenAccSingle');
    } 
    public function MenAccProductView()
    {
        return view('menAccSingle');
    } 
     public function WomenProductView()
    {
        return view('womenProduct');
    }
     public function CollectionProductView()
    {
        return view('CollectionProduct');
    }
    public function suitProduct()
    {
        return view('suitProduct');
    }
     public function customizeSize()
    {
        return view('customise');
    }
     public function customizeSizew()
    {
        return view('customiseW');
    }
     public function customizeSizec()
    {
        return view('customiseC');
    }
      public function customiseView()
    {
        return view('My-customise-single');
    }
    public function singlePruduct(){
        return view('singleproduct');
    }
    public function addtoCartnewArrive($productCode, $tableName, $folder)
    {
        $session = \Config\Services::session();
        $session = session();
      
         

        $data = [
            'prod_code' => $productCode,
            'tableName' => $tableName,
            'folder' => $folder,
        ];
           $session->set('productData', $data);
          return redirect()->to('singleProduct');
       // return view('singleproduct', $data);

    }
    public function addtocart($productID,$tableName,$fold)
    {
      
        // $user_id=$_SESSION['user_id'];
        $model = new cartModel;
        if ((session()->has('logged_info'))) {
            $data = session()->get('logged_info');
            $array = array(
                'user_id' => $data['user_id'],
                'product_id' => $productID,
                'amount' => '500',
                // 'product_master_id'=>$productID,
                'table_name'=>$tableName
            );
            $result = $model->save($array);
            return redirect()->to('/');
        } else {
        $session = \Config\Services::session();
            $session = session();
            $data = session()->get('logged1_info');
            $array = array(
                'user_id' => $data['user_id'],
                'product_id' => '001',
                'amount' => '500',
                'product_id' => $productID,
                // 'product_master_id'=>$productID,
                'table_name'=>$tableName,
                'folder'=>$fold
            );
            $result = $model->save($array);
            return redirect()->to('/');
        }
    }

    public function logout(){
        $session = session();
        $session->destroy();
            return redirect()->to(base_url("/"));
    }
    public function myaccount()
    {
        return view('MyAccount');
    }
    public function aaa()
    {
        return view('admin/addBox');
    }
    public function remove_item()
    {
       // $cart_id = '1';
        $id=$_POST['cart_id'];
        //var_dump($id);exit();

   
        $model = new cartModel;

        $result = $model->delete($id);
        if ($result) {
            echo json_encode(array(
                "success" => true,
                "msg" => "Data deleted, Successfully",
            ));
        } else {
            echo json_encode(array(
                "success" => false,
                "msg" => "not deleted",
            ));
        }
    }
     public function EditAddress(){
        $id=$_POST['userid'];
        $address=$_POST['address'];
        $db = \Config\Database::connect();
        $result = $db->query("update `register_user` set address='$address' WHERE user_id='$id'");
        // return redirect()->back();
        return redirect()->back()->with('msg', 'message');
    }
    public function addReview(){
        $pc=$_POST['PC'];
        $db = \Config\Database::connect();
        $builder = $db->table('product');
        $builder->where('ProductCode', $pc);
        $query = $builder->get();

        foreach ($query->getResult() as $row) {
            $product_type = $row->product_type;
        }
        if ($product_type == 'mens') {
            $table = 'mens';
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
        if ($product_type == 'menaccessories') {
            $table = 'men_accessories';
            $folder = 'assets/images/uploads/accessories/';
        }
        if ($product_type == 'womenaccessories') {
            $table = 'women_accessories';
            $folder = 'assets/images/uploads/accessories/';
        }
    

        $builder = $db->table($table);
        $builder->where('ProductCode', $pc);
        $result = $builder->get();
        // var_dump($result->getResult());
        foreach ($result->getResult() as $key1) {
            $ss[]=array(
                'Product_name'=>$key1->Product_name,
                'image1'=>$key1->image1,
                'folder'=>$folder,
                'ProductCode'=>$pc
            );
          
        }
        echo json_encode($ss);
    }
    public function submitreview(){
        // var_dump($_POST);exit();
        $db = \Config\Database::connect();
        $review=$_POST['review'];
        $PC=$_POST['PC'];
        $query = $db->query("insert into review(product_code,product_review) values('$PC','$review')");
        $data['success'] = 'Thanks For Your Valuable Feedback!!';
            return json_encode($data);
    }
}
