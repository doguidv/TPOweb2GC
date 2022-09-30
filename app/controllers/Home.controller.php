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
          $pesca=  $this->modelHome->getAllinfopesca();
        $this->viewHome->showHomeinfoxlocalid($pesca);
    }
 
    public function showHomeCateg() {
        $categ=  $this->modelHome->getAllHomelocalid();
      $this->viewHome->showHomelocalid($categ);
  }

     
     
}
    