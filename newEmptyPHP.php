<?php
$host = 'localhost'; // адрес сервера 
$database = 'test'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль


$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

if(isset($_POST['inputtext']) && isset($_POST['ondeletetext'])){
    $inputtext = $_POST['inputtext'];
    $ondeletetext = $_POST['ondeletetext'];
}

  $result = str_replace($ondeletetext, '', $inputtext);
  $sql = mysqli_query($link,"INSERT INTO tokens (string)  VALUES ('$result') ");

?>


<form action= "newEmptyPHP.php" method = "POST">
    <input type = "text" name = "inputtext">
    <input type = "text" name = "ondeletetext">
    <input type = "submit" name = "submit">
</form>



<?php 
    echo $inputtext;
    echo '<br>';
    echo $ondeletetext;
    echo '<br>';
    echo $result;
?>