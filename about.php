<?php
$title = 'О нас';

require 'blocks/header.php';
?>
    <div class="container mt-2">
        <h1>О нас</h1>
        <form action="check_get.php" method="get">
            <input type="text" name="username" placeholder="Введите имя" class="form-control"><br>
            <input type="email" name="email" placeholder="Введите email" class="form-control"><br>
            <input type="password" name="password" placeholder="Введите пароль" class="form-control"><br>
            <textarea name="message" class="form-control" placeholder="Введите сообщение" id="" cols="10"
                      rows="5"></textarea><br>
            <input type="submit" value="Отпрвить" class="btn btn-success">
        </form>
    </div>
<?php
require 'blocks/footer.php';
?>