<?php
require_once './app/models/info.model.php';
require_once './app/views/info.view.php';
require_once './app/helpers/auth.helper.php';

class infoController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new infoModel();
        $this->view = new infoView();
        // barrera de seguridad
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();

    }
   
    public function showinfo() {
        $pesca=$this->model->getAllinfopesca();
        $infopesca=$this->model->getAllpesca();
        $localidad=$this->model->getAlllocalidades();
        $this->view->showAddinfopesca($infopesca,$localidad);
        $this->view->add();
         $this->view->showpesca($pesca);        
    }
    function addInfopesca() {
        // TODO: validar entrada de datos
        if (!empty($_POST['embarcado']) && !empty($_POST['tipo_embarcacion']) && !empty($_POST['equipo_pesca']) && !empty($_POST['carnada']) && !empty($_POST['pesca']) && !empty($_POST['id_localidad_fk']) && !empty($_POST['Detalles_Pesca'])) {
            # code...
        $embarcado = $_POST['embarcado'];
        $tipo_embarcacion = $_POST['tipo_embarcacion'];
        $equipo_pesca = $_POST['equipo_pesca'];
        $carnada= $_POST['carnada'];
        $pesca= $_POST['pesca'];
        $id_localidad_fk=$_POST['id_localidad_fk'];
        $Detalles_Pesca=$_POST['Detalles_Pesca'];
        $id = $this->model->insertinfopesca($embarcado, $tipo_embarcacion, $equipo_pesca,$carnada,$pesca,$Detalles_Pesca,$id_localidad_fk);
        header("Location: " . BASE_URL .'infopesca'); 
        }
        else {
            $this->view->add("No se permiten campos en blanco");
        }
           
    }
    //seccion update   
    function upDateinfo($id) {
        $infop=$this->model->updateinfoById($id);
        $localidad=$this->model->getAlllocalidades();
        $this->view->UpDateinfo_pesca($infop,$localidad);       
    }
    function editinfo() {
        // TODO: validar entrada de datos       
            # code... 
            $embarcado = $_POST['embarcado'];
            $tipo_embarcacion = $_POST['tipo_embarcacion'];
            $equipo_pesca = $_POST['equipo_pesca'];
            $carnada= $_POST['carnada'];
            $pesca= $_POST['pesca'];
            $id_localidad_fk=$_POST['id_localidad_fk'];
            $id_pesca = $_POST['id_pesca'];
            $Detalles_Pesca=$_POST['Detalles_Pesca'];
            $id = $this->model->info_pesca($embarcado, $tipo_embarcacion, $equipo_pesca,$carnada,$pesca,$Detalles_Pesca,$id_localidad_fk,$id_pesca);
    }

    function deleteinfo($id) {
        $this->model->deleteinfoById($id);
        header("Location: " . BASE_URL.'infopesca');
    }

}

