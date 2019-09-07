<?php

require_once ('../init.php');

$errors = [];
$contact = [];
$user = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['token']) && isset($_POST['action'])) {
        $captcha_token = $_POST['token'];
        $captcha_action = $_POST['action'];
    } else {
        die('Капча работает некорректно. Обратитесь к администратору!');
    }

    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $params = [
        'secret' => '6LdLFq8UAAAAAMjrdrm2jBttYJzLobnUeTDM4UyW',
        'response' => $captcha_token,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec($ch);
    if(!empty($response)) $decoded_response = json_decode($response);

    $success = false;

    if ($decoded_response && $decoded_response->success && $decoded_response->action == $captcha_action && $decoded_response->score > 0) {
        $success = $decoded_response->success;

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

    } else {
        $_SESSION['errors'] = 'You didn\'t pass the robot test.';
    }
//    echo json_encode($success);
}
$page_content = include_template('index.php', [
    'errors' => $errors,
    'contact' => $contact,
    'slider_header_1' => $lang->get("SLIDER_HEADER_1"),
    'slider_header_2' => $lang->get("SLIDER_HEADER_2"),
    'slider_header_3' => $lang->get("SLIDER_HEADER_3"),
    'slider_header_4' => $lang->get("SLIDER_HEADER_4"),
    'slider_paragraph_1' => $lang->get("SLIDER_PARAGRAPH_1"),
    'slider_paragraph_2' => $lang->get("SLIDER_PARAGRAPH_2"),
    'slider_paragraph_3' => $lang->get("SLIDER_PARAGRAPH_3"),
    'slider_paragraph_4' => $lang->get("SLIDER_PARAGRAPH_4"),
    'mission_header' => $lang->get("MISSION_HEADER"),
    'mission_paragraph' => $lang->get("MISSION_PARAGRAPH"),
    'principles_header' => $lang->get("PRINCIPLES_HEADER"),
    'transparency' => $lang->get("TRANSPARENCY"),
    'openness' => $lang->get("OPENNESS"),
    'officiality' => $lang->get("OFFICIALITY"),
    'goals' => $lang->get("GOALS"),
    'team_header' => $lang->get("TEAM_HEADER"),
    'alex' => $lang->get("ALEX"),
    'lawyer' => $lang->get("LAWYER"),
    'pavel' => $lang->get("PAVEL"),
    'founder' => $lang->get("FOUNDER"),
    'maksym' => $lang->get("MAKSYM"),
    'advisor' => $lang->get("ADVISOR"),
    'students_staff' => $lang->get("STUDENTS_STAFF"),
    'docs_header' => $lang->get("DOCS_HEADER"),
    'university_profile' => $lang->get("UNIVERSITY_PROFILE"),
    'our_presentation' => $lang->get("OUR_PRESENTATION"),
    'onu_statute' => $lang->get("ONU_STATUTE"),
    'fis_statute' => $lang->get("FIS_STATUTE"),
    'contact_us' => $lang->get("CONTACT_US"),
    'label_name' => $lang->get("LABEL_NAME"),
    'label_email' => $lang->get("LABEL_EMAIL"),
    'label_message' => $lang->get("LABEL_MESSAGE"),
    'btn_send' => $lang->get("BTN_SEND"),
    'fund_name' => $lang->get("FUND_NAME"),
    'address' => $lang->get("ADDRESS"),
    'label_phone' => $lang->get("LABEL_PHONE")
]);

$layout_content = include_template('layout.php', [
    'title' => 'Main',
    'description' => '',
    'content' => $page_content,
    'menu' => $menu,
    'user' => $user,
    'btn_contact' => $lang->get("FOOTER_BTN_CONTACT"),
    'btn_support' => $lang->get("FOOTER_BTN_SUPPORT"),
    'copyright' => $lang->get("FOOTER_COPYRIGHT"),
    'fund_name' => $lang->get("FUND_NAME")
]);

print($layout_content);
