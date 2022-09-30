<?php
require_once './app/models/Registro.Model.php';
require_once './app/views/Registro.View.php';

class RegistroController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new RegistroModel();
        $this->view = new RegistroView();
    }

    public function showRegistro() {
        $this->view-> renderForm();
    }
    function addUser() {
        // TODO: validar entrada de datos

        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
    
        $id = $this->model->insertUser($Email, $Password);

        header("Location: " . BASE_URL); 
    }
}