<?php

define('BASE_PATH', __DIR__);
require_once BASE_PATH . '/NameGenerator.php';

$ng = new NameGenerator();
$name = $ng->generate($gender = $argv[1]);
echo json_encode($name, JSON_PRETTY_PRINT);
