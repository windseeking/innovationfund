<?php

require_once ('../../init.php');

$page_content = include_template('students-alumni.php', []);

$layout_content = include_template('layout.php', [
    'tabs' => $activities_tabs,
    'description' => '',
    'header' => 'University for business',
    'title' => 'For students & alumni',
    'content' => $page_content,
    'menu' => $menu
]);

print($layout_content);
