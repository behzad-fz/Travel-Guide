<?php

require_once realpath('vendor/autoload.php');
require_once 'src/Database/boardingCollection.php';

header("Content-Type:application/json");

if (isset($_GET['get-direction'])) {

    $boardingCollection = sortBordings($boardingCollection);

    $directions = giveDirections($boardingCollection);

    $json_response = json_encode($directions);
    echo $json_response;

}