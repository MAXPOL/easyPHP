<?php

require "dbconnect.php";

if (isset ($GLOBALS['verified'])) {

echo "<center><h2>Authorization complete</h2>";

} else {

if (isset ($_POST['auth'])) {


        $login = $_POST['auth_login'];

        $pass = $_POST['auth_pass'];

        $query = "SELECT id FROM auth WHERE login = '$login' AND password = '$pass'";

        $result = $conn->query($query);

        $row = mysqli_fetch_assoc($result)

        if (isset ($row) && !empty ($row)) {
        $GLOBALS[$verified] = 1;
        }

        while ($row = mysqli_fetch_assoc($result)) {
                printf($row["id"]);
       }
}
}
?>
    <center><h2>Authorization</h2>
    <form action="" method="post">
        <br>
      <label>Login</label>
      <input type="login" name="auth_login" placeholder="Enter login" required >
        <br><br><br>
      <label>Password</label>
      <input type="password" name="auth_pass" placeholder="Enter password" required >
        <br><br><br>
      <button type="submit" name="auth">Enter</button>
    </form>
