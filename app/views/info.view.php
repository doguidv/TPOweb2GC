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
      
      $this->smarty->assign('id_pesca',$pescas->id_pesca); 
      $this->smarty->assign('embarcado',$pescas->embarcado);

      $this->smarty->assign('Tipo_embarcado',$pescas->tipo_embarcacion); 
      $this->smarty->assign('equipo_pesca',$pescas->equipo_pesca);

      $this->smarty->assign('carnada',$pescas->carnada); 
      $this->smarty->assign('pesca',$pescas->pesca);

      $this->smarty->assign('id_localidad_fk',$pescas->id_localidad_fk);
      $this->smarty->assing('localidad',$pescas->localidad);
      $this->smarty->display('form_ABM_info.tpl');

    }
 
   function showAddinfopesca($infoloc,$localidad){ 
    $this->smarty->assign('id_pesca',$infoloc->id_pesca); 
    $this->smarty->assign('embarcado',$infoloc->embarcado);

    $this->smarty->assign('Tipo_embarcado',$infoloc->tipo_embarcacion); 
    $this->smarty->assign('equipo_pesca',$infoloc->equipo_pesca);

    $this->smarty->assign('carnada',$infoloc->carnada); 
    $this->smarty->assign('pesca',$infoloc->pesca);

    $this->smarty->assign('id_localidad_fk',$infoloc->id_localidad_fk);
    $this->smarty->assing('localidad',$localidad->localidad);
    $this->smarty->display('form_ABM_info.tpl');
    }

                                    //Update
            function upDateinfo_pesca($infop,$localidad){
              $this->smarty->assign('id_pesca',$infoloc->id_pesca); 
              $this->smarty->assign('embarcado',$infoloc->id_pesca);
          
              $this->smarty->assign('Tipo_embarcado',$infoloc->id_pesca); 
              $this->smarty->assign('equipo_pesca',$infoloc->id_pesca);
          
              $this->smarty->assign('carnada',$infoloc->carnada); 
              $this->smarty->assign('pesca',$infoloc->carnada);
          
              $this->smarty->assign('id_localidad_fk',$infoloc->id_localidad_fk);
              $this->smarty->assign('id_localidad',$localidad->id_localidad);
          
                $this->smarty->display('form_ABM_info.tpl');
  
  
    }
    }             

            
           
             
                
        


            