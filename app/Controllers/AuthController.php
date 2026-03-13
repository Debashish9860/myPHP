<?php
namespace App\Controllers;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function index(){
        return view("login");
    }

    public function dashboard(){
        return view("dashboard");
    }

    public function contact(){
        return view("contact");
    }
    
    public function register(){
        return view("register");
    }

    public function storeUser(){
        $usermodel = new UserModel();
        $data = ['fullname' => $this->request->getPost('fullname'),
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),];
        $usermodel->save($data);
        return redirect()->to("/")->with('status', 'Registration Successfull, Please Login');
    }
}