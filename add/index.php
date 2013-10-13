<?php

require_once('../core/func.nicejson.php');

$uri = key($_GET);

if ($uri == null) {
	echo "No URI given. Try something like /add/?spotify:track:xxxxxxxxxxxxxxxxxxxxxx";
	return;
}

$data = file_get_contents('../data.json');
$decode = json_decode($data, true);
$size_first = count($decode['tunes']);

$new['date'] = date('Y-m-d H:i');
$new['uri'] = $uri;

array_unshift($decode['tunes'], $new);
$size_second = count($decode['tunes']);

if ($size_second != $size_first + 1) {
	echo "Something went wrong";
	return;
}

$encode = json_encode($decode);
$formatted = json_format($decode);
file_put_contents('../data.json', $formatted);

header("Location: ../");