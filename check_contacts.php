<?php
	session_start();

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
	} else if(strlen($from) < 5 || strpos($from,'@') == false) {
		$_SESSION['error_email'] = 'Вы ввели некоректный email';
	} else if(strlen($subject) <= 5) {
		$_SESSION['error_subject'] = 'Вы ввели некоректный email';
	} else if(strlen($message) <= 15) {
		$_SESSION['error_message'] = 'Вы ввели некоректный email';
	}
