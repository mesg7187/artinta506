<?php

require '../../datos/mysqlConnection.php';
$connect = new mysqli($hostname, $username, $password, $databaseName);
/////////////////BORRA IMAGENES//////////////////
$sql = "DELETE FROM cotizacion WHERE idCotizacion = '" . $_POST["id"] . "'";
if (mysqli_query($connect, $sql)) {
    echo 'Data Deleted';
} else {

    echo("Error description: " . mysqli_error($connect));
}
$dirPath = "images/" . $_POST["id"] . "/";
deleteDir($dirPath);

function deleteDir($dir) {
$it = new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS);
$files = new RecursiveIteratorIterator($it,
             RecursiveIteratorIterator::CHILD_FIRST);
foreach($files as $file) {
    if ($file->isDir()){
        rmdir($file->getRealPath());
    } else {
        unlink($file->getRealPath());
    }
}
rmdir($dir);
echo "Folder borrado";
}
//////////////////BORRA ENTRADA IMAGENES////////////
$sql = "DELETE FROM images WHERE idCotizacion = '" . $_POST["id"] . "'";
if (mysqli_query($connect, $sql)) {
    echo 'Data Deleted';
} else {

    echo("Error description: " . mysqli_error($connect));
}

//////////////////BORRA NOTS COTIZACION////////////
$sql = "DELETE FROM notasCotizacion WHERE idCotizacion = '" . $_POST["id"] . "'";
if (mysqli_query($connect, $sql)) {
    echo 'Data Deleted';
} else {

    echo("Error description: " . mysqli_error($connect));
}

?>