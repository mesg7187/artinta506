<!DOCTYPE html>
<html>
    <head>
        <title>W3.CSS Template</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            html,body,h1,h2,h3,h4,h5,h6 {
                font-family: "Roboto", sans-serif
            }
        </style>

        <?php
        require '../datos/mysqlConnection.php';

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
                $estado = $row['estado'];
                $fechaHoraCreacion = $row['fechaHoraCreacion'];
                $fechaHoraRespuesta = $row['fechaHoraRespuesta'];
                $nombre = $row['nombre'];
                $primerApellido = $row['primerApellido'];
                $segundoApellido = $row['segundoApellido'];
                $email = $row['email'];
                $numeroTelefonico = $row['numeroTelefonico'];
                $descripcionTatuaje = $row['descripcionTatuaje'];
                $tamanho = $row['tamanho'];
                $parteDelCuerpo = $row['parteDelCuerpo'];
                $preferenciasCovid = $row['preferenciasCovid'];
                $disponibilidad = $row['disponibilidad'];
                $autorizo = $row['autorizo'];
                $leido = $row['leido'];
            }
        }

        //    echo $nombre;
        ?>


    </head>
    <body class="w3-light-grey">

        <!-- Page Container -->
        <div class="w3-content w3-margin-top" style="max-width:1400px;">

            <!-- The Grid -->
            <div class="w3-row-padding">

                <!-- Left Column -->
                <div class="w3-third">

                    <div class="w3-white w3-text-grey w3-card-4">
                        <div class="w3-display-container">
                            <img src="/vistas/img/PersonIcon.jpg" style="width:100%" alt="Avatar">
                            <div class="w3-display-bottomleft w3-container w3-text-black">
                                <h2><?php echo $nombre; ?> <?php echo $primerApellido; ?><?php echo $segundoApellido ;     ?></h2>
                            </div>
                        </div>
                        <div class="w3-container">
                            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Id</p>
                            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Provincia</p>
                            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $email?></p>
                            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $numeroTelefonico?></p>
                            <hr>
                            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Cotizacion      </b></p>
                            <p class="w3-large"><b><i class="w3-center w3-text-white"></i>ID   :</b><?php echo $idCotizacion ?> </p>
                            <p><b>Fecha abierto</b></p>
                            <div class="w3-light-grey w3-round-xlarge">
                                <div class="w3-round-xlarge w3-teal w3-center" style="height:24px;width:100%"><?php echo $fechaHoraCreacion ?></div>
                            </div>
                            <p><b>Fecha realizada</b></p>
                            <div class="w3-light-grey w3-round-xlarge">
                                <div class="w3-round-xlarge w3-teal w3-center" style="height:24px;width:100%"> <?php echo $fechaHoraRespuesta ?></div>
                            </div>


                            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Descripcion del Tatuaje</b></p>
                            <p><?php echo $descripcionTatuaje; ?></p>
                            <p><b>Tamanho</b></p>
                            <div class="w3-light-grey w3-round-xlarge w3-small">
                                <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:100%"><?php echo $tamanho ?></div>
                            </div>
                            <p><b>Parte del Cuerpo</b></p>
                            <div class="w3-light-grey w3-round-xlarge w3-small">
                                <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:100%">
                                    <div class="w3-center w3-text-white"><?php echo $parteDelCuerpo ?></div>
                                </div>
                            </div>
                            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Preferencias Covid</b></p>
                            <p> <?php echo $preferenciasCovid ?></p>
                            <p><b>Disponibilidad</b></p>

                            <p> <?php echo $disponibilidad ?></p>



                            <p><b>Referencias</b></p>

                            <p>   <?php
                              $result = mysqli_query($conn, "SELECT * FROM images WHERE idCotizacion=". $idCotizacion);
                                while ($row = mysqli_fetch_array($result)) {
                                    if ($row['id']!=" "){
                                    echo $row['image'];
                                    echo "<div id='img_div'>";
                                    echo "<img src='../datos/cotizaciones/images/". $idCotizacion ."/". $row['image'] . "' >";
                                    echo "</div>";}
                                }
                                ?></p>



                            <br>

                            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Entendimiendo De Condiciones</b></p>
                            <p><b>Autorizo este sitio usar mi informacion</b></p>
                            <div class="w3-light-grey w3-round-xlarge">
                                <div class="w3-round-xlarge w3-teal w3-center" style="height:24px;width:100%"><?php echo $autorizo ?></div>
                            </div>
                            <p><b>Terminos y condiciones Leidos</b></p>
                            <div class="w3-light-grey w3-round-xlarge">
                                <div class="w3-round-xlarge w3-teal w3-center" style="height:24px;width:100%"><?php echo $leido ?></div>
                            </div>

                            <br>
                        </div>
                    </div><br>

                    <!-- End Left Column -->
                </div>

                <!-- Right Column -->
                <div class="w3-twothird">

                    <div class="w3-container w3-card w3-white w3-margin-bottom">
                        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Nota#</h2>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>Descripcion sesion actual</b></h5>
                            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Fecha- <span class="w3-tag w3-teal w3-round">Current</span></h6>
                            <p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
                            <hr>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>Materiales</b></h5>
                            <p>Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
                            <hr>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>Descripcion siguiente sesion</b></h5>
                            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Fecha</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p><br>
                        </div>
                    </div>


                    <!-- End Right Column -->
                </div>

                <!-- End Grid -->
            </div>

            <!-- End Page Container -->
        </div>

        <footer class="w3-container w3-teal w3-center w3-margin-top">
            <p>BOTON PARA AGREGAR NOTAS</p>
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
            <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
        </footer>

    </body>
</html>
