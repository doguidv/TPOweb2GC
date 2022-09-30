<?php

class LoginView{

   function renderForm(){
    
    require_once 'templates/header.php';
    echo '
           <h2>Login</h2>
           <form action="Login" method="POST">
               <input type="text" name="Email" placeholder="Ingrese su email..."/>
               <input type="Password" name="Password" placeholder="Ingrese su password..."/>
               <button type="submit">Login</button>
       ';
   }
   
   
}
