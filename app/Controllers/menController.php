<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\Admincontroller;
use App\Models\MensModel;
use App\Models\ProductModel;
use App\Models\FitModel;

class menController extends BaseController
{
    public function AddMensProduct()
    {
        return view('admin/mens');
    }
    public function MensProduct()
    {
        $db  = \Config\Database::connect();

        helper(['form', 'url']);
        $AdminController = new Admincontroller();
        $mens = new MensModel();
        $productModel = new ProductModel();
        $mensCat = $_POST['men_cat'];
        // $Brand = $_POST['Brand'];
        $ProductName = $_POST['ProductName'];
        // $ProductName = $_POST['ProductName'];
        $ProductPrice = $_POST['ProductPrice'];
        $ProductDesc = $_POST['ProductDesc'];
        if (isset($_POST['fabric'])) {
            $fabric = $_POST['fabric'];
        }
        if (isset($_POST['count'])) {
            $count = $_POST['count'];
        }
        if (isset($_POST['weave'])) {
            $weave = $_POST['weave'];
        }
        if (isset($_POST['care'])) {
            $care = $_POST['care'];
        }
        if (isset($_POST['fits'])) {
            $fit = $_POST['fits'];
        }
        if (isset($_POST['sizes'])) {
            $size = $_POST['sizes'];
            foreach ($size as $val) {
                $mensizes[] = $val;
            }

            $size_ids = implode(',', $mensizes);
        }


        // $fit = $_POST['fits'];



        foreach ($fit as $mat) {
            $fits[] = $mat;
        }

        $fit_ids = implode(',', $fits);
        // $result = $db->query("select men_category from mens_master where Id= '$mensCat'");

        //      $res=$result->getRowArray();

        //      $cat= $res['men_category'];
        //       //var_dump($cat);exit();
        //      if($cat=='Suit'){
        //          $data1['product'] = 'mens-suit';
        //      }
        //       if($cat=='IKAT Jacket'){
        //          $data1['product'] = 'mens-IKAT Jacket';
        //      }
        //       if($cat=='shirt'){
        //          $data1['product'] = 'mens-shirt';
        //      }
        //       if($cat=='Trouser'){
        //          $data1['product'] = 'mens-Trouser';
        //      }


        $folder = 'assets/images/uploads/mens/';

        $image1 = $this->request->getFile('ProductImage1');
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
                $image11 = $AdminController->resizeProductImage($image1, $image1temp, $image1Type, $folder);
            }
        }
        if (!empty($_FILES['ProductImage2']['name'])) {
            if ($image2->isValid() || !$image2->hasMoved()) {

                $image22 =  $AdminController->resizeProductImage($image2, $image2temp, $image2Type, $folder);
            }
        }
        if (!empty($_FILES['ProductImage3']['name'])) {
            if ($image3->isValid() || !$image3->hasMoved()) {
                $image33 = $AdminController->resizeProductImage($image3, $image3temp, $image3Type, $folder);
            }
        }
        if (!empty($_FILES['ProductImage4']['name'])) {
            if ($image4->isValid() || !$image4->hasMoved()) {
                $image44 = $AdminController->resizeProductImage($image4, $image4temp, $image4Type, $folder);
            }
        }
        if (!empty($_FILES['ProductImage5']['name'])) {
            if ($image5->isValid() || !$image5->hasMoved()) {
                $image55 = $AdminController->resizeProductImage($image5, $image5temp, $image5Type, $folder);
            }
        }
        if (!empty($_FILES['ProductImage6']['name'])) {
            if ($image6->isValid() || !$image6->hasMoved()) {
                $image66 = $AdminController->resizeProductImage($image6, $image6temp, $image6Type, $folder);
            }
        }
        $getProductCode = $AdminController->generate_string();
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
        if (isset($size_ids)) {
            $data['size'] = $size_ids;
        }
        if (isset($fabric)) {
            $data['fabric'] = $fabric;
        }
        if (isset($weave)) {
            $data['weave'] = $weave;
        }
        if (isset($care)) {
            $data['care'] = $care;
        }
        if (isset($fit_ids)) {
            $data['fit'] = $fit_ids;
        }
        $data['Men_id'] = $mensCat;
        // $data['Brand'] = $Brand;
        $data['Product_name'] = $ProductName;
        $data['Product_price'] = $ProductPrice;
        // $data['fabric'] = $fabric;
        // $data['count'] = $count;
        // $data['weave'] = $weave;
        // $data['care'] = $care;

        $data['ProductDesc'] = $ProductDesc;

        $data['fit'] = $fit_ids;
        $data['ProductCode'] = 'M-' . $getProductCode;
        $result = $mens->save($data);

        $data1['product_name'] = $ProductName;
        $data1['product_type'] = 'Mens';

        $data1['ProductCode'] = 'M-' . $getProductCode;

        $query = $productModel->save($data1);

        if ($result) {
            echo json_encode(array(
                "success" => true,
                "msg" => "Product Added, Successfully",
            ));
        } else {
            echo json_encode(array(
                "success" => false,
                "msg" => "not Added",
            ));

            //return redirect()->to('/admin/banner');

        }
    }
    public function men($cate)
    {
        // return view('NewMenCollection');

        $db = db_connect();
        
   
        $query = $db->query("SELECT * FROM `mens_master` WHERE `men_category`='$cate'");
         //var_dump($query->getRowArray());exit();
        $query = $query->getRowArray();
        //
        $Id = $query['Id'];
        $result = $db->query("SELECT * FROM `Mens` WHERE `Men_id`= $Id ");
        if (!empty($result->getResult())) {
            foreach ($result->getResult() as $key) {
                $fold = 'mens';
                $table = 'Mens';
                $id = $key->Id;
                $ss[] = array(
                    'id' => $key->Id,
                    'Product_code' => $key->ProductCode,
                    'Product_name' => $key->Product_name,
                    'Product_price' => $key->Product_price,
                    'image1' => $key->image1,
                    'image2' => $key->image2
                );
            }
            $data['data'] = $ss;
            // var_dump($ss);exit();

            return view('NewMenCollection', $data);
        } else {
            return redirect()->to('/');
        }
    }
    public function productdetail($pc)
    {
        if ((session()->has('logged_info'))) {
            $data = session()->get('logged_info');
            $userid = $data['user_id'];
        }
        if ((session()->has('logged1_info'))) {
            $data = session()->get('logged1_info');
            $userid = $data['user_id'];
        }
        $db = db_connect();
        $result = $db->query("SELECT * FROM `Mens` WHERE `ProductCode`= '$pc' ");
        // var_dump($result->getResult());exit();
        foreach ($result->getResult() as $key) {
           
            $ss[] = array(
                'id' => $key->Id,
                'userid' => $userid,
                'Product_code' => $key->ProductCode,
                'Product_name' => $key->Product_name,
                'Product_price' => $key->Product_price,
                'ProductDesc' => $key->ProductDesc,
                'image1' => $key->image1,
                'image2' => $key->image2,
                'image3' => $key->image3,
                'image4' => $key->image4,
                'image5' => $key->image5,
                'image6' => $key->image6,
                'size' => $key->size,
                'material' => $key->material,
                'fit'=>$key->fit,
                'folder'=>'mens',
                'table'=>'mens'
            );
            $menid = $key->Men_id;
        }
        $query = $db->query("SELECT * FROM review where product_code='$pc'");
        $query = $query->getResult();
        // var_dump($query);exit();
        if($query){
        $data['query'] = $query;
        }
        $data['data'] = $ss;
        if ($menid == 7) {
            return view('menShirt', $data);
        }
        if ($menid == 8) {
            return view('menTrouser', $data);
        } else {
            return view('menSingleProduct', $data);
        }
    }
    public function Addtocartshirt($pc)
    {
        if ((session()->has('logged_info'))) {
            $data = session()->get('logged_info');
            $userid = $data['user_id'];
        }
        if ((session()->has('logged1_info'))) {
            $data = session()->get('logged1_info');
            $userid = $data['user_id'];
        }
        $db = db_connect();
        $result = $db->query("SELECT * FROM `Mens` WHERE `ProductCode`= '$pc' ");
        // var_dump($result->getResult());exit();
        foreach ($result->getResult() as $key) {


            $ss[] = array(
                'id' => $key->Id,
                'userid' => $userid,
                'Product_code' => $key->ProductCode,
                'Product_name' => $key->Product_name,
                'Product_price' => $key->Product_price,
                'ProductDesc' => $key->ProductDesc,
                'image1' => $key->image1,
                'image2' => $key->image2,
                'image3' => $key->image3,
                'image4' => $key->image4,
                'image5' => $key->image5,
                'image6' => $key->image6,
                'size' => $key->size,
                'material' => $key->material
            );
            $menid = $key->Men_id;
        }
        $query = $db->query("SELECT * FROM `fit_master`");
        $query = $query->getResult();
        // var_dump($query);exit();

        $data['query'] = $query;
        $data['data'] = $ss;
        return view('customiseShirt', $data);
    }
}
