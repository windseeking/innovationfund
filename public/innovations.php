<?php

require_once ('../init.php');

if (isset($_GET['item'])) {
    $innovation_id = (int)$_GET['item'];
    $innovation = get_innovation_by_id($con, $innovation_id);
    $page_content = include_template('item.php', ['innovation' => $innovation]);
    $page_title = $innovation['name'];

    $errors = [];
    $contact = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $contact = $_POST['contact'];
        $required = ['name', 'email', 'message', 'captcha'];
        foreach ($required as $item) {
            if (empty($contact[$item])) {
                $errors[$item] = 'Please, fill this field.';
            }
        }

        if (empty($errors)) {
            $transport = (new Swift_SmtpTransport('mail.innovationfund.in', 25))
                ->setUsername('webmaster@innovationfund.in')
                ->setPassword('pakoWorld6');
            $mailer = new Swift_Mailer($transport);

            $subject = 'Кто-то заинтересовался инновацией ' . '«' . $innovation['name'] . '»';
            $message = (new Swift_Message($subject))
                ->setFrom(['webmaster@innovationfund.in' => 'Fund of Innovation Support'])
                ->setTo(['innovationfund@onu.edu.ua' => 'Павел Коен']);

            $message_content = include_template('innovation-email.php', [
                'contact_message' => $contact['message'],
                'contact_name' => $contact['name'],
                'contact_email' => $contact['email'],
                'innovation_name' => $innovation['name']
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
    $page_content = include_template('item.php', [
        'innovation' => $innovation,
        'errors' => $errors,
        'contact' => $contact
    ]);
} else {
    $innovations = get_innovations($con);
    $page_content = include_template('innovations.php', ['innovations' => $innovations]);
    $page_title = 'Innovations';
}

$layout_content = include_template('layout.php', [
    'title' => $page_title,
    'description' => 'List of innovations',
    'content' => $page_content,
    'menu' => $menu
]);

print($layout_content);
