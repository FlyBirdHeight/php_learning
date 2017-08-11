<?php 


class Task {

	protected $description;

	protected $completed = false;

	public function __construct($description){
		$this->description = $description;
	}


	public function isComplete(){
		return $this->completed;
	}
}
function dd($string){
	echo "<pre>";
	var_dump($string);
	echo "</pre>";
}
$task = new Task('菜猪是菜猪');
dd($task);
?>