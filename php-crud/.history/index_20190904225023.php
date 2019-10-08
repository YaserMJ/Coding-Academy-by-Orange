<?php
session_start();
require_once 'config.php';
?>
<?php
$msg = "";
if (isset($_POST['submitBtnLogin'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
   if (isset($_POST['user_type'])) {
			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO users (username, email, user_type, password) 
					  VALUES('$username', '$email', '$user_type', '$password')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: home.php');
		}else{
			$query = "INSERT INTO users (username, email, user_type, password) 
					  VALUES('$username', '$email', 'user', '$password')";
			mysqli_query($db, $query);

			// get id of the created user
			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
			$_SESSION['success']  = "You are now logged in";
			header('location: index.php');				
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