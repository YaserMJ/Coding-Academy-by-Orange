<?php
session_start();
if (isset($_SESSION['user'])) {
    header("location: general message.php");
}
require "connection.php";

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = md5($_POST['password']);
    $messeg = "";

    if (empty($user) || empty($pass)) {
        $messeg = "Username/Password con't be empty";
    } else {
        $sql = "SELECT username, password FROM users WHERE username=? AND 
  password=? ";
        $query = $conn->prepare($sql);
        $query->execute(array($user, $pass));

        if ($query->rowCount() >= 1) {
            $_SESSION['user'] = $user;
            $_SESSION['time_start_login'] = time();
            header("location: general message.php");
        } else {
            $messeg = "Username/Password is wrong";
        }
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PHP CRUD</title>
</head>

<body>
    <h1>Login</h1>
    <form action="login.php" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password</label>
        <input type="text" id="password" name="password"><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>

</html>