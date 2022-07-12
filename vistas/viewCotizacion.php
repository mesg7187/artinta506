<!DOCTYPE html>
<html>
    <head>
        <title>Artinta506-Cotizacion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body,h1,h2,h3,h4,h5,h6 {
                font-family: "Raleway", Arial, Helvetica, sans-serif
            }
            .mySlides {
                display: none
            }
        </style>
        <?php
        require '../datos/mysqlConnection.php';
        // echo $_GET['cotizacion'];

        $conn = new mysqli($hostname, $username, $password, $databaseName);
// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //  echo $_GET['cotizacion'];
        $sql = "SELECT * FROM cotizacion WHERE idCotizacion='" . $_GET['cotizacion'] . "'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
// output data of each row
            while ($row = $result->fetch_assoc()) {
                $idCotizacion = $row['idCotizacion'];
                $idCliente = $row["idCliente"];
                $estado = $row['estado'];
                $fechaHoraCreacion = $row['fechaHoraCreacion'];
                $fechaHoraRespuesta = $row['fechaHoraRespuesta'];
                $descripcionTatuaje = $row['descripcionTatuaje'];
                $tamanho = $row['tamanho'];
                $parteDelCuerpo = $row['parteDelCuerpo'];
                $preferenciasCovid = $row['preferenciasCovid'];
                $disponibilidad = $row['disponibilidad'];
                $autorizo = $row['autorizo'];
                $leido = $row['leido'];
            }
        }
/////////////////////////////////////////////////////////////////////////
        $conn = new mysqli($hostname, $username, $password, $databaseName);
// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //  echo $_GET['cotizacion'];
        $sql = "SELECT * FROM cliente WHERE idCliente='" . $idCliente . "'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
// output data of each row
            while ($row = $result->fetch_assoc()) {
                $idCliente = $row['idCliente'];
                $cedula = $row['cedula'];
                $nombre = $row['nombre'];
                $primerApellido = $row['primerApellido'];
                $segundoApellido = $row['segundoApellido'];
                $email = $row['email'];
                $numeroTelefonico = $row['numeroTelefonico'];
                $provincia = $row['provincia'];
                $instagram = $row['instagram'];
                $facebook = $row['facebook'];
                $fechaDeNacimiento = $row['fechaDeNacimiento'];
            }
        }

        //    echo $nombre;
        ?>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    </head>
    <body class="w3-content w3-border-left w3-border-right">
        <p style.display = "none" id = "idCotizacion" value="3"><?php echo $idCotizacion ?></p>
        <?php //require 'header.php'; ?>  

        <!-- Sidebar/menu -->
        <nav class="w3-sidebar w3-light-grey w3-collapse w3-top" style="z-index:3;width:260px" id="mySidebar">
            <div class="w3-container w3-display-container w3-padding-16">
                <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-transparent w3-display-topright"></i>
                <h2><?php echo $nombre; ?> <?php echo $primerApellido; ?> <?php echo $segundoApellido; ?></h2>

                <div class="w3-container">
                    <h5 class="w3-opacity"><b>Fecha de Nacimiento</b></h5>
                    <?php echo $fechaDeNacimiento ?>
                    <hr>
                </div><!-- comment -->

                <div class="w3-container">
                    <h5 class="w3-opacity"><b>Instagram</b></h5>
                    <?php echo $instagram ?>
                    <hr>
                </div><!-- comment -->

                                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Facebook</b></h5>
                        <?php echo $facebook ?>
                        <hr>
                    </div><!-- comment -->
                <hr>
                <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-black w3-large  "></i><?php echo $cedula ?></p>
                <p><i class="fa fa-home fa-fw w3-margin-right w3-black w3-large "></i><?php echo $provincia ?></p></p>
                <p><i class="fa fa-envelope fa-fw w3-margin-right w3-black w3-large "></i><?php echo $email ?></p>
                <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $numeroTelefonico ?></p>
                <form action="/action_page.php" target="_blank" >
                    <p><label><i class="fa fa-calendar-check-o"></i> Fecha de Creacion</label>

                        <input  class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckIn" value="<?php echo $fechaHoraCreacion ?>"required>          
                    <p><label><i class="fa fa-calendar-o"></i>Fecha de atendido</label></p>
                    <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckOut" value="<?php echo $fechaHoraRespuesta ?> required>    
                    <p class="w3-large"  ><b><i class=" idCotizacion w3-center w3-text-white"></i>ID   :</b><?php echo $idCotizacion ?> </p>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Descripcion del Tatuaje</b></h5>
                        <?php echo $descripcionTatuaje; ?>
                        <hr>
                    </div><!-- comment -->


                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Tamanho</b></h5>
                        <?php echo $tamanho ?>
                        <hr>
                    </div><!-- comment -->


                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Parte del cuerpo</b></h5>
                        <?php echo $parteDelCuerpo ?>
                        <hr>
                    </div><!-- comment -->


                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Preferencias Covid</b></h5>
                        <?php echo $preferenciasCovid ?>
                        <hr>
                    </div><!-- comment -->

                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Disponibilidad</b></h5>
                        <?php echo $disponibilidad ?>
                        <hr>
                    </div><!-- comment -->

                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Autorizo este sitio usar mi informacion</b></h5>
                        <?php echo $autorizo ?>
                        <hr>
                    </div><!-- comment -->
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Terminos y condiciones Leidos</b></h5>
                        <?php echo $leido ?>
                        <hr>
                    </div><!-- comment -->

                </form>
            </div>
            <div class="w3-bar-block">
                <a href="#apartment" class="w3-bar-item w3-button w3-padding-16"><i class="fa fa-building"></i> Referencias</a>
                <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-16" onclick="document.getElementById('subscribe').style.display = 'block'"><i class="fa fa-rss"></i> Agregar Nota</a>
            </div>
        </nav>

        <!-- Top menu on small screens -->
        <header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
            <span class="w3-bar-item">Rental</span>
            <a href="javascript:void(0)" class="w3-right w3-bar-item w3-button" onclick="w3_open()"><i class="fa fa-bars"></i></a>
        </header>

        <!-- Overlay effect when opening sidebar on small screens -->
        <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

        <!-- !PAGE CONTENT! -->
        <div class="w3-main w3-white" style="margin-left:260px">

            <!-- Push down content on small screens -->
            <div class="w3-hide-large" style="margin-top:80px"></div>


            <!-- Slideshow Header -->
            <div class="w3-container" id="apartment">
                <h2 class="w3-text-black">Referencias</h2>


                <?php
                $conn = new mysqli($hostname, $username, $password, $databaseName);
                $result = mysqli_query($conn, "SELECT * FROM notasCotizacion WHERE idCotizacion=" . $idCotizacion);

                while ($row = mysqli_fetch_array($result)) {

                    $output = "<div class='w3-card-4 w3-margin w3-white'  ><div class = 'w3-container'>
                <hr>

                <h4><strong id = 'contact'>Descripcion siguiente sesion</strong></h4>
                <h6 class='w3-text-teal'><i class='fa fa-calendar fa-fw w3-margin-right'></i>" . $row['fechaActual'] . " </h6>
                <p>" . $row['descripcionActual'] . " </p>
               

                <hr>

                <h4><strong id = 'contact'>Descripcion siguiente sesion</strong></h4>
                <h6 class='w3-text-teal'><i class='fa fa-calendar fa-fw w3-margin-right'></i>" . $row['fechaSiguiente'] . " </h6>
                <p>" . $row['descripcionSiguiente'] . " </p>
                <p><button class = 'w3-button w3-padding-large w3-red w3-border' onclick = 'document.getElementById('subscribe').style.display = 'block'>Borrar</button></p>
            </div></div>" . $output;
                }
                echo $output;
                $conn->close();
                ?>



                <?php
                $conn = new mysqli($hostname, $username, $password, $databaseName);
                $result = mysqli_query($conn, "SELECT * FROM images WHERE idCotizacion=" . $idCotizacion);
                // echo strval($result);
                while ($row = mysqli_fetch_array($result)) {
                    $output = "<div class='w3-display-container mySlides'>
                    <img src='../datos/cotizaciones/images/" . $idCotizacion . "/" . $row['image'] . "'>
                    <div class = 'w3-display-bottomleft w3-container w3-black'>
                    </div>
                    </div>";
                    echo $output;
                }
                $conn->close();
                ?>

            </div>


            <div class = "w3-row-padding w3-section">

                <?php
                $conn = new mysqli($hostname, $username, $password, $databaseName);
                $result = mysqli_query($conn, "SELECT * FROM images WHERE idCotizacion=" . $idCotizacion);
// echo strval($result);
                $div = 1;

                while ($row = mysqli_fetch_array($result)) {

                    $output = "<div class = 'w3-col s3'>
                    <img class = 'demo w3-opacity w3-hover-opacity-off' src = '../datos/cotizaciones/images/" . $idCotizacion . "/" . $row['image'] . "' style = 'width:100%;
                        cursor:pointer' onclick = 'currentDiv(" . $div . ")'>
                </div>" . $output;
                    $div++;
                }
                echo $output;
                $conn->close();
                ?>


            </div>










            <footer class = "w3-container w3-padding-16" style = "margin-top:32px">Powered by <a href = "https://www.w3schools.com/w3css/default.asp" title = "W3.CSS" target = "_blank" class = "w3-hover-text-green">w3.css</a></footer>

            <!--End page content-->
        </div>

        <!--Subscribe Modal-->
        <div id = "subscribe" class = "w3-modal">
            <div class = "w3-modal-content w3-animate-zoom w3-padding-large">
                <div class = "w3-container w3-white w3-center">
                    <form enctype="multipart/form-data"  method="POST"  class="w3-container" >
                        <i onclick = "document.getElementById('subscribe').style.display = 'none'" class = "fa fa-remove w3-button w3-xlarge w3-right w3-transparent"></i>
                        <h2 class = "w3-wide">Agreando Nota</h2>

                        <div class = "w3-container">
                            <hr>

                            <h4><strong>Descripcion sesion actual</strong></h4>
                            <h6 class="w3-text-teal"><i class=" fa fa-calendar fa-fw w3-margin-right w3-black "></i><input class="fechaActual" type="date" id="fechaActual" name="fechaActual"></h6>

                            <textarea id = "descripcionActual" class = "descripcionActual w3-input w3-border" name="w3review" rows="7" cols="77">Agregue una descripcion de la sesion actual</textarea>
                            <hr>

                            <h4><strong id = "contact" >Descripcion siguiente sesion</strong></h4>
                            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right w3-black "></i><input class="fechaSiguiente" type="date" id="fechaSiguiente" name="fechaSiguiente"></h6>
                            <textarea class = "descripcionSiguiente w3-input w3-border" id="descripcionSiguiente" name="w3review" rows="7" cols="77">Agregue una descripcion de la siguiente sesion </textarea>

                        </div>
                        <button name="btn_add" type = "botton" class = "w3-button w3-padding-large w3-green w3-margin-bottom" onclick = "agregaNota2()">Agregar</button>


                    </form>

                </div>
            </div>
        </div>


        <script>
            // Script to open and close sidebar when on tablets and phones
            function w3_open() {
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("myOverlay").style.display = "block";
            }

            function w3_close() {
                document.getElementById("mySidebar").style.display = "none";
                document.getElementById("myOverlay").style.display = "none";
            }

            // Slideshow Apartment Images
            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
                showDivs(slideIndex += n);
            }

            function currentDiv(n) {
                showDivs(slideIndex = n);
            }

            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("demo");
                if (n > x.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = x.length
                }
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                }
                x[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " w3-opacity-off";
                images
            }
        </script>







        <script>
            ///////////////////////////SELECT////////////////////////////////////    

            function agregaNota2() {




                var idCotizacion = document.getElementById('idCotizacion').innerHTML;
                var fechaActual = document.getElementById('fechaActual').value;
                var descripcionActual = document.getElementById('descripcionActual').value;
                var fechaSiguiente = document.getElementById('fechaSiguiente').value;
                var descripcionSiguiente = document.getElementById('descripcionSiguiente').value;

                // alert(document.getElementById('descripcionActual').value);

                $.ajax({
                    url: "../datos/cotizaciones/notasCotizaciones/insert.php",
                    method: "POST",
                    data: {idCotizacion: idCotizacion, fechaActual: fechaActual, descripcionActual: descripcionActual, fechaSiguiente: fechaSiguiente,
                        descripcionSiguiente: descripcionSiguiente},
                    dataType: "text",
                    success: function (data)
                    {
                        alert(data);
                        // fetch_data();
                    }
                })
            }
        </script>



    </body>
</html>
