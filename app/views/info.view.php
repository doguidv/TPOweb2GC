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
      
      $this->smarty->assign('id_pesca', id_pesca($id_pesca)); 
      $this->smarty->assign('embarcado', embarcado ($embarcado));

      $this->smarty->assign('Tipo_embarcado', tipo_pesca($tipo_embarcado)); 
      $this->smarty->assign('equipo_pesca',equipo_pesca ($equipo_pesca));

      $this->smarty->assign('carnada', count($carnada)); 
      $this->smarty->assign('pesca', $pesca);

      $this->smarty->assign('id_localidad_fk', count($id_localidad_fk));

      $this->smarty->display('form_ABM_info.tpl');

    }
    
   function showAddinfopesca($infoloc,$localidad){ 
    $this->smarty->assign('id_pesca', count($id_pesca)); 
    $this->smarty->assign('embarcado', $embarcado);

    $this->smarty->assign('Tipo_embarcado', count($tipo_embarcado)); 
    $this->smarty->assign('equipo_pesca', $equipo_pesca);

    $this->smarty->assign('carnada', count($carnada)); 
    $this->smarty->assign('pesca', $pesca);

    $this->smarty->assign('id_localidad_fk', count($id_localidad_fk));

    $this->smarty->display('form_ABM_info.tpl');

    }

                                    //Update
            function upDateinfo_pesca($infop,$localidad){
                $this->smarty->assign('id_pesca', count($id_pesca)); 
                $this->smarty->assign('embarcado', $embarcado);
            
                $this->smarty->assign('Tipo_embarcado', count($tipo_embarcado)); 
                $this->smarty->assign('equipo_pesca', $equipo_pesca);
            
                $this->smarty->assign('carnada', count($carnada)); 
                $this->smarty->assign('pesca', $pesca);
            
                $this->smarty->assign('id_localidad_fk', count($id_localidad_fk));
            
                $this->smarty->display('form_ABM_info.tpl');
                
  
    }
    }             

            
           
             
                
        


            