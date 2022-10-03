<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
class CategView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
        // inicializo Smarty
    }
    function showlocalid($localidades) {
      
        $this->smarty->assign('localidades',$localidades); 
     
  
        $this->smarty->display('ShowLocalidades.tpl');
    
                }
        
                function addCateg(){   
                              
            }

    function UpdateCateg($Categ){
        $this->smarty->assign('Categ',$Categ);  
 

    }
}