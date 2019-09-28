<?php
if(isset($_POST['login']) && !isset($_COOKIE['user'])){
    require_once('dbcfg.php');
    $login = htmlentities($_POST['login']);
    $password = htmlentities($_POST['password']);
    $query = $db->query("SELECT * FROM `admin` WHERE `id`=1")->fetchAll();
    if($login = $query['0']['name'] && $password == $query['0']['pass'])
    {
        setcookie("user", $query['0']['name'], time()+999999, "/");
        echo 'Успешно <meta http-equiv="refresh" content="1">';

    }else{
        echo "Неправильно введен логин или пароль";
    }   
}else{
    echo "Вы уже авторизованы";
}