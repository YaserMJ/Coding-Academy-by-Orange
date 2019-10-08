<!-- I've created the requested database using phpmyadmin although these are the mysql commands I know

CREATE DATABASE IF NOT EXISTS myapplication(
id int primarykey,
username varchar(255),
password varchar(255),
email varchar(255),
phone_number varchar(255));

"INSERT INTO users (username, email, password, phone_number) VALUES (:username, :email, :password, :phone_number)";
+bind
-->


<!---------------------------------------------------PHP HERE----------------------------------------------------------------------->

<?php
session_start();
// Connection to "myapplication" database.
$servername = "localhost";
$username = "root";
$password = "";
try {
    $pdo = new PDO("mysql:host=$servername;dbname=myapplication", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected hehe"; 
    }
catch(PDOException $e)
    {
    echo "oopsie, failed: " . $e->getMessage();
    }



// empty vars init
$username = "";
$email = "";
$password = "";
$phone_number = "";

// form method checking and values given to the empty vars
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $username = $_POST["username"];
        $email =  $_POST["email"];
        $phone_number = $_POST["phone_number"];   
        $password = $_POST["password"]; 
    }

// SQL insert statment into desired mypplication database
        $sql = "INSERT INTO users (username, password,email , phone_number) VALUES (:username, :password, :email, :phone_number)";
        if ($stmt = $pdo->prepare($sql)) {
            // Binding parameters
            $param_username = $username;
            $param_email = $email;
            $param_password = $password;
            $param_phone_number = $phone_number;

            //Bind statements
            $stmt->bindParam(":username", $param_username);
            $stmt->bindParam(":email", $param_email);
            $stmt->bindParam(":password", $param_password);
            $stmt->bindParam(":phone_number", $param_phone_number);

            //Execution
            if ($stmt->execute()) {
                header("location: new.php");
                exit();
            }
        }
        
?>
<!---------------------------------------------------HTML HERE----------------------------------------------------------------------->
<html>
<head>
    <style>
        * {box-sizing: border-box}

        /* Add padding to containers */
        .container {
            padding: 16px;
        }

        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit/register button */
        .registerbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity:1;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }
    </style>
</head>
<body>
<h1> Instructions </h1>
<ul>
       <li>Create a database called myapplication.</li>
       <li>Create a table called users. (Id,username,password,email,phone_number). Those fields should have the right datatype and right size.
       <li>Connect the form to the database, When the user insert the information in the registration form, those information should stored in the database.</li>
       <li>After submission, the page should be redirect to new page.</li>
       <li>The new page should display, "Hello (username)" </li>
</ul>
<form method='POST'>
    <div class="container">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter username" name="username" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <label for="password-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="password-repeat" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Email" name="email" required>

        <label for="phone-number"><b>Phone Number</b></label>
        <input type="text" placeholder="phone_number" name="phone_number" required>
        <hr>

        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
        <button type="submit" class="registerbtn">Register</button>
    </div>

    <div class="container signin">
        <p>Already have an account? <a href="#">Sign in</a>.</p>
    </div>
</form>
</body>



