<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('../functions/functions.php');
require_once('../system/config.php');
require_once ('../system/data.php');

session_start();

$con = get_connection($database_config);

$layout_content = include_template('layout.php', [
    'title' => 'HR',
    'description' => '',
    'content' => include_template('hr.php', [ ]),
    'menu' => $menu
]);

print($layout_content);
