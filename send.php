<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $contact = $_POST['contact'];
    $required = ['name', 'email', 'message'];
    $errors = [];
    foreach ($required as $item) {
        if (empty($contact[$item])) {
            $errors[$item] = 'Please, fill this field.';
        }
    }

    if (!filter_var($contact['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Enter a valid email';
    }

    if (empty($errors)) {
        $to = "innovationfund@onu.edu.ua";
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
        $_SESSION['success'] = "Your message has been sent successfully. We will answer as soon as possible.";
    }
}
?>
<!--Переадресация на главную страницу сайта, через 3 секунды-->
<script language="JavaScript" type="text/javascript">
    function changeurl() {
        eval(self.location = "index#contact");
    }

    window.setTimeout("changeurl();", 1000);
</script>
