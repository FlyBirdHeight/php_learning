<?php
namespace test\03;
/**
* 
*/
class CommandOutputDocument implements Documentable
{
	protected $command;
	function __construct($command)
	{
		$this->command = $command;
	}

	public function getId(){
		return $this->command;
	}

	public function getContent(){
		 return shell_exec($this->command);
	}
}

?>