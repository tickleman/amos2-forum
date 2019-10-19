<?php

global $language_filter;
foreach (['all', 'fr', 'en'] as $language_filter) {
	if (strpos($_SERVER['SCRIPT_FILENAME'], '/' . $language_filter . '/')) {
		break;
	}
}
if ($language_filter === 'all') {
	$language_filter = '%';
}

if (strpos($_SERVER['REQUEST_URI'], '//')) {
	header('Location: ' . str_replace('//', '/', $_SERVER['REQUEST_URI']));
}
