<?php
session_start();
require_once 'config.php';
?>
<?php
$msg = "";
if (isset($_POST['submitBtnLogin'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if ($username != "" && $password != "") {
        try {
            $query = "select * from `users` where `username`=:username and `password`=:password";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam('username', $username, PDO::PARAM_STR);
            $stmt->bindValue('password', $password, PDO::PARAM_STR);
            $stmt->execute();
            $count = $stmt->rowCount();
            $row   = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($count == 1 && !empty($row)) {
                /******************** Your code ***********************/
                $_SESSION['sess_user_id']   = $row['id'];
                $_SESSION['sess_user_name'] = $row['username'];
                $_SESSION['sess_email'] = $row['email'];
            } else {
                $msg = "Invalid username and password!";
            }
        } catch (PDOException $e) {
            echo "Error : " . $e->getMessage();
        }
    } else {
        $msg = "Both fields are required!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP CRUD</title>
</head>

<body>
    <form method="post">
        <table class="loginTable">
            <tr>
                <th>ADMIN PANEL LOGIN</th>
            </tr>
            <tr>
                <td>
                    <label class="firstLabel">Username:</label>
                    <input type="text" name="username" id="username" value="" autocomplete="off" />
                </td>
            </tr>
            <tr>
                <td><label>Password:</label>
                    <input type="password" name="password" id="password" value="" autocomplete="off" /></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submitBtnLogin" id="submitBtnLogin" value="Login" />
                    <span class="loginMsg"><?php echo @$msg; ?></span>
                </td>
            </tr>
        </table>

    </form>
</body>

</html>