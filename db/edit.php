<?php
if(isset($_POST['taskid']) && isset($_COOKIE['user'])){
    $taskid = $_POST['taskid'];
    require_once('dbcfg.php');
    $query = $db->query("SELECT * FROM `tasks` WHERE `id`=".$taskid."")->fetchAll();
    $task= $query['0']['task'];
    ?>
    
    <form id="EditTask">
                    <div class="form-group">
                        <label for="Task">Задача</label>
                        <input type="text" class="form-control" id="NewTask" style="height:200px" value="<?php echo $task;?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary" id='EditTaskBtn' data-id="<?php echo $taskid; ?>"><i class="fas fa-plus"></i>Изменить задачу</button>
                    <div id="logT" style="margin-top:20px; font-size:18px"></div>
                </form>
    <?php
    
}else{
    echo "У Вас нет доступа к данной операции";
}
