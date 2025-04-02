<?php

function conexion(){

    $host = "host=dpg-cvmpjg3e5dus739m9ijg-a.oregon-postgres.render.com";
$port = "port=5432";
$dbname = "dbname=test_h3hl";
$user = "user=kxskanade";
$password = "password=Rg65RTLOfbLb56HS9LkahHChwiwK32Uj";

$db = pg_connect("$host $port $dbname $user $password");

return $db;
}
?>