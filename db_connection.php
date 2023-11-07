<?php
$host = "host=localhost";
$port = "port=5000";
$username = "user=postgres";
$password = "password=Abhiram@99";
$database = "dbname=machinetest";
$connection = pg_connect("$host $port $username $password $database");

if(!$connection){
    echo "connection error";
}
else{
    echo "database connected";
}
?>