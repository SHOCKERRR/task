<?php
if(isset($_POST['name'])){
    require_once('dbcfg.php');
    $name = htmlentities($_POST['name']);
    $e_mail = htmlentities($_POST['e_mail']);
    $zdn = htmlentities($_POST['task']);
    $query = "INSERT INTO `tasks` (`name`,`e-mail`,`task`,`status`) VALUES ('$name','$e_mail','$zdn','0')";
    $db->prepare($query)->execute();
    
    echo "Задача успешно добавлена";
    echo '<meta http-equiv="refresh" content="1">';
}