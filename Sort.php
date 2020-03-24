<?php

use JsonMachine\JsonMachine;

require "./vendor/autoload.php";

class Sort
{
	protected $fileName;
	protected $items;

	public function __construct($fileName)
	{
		$this->fileName = $fileName;
	}

	public function sort()
	{
		$this->items = JsonMachine::fromFile($this->fileName);

		// foreach($fileContents as $file) {
		// 	var_dump($file['registered']);
		// }

		// $fileContents = file_get_contents($this->fileName);
		// $this->items  = json_decode($fileContents, true);

		usort($this->items, function($a, $b) {
			return $a['registered'] <=> $b['registered'];
		});

		return $this;
	}

	public function getItems()
	{
		return $this->items;
	}
}
