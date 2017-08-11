<?php 


class Task {

	protected $description;

	protected $completed = false;

	public function __construct($description){
		$this->description = $description;
	}

	public function complete(){
		$this->completed = true;
	}

	public function isComplete(){
		return $this->completed; 
	}

	public function description(){
		retturn $this->description;
	}
}
function dd($string){
	echo "<pre>";
	var_dump($string);
	echo "</pre>";
}
$task = [
	new Task('菜猪是菜猪'),
	new Task('猪猪侠是菜猪')
];
dd($task);
?>