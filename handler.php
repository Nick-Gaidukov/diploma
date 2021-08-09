<?php
$host = 'localhost';
$database = 'coffebd';
$user = 'root';
$password = '';


if(isset($_POST['comment']) && isset($_POST['rating']) && isset($_POST['id'])) {

    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
        mysqli_set_charset($link, "utf8");

$comment = htmlentities(mysqli_real_escape_string($link,$_POST["comment"]));
$dateNow = htmlentities(mysqli_real_escape_string($link,date('Y:m:d')));
$rating = htmlentities(mysqli_real_escape_string($link,$_POST["rating"]));
$id = $_POST["id"];
    $query ="INSERT INTO otzivi VALUES('$dateNow','$comment','$rating',$id)";

    echo $query;
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }
}
header("Location: http://localhost/CoffeSite/dima_otz.php")
?>