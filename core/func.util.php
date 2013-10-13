<?php
// Some utils

/**
 * Sort Array by date, so you don't have to sort your JSON.
 * Nothing much to say.
 */
function sortByDate( $a, $b ) {
    return strtotime($b["date"]) - strtotime($a["date"]);
}