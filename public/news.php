<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('../functions/functions.php');
require_once('../system/config.php');
require_once ('../system/data.php');

session_start();

$con = get_connection($database_config);
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
    'menu' => $menu
]);

print($layout_content);
