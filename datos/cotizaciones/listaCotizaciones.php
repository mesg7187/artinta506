<!DOCTYPE html>
<html>
    <head>
        <title>Table with database</title>

        <style>
            table {
                border-collapse: collapse;
                border-spacing: 0;
                width: 200%;
                border: 1px solid #ddd;
            }

            th, td {
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even){
                background-color: #f2f2f2
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>link</th>
                <th>Id</th>
                <th>Estado</th>
                <th>Creacion</th>
                <th>Respuesta</th>
                <th>Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Email</th>
                <th>Numero Telefonico</th>
                <th>Descripcion</th>
                <th>Referencias</th>
                <th>Tamanho</th><!-- comment -->
                <th>Parte del Cuerpo a tatuar</th>
                <th>Preferencias Covid</th>
                <th>Disponibilidad</th>
                <th>Autorizacion</th><!-- comment -->
                <th>leido</th>
            </tr>
            <?php
            require '../../datos/mysqlConnection.php';

            function getImages($cot) {
                echo "que despiche";
                $conn = new mysqli($GLOBALS["hostname"], $GLOBALS["username"], $GLOBALS["password"], $GLOBALS["databaseName"]);
                //   global $conn;
                $query = "SELECT * FROM images where idCotizacion='2022-06-2811:16:04pm-828687574'";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)) {
                   // echo "<div id='img_div'>";
                    echo "<img src='images/" . $row['image'] . "' >";
                    echo "<p>" . $row['idCotizacion'] . "</p>";
                   // echo "</div>";
                }

                $conn->close();
            }
            function hola(){
                echo "hola";
            }

            $conn = new mysqli($hostname, $username, $password, $databaseName);
// Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM cotizacion;";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
// output data of each row
                while ($row = $result->fetch_assoc()) {
                    $val = $row['idCotizacion'];
                    $output .=  "<tr>"
                    . "<td><button onclick='myFunction($val)'  type='button'>Abrir</button></td>
                    <td>" . $row["idCotizacion"] . "</td>"
                    . "<td>" . $row["estado"] . "</td>"
                    . "<td>" . $row["fechaHoraCreacion"] . "</td>"
                    . "<td>" . $row["fechaHoraRespuesta"] . "</td>"
                    . "<td>" . $row["nombre"] . "</td>"
                    . "<td>" . $row["primerApellido"] . "</td>"
                    . "<td>" . $row["segundoApellido"] . "</td>"
                    . "<td>" . $row["email"] . "</td>"
                    . "<td>" . $row["numeroTelefonico"] . "</td>"
                    . "<td width='30%' >" . $row["descripcionTatuaje"] . "</td>"
                    . "<td>" . hola() . "</td>"
                    . "<td>" . $row["tamanho"] . "</td>"
                    . "<td>" . $row["parteDelCuerpo"] . "</td>"
                    . "<td width='30%' >" . $row["preferenciasCovid"] . "</td>"
                    . "</td>" . "<td width='30%'>" . $row["disponibilidad"] . "</td>"
                    . "<td>" . $row["autorizo"] . "</td>"
                    . "<td>" . $row["leido"] . "</td></tr>";
                }
               // echo $output;
                echo "</table>";
            } else {
                echo "0 results";
            }
            $conn->close();
            
            

            ?>
        </table>


        <script>
            function myFunction(val) {
                alert("Abrir" + val + "?");
                location.replace("/vistas/viewTicket.php?cotizacion=" + val);
            }

        </script>


    </body>
</html>
