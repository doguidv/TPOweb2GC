<?php
require_once './app/controllers/info.controller.php';
require_once './app/controllers/Categ.controller.php';
require_once './app/controllers/Home.controller.php';
require_once './app/controllers/Registro.controller.php';
require_once './app/controllers/Login.controller.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// instancio el unico controller que existe por ahora
$infoController = new infoController();
$CategController=new CategController();
$HomeController=new HomeController();
$RegistroController=new RegistroController();

$LoginController=new LoginController();
// tabla de ruteo
switch ($params[0]) {
    case 'home':
         $HomeController->showHomeInfo();  
         break;
    case 'categ':   
         $HomeController->showHomeCateg();
          break;
    case 'Registro':
        $RegistroController->showRegistro();
        break;
    case 'CrearCuenta':
    $RegistroController->addUser();
    break;
    case 'login':
    $LoginController->showLogin();
    break;   
    case 'Login':
    $LoginController->Login();
    break;
    case 'infopesca':    
        $infoController->showinfo();       
        break;
    case 'add':
        $infoController->addInfopesca();
        break;
    case 'update':
        $id = $params[1];
        $infoController->updateinfo($id); 
        break;
    case 'editinfo':
            $infoController->editinfo();  
            break; 
    case 'delete':
        // obtengo el parametro de la acción
        $id = $params[1];
        $infoController->deleteinfo($id);
        break;
        case 'buscar':
            $id=$params[1];
            $HomeController->buscar($id);  
            break;  
    case'Detalle':
        $id = $params[1];        
        $HomeController->Detalle($id);
    break;
        //Categ
    case 'localidad':
        $CategController->showlocalid();
        break;
    case 'addCateg':
        $CategController->addlocalid();
        break;        
     case 'ShowUpdatCateg':
        $id=$params[1];
        $CategController->ShowUpdateCateg($id);
         break;    
    case 'editCateg':
           $CategController->Updatelocalid();
            break;
    case 'deleteCateg':
        $idlocalid=$params[1];
        $CategController->deleteLocalid($idlocalid);
        break;
            
    default:
        echo('404 Page not found');
        break;
}

