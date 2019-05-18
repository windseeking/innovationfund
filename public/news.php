<?php

require_once ('../init.php');

$news = get_news($con);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $search = $_GET['search'] ?? '';
    if ($search) {
        $sql =
            'SELECT * FROM news '
            . 'WHERE MATCH(name, description) AGAINST(?)';
        $stmt = db_get_prepare_stmt($con, $sql, [$search]);
        mysqli_stmt_execute($stmt);
        $res = mysqli_stmt_get_result($stmt);
        $news = mysqli_fetch_all($res, MYSQLI_ASSOC);
    }
}

$layout_content = include_template('layout.php', [
    'title' => 'News',
    'description' => 'News of the Fund and its partners',
    'content' => include_template('news.php', ['news' => $news ]),
    'header' => 'News',
    'menu' => $menu
]);

print($layout_content);
