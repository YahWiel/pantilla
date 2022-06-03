<?php
include_once("./conexion.php");
$resultado = sqlsrv_query($cnx, "select  ID,NOMBRE, APELLIDO,(NOMBRE+ ' '+ APELLIDO)AS NOMBRE_APELLIDOS, DNI, FOTO from  PERSONAS order by id desc;");
$c = 0;
$data = array();
while ($row = sqlsrv_fetch_array($resultado)) {
    $data[$c]['ID'] = $row['ID'];
    $data[$c]['NOMBRE'] = $row['NOMBRE'];
    $data[$c]['APELLIDO'] = $row['APELLIDO'];
    $data[$c]['NOMBRE_APELLIDOS'] = $row['NOMBRE_APELLIDOS'];
    $data[$c]['DNI'] = $row['DNI'];
    $data[$c]['FOTO'] = $row['FOTO'];
    $c++;
}

if (!$data) {
    $data = []; //ENVIA VACIO SI NO HAY RESULTADOS
}

$results = [
    "sEcho" => 1,
    "iTotalRecords" => count($data),
    "iTotalDisplayRecords" => count($data),
    "aaData" => $data
];

echo json_encode($results);