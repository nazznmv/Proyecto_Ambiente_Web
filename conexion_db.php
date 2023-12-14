<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$database = "proyecto";

$conn = new mysqli($servername,$username,$password,$database);

if($conn->connect_error){
    die("Error de conexion");
}
