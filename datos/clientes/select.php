<?php  
 $connect = mysqli_connect("localhost", "root", "M@rio741", "performance");  
 $output = '';  
 $sql = "SELECT * FROM managers ORDER BY id DESC";  
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
    $output .= '  
           <tr>  
                <td></td>  
                <td id="FirstName" contenteditable></td>
                <td id="LastName" contenteditable></td>
                <td id="email" contenteditable></td>
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      '; 
      
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["ID"].'</td>   
                     <td class="FirstName" data-id1="'.$row["ID"].'" contenteditable>'.$row["FirstName"].'</td> 
                     <td class="LastName" data-id2="'.$row["ID"].'" contenteditable>'.$row["LastName"].'</td> 
                     <td class="email" data-id3="'.$row["ID"].'" contenteditable>'.$row["email"].'</td> 
                     <td><button type="button" name="delete_btn" data-id4="'.$row["ID"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>   
           ';  
      }  
     
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
           </tr> ' ;
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>