<?php

require_once ('../../init.php');

$page_content = include_template('products.php', []);

$layout_content = include_template('layout.php', [
    'tabs' => $activities_tabs,
    'description' => '',
    'title' => 'Products by scientific fields',
    'header' => 'University for business',
    'content' => $page_content,
    'menu' => $menu
]);

print($layout_content);
