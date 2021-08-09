	<?php
$host = 'localhost';
$database = 'coffebd';
$user = 'root';
$password = '';
?>
<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
	<title>Отзывы</title>
	<link rel="stylesheet" type="text/css" href="dima_otz.css">
</head>
<body>

<div class="futer">
	<a href="main.php" class="ref0" > <img src="dop/logo.png" height="125px" weight="125px"></a>
	<a href="gallery.html" class="ref1" >Галерея</a>      
	<a href="http://localhost/CoffeSite/main.php#Order" class="ref2" >Заказ</a>
	<a href="menu.html" class="ref3" >Меню</a>
	<a href="us.html" class="ref4" >О нас</a>
</div>
<div class="cont">
	<img class="dima_pic" src="dop/dima.jpg">
</div>
<div class="form">
<form action="handler.php" method="post">
	<input type="hidden" name="id" id="id" value="1">-------------------------------------------------
  <h2><b>Введите ваш отзыв:</b></h2>
  <p><textarea required color="#C4C4C4" cols="50" rows="3" id="comment" name="comment"></textarea></p>
  <label>Рейтинг</label>
  <input required type="text" name="rating" id="rating" pattern="[1-5]">
  <p><input type="submit"></p>
 </form>
</div>
<div class="comment">
 <?php


    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
        mysqli_set_charset($link, "utf8");
    $query = "SELECT * FROM otzivi Order BY IDworker=1 DESC LIMIT 5  ";
    $result = mysqli_query($link, $query);
    while($row = $result->fetch_assoc()) {
    #foreach ($result as $key => $value) {

     echo "<br><font style='color:red' 'top:450px'>{$row['textO']}</font> <font style=' left:10px '> {$row['reiting']}</font>";
      //echo '<pre>';var_dump(FILE,LINE, $value);echo'</pre>';//exit;
    }
   ?>
   </div>
</body>
</html>