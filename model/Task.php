<?php

class Task {
	public $title;
	public $author;
	public $description;
	public $status;
	public $id;

	public function __construct($title, $author, $description, $status, $id)  
    {  
        $this->title = $title;
	    $this->author = $author;
		$this->description = $description;
		$this->status = $status;
		$this->id = $id;
    } 
}

