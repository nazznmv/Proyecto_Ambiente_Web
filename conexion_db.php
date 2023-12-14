<?php
$servername = "localhost";
$username = "root";
$password = "mel";
$database = "proyecto";

$conn = new mysqli($servername,$username,$password,$database);

if($conn->connect_error){
    die("Error de conexion");
}
