<?php
$servername = "localhost";
$username = "root";
$password = "Jmontero123.";
$database = "proyecto";

$conn = new mysqli($servername,$username,$password,$database);

if($conn->connect_error){
    die("Error de conexion");
}
