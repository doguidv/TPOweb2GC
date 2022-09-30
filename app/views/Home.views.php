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
        include './templates/header.php';  
        // imprime la tabla de categoria  con la localidad
        echo "<h2> Listado de categoria</h1>";
                echo "<table>
                <thead>
                <tr>
                    <th>id_localidad</th>
                    <th>Localidad</th>
                    </tr>
                <thead>
                <tbody>
                ";
                foreach($categ as $categ ) {
                echo "
                <tr>
                    <td>$categ->id_localidad</td>
                    <td>$categ->localidad</td>
                     </tr>
                ";
                
                }
    
                
            }
            
 
    }
