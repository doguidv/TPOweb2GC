<?php
require_once './app/models/Home.model.php';
require_once './app/views/Home.views.php';

class HomeController {
    private $modelHome;
    private $viewHome;
    
    public function __construct() {
        $this->modelHome = new HomeModel();
        $this->viewHome = new HomeView();

    }

    public function showHomeInfo() {
          $pesca  =  $this->modelHome->getAllinfopesca();
          $categ  =  $this->modelHome->getAllHomelocalid();
        $this->viewHome->showHomeinfoxlocalid($pesca,$categ);
    }
 
    public function showHomeCateg() {
        $categ  =  $this->modelHome->getAllHomelocalid();
      $this->viewHome->showHomelocalid($categ);
     
  }


  public function buscar() {
   $id_localidad  = $_POST['id_localidad'];
    $InfopXLocalidad  = $this->modelHome->GetAllInfoPescaXpesca($id_localidad);
    $this->viewHome->ShowInfoxLocalid($InfopXLocalidad);

    }
    public function Detalle($id){
      $infoPesca= $this->moledHome->GetinfoById($id);
      $this->viewHome->ShowDetalleInfop($indoPesca);    
        }
}