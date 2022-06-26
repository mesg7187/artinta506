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
                <th>Tamanho</th><!-- comment -->
                <th>Parte del Cuerpo a tatuar</th>
                <th>Preferencias Covid</th>
                <th>Disponibilidad</th>
                <th>Autorizacion</th><!-- comment -->
                <th>leido</th>
            </tr>
            <?php
            require '../../datos/mysqlConnection.php';

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
                    echo "<tr>"
                    . "<td><button onclick='function()' type='button' name='delete_btn' data-id1='" . $row['idCotizacion'] . "''>Abrir</button></td>
                    <td>" . $row["idCotizacion"] . "</td><td>" . $row["estado"] . "</td><td>" . $row["fechaHoraCreacion"] . "</td>"
                    . "<td>" . $row["fechaHoraRespuesta"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["primerApellido"] . "</td>"
                    . "<td>" . $row["segundoApellido"] . "</td><td>" . $row["email"] . "</td><td>" . $row["numeroTelefonico"] . "</td>"
                    . "<td width='30%' >" . $row["descripcionTatuaje"] . "</td><td>" . $row["tamanho"] . "</td><td>" . $row["parteDelCuerpo"] . "</td>"
                    . "<td width='30%' >" . $row["preferenciasCovid"] . "</td></td>" . "<td width='30%'>" . $row["disponibilidad"] . "</td><td>" . $row["autorizo"] . "</td>"
                    . "<td>" . $row["leido"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </table>

        <script>
            function () {
                alert ('hola');
                var id = $(this).data("id1");
                location.replace("https://www.w3schools.com");
            }

        </script>
    </body>
</html>
