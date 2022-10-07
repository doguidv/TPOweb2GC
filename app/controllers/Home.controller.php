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
  public function buscar($id) {
    $InfopXLocalidad  = $this->modelHome->GetAllInfoPescaXlocalidad($id);
    $this->viewHome->ShowInfoxLocalid($InfopXLocalidad);

    }
    public function Detalle($id){
      $infoPesca= $this->modelHome->GetinfoById($id);
      $this->viewHome->ShowDetalleInfop($infoPesca);    
        }
}