<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
{
    public $session;
    public function updateUser(){
        helper(['form']);
        $db = \Config\Database::connect();
        $model = new UserModel;
        $user_id = $this->request->getVar('userid');
        $address = $this->request->getVar('address');
        $query = $db->query("update `register_user` set address = '$address' where user_id=$user_id");
        if($query){
            return redirect()->to('Checkout');
        }


    }
    public function AddUser(){
        helper(['form']);
        $db = \Config\Database::connect();
        $model = new UserModel;
        $user_id = $this->request->getVar('userid');
        $address = $this->request->getVar('address');
        $data1 = [
            'firstname'     => $this->request->getVar('name'),
             'lastname' => $this->request->getVar('lname'),
            'email'    => $this->request->getVar('email'),
           
             'address'=>$this->request->getVar('address'),
            'contact'  => $this->request->getVar('phone'),
        ];
       
        $query = $model->dataInsert($data1);
        $id = $query;
         $db = \Config\Database::connect();
        $query = $db->query("update add_to_cart set user_id=$id  where user_id='$user_id'");
        // $cart_ids = $this->request->getVar('cart_ids');
        // $cart_ids = explode(",", $cartids);
        // var_dump($id);exit();
        if($query){
            $data= [
                'firstname'     => $this->request->getVar('name'),
                 'lastname' => $this->request->getVar('lname'),
                'email'    => $this->request->getVar('email'),
               'user_id'=>$id,
                 'address'=>$this->request->getVar('address'),
                'contact'  => $this->request->getVar('phone'),
            ];
            // $session = session();
            // $session->destroy();
            $session = \Config\Services::session();
            $session = session();
            // $session->set('logged_info', $data);
            // if ((session()->has('logged1_info'))) {
                $session->set('LastID', $id);
                return redirect()->to('Checkout');
            // }
           
        }

    }
    public function register()
    {
        helper(['form']);
        //set rules validation form
        $rules = [

            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[user.email]',


        ];
        $email = $this->request->getVar('email');
        //   if($this->validate($rules)){
         $model = new UserModel;
       
        // $user = $model->emailExist($email);
        // if ($user) {
        //     $data['validation'] = 'email exist';
        //     echo view('Register', $data);
        // }
        // else{
      

        $data = [
            'firstname'     => $this->request->getVar('name'),
             'lastname' => $this->request->getVar('lname'),
            'email'    => $this->request->getVar('email'),
            'pass' => $this->request->getVar('password'),
            'contact'  => $this->request->getVar('phone'),
        ];
       // var_dump($data);exit();

        $result=$model->save($data);
        return redirect()->to('Login');
        // }
        //    }else{

        //   $data['validation'] = $this->validator;
        //    echo view('Register', $data);
        // }
    }
    //  public function register1()
    // {
    //     helper(['form']);
    //     //set rules validation form
    //     $rules = [

    //         'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[user.email]',


    //     ];
    //     $email = $this->request->getVar('email');
    //     //   if($this->validate($rules)){
    //      $model = new UserModel;
       
    //     // $user = $model->emailExist($email);
    //     // if ($user) {
    //     //     $data['validation'] = 'email exist';
    //     //     echo view('Register', $data);
    //     // }
    //     // else{
      

    //     $data = [
    //         'firstname'     => $this->request->getVar('name'),
    //          'lastname' => $this->request->getVar('lname'),
    //         'email'    => $this->request->getVar('email'),
    //         'pass' => $this->request->getVar('password'),
           
    //         'contact'  => $this->request->getVar('phone'),
    //     ];
    //   // var_dump($data);exit();
    //   $query =$model->dataInsert($data);
    //   $id = $query;
    //     // $result=$model->save($data);
    //     if ((session()->has('logged1_info'))) {
    //         $data = session()->get('logged1_info');
    //         $user_id = $data['user_id'];
           
    //         $db = \Config\Database::connect();
    //         $query1 = $db->query("update add_to_cart set user_id='$id' where user_id='$user_id'");
    //         $session = \Config\Services::session();
    //         $session = session();
    //         $this->session = session();
    //         $data = [
    //             'user_id'       => $data['user_id'],
    //         ];
    //         $session->set('logged_info', $data);

    //     }
    //      return redirect()->to('Checkout');
    //     // }
    //     //    }else{

    //     //   $data['validation'] = $this->validator;
    //     //    echo view('Register', $data);
    //     // }
    // }
    public function logincheck(){
        $session = \Config\Services::session();
        $session = session();
        $this->session = session();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        // var_dump($password);exit();
        $model = new UserModel;
        $data = $model->verifyEmail($email);

        if($data){
            $pass = $data['pass'];
            if ($data['pass']==$password) {
                $ses_data = [
                    'user_id'       => $data['user_id'],
                    'user_password'     => $data['pass'],
                    'user_email'    => $data['email'],
                   'user_name' => $data['firstname'],
                    'logged_in'     => TRUE
                ];
                $this->session->set('studentloggedid', $ses_data['user_id']);
                 unset($_SESSION['logged1_info']);
                $session->set('logged_info', $data);
                $_SESSION['user_id'] = $data['user_id'];
                // $session->set('name','virat');
                $session->set($ses_data);
                 $session->set('logged_info', $data);
                return view('index');
            }
            else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('Login');
            }
            // return view('index');
        }
        else{
            return view('login');
        }
    }
}
