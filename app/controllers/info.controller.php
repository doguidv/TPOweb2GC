<?php
require_once './app/models/info.model.php';
require_once './app/views/info.view.php';


class infoController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new infoModel();
        $this->view = new infoView();
    }
   
    public function showinfo() {
        $pesca=$this->model->getAllinfopesca();
        $infopesca=$this->model->getAllpesca();
        $localidad=$this->model->getAlllocalidades();
        $this->view->showAddinfopesca($infopesca,$localidad);
        $this->view->showpesca($pesca);
    }
    function addInfopesca() {
        // TODO: validar entrada de datos
        $embarcado = $_POST['embarcado'];
        $tipo_embarcacion = $_POST['tipo_embarcacion'];
        $equipo_pesca = $_POST['equipo_pesca'];
        $carnada= $_POST['carnada'];
        $pesca= $_POST['pesca'];
        $id_localidad_fk=$_POST['id_localidad_fk'];
        $Detalles_Pesca=$_POST['Detalles_Pesca'];
        $id = $this->model->insertinfopesca($embarcado, $tipo_embarcacion, $equipo_pesca,$carnada,$pesca,$Detalles_Pesca,$id_localidad_fk);
        header("Location: " . BASE_URL); 
    }
    //seccion update   
    function upDateinfo($id) {
        $infop=$this->model->updateinfoById($id);
        $localidad=$this->model->getAlllocalidades();
        $this->view->UpDateinfo_pesca($infop,$localidad);       
    }
    function editinfo() {
        // TODO: validar entrada de datos       
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
        header("Location: " . BASE_URL);
    }

}

