<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <style>
        body {
            background-color: #f1f1f1;
            font-family: Arial, sans-serif;
        }
        
        .login-container {
            width: 400px;
            height: 430px;
            margin: 0 auto;
            margin-top: 90px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }
        
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        
        }
        
        .login-container label {
            display: block;
            margin-bottom: 10px;
        }
        
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 95%;
            padding: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }
        
        .login-container input[type="submit"] {
            margin-top: 10px;
            margin-left: 40px;
            width: 80%;
            padding: 10px;
            border: none;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }
        
        .login-container input[type="submit"]:hover {
            background-color: #45a049;
        }
        
        .error-message {
            color: red;
            margin-top: 10px;
            text-align: center;
        }
        .login-container img{
            width: 80px;
        }
        .login-container h6 {
            margin-left: 22px;
            margin-top: -18px;
        
        }
    </style>
</head>
<body>
    <div class="login-container">
    <img src="logo.png" alt="lpgo">

        <h2>Admin Login</h2>
        <form action="index.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="checkbox">
            <label for="checkbox"> <h6> save user info?</h6> </label><br>
            <input type="submit" value="Login">
            <?php
            // Check if the form is submitted
            $con=mysqli_connect('localhost','root','','student');
                if(!$con){
                    die(mysqli_error($con));
                
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Define your username and password
                // $validUsername = "abdulrahman";
                // $validPassword = "a123";

                // Get the username and password from the form
                $username = $_POST["username"];
                $password = $_POST["password"];

                // Check if the credentials match
                if ($username == $validUsername && $password == $validPassword) {
                    // Successful login, redirect to admin panel
                    header("Location: admin_panel.php");
                    exit();
                } else {
                    // Invalid credentials, display error message
                    echo '<p class="error-message">Wrong username or password.</p>';
                }
            }
            ?>
        </form>
    </div>
</body>
</html>