<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('../functions/functions.php');
require_once('../system/config.php');
require_once ('../system/data.php');

session_start();

$con = get_connection($database_config);
$partners = get_partners($con);

$layout_content = include_template('layout.php', [
    'title' => 'Partners',
    'description' => 'News of the Fund and its partners',
    'content' => include_template('partners.php', ['partners' => $partners]),
    'menu' => $menu
]);

print($layout_content);
