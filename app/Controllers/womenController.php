<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Controllers\Admincontroller;
use App\Models\WomensModel;
use App\Models\ProductModel;


class womenController extends BaseController
{
    public function AddWomensProduct()
    {
        return view('admin/women');
    }
    public function WomensProduct()
    {

        helper(['form', 'url']);
        $AdminController = new Admincontroller();
        $womens = new WomensModel();
        $product=new ProductModel();
        $womensCat = $_POST['wom_cat'];
        // $Brand = $_POST['Brand'];
        $ProductName = $_POST['ProductName'];
       // $ProductName = $_POST['ProductName'];
        $ProductPrice = $_POST['ProductPrice'];
        $ProductDesc = $_POST['ProductDesc'];
        $fabric= $_POST['fabric'];
        $count= $_POST['count'];
        $weave= $_POST['weave'];
        $care= $_POST['care'];
        if(isset($_POST['sizes'])){
        $size = $_POST['sizes'];
        foreach ($size as $val) {
            $mensizes[] = $val;
        }

        $size_ids = implode(',', $mensizes);
    }
    
        $fit = $_POST['fits'];
        foreach ($fit as $mat) {
            $fits[] = $mat;
        }

        $fit_ids = implode(',', $fits);


        $folder = 'assets/images/uploads/womens/';

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


        $getProductCode=$AdminController->generate_string();
        if(isset($image55)){
         $data['image5'] = $image55;
     }
     if(isset($image44)){
         $data['image4'] = $image44;
     }
     if(isset($image33)){
         $data['image3'] = $image33;
     }
     if(isset($image22)){
         $data['image2'] = $image22;
     }
     if(isset($image11)){
         $data['image1'] = $image11;
     }
     if(isset($image66)){
         $data['image6'] = $image66;
     }
     if(isset($size_ids)){
         $data['size'] = $size_ids;
     }
     $data['Women_id'] = $womensCat;
     // $data['Brand'] = $Brand;
     $data['Product_name'] = $ProductName;
     $data['Product_price'] = $ProductPrice;

     $data['ProductDesc'] = $ProductDesc;
     $data['fabric'] = $fabric;
     $data['count'] = $count;
     $data['weave'] = $weave;
     $data['care'] = $care;
     $data['fit'] = $fit_ids;
     // $data['material'] = $material_ids;
     $data['ProductCode'] = 'W-'.$getProductCode;
     $result = $womens->save($data);
        
     $data1['product_name'] = $ProductName;
     $data1['product_type'] = 'womens';

     $data1['ProductCode'] = 'W-'.$getProductCode;

     $query=$product->save($data1);



        //$mensProduct_id = $mens->getInsertID();

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

}