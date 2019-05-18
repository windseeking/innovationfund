<?php

require_once ('../init.php');

$partners = get_partners($con, $language);

$layout_content = include_template('layout.php', [
    'title' => $lang->get("PARTNERS_TITLE"),
    'description' => $lang->get("PARTNERS_DESC"),
    'content' => include_template('partners.php', ['partners' => $partners]),
    'header' => $lang->get("PARTNERS_HEADER"),
    'menu' => $menu
]);

print($layout_content);
