<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('../../functions/functions.php');
require_once('../../system/config.php');
require_once ('../../system/data.php');

session_start();

$con = get_connection($database_config);

$page_content = include_template('scientific-fields.php', []);

$layout_content = include_template('layout.php', [
    'tabs' => $activities_tabs,
    'description' => '',
    'title' => 'Scientific fields',
    'content' => $page_content,
    'menu' => $menu
]);

print($layout_content);
