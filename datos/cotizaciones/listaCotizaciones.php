<!DOCTYPE html>
<html>
 <------------------------   EN DESUSO-------------------------->
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
        <?php require '../../vistas/header.php'; ?>  
        <table>
            <tr>
                <th>link</th>
                <th>Id</th>
                <th>Id Cliente</th>
                <th>Estado</th>
                <th>Creacion</th>
                <th>Respuesta</th>
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
                    $val = $row['idCotizacion'];
                    echo "<tr>"
                    . "<td><button onclick='myFunction($val)'  type='button'>Abrir</button></td>
                    <td>" . $row["idCotizacion"] . "</td>"
                    . "<td>" . $row["idCliente"] . "</td>"
                    . "<td>" . $row["estado"] . "</td>"
                    . "<td>" . $row["fechaHoraCreacion"] . "</td>"
                    . "<td>" . $row["fechaHoraRespuesta"] . "</td>"
                    . "<td width='30%' >" . $row["descripcionTatuaje"] . "</td>"
                    . "<td>" . $row["tamanho"] . "</td>"
                    . "<td>" . $row["parteDelCuerpo"] . "</td>"
                    . "<td width='30%' >" . $row["preferenciasCovid"] . "</td>"
                    . "<td>" . "<td width='30%'>" . $row["disponibilidad"] . "</td>"
                    . "<td>" . $row["autorizo"] . "</td>"
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
            function myFunction(val) {
              //  alert("Abrir" + val + "?");
                location.replace("/vistas/viewCotizacion.php?cotizacion=" + val);
            }

        </script>


    </body>
</html>
