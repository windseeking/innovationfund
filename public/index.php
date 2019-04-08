<?php

require_once ('../init.php');

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
        $transport = (new Swift_SmtpTransport('mail.innovationfund.in', 25))
            ->setUsername('webmaster@innovationfund.in')
            ->setPassword('pakoWorld6');
        $mailer = new Swift_Mailer($transport);

        $message = (new Swift_Message('Сообщение с innovationfund.in'))
            ->setFrom(['webmaster@innovationfund.in' => 'Fund of Innovation Support'])
            ->setTo(['innovationfund@onu.edu.ua' => 'Павел Коен']);

        $message_content = include_template('email.php', [
            'contact_message' => $contact['message'],
            'contact_name' => $contact['name'],
            'contact_email' => $contact['email']
        ]);

        $message->setBody($message_content, 'text/html');

        try {
            $result = $mailer->send($message);
        } catch (Swift_TransportException $ex) {
            print($ex->getMessage() . '<br>');
        }

        if (!$result) {
            $_SESSION['errors'] = 'The message was not sent. Please, try again or contact us via <a href="mailto:innovationfund@onu.edu.ua">email</a> or <a href="tel:+380995250511">phone</a>.';
        } else {
            $_SESSION['success'] = 'The message was sent successfully!';
        }
    } else {
        $_SESSION['errors'] = 'Please, correct errors in the form.';
    }
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
