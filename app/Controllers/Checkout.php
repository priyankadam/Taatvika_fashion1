<?php

namespace App\Controllers;

use App\Models\cartModel;
use App\Libraries\instamojo;
use App\Models\checkoutModal;

class Checkout extends BaseController
{

    public function BillingDetails()
    {
        return view('billingDetails');
    }
    public function BillingDetail()
    {
        return view('billingDetailToregister');
    }
    public function test($ss)
    {
        $session = \Config\Services::session();
        $session = session();

        $session->set('MenID', $ss);
        return redirect()->to('Men-Wear');
        // var_dump($ss);exit();
    }
    public function testw($women)
    {
        $session = \Config\Services::session();
        $session = session();
        //   var_dump($women);exit();
        $session->set('WomenID', $women);
        return redirect()->to('Women-Wear');
        // var_dump($ss);exit();
    }
    public function testc($collection)
    {
        $session = \Config\Services::session();
        $session = session();

        $session->set('CollectionID', $collection);
        return redirect()->to('Collection');
        // var_dump($ss);exit();
    }
    public function testAW($AccW)
    {
        $session = \Config\Services::session();
        $session = session();
        $session->set('WomenAccID', $AccW);
        return redirect()->to('Accessories');
        // var_dump($ss);exit();
    }
    public function testAM($AccM)
    {
        $session = \Config\Services::session();
        $session = session();
        $session->set('MenAccID', $AccM);
        return redirect()->to('Accessoriess');
        // var_dump($ss);exit();
    }
    public function payment()
    {
        $checkout_model = new checkoutModal();
        // require_once('vendor/autoload.php');
        $db = \Config\Database::connect();
        $amount = 10;
        // if ((session()->has('logged_info'))) {

        // $data = session()->get('logged_info');
        $userid = $this->request->getVar('user_id');
         $fetchuserdet = $db->query("SELECT * FROM `register_user` WHERE user_id='$userid'");
          foreach ($fetchuserdet->getResult() as $key1) {
                                                $user_name = $key1->firstname." ".$key1->lastname;
                                                $email = $key1->email;
                                                $phone = $key1->contact;
                                            }
        $username = $user_name;
        $email = $email ;
        $phone = $phone;
        $order_id = date('Y' . 'm' . 'd' . 'H' . 's');
        $data = array(
            "user_id" => $userid,
            "order_id" => $order_id,
            "cart_ids" =>  $this->request->getVar('cart_ids'),
            "total_amount" => '500',
             "ProductCode" => $this->request->getVar('ProductCode')
             
        );
        $cart_ids = $this->request->getVar('cart_ids');

        $total_amount = '500';
        $fetchcheckout = $db->query("SELECT * FROM checkout WHERE user_id='$userid' AND status=0 ");
        $fetch = $fetchcheckout->getResultArray();
        $num = $fetchcheckout->getNumRows();
        if ($num == 0) {
            // $query = $db->query("insert into  `checkout`(`user_id`,`order_id`,`cart_ids`,`total_amount`,`transaction_id`) VALUES('$userid','$order_id','$cart_ids','$amount','8888')");
            // $query=$checkout_model->insert($data);
            $query = $checkout_model->dataInsert($data);
            $id = $query;
        } else {
            $id = $fetch[0]['id'];

            $query = $db->query("update checkout set cart_ids = '$cart_ids' and total_amount = $total_amount where id=$id");
        }
        if ($query) {
            $key = "test_69d63bd07a6d515e82db1cb2d07";
            $token = "test_7f221f9d3f120b8bb5bc328eb52";
            $mojoURL = "test.instamojo.com";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://$mojoURL/api/1.1/payment-requests/");
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            curl_setopt(
                $ch,
                CURLOPT_HTTPHEADER,
                array(
                    "X-Api-Key:$key",
                    "X-Auth-Token:$token"
                )
            );
            $payload = array(
                'purpose' => 'shopping',
                'buyer_name' => $username,
                'email' => $email,
                'amount' => '10',
                'phone' => $phone,
                'redirect_url' => 'https://mediventurz.com/sirsonite/Taatvika_fashion/Payment_success/' . $id,
                'allow_repeated_payments' => false
            );
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
            $response = curl_exec($ch);
            curl_close($ch);
            $decode = json_decode($response);
            $success = $decode->success;
            if ($success == true) {
                $paymentURL = $decode->payment_request->longurl;
                $refID = $decode->payment_request->id;
                $OrderID = date('Y' . 'm' . 'd' . 'H' . 's');


                $paymentURL = $decode->payment_request->longurl;
                // SQL DATA ENTRY
                header("Location:$paymentURL");
                exit();
            } else {
                echo "$response";
            }
        }
        // }
    }
    public function payment_success($checkout_id)
    {
        $checkout_model = new checkoutModal();
        //    echo $checkout_id;
        $id = '15';
        $payment_request_id=$_GET['payment_id'];
        $session = \Config\Services::session();
        $session = session();
        $session = session();
        $db = \Config\Database::connect();
        $pp=$_GET['payment_id'];
        // var_dump($pp);exit();
        $query = $db->query("update checkout set status='1',transaction_id='$pp',order_status='ordered' where id=$checkout_id");
        //   $updat=$db->update('checkout',array("transaction_id"=>$response['payment_id'],"status"=>1));
        // $checkout1 = $db->query("SELECT * FROM checkout WHERE id=$checkout_id");
        // $checkout1=$checkout1->getResultArray();
        // // var_dump($checkout1);exit();
        $query = $checkout_model->getmycart($checkout_id);
        // var_dump($query);exit();
        $cartids = $query['cart_ids'];
        $oo=$query['order_id'];
        // var_dump($cartids);exit();
        // $cartids = $checkout['cart_ids'];
        $cart_ids = explode(",", $cartids);
        foreach ($cart_ids as $key) {
            $update = $db->query("update add_to_cart set status='1',order_id='$oo' where id= $key");
        }
        if ($update) {
            $data1 = "Payment Successfully Completed. ";
            $session->set('msg', $data1);
               return view('paymentSuccess');
        }
    }
}
