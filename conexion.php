<?php

$servernametra = "LAPTOP-PGQLUPR6";
$conectionInfoTRA = array("Database" => "PRUEBA", "UID" => "sa", "PWD" => "72763460", "CharacterSet" => "UTF-8");
$cnx = sqlsrv_connect($servernametra, $conectionInfoTRA);
/* if ($cnx) {
    echo "bien";
}else{
    echo "mal";
} */