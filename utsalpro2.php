<?php

// Takes raw data from the request
$json = file_get_contents('getcsv2json');

echo json_encode($json);
?>

