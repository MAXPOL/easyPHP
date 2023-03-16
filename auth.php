<?php

session_start();

require "dbconnect.php";

if ($_SESSION['verified'] == '1') {

$username = $_POST['auth_login'];
echo "<center><h2>Authorization complete</h2>";
echo "Hello $username";
?>
        <br><br>
    <form action="logout.php">
      <button type="submit" >Logout</button>
    </form>
        <br>
   <form action="students.php">
      <button type="submit" >Students</button>
    </form>
<?php

} else {

if (isset ($_POST['auth'])) {


        $login = $_POST['auth_login'];

        $pass = $_POST['auth_pass'];

        $query = "SELECT id FROM auth WHERE login = '$login' AND password = '$pass'";

        $result = $conn->query($query);

        while ($row = mysqli_fetch_assoc($result)) {
                $chekauth = $row["id"];
                if ($chekauth == 1) {
                $_SESSION['verified'] = '1';
                $_COOKIE['username'] = $login;
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
<?php

}

?>
