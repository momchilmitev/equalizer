<?php

define('WEBSITE_NAME', 'Gallery');

// Public folder path
$path = str_replace('\\', '/', 'http://' . $_SERVER['SERVER_NAME'] . __DIR__ . '/');
$path = str_replace($_SERVER['DOCUMENT_ROOT'], '', $path);
define('ASSETS', str_replace('app/core', 'public/assets', $path));
