<?php
session_start();
$title = 'Контакты';
require_once 'blocks/header.php';
?>
<?= "<h1 class='mt-5'>$title</h1>" ?>
    <form action="check_contact.php" method="post">
        <input type="text" name="username" value="<?= $_SESSION['username'] ?>" placeholder="Введите имя"
               class="form-control">
        <div class="text-danger"><?=?></div>
        <input type="email" name="email" value="<?= $_SESSION['email'] ?>" placeholder="Введите email"
               class="form-control"><br>
        <input type="text" name="subject" value="<?= $_SESSION['subject'] ?>" placeholder="Тема сообщения"
               class="form-control"><br>
        <textarea name="message" value="<?= $_SESSION['message'] ?>" placeholder="Введите ваше сообщение"
                  class="form-control"></textarea><br>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
<?php

require_once 'blocks/footer.php';
?>