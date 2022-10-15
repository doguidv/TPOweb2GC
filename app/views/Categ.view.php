<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
class CategView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
        // inicializo Smarty
    }
    function showlocalid($localidades) {    
        //Muestra la tabla localidades
        $this->smarty->assign('localidades',$localidades);   
        $this->smarty->display('ShowLocalidades.tpl');
      }
      function addCateg($error=null){    
        //imprime el form ADD categ
        $this->smarty->assign('error',$error);
        $this->smarty->display('Add_Categ.tpl');
    }
    function UpdateCateg($Categ){
        $this->smarty->assign('Categ',$Categ);  
        $this->smarty->display('Update_Categ.tpl');
    }
}