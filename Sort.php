<?php

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
        $fileContents = file_get_contents($this->fileName);
        $this->items = json_decode($fileContents, true);

        usort($this->items, function ($a, $b) {
            return $a['registered'] <=> $b['registered'];
        });

        return $this;
    }

    public function getItems()
    {
        return $this->items;
    }
}