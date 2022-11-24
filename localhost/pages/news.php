<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "CREATE TABLE MyNews (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
about VARCHAR(300) NOT NULL,
photo LONGBLOB,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";



$method = $_SERVER['REQUEST_METHOD'];

if(empty($segments[1]) && $method === 'GET')
{
    // Отображаем каталог товаров
}
elseif($segments[1] === 'add' && $method === 'GET')
{
    // отображаем форму добавления товара
}
elseif($segments[1] === 'add' && $method === 'POST')
{
    // добавляем новый товар в базу
}