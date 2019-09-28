<?php
if(isset($_POST['taskid']) && isset($_COOKIE['user'])){
    $taskid = $_POST['taskid'];
    $task_new = $_POST['task'];
    require_once('dbcfg.php');
    $query = $db->query("SELECT * FROM `tasks` WHERE `id`=".$taskid."")->fetchAll();
    $task_old = $query['0']['task'];
    $status = $query['0']['status'];
    if ($task_new != $task_old && $status == 1){
    $query = $db->query("UPDATE `tasks` SET `task`='".$task_new."',`status`='3' WHERE `id`=".$taskid."");
    echo "Задача успешно отредактирована";
    echo '<meta http-equiv="refresh" content="1">';
    }elseif($task_new != $task_old && $status == 0){
    $query = $db->query("UPDATE `tasks` SET `task`='".$task_new."',`status`='2' WHERE `id`=".$taskid."");
    echo "Задача успешно отредактирована";
    echo '<meta http-equiv="refresh" content="1">';
    }elseif($task_new != $task_old && $status == 2){
    $query = $db->query("UPDATE `tasks` SET `task`='".$task_new."' WHERE `id`=".$taskid."");
    echo "Задача успешно отредактирована";
    echo '<meta http-equiv="refresh" content="1">';
    }elseif($task_new == $task_old){
    echo "Зачем повторяться?";
    echo '<meta http-equiv="refresh" content="1">';
    }elseif($status == 3){
    $query = $db->query("UPDATE `tasks` SET `task`='".$task_new."' WHERE `id`=".$taskid."");
    echo "Задача успешно отредактирована";
    echo '<meta http-equiv="refresh" content="1">';
    }
}else{
    echo "Недостаточно прав для редактирования";
    echo '<meta http-equiv="refresh" content="1">';
}