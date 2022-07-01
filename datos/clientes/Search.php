<?php  
 $connect = mysqli_connect("localhost", "root", "M@rio741", "performance");  
 $output = '';  
 $q = $_GET['q'];
 $sql = "SELECT * FROM managers WHERE FirstName = '".$q."'";
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">id</th>    
                     <th width="10%">FirstName</th> 
                     <th width="10%">LastName  </th>    
                     <th width="10%">email</th>        
                      <th width="10%">Delete</th>                  
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  

      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>   
                     <td class="FirstName" data-id1="'.$row["id"].'" contenteditable>'.$row["FirstName"].'</td> 
                     <td class="LastName" data-id2="'.$row["id"].'" contenteditable>'.$row["LastName"].'</td> 
                     <td class="email" data-id3="'.$row["id"].'" contenteditable>'.$row["email"].'</td> 
                     <td><button type="button" name="delete_btn" data-id4="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="FirstName" contenteditable></td>
                <td id="LastName" contenteditable></td>
                <td id="email" contenteditable></td>
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
           <tr>  
                <td></td>  
                <td id="FirstName" contenteditable></td>
                <td id="LastName" contenteditable></td>
                <td id="email" contenteditable></td>
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>' ;
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>