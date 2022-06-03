<?php
include("./conexion.php");

if ($_POST) {
    var_dump($_POST);
    var_dump($_FILES);
    die;

    $id = isset($_POST["id"]) ? $_POST["id"] : false;
    $nom = isset($_POST["nom"]) ? $_POST["nom"] : false;
    $ape = isset($_POST["ape"]) ? $_POST["ape"] : false;
    $dni = isset($_POST["dni"]) ? $_POST["dni"] : false;
    $dni = isset($_POST["img"]) ? $_POST["img"] : false;
    $opcion = isset($_POST["opcion"]) ? $_POST["opcion"] : false;
    switch ($opcion) {
        case 1:
            $consulta = "Insert into PERSONAS (NOMBRE, APELLIDO, DNI, FOTO) values ('$nom','$ape','$dni', $img)";
            $resultado = sqlsrv_prepare($cnx, $consulta);
            if (sqlsrv_execute($resultado)) {

                echo 1;
            } else {
                echo 2;
            }
            break;

        case 2:

            $consulta = "update PERSONAS set NOMBRE ='$nom', APELLIDO = '$ape', DNI='$dni' WHERE ID = '$id'";
            $resultado = sqlsrv_prepare($cnx, $consulta);

            if (sqlsrv_execute($resultado)) {
                echo 1;

            } else {
                echo 2;
            }
            break;

        case 3:
            $consulta = "delete from PERSONAS where ID = '$id'";
            $resultado = sqlsrv_query($cnx, $consulta);

            if ($resultado) {
                echo 1;

                //header("location:../tabla.php");
            } else {
                echo 2;
            }
            break;
    }
}
