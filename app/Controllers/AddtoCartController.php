<?php

namespace App\Controllers;

use App\Models\cartModel;
use App\Libraries\instamojo;
use App\Models\checkoutModal;

class AddtoCartController extends BaseController
{
    public function Addtocart(){
    $productcode = $this->request->getVar('productcode');
    $userid = $this->request->getVar('userid');
    $productprice = $this->request->getVar('productprice');
    $size = $this->request->getVar('size');
    $fit = $this->request->getVar('fit');
    $waist=$this->request->getVar('waist');
    $table=$this->request->getVar('table');
    $folder=$this->request->getVar('folder');
    if(!empty($waist)){
        $waist=$this->request->getVar('waist');
    }else{
        $waist=null;
    }
    // var_dump($fit);exit();
    $qty = $this->request->getVar('QTY');
    $amount=$productprice * $qty ;
    //   var_dump($userid);exit();
          $model = new cartModel;
           $array = array(
            'user_id' =>$userid,
            'amount' => $amount,
            'size'=>$size,
            'ProductCode'=>$productcode,
            'quantity'=>$qty ,
            'fit'=>$fit,
            'table_name'=>$table,
            'folder'=>$folder,
            'waist'=>$waist
        );
        $result = $model->save($array);
        //  return redirect()->to('/');
        return redirect()->back();
    }
    
}