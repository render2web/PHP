<?php
$serverName = "localhost";
$connectionInfo = array( "Database"=>"usuarios","UID"=>"crud","PWD"=>"123456","CharacterSet" => "UTF-8");
$conn_sis = sqlsrv_connect( $serverName, $connectionInfo);

if(!$conn_sis){
    die(print_r(sqlsrv_errors(), true));
}

$sql = "SELECT * FROM tabla_usuarios";
$ejecuta = sqlsrv_query($conn_sis, $sql);

while($fila = sqlsrv_fetch_array($ejecuta, SQLSRV_FETCH_ASSOC)) {
    print_r($fila);
} 
