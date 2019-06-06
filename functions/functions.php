<?php

require_once('mysql_helper.php');

function add_news($con, array $news): bool
{
    $sql =
        'INSERT INTO news (title, text, cat, image_path, created_at) 
        VALUES (?, ?, ?, ?, NOW())';
    $values = [
        $news['title'] = ltrim($news['title']),
        $news['text'] = ltrim($news['text']),
        $news['cat'],
        $news['image_path']
    ];
    $stmt = db_get_prepare_stmt($con, $sql, $values);
    mysqli_stmt_execute($stmt);

    if (mysqli_error($con)) {
        return false;
    }
    return true;
}

function add_user($con, array $user): bool
{
    $sql =
        'INSERT INTO users (email, password, name, lastname, username, created_at) 
        VALUES (?, ?, ?, ?, ?, NOW())';
    $values = [
        $user['email'] = strtolower($user['email']),
        $user['password'] = password_hash($user['password'], PASSWORD_DEFAULT),
        $user['name'] = ucfirst($user['name']),
        $user['lastname'] = ucfirst($user['lastname']),
        $user['username'] = strtolower($user['username'])
    ];
    $stmt = db_get_prepare_stmt($con, $sql, $values);
    mysqli_stmt_execute($stmt);

    if (mysqli_error($con)) {
        return false;
    }
    return true;
}

function filter_tags(string $str = null): string
{
    return $str === null ? '' : strip_tags($str);
}

function get_connection(array $database_config)
{
    $con = mysqli_connect($database_config['host'], $database_config['user'], $database_config['password'],
        $database_config['database']);
    if (!$con) {
        die(mysqli_connect_error());
    }
    mysqli_set_charset($con, 'utf8');
    return $con;
}

function get_innovations(mysqli $con, $language): array
{
    $sql =
        'SELECT * FROM innovations_' . $language;
    $res = mysqli_query($con, $sql);
    return $innovations = mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function get_innovation_by_id(mysqli $con, int $id, string $language): array
{
    $sql = 'SELECT * FROM innovations_' . $language .
        ' WHERE id = ' . $id;
    $res = mysqli_query($con, $sql);
    if ($res) {
        return mysqli_fetch_assoc($res);
    }
    return [];
}

function get_language()
{
    if (isset($_GET['lang'])) { // если пользователь выбрал язык вручную
        $default_lang = $_GET['lang'];
        setcookie("language", $default_lang, time() + 3600 * 24 * 365); // expires in 1 year
        return $default_lang;
    } elseif (isset($_COOKIE['language'])) { // если язык был выбран/определен ранее
        $default_lang = $_COOKIE['language'];
        return $default_lang;
    }

    // если язык ранее не определен и пользователь также не выбирал его
    if (!isset($_GET['lang']) && !isset($_COOKIE['language'])) {
        preg_match_all('/([a-z]{1,8}(?:-[a-z]{1,8})?)(?:;q=([0-9.]+))?/', strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"]),
            $matches); // Получаем массив $matches с соответствиями
        $langs = array_combine($matches[1],
            $matches[2]); // Создаём массив с ключами $matches[1] и значениями $matches[2]
        foreach ($langs as $n => $v) {
            $langs[$n] = $v ? $v : 1;
        } // Если нет q, то ставим значение 1
        arsort($langs); // Сортируем по убыванию q
        $default_lang = key($langs); // Берём 1-й ключ первого (текущего) элемента (он же максимальный по q)
        if (strpos($default_lang, "ru" !== false)) {
            return "ru";
        } elseif (strpos($default_lang, "ru-ru") !== false) {
            return "ru";
        } elseif (strpos($default_lang, "uk") !== false) {
            return "uk";
        } elseif (strpos($default_lang, "uk-uk") !== false) {
            return "uk";
        } elseif (strpos($default_lang, "en") !== false) {
            return "en";
        } elseif (strpos($default_lang, "en-en") !== false) {
            return "en";
        } elseif (strpos($default_lang, "en-us") !== false) {
            return "en";
        } else {
            return $default_lang;
        }
    }
}

function get_news($con): array
{
    $sql =
        'SELECT * FROM news ORDER BY created_at DESC';
    $res = mysqli_query($con, $sql);
    return $news = mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function get_partners($con, $language): array
{
    $sql =
        'SELECT * FROM partners_' . $language;
    $res = mysqli_query($con, $sql);
    return $partners = mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function get_projects($con, $language): array
{
    $sql =
        'SELECT * FROM projects_' . $language;
    $res = mysqli_query($con, $sql);
    return $projects = mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function include_template($name, $data)
{
    $name = 'templates/' . $name;
    $result = '';
    if (!file_exists($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();
    return $result;
}

function is_email_exist($con, string $email): bool
{
    $sql =
        'SELECT id FROM users ' .
        'WHERE email = ?';
    $values = [$email];
    $user = db_fetch_data($con, $sql, $values);
    if (!empty($user)) {
        return true;
    }
    return false;
}

function is_news_exist($con, string $title): bool
{
    $sql =
        'SELECT id FROM news ' .
        'WHERE title = ?';
    $values = [$title];
    $news = db_fetch_data($con, $sql, $values);
    if (!empty($news)) {
        return true;
    }
    return false;
}

function is_partner_exist($con, string $name): bool
{
    $sql =
        'SELECT id FROM partners ' .
        'WHERE name = ?';
    $values = [$name];
    $partner = db_fetch_data($con, $sql, $values);
    if (!empty($partner)) {
        return true;
    }
    return false;
}

function is_username_exist($con, $username): bool
{
    $sql =
        'SELECT id FROM users ' .
        'WHERE username = ?';
    $values = [$username];
    $user = db_fetch_data($con, $sql, $values);
    if (!empty($user)) {
        return true;
    }
    return false;
}
