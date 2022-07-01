<?php include 'header.php'; ?>
<html>  
    <head>   
<style>
a:link, a:visited {
  background-color: #6c757d;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #1b8dcc;
}
</style>

         <style>tr:nth-child(even) {background-color: #ffffff;}</style>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  



        <script>
function showmanager(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","managerData/search.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>


    </head>  
    <body>      
        <div class="page">  
            <form>
  First name: <input type="text" onkeyup="showmanager(this.value)">
</form>
<br>
<div id="txtHint"><b>Manager info will be listed here...</b></div>
</div>
            <br />  
            <br />
            <br />
            <div class="table-responsive">  
                <span id="result"></span>
                <div id="live_data"></div>                 
            </div>  

    </body>  
</html>  
<script>  
    $(document).ready(function(){  
        function fetch_data()  
        {  
            $.ajax({  
                url:"managerData/select.php",  
                method:"POST",  
                success:function(data){  
                    $('#live_data').html(data);  
                }  
            });  
        }  
        fetch_data();  
        $(document).on('click', '#btn_add', function(){  
            var FirstName = $('#FirstName').text(); 
            var LastName = $('#LastName').text();  
             var email = $('#email').text();  

            if(FirstName == '')  
            {  
                alert("Enter manager FirstName");  
                return false;  
            }  
			
			if(LastName == '')  
            {  
                alert("Enter manager LastName");  
                return false;  
            }  
			
			if(email == '')  
            {  
                alert("Enter manager email");  
                return false;  
            }  
                                               

            $.ajax({  
                url:"managerData/insert.php",  
                method:"POST",  
                data:{FirstName:FirstName,LastName:LastName,email:email},  
                dataType:"text",  
                success:function(data)  
                {  
                    alert(data);  
                    fetch_data();  
                }  
            })  
        });  
        
        function edit_data(id, text, column_name)  
        {  
            $.ajax({  
                url:"managerData/edit.php",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                    //alert(data);
                    $('#result').html("<div class='alert alert-success'>"+data+"</div>");
                }  
            });  
        }  
   
        $(document).on('blur', '.FirstName', function(){  
            var id = $(this).data("id1");  
            var Name = $(this).text();  
            edit_data(id, Name, "FirstName");  
        });    
        $(document).on('blur', '.LastName', function(){  
            var id = $(this).data("id2");  
            var Name = $(this).text();  
            edit_data(id, Name, "LastName");  
        });    

 
        $(document).on('blur', '.email', function(){  
            var id = $(this).data("id3");  
            var Name = $(this).text();  
            edit_data(id, Name, "email");  
        });    
  


        $(document).on('click', '.btn_delete', function(){  
            var id=$(this).data("id4");  
            if(confirm("Are you sure you want to delete this?"))  
            {  
                $.ajax({  
                    url:"managerData/delete.php",  
                    method:"POST",  
                    data:{id:id},  
                    dataType:"text",  
                    success:function(data){  
                        alert(data);  
                        fetch_data();  
                    }  
                });  
            }  
        });  
    });  
</script>

<?php  include 'footer.php';?>