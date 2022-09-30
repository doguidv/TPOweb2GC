<?php

class RegistroModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpoweb2;charset=utf8', 'root', '');
    }

    function Insertuser(){  //Creo la cuenta cuando venga en el POST
        if(!empty($_POST['Email'])&& !empty($_POST['Password'])){
            $userEmail=$_POST['Email'];
            $userPassword=password_hash($_POST['Password'], PASSWORD_BCRYPT);
        //Guardo el nuevo usuario en la base de datos
        $query = $this->db->prepare("INSERT INTO users (Email,Password) VALUES (?,?)");
        
        $query->execute([$userEmail,$userPassword]);
    }

    }
 
}