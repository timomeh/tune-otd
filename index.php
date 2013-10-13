<?php

/**
 * A fairly simple file. Just get the JSON,
 * parse it and put the Tunes into an ArrayObject
 * with a cute Iterator.
 */

$data = file_get_contents("data.json");
$decode = json_decode($data, true);
$tunes = $decode["tunes"];
usort($tunes, "sortByDate");
$template = $decode["template"];

$tunesAO = new ArrayObject($tunes);
$iterator = $tunesAO->getIterator();

/**
 * Sort Array by date, so you don't have to sort your JSON.
 * Nothing much to say.
 */
function sortByDate( $a, $b ) {
    return strtotime($b["date"]) - strtotime($a["date"]);
}

/**
 * Are any more tunes in JSON?
 * That would be great.
 */
function have_tunes() {
	global $iterator;
	$iterator->next();
	if($iterator->valid()) {
		return true;
	}
	else
		return false;
}

/**
 * Get the Spotify URI of your great tune.
 */
function tune_uri() {
	global $iterator;
	echo $iterator->current()['uri'];
}

/**
 * Get the Date of your great tune.
 */
function tune_date($format) {
	global $iterator;
	$date = date_create($iterator->current()['date']);
	echo date_format($date, $format);
}

/**
 * Get the Folder of your great template.
 */
function template_folder() {
	global $template;
	echo 'template/'.$template.'/';
}

// Simply includes your template. That's it.
include 'template/'.$template.'/index.php';