<?php

require_once ('../init.php');

$partners = get_partners($con);

$layout_content = include_template('layout.php', [
    'title' => 'Partners',
    'description' => 'Partners of the Fund',
    'content' => include_template('partners.php', ['partners' => $partners]),
    'menu' => $menu
]);

print($layout_content);
