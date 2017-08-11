<?php
namespace test\02;
class StreamDocument implements Documentable
{
	protected $resource;
	protected $buffer;

	public function __construct($resource,$buffer = 4096){
		$this->resource = $resource;
		$this->buffer = $buffer;
	}

	public function getId()
	{
		return 'resource-'.(int)$this->resource;
	}

	public function getContent()
	{
		$streamContent = '';
		rewind($this->resource);//读取文件，将文件指针倒回到文件开头
		while (feof($this->resource) === false) {//检测是否到文件尾部
			$streamContent = fread($this->resource,$this->buffer);
		}

		return $streamContentl
	}


}

?>