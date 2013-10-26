<?php
// Get Data

include 'func.util.php';

$data = file_get_contents("data.json");
$decode = json_decode($data, true);
$tunes = $decode["tunes"];
usort($tunes, "sortByDate"); // see func.util.php
$template = $decode["template"];
$path = $decode["path"];

$tunesAO = new ArrayObject($tunes);
$iterator = $tunesAO->getIterator();