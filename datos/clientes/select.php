<?php  
require '../../datos/mysqlConnection.php';
$connect = new mysqli($hostname, $username, $password, $databaseName);

 $output = '';  
 $sql = "SELECT * FROM cliente ORDER BY nombre DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr> 
                     <th width="10%">id</th>    
                     <th width="10%">cedula</th> 
                     <th width="10%">nombre</th> 
                     <th width="10%">Primer Apellido  </th>    
                     <th width="10%">Segundo Apellido</th>        
                      <th width="10%">Numero Telefonico</th>                                               
                     <th width="10%">Email</th> 
                     <th width="10%">Provincia  </th>    
                     <th width="10%">Instagram</th>        
                      <th width="10%">Facebook</th>   
                      <th width="10%">Fecha de Nacimiento</th> 
                      <th width="10%">Accion</th>   
                </tr>'; 
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
    $output .= '  
           <tr>  
                <td id="id" contenteditable></td>
                <td id="cedula" contenteditable></td>
                <td id="nombre" contenteditable></td>
                <td id="primerApellido" contenteditable></td>
                <td id="segundoApellido" contenteditable></td>
                <td id="numeroTelefonico" contenteditable></td>
                <td id="email" contenteditable></td>
                <td id="provincia" contenteditable></td>
                <td id="instagram" contenteditable></td>
                <td id="facebook" contenteditable></td>
                <td id="fechaDeNacimiento" contenteditable></td>
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      '; 
      
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>' . $row["idCliente"] . '</td>   
                     <td class="cedula" data-id1="' . $row["idCliente"] . '" contenteditable>' . $row["cedula"] . '</td> 
                     <td class="nombre" data-id2="' . $row["idCliente"] . '" contenteditable>' . $row["nombre"] . '</td> 
                     <td class="primerApellido" data-id3="' . $row["idCliente"] . '" contenteditable>' . $row["primerApellido"] . '</td>   
                     <td class="segundoApellido" data-id4="' . $row["idCliente"] . '" contenteditable>' . $row["segundoApellido"] . '</td> 
                     <td class="numeroTelefonico" data-id5="' . $row["idCliente"] . '" contenteditable>' . $row["numeroTelefonico"] . '</td> 
                     <td class="email" data-id6="' . $row["idCliente"] . '" contenteditable>' . $row["email"] . '</td> 
                     <td class="provincia" data-id7="' . $row["idCliente"] . '" contenteditable>' . $row["provincia"] . '</td> 
                     <td class="instagram" data-id8="' . $row["idCliente"] . '" contenteditable>' . $row["instagram"] . '</td> 
                     <td class="facebook" data-id9="' . $row["idCliente"] . '" contenteditable>' . $row["facebook"] . '</td> 
                     <td class="fechaDeNacimiento" data-id10="' . $row["idCliente"] . '" contenteditable>' . $row["fechaDeNacimiento"] . '</td> 
  
                     <td><button type="button" name="delete_btn" data-id11="'.$row["idCliente"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>   
           ';  
      }  
     
 }  
 else  
 {  
      $output .= '
           <tr>  x
               <td id="id" contenteditable></td>
                <td id="cedula" contenteditable></td>
                <td id="nombre" contenteditable></td>
                <td id="primerApellido" contenteditable></td>
                <td id="segundoApellido" contenteditable></td>
                <td id="numeroTelefonico" contenteditable></td>
                <td id="email" contenteditable></td>
                <td id="provincia" contenteditable></td>
                <td id="instagram" contenteditable></td>
                <td id="facebook" contenteditable></td>
                <td id="fechaDeNacimiento" contenteditable></td>
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr> ' ;
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>