<?php
$servername = "localhost";
$username = "root";
$password = "";


// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE myDB";




$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', trim($uri, '/'));
$method = $_SERVER['REQUEST_METHOD'];


$file = 'news/' . $segments[0] . '.php';

if(file_exists($file))
    require $file;
else
    require 'pages/404.php';


