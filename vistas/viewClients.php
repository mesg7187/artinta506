<?php ?>
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

        <style>tr:nth-child(even) {
            background-color: #ffffff;
        }</style>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  



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

        <style>
            .button {
                background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 7px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                -webkit-transition-duration: 0.4s; /* Safari */
                transition-duration: 0.4s;
                cursor: pointer;
            }

            .button5 {
                background-color: white;
                color: black;
                border: 2px solid #555555;
            }

            .button5:hover {
                background-color: #6c757d;
                color: white;
            }
        </style>


    </style>
    <meta charset="utf-8" />
    <title>Artinta506Clients</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <link href="styles/Site.css" rel="stylesheet" type="text/css" />
    <script src="/Scripts/jquery-1.5.1.min.js" type="text/javascript"></script>
    <script src="/Scripts/modernizr-1.7.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  

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

    <style>tr:nth-child(even) {
            background-color: #ffffff;
        }</style>
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
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "../datos/clientes/Search.php?q=" + str, true);
                xmlhttp.send();
            }
        }
    </script>


</head>  
<body>  
<?php require 'header.php'; ?>      
    <div class="page">  
        <form>
            Primer Nombre: <input type="text" onkeyup="showmanager(this.value)">
        </form>
        <br>
        <div id="txtHint"><b>La informacion de los clientes will be listed here</b></div>
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
///////////////////////////SELECT////////////////////////////////////    
    $(document).ready(function () {
        function fetch_data()
        {
            $.ajax({
                url: "../datos/clientes/select.php",
                method: "POST",
                success: function (data) {
                    $('#live_data').html(data);
                }
            });
        }
        fetch_data();
        $(document).on('click', '#btn_add', function () {
            var cedula = $('#cedula').text();
            var nombre = $('#nombre').text();
            var primerApellido = $('#primerApellido').text();
            var segundoApellido = $('#segundoApellido').text();
            var numeroTelefonico = $('#numeroTelefonico').text();
            var email = $('#email').text();
            var provincia = $('#provincia').text();
            var instagram = $('#instagram').text();
            var facebook = $('#facebook').text();
            var fechaDeNacimiento = $('#fechaDeNacimiento').text();

            if (cedula == '')
            {
                alert("Introduzca cedula");
                return false;
            }

            if (nombre == '')
            {
                alert("Introduzca nombre");
                return false;
            }

            if (primerApellido == '')
            {
                alert("Introduzca primerApellido");
                return false;
            }
            if (segundoApellido == '')
            {
                alert("Introduzca segundoApellido");
                return false;
            }

            if (numeroTelefonico == '')
            {
                alert("Introduzca numeroTelefonico");
                return false;
            }

            if (email == '')
            {
                alert("Introduzca email");
                return false;
            }
            if (provincia == '')
            {
                alert("Introduzca provincia");
                return false;
            }

            if (instagram == '')
            {
                alert("Introduzca instagram");
                return false;
            }

            if (facebook == '')
            {
                alert("Introduzca facebook");
                return false;
            }


            if (fechaDeNacimiento == '')
            {
                alert("Introduzca fechaDeNacimiento");
                return false;
            }


            $.ajax({
                url: "../datos/clientes/insert.php",
                method: "POST",
                data: {cedula: cedula, nombre: nombre, primerApellido: primerApellido, segundoApellido: segundoApellido,
                    numeroTelefonico: numeroTelefonico, email: email, provincia: provincia, instagram: instagram, facebook: facebook, fechaDeNacimiento: fechaDeNacimiento},
                dataType: "text",
                success: function (data)
                {
                    alert(data);
                    fetch_data();
                }
            })
        });

        function edit_data(id, text, column_name)
        {
            $.ajax({
                url: "../datos/clientes/edit.php",
                method: "POST",
                data: {id: id, text: text, column_name: column_name},
                dataType: "text",
                success: function (data) {
                   // alert(data);
                    $('#result').html("<div class='alert alert-success'>" + data + "</div>");
                }
            });
        }

        $(document).on('blur', '.cedula', function () {
            var id = $(this).data("id1");
            var Name = $(this).text();
            edit_data(id, Name, "cedula");
        });
        $(document).on('blur', '.nombre', function () {
            var id = $(this).data("id2");
            var Name = $(this).text();
            edit_data(id, Name, "nombre");
        });


        $(document).on('blur', '.primerApellido', function () {
            var id = $(this).data("id3");
            var Name = $(this).text();
            edit_data(id, Name, "primerApellido");
        });


        $(document).on('blur', '.segundoApellido', function () {
            var id = $(this).data("id4");
            var Name = $(this).text();
            edit_data(id, Name, "segundoApellido");
        });
        $(document).on('blur', '.numeroTelefonico', function () {
            var id = $(this).data("id5");
            var Name = $(this).text();
            edit_data(id, Name, "numeroTelefonico");
        });


        $(document).on('blur', '.email', function () {
            var id = $(this).data("id6");
            var Name = $(this).text();
            edit_data(id, Name, "email");
        });



        $(document).on('blur', '.provincia', function () {
            var id = $(this).data("id7");
            var Name = $(this).text();
            edit_data(id, Name, "provincia");
        });
        $(document).on('blur', '.instagram', function () {
            var id = $(this).data("id8");
            var Name = $(this).text();
            edit_data(id, Name, "instagram");
        });


        $(document).on('blur', '.facebook', function () {
            var id = $(this).data("id9");
            var Name = $(this).text();
            edit_data(id, Name, "facebook");
        });


        $(document).on('blur', '.fechaDeNacimiento', function () {
            var id = $(this).data("id10");
            var Name = $(this).text();
            edit_data(id, Name, "fechaDeNacimiento");
        });




        $(document).on('click', '.btn_delete', function () {
            var id = $(this).data("id11");
            if (confirm("Are you sure you want to delete this?"))
            {
                $.ajax({
                    url: "../datos/clientes/delete.php",
                    method: "POST",
                    data: {id: id},
                    dataType: "text",
                    success: function (data) {
                        alert(data);
                        fetch_data();
                    }
                });
            }
        });
    });
</script>

