<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
class CategView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
        // inicializo Smarty
    }
    function showlocalid($localidades) {
      
        $this->smarty->assign('id_localidad',$localidades->id_localidad); 
        $this->smarty->assign('localidad',$localidades->localidad);
  
        $this->smarty->display('ShowLocalidades.tpl');
    
            }
        
            function addCateg(){
                $this->smarty->display('form_ABM_Categ.tpl');
                

}

    function UpdateCateg($Categ){

        $this->smarty->assign('id_localidad',$Categ->id_localidad); 
        $this->smarty->assign('localidad',$Categ->localidad);
        $this->smarty->display('form_ABM_Categ.tpl');

    }
}