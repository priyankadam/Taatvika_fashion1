<?php

namespace App\Controllers;

use App\Models\cartModel;
use App\Libraries\instamojo;
use App\Models\checkoutModal;

class customiseController extends BaseController
{
    public function cus_order(){
           $size = $this->request->getVar('size');
           $material = $this->request->getVar('material');
           $qty = $this->request->getVar('QTY');
        //   var_dump($qty);exit();
           $id = $this->request->getVar('id');
           $tablename = $this->request->getVar('tablename');
           $foldername = $this->request->getVar('foldername');
           $productcode = $this->request->getVar('productcode');
           $userid = $this->request->getVar('userid');
           $productprice = $this->request->getVar('productprice');
           
           $bust=$this->request->getVar('bust');
           $waist=$this->request->getVar('waist');
           $hip=$this->request->getVar('hip');
           
            // var_dump($bust);exit();
           $amount=$productprice * $qty ;
        //   var_dump($userid);exit();
              $model = new cartModel;
               $array = array(
                'user_id' =>$userid,
                'product_id' =>  $id,
                'amount' => $amount,
                'table_name'=>$tablename,
                'folder'=>$foldername,
                'size'=>$size,
                'material'=>$material,
                'ProductCode'=>$productcode,
                'bust'=>$bust,
                'waist'=>$waist,
                'hip'=>$hip,
                'quantity'=>$qty 
            );
            $result = $model->save($array);
            //  return redirect()->to('/');
            return redirect()->back();
    }
     public function cus_single_order()
    {
        $size = $this->request->getVar('size');
        $material = $this->request->getVar('material');
        $qty = $this->request->getVar('QTY');
        //   var_dump($qty);exit();
        $id = $this->request->getVar('id');
        $tablename = $this->request->getVar('tablename');
        $foldername = $this->request->getVar('foldername');
        $productcode = $this->request->getVar('productcode');
        $userid = $this->request->getVar('userid');
        $productprice = $this->request->getVar('productprice');

        $bust = $this->request->getVar('bust');
        $waist = $this->request->getVar('waist');
        $hip = $this->request->getVar('hip');

        // var_dump($bust);exit();
        $amount = $productprice * $qty;
        //   var_dump($userid);exit();
        $model = new cartModel;
        $array = array(
            'user_id' => $userid,
            'product_id' => $id,
            'amount' => $amount,
            'table_name' => $tablename,
            'folder' => $foldername,
            'size' => $size,
            'material' => $material,
            'ProductCode' => $productcode,
            'bust' => $bust,
            'waist' => $waist,
            'hip' => $hip,
            'quantity' => $qty,
        );
        $result = $model->save($array);
        // return redirect()->to('/');
        return redirect()->back();
    }
    
}