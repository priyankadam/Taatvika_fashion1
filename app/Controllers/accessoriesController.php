<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\Admincontroller;
use App\Models\AccessoriesModel;
use App\Models\ProductModel;


class accessoriesController extends BaseController
{
    public function Accessories()
    {
        $db = db_connect();
        $result = $db->query("SELECT * FROM `mens_accessories` ");
        $res = $result->getResultArray();
        $data['mens_acces'] = $res;

        $result = $db->query("SELECT * FROM `womens_accessories` ");
        $ress = $result->getResultArray();
        $data['womens_acces'] = $ress;

        return view('admin/accessories', $data);
    }
    public function add_accessories()
    {

        helper(['form', 'url']);
        $AdminController = new Admincontroller();
        $collection = new AccessoriesModel();
        $product = new ProductModel();
        // if(isset($_POST['mens_acces'])){
        //     $men_cat_id = $_POST['mens_acces'];
        // }else{
        //      $men_cat_id=0;
        // }
        //  if(isset($_POST['womens_acces'])){
        //     $women_cat_id = $_POST['womens_acces'];
        // }else{
        //     $women_cat_id=0;
        // }


        // $Brand = $_POST['Brand'];
        $ProductName = $_POST['ProductName'];
        $ProductName = $_POST['ProductName'];
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
            foreach ($fit as $mat) {
                $fits[] = $mat;
            }

            $fit_ids = implode(',', $fits);
        }

        // $count= $_POST['count'];
        // $weave= $_POST['weave'];
        // $care= $_POST['care'];
        //   $fit = $_POST['fits'];




        if (isset($_POST['sizes'])) {
            $size = $_POST['sizes'];
            foreach ($size as $val) {
                $mensizes[] = $val;
            }

            $size_ids = implode(',', $mensizes);
        }
        //   $size=$_POST['sizes'];

        //   $material=$_POST['material'];

        //   foreach($size as $val) {
        //     $mensizes[] = $val;
        // }

        // $size_ids=implode(',', $mensizes);

        // foreach($material as $mat) {
        //     $materials[] = $mat;
        // }

        // $material_ids=implode(',', $materials);
        $folder = 'assets/images/uploads/accessories/';


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


        // $data['Brand'] = $Brand;
        $data['Product_name'] = $ProductName;
        $data['Product_price'] = $ProductPrice;

        $data['ProductDesc'] = $ProductDesc;
        // $data['fabric'] = $fabric;
        //    $data['count'] = $count;
        //    $data['weave'] = $weave;
        //    $data['care'] = $care;
        //    $data['fit'] = $fit_ids;
        // $data['size'] = $size_ids;
        // $data['material'] = $material_ids;
        // $data['men_acces_id'] = $men_cat_id;
        //$data['women_acces_id'] = $women_cat_id;
        $data['ProductCode'] = 'A-' . $getProductCode;
        if (isset($_POST['mens_acces'])) {
            $data['men_acces_id'] = $_POST['mens_acces'];
            $data['ProductCode'] = 'AM-' . $getProductCode;

            $data1['ProductCode'] = 'AM-' . $getProductCode;
        }
        if (isset($_POST['womens_acces'])) {
            $data['women_acces_id'] = $_POST['womens_acces'];
            $data['ProductCode'] = 'AW-' . $getProductCode;
            $data1['ProductCode'] = 'AW-' . $getProductCode;
        }

        // $data['Brand'] = $Brand;
        $data['Product_name'] = $ProductName;
        $data['Product_price'] = $ProductPrice;

        $data['ProductDesc'] = $ProductDesc;
        // $data['size'] = $size_ids;
        // $data['material'] = $material_ids;


        $result = $collection->save($data);

        $data1['product_type'] = 'accessories';
        $data1['product_name'] = $ProductName;


        $query = $product->save($data1);



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

    public function menAcc($cate)
    {
        // return view('NewMenCollection');

        $db = db_connect();
        //var_dump($query->getRowArray());exit();

        $query = $db->query("SELECT * FROM `mens_accessories` WHERE `men_acces`='$cate'");
        //
        $query = $query->getRowArray();
        //
        $Id = $query['Id'];
        $result = $db->query("SELECT * FROM `accessories` WHERE `men_acces_id`= $Id ");
        if (!empty($result->getResult())) {
            foreach ($result->getResult() as $key) {
                $fold = 'accessories';
                $table = 'accessories';
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

            return view('NewMenAccCollection', $data);
        } else {
            return redirect()->to('/');
        }
    }
    public function womenAcc($cate)
    {
        // return view('NewMenCollection');

        $db = db_connect();


        $query = $db->query("SELECT * FROM `womens_accessories` WHERE `womens_acces`='$cate'");
        //var_dump($query->getRowArray());exit();
        $query = $query->getRowArray();
        //
        $Id = $query['Id'];
        $result = $db->query("SELECT * FROM `accessories` WHERE `women_acces_id`= $Id ");
        if (!empty($result->getResult())) {
            foreach ($result->getResult() as $key) {
                $fold = 'accessories';
                $table = 'accessories';
                $id = $key->Id;
                $ss[] = array(
                    'id' => $key->Id,
                    'Product_code' => $key->ProductCode,
                    'Product_name' => $key->Product_name,
                    'Product_price' => $key->Product_price,
                    'image1' => $key->image1,
                    'image2' => $key->image2
                );
                // $menAccid = $key->men_acces_id;
                // $womenAccid = $key->women_acces_id;
            }
            $data['data'] = $ss;
            // var_dump($ss);exit();

            return view('NewWomenAccCollection', $data);
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
        $result = $db->query("SELECT * FROM `accessories` WHERE `ProductCode`= '$pc' ");
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
                // 'material' => $key->material,
                'fit' => $key->fit,
                'folder' => 'accessories',
                'table' => 'accessories'
            );
            $menAccid = $key->men_acces_id;
            $womenAccid = $key->women_acces_id;
        }
        $query = $db->query("SELECT * FROM review where product_code='$pc'");
        $query = $query->getResult();
        // var_dump($query);exit();
        if($query){
        $data['query'] = $query;
        }
        $data['data'] = $ss;
        $data['MenACCProductID'] = $ss;
        if ($menAccid == 6) {
            return view('menAccShoes', $data);
        }
        if ($womenAccid == 7) {
            return view('womenAccShoes', $data);
        } else {
            return view('MWAccSingle', $data);
        }
    }

    // public function Addtocartshirt($pc)
    // {
    //     if ((session()->has('logged_info'))) {
    //         $data = session()->get('logged_info');
    //         $userid = $data['user_id'];
    //     }
    //     if ((session()->has('logged1_info'))) {
    //         $data = session()->get('logged1_info');
    //         $userid = $data['user_id'];
    //     }
    //     $db = db_connect();
    //     $result = $db->query("SELECT * FROM `Mens` WHERE `ProductCode`= '$pc' ");
    //     // var_dump($result->getResult());exit();
    //     foreach ($result->getResult() as $key) {


    //         $ss[] = array(
    //             'id' => $key->Id,
    //             'userid' => $userid,
    //             'Product_code' => $key->ProductCode,
    //             'Product_name' => $key->Product_name,
    //             'Product_price' => $key->Product_price,
    //             'ProductDesc' => $key->ProductDesc,
    //             'image1' => $key->image1,
    //             'image2' => $key->image2,
    //             'image3' => $key->image3,
    //             'image4' => $key->image4,
    //             'image5' => $key->image5,
    //             'image6' => $key->image6,
    //             'size' => $key->size,
    //             'material' => $key->material
    //         );
    //         $menid = $key->Men_id;
    //     }
    //     $query = $db->query("SELECT * FROM `fit_master`");
    //     $query = $query->getResult();
    //     // var_dump($query);exit();

    //     $data['query'] = $query;
    //     $data['data'] = $ss;
    //     return view('customiseShirt', $data);
    // }
}
