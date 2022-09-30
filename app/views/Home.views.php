<?php

class HomeView {

    function showHomeinfoxlocalid($pesca) {
        include './templates/header.php';    
 
        // imprime la tabla de info relacionada con la localidad
        echo "<h1>Informacion listada por categoria</h1>";
                echo "<table>
                <thead>
                <tr>
                    <th>id_pesca</th>
                    <th>Embarcado</th>
                    <th>Embarcacion</th>
                    <th>Equipo de pesca</th>
                    <th>Carnada</th>
                    <th>Pesca</th>
                    <th>Localidad</th>
                    </tr>
                <thead>
                <tbody>
                ";
                foreach($pesca as $pescas ) {
                echo "
                <tr>
                    <td>$pescas->id_pesca</td>
                    <td>$pescas->embarcado</td>
                    <td>$pescas->tipo_embarcacion</td>
                    <td>$pescas->equipo_pesca</td>
                    <td>$pescas->carnada</td>
                    <td>$pescas->pesca</td>
                    <td>$pescas->localidad</td>
                     </tr>
                ";
                
                }
    
                
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
