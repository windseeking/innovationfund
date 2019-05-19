<?php

require_once ('../init.php');

$header = 'Innovations';

if (isset($_GET['item'])) {
    $header = '';
    $innovation_id = (int)$_GET['item'];
    $innovation = get_innovation_by_id($con, $innovation_id);
    $page_content = include_template('item.php', ['innovation' => $innovation]);
    $page_title = $innovation['name'];

    $errors = [];
    $contact = [];

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
        'contact' => $contact,
        'author' => $lang->get("INNOVATION_AUTHOR"),
        'market' => $lang->get("INNOVATION_MARKET"),
        'stage' => $lang->get("INNOVATION_STAGE"),
        'money' => $lang->get("INNOVATION_MONEY"),
        'description' => $lang->get("INNOVATION_DESCRIPTION"),
        'roadmap' => $lang->get("INNOVATION_ROADMAP"),
        'competitive_ability' => $lang->get("INNOVATION_COMPETITIVE_ABILITY"),
        'appliance' => $lang->get("INNOVATION_APPLIANCE"),
        'poll_title' => $lang->get("INNOVATION_POLL_TITLE"),
        'btn_poll' => $lang->get("BTN_POLL"),
        'contact_title' => $lang->get("INNOVATION_CONTACT_TITLE"),
        'contact_menu' => $lang->get("INNOVATION_CONTACT_MENU"),
        'return_top' => $lang->get("BTN_RETURN_TOP"),
        'label_name' => $lang->get("LABEL_NAME"),
        'label_email' => $lang->get("LABEL_EMAIL"),
        'label_message' => $lang->get("LABEL_MESSAGE"),
        'btn_send' => $lang->get("BTN_SEND")
    ]);
} else {
    $innovations = get_innovations($con);
    $page_content = include_template('innovations.php', [
        'innovations' => $innovations,
        'creation_development' => $lang->get("CREATION_DEVELOPMENT"),
        'building_cooperation' => $lang->get("BUILDING_COOPERATION"),
        'attraction_investments' => $lang->get("ATTRACTION_INVESTMENTS"),
        'btn_suggest' => $lang->get("BTN_SUGGEST"),
        'btn_apply' => $lang->get("BTN_APPLY"),
        'nothing_found' => $lang->get("NOTHING_FOUND"),
        'btn_more' => $lang->get("BTN_MORE"),
        'author' => $lang->get("INNOVATION_AUTHOR"),
        'market' => $lang->get("INNOVATION_MARKET"),
        'stage' => $lang->get("INNOVATION_STAGE"),
        'money' => $lang->get("INNOVATION_MONEY")
    ]);
}

$layout_content = include_template('layout.php', [
    'title' => $lang->get("INNOVATIONS_HEADER"),
    'description' => 'List of innovations',
    'content' => $page_content,
    'header' => $lang->get("INNOVATIONS_HEADER"),
    'menu' => $menu,
    'btn_contact' => $lang->get("FOOTER_BTN_CONTACT"),
    'btn_support' => $lang->get("FOOTER_BTN_SUPPORT"),
    'copyright' => $lang->get("FOOTER_COPYRIGHT")
]);

print($layout_content);
