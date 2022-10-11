<?php
require_once './app/controllers/info.controller.php';
require_once './app/controllers/Categ.controller.php';
require_once './app/controllers/Home.controller.php';
require_once './app/controllers/auth.controller.php';


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


// tabla de ruteo
switch ($params[0]) {
    case 'home':       
         $HomeController=new HomeController();
         $HomeController->showHomeInfo();  
         break;
    case 'categ':   
        $HomeController=new HomeController();
        $HomeController->showHomeCateg();
          break;          
    case 'buscar':
        $HomeController=new HomeController();
        $id=$params[1];
        $HomeController->buscar($id);  
        break;  
    case'Detalle':
        $HomeController=new HomeController();
        $id = $params[1];        
        $HomeController->Detalle($id);
        break;
           //Comienzo del loguin
    case 'login':
        $authController = new AuthController();
        $authController->showFormLogin();
        break;
    case 'validate':
        $authController = new AuthController();
        $authController->validateUser();
        break;
    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;
        //fin loguin
    case 'infopesca':    
        $infoController = new infoController();
        $infoController->showinfo();       
        break;
    case 'add':
        $infoController = new infoController();
        $infoController->addInfopesca();
        break;
    case 'update':
        $infoController = new infoController();
        $id = $params[1];
        $infoController->updateinfo($id); 
        break;
    case 'editinfo':
        $infoController = new infoController();
        $infoController->editinfo();  
        break; 
    case 'delete':
        // obtengo el parametro de la acción
        $infoController = new infoController();      
        $id = $params[1];
        $infoController->deleteinfo($id);
        break;
        //Categ
    case 'localidad':
        $CategController=new CategController();
        $CategController->showlocalid();
        break;
    case 'addCateg':        
        $CategController=new CategController();
        $CategController->addlocalid();
        break;        
     case 'ShowUpdatCateg':
        $CategController=new CategController();        
        $id=$params[1];
        $CategController->ShowUpdateCateg($id);
         break;    
    case 'editCateg':
        $CategController=new CategController();
        $CategController->Updatelocalid();
        break;
    case 'deleteCateg':
        $CategController=new CategController();
        $idlocalid=$params[1];
        $CategController->deleteLocalid($idlocalid);
        break;          
    default:
        echo('404 Page not found');
        break;
}

