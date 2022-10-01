<?php

class RegistroView{


    
function renderForm(){
 
        echo '
            <h2>Registro</h2>
            <form action="CrearCuenta" method="POST">
                <input type="text" name="Email" placeholder="Ingrese su email..."/>
                <input type="password" name="Password" placeholder="Ingrese su password..."/>
                <button type="submit">Crear cuenta</button>
            </form>
        ';
    }
    
}