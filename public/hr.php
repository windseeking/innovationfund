<?php

require_once ('../init.php');

$layout_content = include_template('layout.php', [
    'title' => 'HR',
    'description' => '',
    'content' => include_template('hr.php', [ ]),
    'menu' => $menu
]);

print($layout_content);
