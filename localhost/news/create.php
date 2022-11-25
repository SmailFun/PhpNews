<html>
<head>
    <title>Add News</title>
    <meta http-equiv="Content-Type" content="text/html; charset=" iso
    "-8859-1">
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $about = $_POST['about'];

    $sql = "INSERT INTO myNews (name, about) VALUES('". $name ."', '". $about ."')";

    $conn->query($sql);

    $conn->close();
}

?>

<form name="form1" method="post" action="confirm">
    <table>
        <tr>
            <td>Имя Автора</td>

            <td><input name="name" type="text"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>о Новости</td>
            <td><textarea name="about" id="about"></textarea></td>
        </tr>
        <br>
        <tr>
            <td colspan="2">
                <div>
                    <input name="add" type="submit" id="add" value="Отправить">
                </div>
            </td>
        </tr>
    </table>
</form>

<a href="../List">Вернуться к списку новостей</a>
</body>
</html>
