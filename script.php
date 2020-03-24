<?php

ini_set('memory_limit', '250M');
ini_set('max_execution_time', 1200);
set_time_limit(1200);

require __DIR__ . '/Sort.php';

$dataFiles = [
    'small' => __DIR__ . '/data/junk-data.json',
    'full' => __DIR__ . '/data/junk-data-full.json',
];

// Executes Fine
$sort = new Sort($dataFiles['small']);
$sort->sort();
foreach ($sort->getItems() as $item) {
    var_dump($item);
}

// Out of memory!
$sort = new Sort($dataFiles['full']);
$sort->sort();
foreach ($sort->getItems() as $item) {
    var_dump($item);
}
