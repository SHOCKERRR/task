  <table class="table" id="TaskBar">
  <thead>
	<tr><th>Имя пользователя:</th><th>E-mail:</th><th>Описание задачи:</th><th>Статус:</th>
	<?php if(isset($_COOKIE['user'])){
    echo '<th></th><th></th>';
	
 ?>
	</tr>
</thead>
	<?php
	
if (is_array($tasks) || is_object($tasks))

{
		foreach ($tasks['0'] as $title => $task)
		{
			$status = $task->status;
			if ($status == 1){
			$new_status	= "Выполнена";
			}elseif($status == 2){
			$new_status	= "Отредактирована администратором";
			}elseif($status == 3){
			$new_status	= "Выполнена</br>Отредактирована администратором";
			}else{
			$new_status	= "Запланирована";	
			}
			echo '<tr><td>'.$task->title.'</td><td>'.$task->author.'</td><td>'.$task->description.'</td><td>'.$new_status.'</td>
			<td><button class="btn btn-link" data-id='.$task->id.' id="StatusBtn">Изменить статус</button></td><td><button class=""btn btn-secondary" data-id='.$task->id.' id="EditBtn">Редактировать</button></td></tr>';
		}
}

}else{
	?>
	</tr>
</thead>
	<?php
	if (is_array($tasks) || is_object($tasks))

	{
			foreach ($tasks['0'] as $title => $task)
			{
				$status = $task->status;
				if ($status == 1){
				$new_status	= "Выполнена";
				}elseif($status == 2){
				$new_status	= "Отредактирована администратором";
				}elseif($status == 3){
				$new_status	= "Выполнена</br>Отредактирована администратором";
				}else{
				$new_status	= "Запланирована";	
				}
			echo '<tr><td>'.$task->title.'</td><td>'.$task->author.'</td><td>'.$task->description.'</td><td>'.$new_status.'</td></tr>';
			}
	}	
}?>
</table>
