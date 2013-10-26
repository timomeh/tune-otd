<?php

// Retreive data from JSON
include 'core/data.php';

// Declare functions for templates
include 'core/func.template.php';

// Include your template based on URI. That's it.
if (end(explode("/", $_SERVER['REQUEST_URI'])) == "all")
	include 'template/'.$template.'/all.php';
else
	include 'template/'.$template.'/index.php';