<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('../functions/functions.php');
require_once('../system/config.php');
require_once('../system/data.php');

session_start();

$con = get_connection($database_config);
$errors = [];
$contact = [];
$user = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $contact = $_POST['contact'];
    $required = ['name', 'email', 'message'];
    foreach ($required as $item) {
        if (empty($contact[$item])) {
            $errors[$item] = 'Please, fill this field.';
        }
    }

    if (!empty($contact['email'])) {
        if (!filter_var($contact['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Enter a valid email';
        }
    }

    if (empty($errors)) {
        $to = "windseeking@mail.ru";
        $from = "no-reply@innovationfund.in";

        $name = $contact['name'];
        $email = $contact['email'];
        $message = $contact['message'];
        $subject = "Сообщение с innovationfund.in";

        $body = "Здравствуйте! 
                Было отправлено сообщение с сайта! 
                Имя отправителя: $name
                E-mail: $email
                Текст сообщения: $message
                Чтобы ответить на письмо, создайте новое сообщение, скопируйте электронный адрес и вставьте в поле Кому.";

        $headers = "From: $from \r\n";

        mail($to, $subject, $body, $headers . 'Content-type: text/plain; charset=utf-8');
        header("Location: /index#contact");
        $_SESSION['success'] = "Your message has been sent successfully. We will answer as soon as possible.";
    }
    $page_content = include_template('index.php', ['errors' => $errors, 'contact' => $contact]);
    $_SESSION['errors'] = "Something went wrong, the message has not been sent. Please, contact us via email.";
}

$page_content = include_template('index.php', ['errors' => $errors, 'contact' => $contact]);

$layout_content = include_template('layout.php', [
    'title' => 'Main',
    'description' => '',
    'content' => $page_content,
    'menu' => $menu,
    'user' => $user
]);

print($layout_content);
