<?php
namespace App\Controllers;

class AuthController extends BaseController
{
    public function index()
    {
        return view("login");
    }

    public function login()
    {
        $email = $this->request->getPost("email");
        $password = $this->request->getPost("password");

        if ($email === "debashishrout@gmail.com" && $password === "qwerty") {
            return redirect()->to("/dashboard");
        } else {
            return redirect()->back()->with("error", "Invalid Credentials");
        }
    }

    public function dashboard()
    {
        return view("dashboard");
    }
}