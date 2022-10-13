<?php
require_once './app/models/Categ.model.php';
require_once './app/views/Categ.view.php';
require_once './app/helpers/auth.helper.php';
class CategController {
     private $model;
     private $view;

        public function __construct() {
            $this->model = new CategModel();
            $this->view = new CategView();
        
                // barrera de seguridad
            $authHelper = new AuthHelper();
            $authHelper->checkLoggedIn();

        }

        public function showLocalid() {
            $Localid = $this->model->getAlllocalid();
            $this->view->addCateg();
            $this->view->showlocalid($Localid);
        
        }
        
        function addLocalid() {
            // TODO: validar entrada de datos
            if (!empty($_POST['localidad'])) {
            $localidad=$_POST['localidad'];
            $idlocalid = $this->model->insertlocalid($localidad);
            header("Location: " . BASE_URL.'localidad'); 
            }
            else{
                echo 'No se permiten campos en blanco';
            }
        }
        function ShowUpdateCateg($id) {
            $Categ= $this->model->upDatelocalidById($id);
            $this->view->UpdateCateg($Categ);
            }
        function Updatelocalid() {
            // TODO: validar entrada de datos
            if (!empty($_POST['id_localidad'])&&!empty($_POST['localidad'])) {       
            $id_localidad=$_POST['id_localidad'];
            $localidad=$_POST['localidad'];
            $id = $this->model->updatelocalid($localidad,$id_localidad);
            }
        else{
            echo'No se permiten campos en blanco';
        }
        }
        function deleteLocalid($id) {
            $this->model->deletelocalidById($id);
            header("Location: " . BASE_URL.'localidad');
            }
}

