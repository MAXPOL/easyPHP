<?php

require "dbconnect.php";

if (isset ($_POST['auth'])) {


        $login = $_POST['auth_login'];

        $pass = $_POST['auth_pass'];

        $query = 'SELECT id FROM auth WHERE login LIKE $login';

        $chekIssetID =  mysqli_query($conn, $query);

        echo $chekIssetID;

}

?>
    <center><h2>Авторизация</h2>
    <form action="" method="post">
        <br>
      <label>Введите Ваш логин</label>
      <input type="login" name="auth_login" placeholder="Введите Ваш логин" required >
        <br><br><br>
      <label>Введите Ваш пароль</label>
      <input type="password" name="auth_pass" placeholder="Введите пароль" required >
        <br><br><br>
      <button type="submit" name="auth">Войти</button>
    </form>

<?php



?>
