<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
class HomeView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
        // inicializo Smarty
    }
    function showHomeinfoxlocalid($pesca) {
        
        $this->smarty->assign('id_pesca',$pesca); 
        $this->smarty->assign('embarcado',$pesca);
  
        $this->smarty->assign('Tipo_embarcado',$pesca); 
        $this->smarty->assign('equipo_pesca',$pesca);
  
        $this->smarty->assign('carnada',$pesca); 
        $this->smarty->assign('pesca',$pesca);
  
        $this->smarty->assign('id_localidad_fk',$pesca);
  
        $this->smarty->display('Home_view.tpl');
                
            }
            
    function showHomelocalid($categ) {
        // imprime la tabla de categoria  con la localidad
  
        $this->smarty->assign('id_localidad',$categ);
  
        $this->smarty->assign('localidad',$categ);
  
        $this->smarty->display('Home_view_Categ.tpl');
             
        
           
    }
    
                
}