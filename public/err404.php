<?php

require_once ('../init.php');

$page_content = include_template('err404.php', []);
$page_title = 'Error';

$layout_content = include_template('layout.php', [
    'title' => $page_title,
    'description' => 'Error',
    'content' => $page_content,
    'header' => '',
    'menu' => $menu
]);

print($layout_content);
