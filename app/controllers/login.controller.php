<?php
require_once './app/models/Login.Model.php';
require_once './app/views/Login.View.php';

class LoginController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new LoginModel();
        $this->view = new LoginView();
    }

    public function showLogin() {
        $this->view->renderForm ();
    }
    function Login() {
       $login= $this->model->getlogin ();
       
        $this->view->login ($login);
    
    }
        
}