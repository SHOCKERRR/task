<?php

include_once("model/Task.php");

class Model {
	public function getTasksList()
	{
		require_once('db/dbcfg.php');
		$stmt = $db->query("SELECT * FROM tasks");
		$row = $stmt->fetchAll();
		$nRows = $db->query('select count(*) from tasks')->fetchColumn();
		$stack = array();
		for($i = 0; $i <= $nRows - 1; $i++){
			$name[$i] = $row[$i]['name'];
			$e_mail[$i] = $row[$i]['e-mail'];
			$task[$i] = $row[$i]['task'];
			$status[$i] = $row[$i]['status'];
			$id[$i] = $row[$i]['id'];
			$taski[$i] = new Task($name[$i],$e_mail[$i],$task[$i],$status[$i],$id[$i]);
			array_push($stack, $taski[$i]);
		}
		return array($stack);
		
	}
	
	public function getTask($title)
	{

		$allTasks = $this->getTasksList();
		return $allTasks[$title];
	}
	
	
}

