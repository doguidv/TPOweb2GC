<?php
  require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
class infoView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
        // inicializo Smarty
    }


 
    function showpesca($pescas) {
      // imprime la tabla info pesca
      
      $this->smarty->assign('pescas',$pescas); 
 
      $this->smarty->display('form_ABM_info.tpl');

    }
 
   function showAddinfopesca($infoloc,$localidad){ 
    $this->smarty->assign('infoloc',$infoloc); 
    $this->smarty->assign('localidad',$infoloc);
 $this->smarty->display('form_ABM_info.tpl');
    }

                                    //Update
            function upDateinfo_pesca($infop,$localidad){
              $this->smarty->assign('infop',$infop); 
              $this->smarty->assign('localidad',$localidad);
          
                $this->smarty->display('form_ABM_info.tpl');
  
  
    }
    }             

            
           
             
                
        


            