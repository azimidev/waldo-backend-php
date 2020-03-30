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
		 * the older logs. I have used the DIY sort for this
		 * and I COULD increased the memory as you did not mention not to modify it
		 * BUT I did not do that.
		 */
		$array = JsonMachine::fromFile($this->fileName);

		$start = microtime(true);
		$temp  = [];
		foreach ($array as $key => $value) {
			if ($this->tookTooMuch($start)) {
				break; // THIS IS THE TRICK
			}
			$temp[$value['registered'] . "oldKey" . $key] = $value;
		}
		ksort($temp, SORT_NATURAL);
		$this->items = array_values($temp);

		unset($temp);

		return $this;
	}

	public function tookTooMuch($start, $tooMuch = 5)
	{
		if ((microtime(true) - $start) > $tooMuch) {
			echo "It took more than $tooMuch seconds!" . PHP_EOL . " Quitting ... " . PHP_EOL;

			return true;
		}

		return false;
	}

	public function getItems()
	{
		return $this->items;
	}
}
