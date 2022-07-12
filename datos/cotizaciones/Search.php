<?php

require '../../datos/mysqlConnection.php';
$connect = new mysqli($hostname, $username, $password, $databaseName);
$output = '';
$q = $_GET['q'];
$sql = "SELECT * FROM cotizacion WHERE idCotizacion = '" . $q . "'";
$result = mysqli_query($connect, $sql);
$output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">idCotizacion</th>    
                     <th width="10%">idCliente</th> 
                     <th width="10%">idTickete</th> 
                     <th width="10%">estado</th>    
                     <th width="10%">fechaHoraCreacion</th>        
                     <th width="10%">fechaHoraRespuesta</th>                                               
                     <th width="10%">categoria</th> 
                     <th width="10%">tamanho</th>    
                     <th width="10%">dificultad</th>        
                     <th width="20%">descripcionTatuaje</th>   
                     <th width="20%">preferenciasCovid</th> 
                     <th width="20%">disponibilidad</th>               
                     <th width="10%">autorizo</th>    
                     <th width="10%">leido</th> 
                     <th width="10%">emailEnviado</th> 
                     <th width="10%">conclusiones</th>    
                     <th width="10%">Accion</th>   
                </tr>';
$rows = mysqli_num_rows($result);
if ($rows > 0) {

    while ($row = mysqli_fetch_array($result)) {
        $output .= '  
                <tr>  
                     <td>' . $row["idCotizacion"] . '</td>   
                     <td class="idCliente" data-id1="' . $row["idCotizacion"] . '" >' . $row["idCliente"] . '</td> 
                     <td class="idTickete" data-id2="' . $row["idCotizacion"] . '" >' . $row["idTickete"] . '</td> 
                     <td class="estado" data-id3="' . $row["idCotizacion"] . '" contenteditable>' . $row["estado"] . '</td>   
                     <td class="fechaHoraCreacion" data-id4="' . $row["idCotizacion"] . '" contenteditable>' . $row["fechaHoraCreacion"] . '</td> 
                     <td class="fechaHoraRespuesta" data-id5="' . $row["idCotizacion"] . '" contenteditable>' . $row["fechaHoraRespuesta"] . '</td> 
                     <td class="categoria" data-id6="' . $row["idCotizacion"] . '" contenteditable>' . $row["categoria"] . '</td> 
                     <td class="tamanho" data-id7="' . $row["idCotizacion"] . '" contenteditable>' . $row["tamanho"] . '</td> 
                     <td class="dificultad" data-id8="' . $row["idCotizacion"] . '" contenteditable>' . $row["dificultad"] . '</td> 
                     <td class="descripcionTatuaje" data-id9="' . $row["idCotizacion"] . '" contenteditable>' . $row["descripcionTatuaje"] . '</td> 
                     <td class="preferenciasCovid" data-id10="' . $row["idCotizacion"] . '" contenteditable>' . $row["preferenciasCovid"] . '</td> 
                     <td class="disponibilidad" data-id11="' . $row["idCotizacion"] . '" contenteditable>' . $row["disponibilidad"] . '</td> 
                     <td class="autorizo" data-id12="' . $row["idCotizacion"] . '" contenteditable>' . $row["autorizo"] . '</td> 
                     <td class="leido" data-id13="' . $row["idCotizacion"] . '" contenteditable>' . $row["leido"] . '</td> 
                     <td class="emailEnviado" data-id14="' . $row["idCotizacion"] . '" contenteditable>' . $row["emailEnviado"] . '</td> 
                     <td class="conclusiones" data-id15="' . $row["idCotizacion"] . '" contenteditable>' . $row["conclusiones"] . '</td> 
  
                     <td>
                     <button type="button" name="delete_btn" data-id16="' . $row["idCotizacion"] . '" class="btn btn-xs btn-danger btn_delete">x</button>
                     <button onclick="myFunction('.$row["idCotizacion"].')"  type="button">Abrir</button>    
                    </td>  
                </tr>  
           ';
    }
    $output .= '  
           <tr>  
                <td id="idCotizacion" ></td>
                <td id="idCliente" ></td>
                <td id="idTickete" ></td>
                <td id="estado" contenteditable></td>
                <td id="fechaHoraCreacion" contenteditable></td>
                <td id="fechaHoraRespuesta" contenteditable></td>
                <td id="categoria" contenteditable></td>
                <td id="tamanho" contenteditable></td>
                <td id="dificultad" contenteditable></td>
                <td id="descripcionTatuaje" contenteditable></td>
                <td id="preferenciasCovid" contenteditable></td>
                <td id="disponibilidad" contenteditable></td>
                <td id="autorizo" contenteditable></td>
                <td id="leido" contenteditable></td>
                <td id="emailEnviado" contenteditable></td>
                <td id="conclusiones" contenteditable></td>
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';
} else {
    $output .= '
           <tr>  
                <td id="idCotizacion" ></td>
                <td id="idCliente" ></td>
                <td id="idTickete" ></td>
                <td id="estado" contenteditable></td>
                <td id="fechaHoraCreacion" contenteditable></td>
                <td id="fechaHoraRespuesta" contenteditable></td>
                <td id="categoria" contenteditable></td>
                <td id="tamanho" contenteditable></td>
                <td id="dificultad" contenteditable></td>
                <td id="descripcionTatuaje" contenteditable></td>
                <td id="preferenciasCovid" contenteditable></td>
                <td id="disponibilidad" contenteditable></td>
                <td id="autorizo" contenteditable></td>
                <td id="leido" contenteditable></td>
                <td id="emailEnviado" contenteditable></td>
                <td id="conclusiones" contenteditable></td>
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>';
}
$output .= '</table>  
      </div>';
echo $output;
?>