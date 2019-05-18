<?php

require_once ('../init.php');

$projects = get_projects($con);

$layout_content = include_template('layout.php', [
    'title' => 'Projects',
    'description' => 'Projects of the Fund and its partners',
    'content' => include_template('projects.php', ['projects' => $projects]),
    'header' => 'Projects',
    'menu' => $menu
]);

print($layout_content);
