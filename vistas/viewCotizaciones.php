

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
    <title>Artinta506-Cotizaciones</title>
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
                xmlhttp.open("GET", "../datos/cotizaciones/Search.php?q=" + str, true);
                xmlhttp.send();
            }
        }
    </script>


</head>  
<body>  
    <?php require 'header.php'; ?>    
    <div class="page">  
        <form>
            Id cotization: <input type="text" onkeyup="showmanager(this.value)">
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
///////////////////////////SELECT////////////////////////////////////    
    $(document).ready(function () {
        function fetch_data()
        {
            $.ajax({
                url: "../datos/cotizaciones/select.php",
                method: "POST",
                success: function (data) {
                    $('#live_data').html(data);
                }
            });
        }
        fetch_data();
        $(document).on('click', '#btn_add', function () {
            var idCotizacion = $('#idCotizacion').text();
            var idCliente = $('#idCliente').text();
            var idTickete = $('#idTickete').text();
            var estado = $('#estado').text();
            var fechaHoraCreacion = $('#fechaHoraCreacion').text();
            var fechaHoraRespuesta = $('#fechaHoraRespuesta').text();
            var categoria = $('#categoria').text();
            var tamanho = $('#tamanho').text();
            var dificultad = $('#dificultad').text();
            var descripcionTatuaje = $('#descripcionTatuaje').text();
            var preferenciasCovid = $('#preferenciasCovid').text();
            var disponibilidad = $('#disponibilidad').text();
            var autorizo = $('#autorizo').text();
            var leido = $('#leido').text();
            var emailEnviado = $('#emailEnviado').text();
            var conclusiones = $('#conclusiones').text();

            if (idCotizacion == '')
            {
                alert("Introduzca idCotizacion");
                return false;
            }

            if (idCliente == '')
            {
                alert("Introduzca idCliente");
                return false;
            }

            if (idTickete == '')
            {
                alert("Introduzca idTickete");
                return false;
            }
            if (estado == '')
            {
                alert("Introduzca estado");
                return false;
            }

            if (fechaHoraCreacion == '')
            {
                alert("Introduzca fechaHoraCreacion");
                return false;
            }

            if (fechaHoraRespuesta == '')
            {
                alert("Introduzca fechaHoraRespuesta");
                return false;
            }
            if (categoria == '')
            {
                alert("Introduzca categoria");
                return false;
            }

            if (tamanho == '')
            {
                alert("Introduzca tamanho");
                return false;
            }

            if (dificultad == '')
            {
                alert("Introduzca dificultad");
                return false;
            }


            if (descripcionTatuaje == '')
            {
                alert("Introduzca descripcionTatuaje");
                return false;
            }




            if (preferenciasCovid == '')
            {
                alert("Introduzca preferenciasCovid");
                return false;
            }
            if (disponibilidad == '')
            {
                alert("Introduzca disponibilidad");
                return false;
            }

            if (autorizo == '')
            {
                alert("Introduzca autorizo");
                return false;
            }

            if (leido == '')
            {
                alert("Introduzca leido");
                return false;
            }


            if (emailEnviado == '')
            {
                alert("Introduzca emailEnviado");
                return false;
            }


            if (conclusiones == '')
            {
                alert("Introduzca conclusiones");
                return false;
            }


            $.ajax({
               //  alert("aqui voy");
                url: "../datos/cotizaciones/insert.php",
                method: "POST",
                data: {idCotizacion: idCotizacion, idCliente: idCliente, idTickete: idTickete, estado: estado,
                    fechaHoraCreacion: fechaHoraCreacion, fechaHoraRespuesta: fechaHoraRespuesta, categoria: categoria, tamanho: tamanho, dificultad: dificultad, descripcionTatuaje: descripcionTatuaje, preferenciasCovid: preferenciasCovid, disponibilidad: disponibilidad, autorizo: autorizo, leido: leido, emailEnviado: emailEnviado, conclusiones: conclusiones},
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
                url: "../datos/cotizaciones/edit.php",
                method: "POST",
                data: {id: id, text: text, column_name: column_name},
                dataType: "text",
                success: function (data) {
                    //alert(data);
                    $('#result').html("<div class='alert alert-success'>" + data + "</div>");
                }
            });
        }
/*
        $(document).on('blur', '.idCotizacion', function () {
            var id = $(this).data("id1");
            var Name = $(this).text();
            edit_data(id, Name, "idCotizacion");
        });*/
        $(document).on('blur', '.idCliente', function () {
            var id = $(this).data("id1");
            var Name = $(this).text();
            edit_data(id, Name, "idCliente");
        });


        $(document).on('blur', '.idTickete', function () {
            var id = $(this).data("id2");
            var Name = $(this).text();
            edit_data(id, Name, "idTickete");
        });


        $(document).on('blur', '.estado', function () {
            var id = $(this).data("id3");
            var Name = $(this).text();
            edit_data(id, Name, "estado");
        });
        $(document).on('blur', '.fechaHoraCreacion', function () {
            var id = $(this).data("id4");
            var Name = $(this).text();
            edit_data(id, Name, "fechaHoraCreacion");
        });


        $(document).on('blur', '.fechaHoraRespuesta', function () {
            var id = $(this).data("id5");
            var Name = $(this).text();
            edit_data(id, Name, "fechaHoraRespuesta");
        });



        $(document).on('blur', '.categoria', function () {
            var id = $(this).data("id6");
            var Name = $(this).text();
            edit_data(id, Name, "categoria");
        });
        $(document).on('blur', '.tamanho', function () {
            var id = $(this).data("id7");
            var Name = $(this).text();
            edit_data(id, Name, "tamanho");
        });


        $(document).on('blur', '.dificultad', function () {
            var id = $(this).data("id8");
            var Name = $(this).text();
            edit_data(id, Name, "dificultad");
        });


        $(document).on('blur', '.descripcionTatuaje', function () {
            var id = $(this).data("id9");
            var Name = $(this).text();
            edit_data(id, Name, "descripcionTatuaje");
        });


        $(document).on('blur', '.preferenciasCovid', function () {
            var id = $(this).data("id10");
            var Name = $(this).text();
            edit_data(id, Name, "preferenciasCovid");
        });


        $(document).on('blur', '.disponibilidad', function () {
            var id = $(this).data("id11");
            var Name = $(this).text();
            edit_data(id, Name, "disponibilidad");
        });



        $(document).on('blur', '.autorizo', function () {
            var id = $(this).data("id12");
            var Name = $(this).text();
            edit_data(id, Name, "autorizo");
        });
        $(document).on('blur', '.leido', function () {
            var id = $(this).data("id13");
            var Name = $(this).text();
            edit_data(id, Name, "leido");
        });


        $(document).on('blur', '.emailEnviado', function () {
            var id = $(this).data("id14");
            var Name = $(this).text();
            edit_data(id, Name, "emailEnviado");
        });


        $(document).on('blur', '.conclusiones', function () {
            var id = $(this).data("id15");
            var Name = $(this).text();
            edit_data(id, Name, "conclusiones");
        });


        $(document).on('click', '.btn_delete', function () {
            var id = $(this).data("id16");
            if (confirm("Are you sure you want to delete this?"))
            {
                $.ajax({
                    url: "../datos/cotizaciones/delete.php",
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

<script>
    ////////ABRIR COTIZACION BOTON
    function myFunction(val) {
        //  alert("Abrir" + val + "?");
        location.replace("/vistas/viewCotizacion.php?cotizacion=" + val);
    }

</script>
