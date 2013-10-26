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
 * Echo the Spotify URI of your great tune.
 */
function tune_uri() {
	global $iterator;
	$it = $iterator->current();
	echo $it['uri'];
}

/**
 * Return the Spotify URI of your great tune.
 */
function get_tune_uri() {
	global $iterator;
	$it = $iterator->current();
	return $it['uri'];
}

/**
 * Echo all the Spotify URIs separated by a comma.
 */
function all_tune_uri() {
	global $tunes;
	$spotify_id = array();
	foreach ($tunes as $tune) {
		array_push($spotify_id, end(explode(":",$tune['uri'])));
	}
	echo implode(",", $spotify_id);
}

/**
 * Return all the Spotify URIs separated by a comma.
 */
function get_all_tune_uri() {
	global $tunes;
	$spotify_id = array();
	foreach ($tunes as $tune) {
		array_push($spotify_id, end(explode(":",$tune['uri'])));
	}
	return implode(",", $spotify_id);
}

/**
 * Echo the Date of your great tune.
 */
function tune_date($format = 'j. F Y – H:i') {
	global $iterator;
	$it = $iterator->current();
	$date = date_create($it['date']);
	echo date_format($date, $format);
}

/**
 * Return the Date of your great tune.
 */
function get_tune_date($format = 'j. F Y – H:i') {
	global $iterator;
	$it = $iterator->current();
	$date = date_create($it['date']);
	return date_format($date, $format);
}

/**
 * Echo the Folder of your great template.
 */
function template_folder() {
	global $template, $path;
	echo $path . 'template/'.$template.'/';
}

/**
 * Return the Folder of your great template.
 */
function get_template_folder() {
	global $template, $path;
	return $path . 'template/'.$template.'/';
}

/**
 * Echo the Home URL
 */
function home_url() {
	global $path;
	echo $path;
}

/**
 * Return the Home URL
 */
function get_home_url() {
	global $path;
	return $path;
}