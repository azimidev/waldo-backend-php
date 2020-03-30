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
		// $fileContents = file_get_contents($this->fileName);
		// $this->items  = json_decode($fileContents, true);
		// usort($this->items, function($a, $b) {
		// 	return $a['registered'] <=> $b['registered'];
		// });

		/* Note:
		 * To view the results:
		 * console needs to be stopped half way because
		 * console also uses memory and it will overwrites
		 * the older logs. I have used the bubble sort for this
		 * and increased the memory as you did not mention not to modify it.
		 */
		$array = JsonMachine::fromFile($this->fileName);

		$temp = [];
		foreach ($array as $key => $value) {
			$temp[$value['registered'] . "waldo" . $key] = $value;
		}
		ksort($temp);
		$this->items = array_values($temp);
		unset($temp);

		return $this;
	}

	public function getItems()
	{
		return $this->items;
	}
}
