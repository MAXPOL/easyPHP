<?php

require "dbconnect.php";

if (isset ($_POST['auth'])) {


        $login = $_POST['auth_login'];

        $pass = $_POST['auth_pass'];

        $query = 'SELECT id FROM auth WHERE login LIKE $login';

        $result = $conn->query($query);

        while ($row = mysqli_fetch_assoc($result)) {
                printf($row["id"]);
        }

}

?>
    <center><h2>Authorization</h2>
    <form action="" method="post">
        <br>
      <label>Enter login</label>
      <input type="login" name="auth_login" placeholder="Введите Ваш логин" required >
        <br><br><br>
      <label>Enter password</label>
      <input type="password" name="auth_pass" placeholder="Введите пароль" required >
        <br><br><br>
      <button type="submit" name="auth">Enter</button>
    </form>

<?php



?>
