<?php
if(isset($_POST['taskid']) && isset($_COOKIE['user'])){
    $taskid = $_POST['taskid'];
    require_once('dbcfg.php');
    $query = $db->query("SELECT * FROM `tasks` WHERE `id`=".$taskid."")->fetchAll();
    $status = $query['0']['status'];
    if ($status == 2){
        $query = $db->query("UPDATE `tasks` SET `status`=3 WHERE `id`=".$taskid."");
        echo "Успешно";
        echo '<meta http-equiv="refresh" content="1">';
    }elseif($status == 3 || $status == 1){
        echo 'Задача уже выполнена <meta http-equiv="refresh" content="1">';
    }else{
        $query = $db->query("UPDATE `tasks` SET `status`=1 WHERE `id`=".$taskid."");
        echo 'Успешно <meta http-equiv="refresh" content="1">';
    }
}else{
    echo "У Вас нет доступа к данной операции";
}