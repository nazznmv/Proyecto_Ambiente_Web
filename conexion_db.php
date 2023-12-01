<?php
$servername = "localhost";
$username = "root";
$password = "J.N050322jn.";
$database = "proyecto";

$conn = new mysqli($servername,$username,$password,$database);

if($conn->connect_error){
    die("Error de conexion");
}
