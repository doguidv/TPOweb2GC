

<?php

class LoginModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpoweb2;charset=utf8', 'root', '');
    }

   
       //Obtengo el usuario de la base de datos
       function getlogin(){
        $query = $this->db->prepare("SELECT *FROM users WHERE Email=?");
       $query->execute([$userEmail]);
       $user = $query->fetch(PDO::FETCH_OBJ);
       }
      function Userlog(){
        //Si el usuario existe y las contraseñas coinciden
        if($user && password_verify($userPassword,($user->Password))){
        echo "Acceso exitoso";
        }else{
            echo "Acceso denegado";
        }
    }
 

   
}
