<?php
	session_start();

    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['subject']);
    unset($_SESSION['message']);

    unset($_SESSION['error_username']);
    unset($_SESSION['error_email']);
    unset($_SESSION['error_subject']);
    unset($_SESSION['error_message']);

    function redirect() {
        header('Location: contact.php');
        exit;
    }

	$user_name = htmlspecialchars(trim($_POST['username']));
	$from = htmlspecialchars(trim($_POST['email']));
	$subject = htmlspecialchars(trim($_POST['subject']));
	$message = htmlspecialchars(trim($_POST['message']));

	$_SESSION['username'] = $user_name;
	$_SESSION['email'] = $from;
	$_SESSION['subject'] = $subject;
	$_SESSION['message'] = $message;

	if(strlen($user_name) <= 1) {
		$_SESSION['error_username'] = 'Введите коректное имя пользователя';
        redirect();
	}   else if(strlen($from) < 5 || strpos($from,'@') == false) {
		$_SESSION['error_email'] = 'Вы ввели некоректный email';
        redirect();
	}   else if(strlen($subject) <= 5) {
		$_SESSION['error_subject'] = 'Вы ввели некоректно тему сообщения';
        redirect();
	}   else if(strlen($message) <= 15) {
		$_SESSION['error_message'] = 'Вы ввели некоректное сообщение';
        redirect();
	}   else {
        $subject = "=?utf-8?B?".base64_encode($subject)."?=";
        $headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";
        mail('chuiflame@gmail.com', $subject, $message, $headers);
        $_SESSION['success_mail'] = 'Вы успешно отправили письмо!';
        redirect();
    }
