<?php
// All the available functions for templates

/**
 * Are any more tunes in JSON?
 * That would be great.
 */
function have_tunes() {
	global $iterator;
	return $iterator->valid();
}

/**
 * Returns true, if it's the newest tune.
 */
function first_tune() {
	global $iterator;
	return $iterator->key() == 0 ? true : false;
}

/**
 * Sets Iterator to next element
 */
function next_tune() {
	global $iterator;
	$iterator->next();
}

/**
 * Get the Spotify URI of your great tune.
 */
function tune_uri() {
	global $iterator;
	$it = $iterator->current();
	echo $it['uri'];
}

/**
 * Get the Date of your great tune.
 */
function tune_date($format = 'j. F Y – H:i') {
	global $iterator;
	$it = $iterator->current();
	$date = date_create($it['date']);
	echo date_format($date, $format);
}

/**
 * Get the Folder of your great template.
 */
function template_folder() {
	global $template;
	echo 'template/'.$template.'/';
}