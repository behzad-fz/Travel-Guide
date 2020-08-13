<?php

require_once realpath('vendor/autoload.php');
require_once 'src/Database/boardingCollection.php';

$boardingCollection = sortBordings($boardingCollection);

$directions = giveDirections($boardingCollection);

echo '<pre>';
var_dump($directions);
echo '</pre>';
die();
