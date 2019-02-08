<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('../functions/functions.php');
require_once('../system/config.php');
require_once ('../system/data.php');

session_start();

$con = get_connection($database_config);
$projects = get_projects($con);

$layout_content = include_template('layout.php', [
    'title' => 'Projects',
    'description' => '',
    'content' => include_template('projects.php', ['projects' => $projects]),
    'menu' => $menu
]);

print($layout_content);
