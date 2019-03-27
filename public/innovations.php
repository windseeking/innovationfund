<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('../functions/functions.php');
require_once('../system/config.php');
require_once ('../system/data.php');

session_start();

$con = get_connection($database_config);

if (isset($_GET['item'])) {
    $innovation_id = (int)$_GET['item'];
    $innovation = get_innovation_by_id($con, $innovation_id);
    $page_content = include_template('item.php', ['innovation' => $innovation]);
    $page_title = $innovation['name'];
} else {
    $innovations = get_innovations($con);
    $page_content = include_template('innovations.php', ['innovations' => $innovations]);
    $page_title = 'Innovations';
}

$layout_content = include_template('layout.php', [
    'title' => $page_title,
    'description' => 'List of innovations',
    'content' => $page_content,
    'menu' => $menu
]);

print($layout_content);
