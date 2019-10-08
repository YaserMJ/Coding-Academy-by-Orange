<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
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