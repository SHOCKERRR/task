<?php
include_once("model/Model.php");

class Controller {
	public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();

    } 
	
	public function invoke()
	{
		include 'view/header.php';
		if (!isset($_GET['task']))
		{
			$tasks = $this->model->getTasksList();
			include 'view/taskslist.php';
		}
		else
		{
			$task = $this->model->getTask($_GET['task']);
			include 'view/viewtask.php';
		}
		include 'view/footer.php';
	}
}

?>