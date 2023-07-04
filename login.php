<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <link rel="icon" href="logo.png">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-group input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }

        .header {
        text-align: center;
        margin-bottom: 20px;
        }

        .header img {
        max-width: 200px;
        height: auto;
        }

        .error-message {
            color: red;
            margin-top: 10px;
            text-align: center;
        }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="/std/Knorr-clone-main/logo.png" alt="Knorr Logo"
            width="85px" style="cursor: pointer;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/std/Knorr-clone-main/index1.php">Goto Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav> 



    <div class="container my-5">
    <div class="header">
            <img src="/std/Knorr-clone-main/logo.png" alt="Logo">
        </div>
        <h2>Admin Login</h2>
        <form method="post" action="">
            <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" autocomplete="off" required><br>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" autocomplete="off" required><br>
            </div>
            <div class="form-group">
                <input type="submit" name="login" value="Login">
                <span style="color: red;"><?php if(isset($error)) echo $error; ?></span>
            </div>
        </form>
    </div>
</body>
</html>

<?php
session_start();
$con=mysqli_connect('localhost','root','','student');
if(!$con){
    die(mysqli_error($con));
}
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT * FROM login WHERE username='$username' AND password='$password'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);
    if($count==1){
        session_start();
        $_SESSION['loggedin']=true;
        header("location:display.php");
    }
    else{
        echo '<p class="error-message">Wrong username or password.</p>';
    }
}
?>