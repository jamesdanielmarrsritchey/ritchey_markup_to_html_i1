<?php
# App.php
$location = realpath(dirname(__FILE__));
require_once $location . '/ritchey_markup_to_html_i1_v24.php';
$return = ritchey_markup_to_html_i1_v24("{$location}/temporary/source.txt", "{$location}/temporary/destination.html", "{$location}/assets/general-theme-v3.css", TRUE, TRUE, TRUE);
if ($return === TRUE){
	echo "TRUE" . PHP_EOL;
} else {
	echo "FALSE" . PHP_EOL;
}
?>