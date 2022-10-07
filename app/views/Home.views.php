<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
class HomeView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
        // inicializo Smarty
    }
    function showHomeinfoxlocalid($pesca,$categ) {
        $this->smarty->assign('pesca',$pesca);   
        $this->smarty->assign('categ',$categ);   
        $this->smarty->display('Home_view.tpl');                
        }          
    function showHomelocalid($categ) {
        // imprime la tabla de categoria  con la localidad
        $this->smarty->assign('categ',$categ);                
        $this->smarty->display('Home_view_Categ.tpl');                            
        }
    function ShowInfoxLocalid($InfopXLocalidad){
        $this->smarty->assign('InfopXLocalidad',$InfopXLocalidad);   
        $this->smarty->display('home_view_Filter.tpl');                      
        }  
    function ShowDetalleInfop($infoPesca){
        $this->smarty->assign('infoPesca',$infoPesca);   
        $this->smarty->display('home_view_Detall.tpl');                      
        }
}