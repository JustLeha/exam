<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Online Exam System - User Login</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }
    
    .main {
        width: 80%;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    .segment {
        display: inline-block;
        vertical-align: top;
    }

    .segment img {
        width: 200px;
        display: block;
        margin: 0 auto;
    }

    .tbl {
        margin-top: 20px;
    }

    .tbl td {
        padding: 10px;
    }

    input[type="text"],
    input[type="password"],
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #4caf50;
        color: white;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    p {
        text-align: center;
        margin-top: 20px;
    }

    a {
        color: #007bff;
        text-decoration: none;
    }

    .empty,
    .error,
    .disable {
        display: none;
        color: red;
        text-align: center;
        margin-top: 10px;
    }
</style>
</head>
<body>

<?php include 'inc/header.php'; ?>

<?php
Session::checkLogin();
?>

<div class="main">
    <h1>Online Exam System - User Login</h1>
    <div class="segment" style="margin-right:30px;">
        <img src="img/test.png" alt="Test Image">
    </div>
    <div class="segment">
        <form action="" method="post">
            <table class="tbl">    
                <tr>
                    <td>Email</td>
                    <td><input name="email" type="text" id="email"></td>
                </tr>
                <tr>
                    <td>Password </td>
                    <td><input name="password" type="password" id="password"></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" id="loginsubmit" value="Login"></td>
                </tr>
            </table>
        </form>
        <p>New User ? <a href="register.php">Signup</a> Free</p>
        <span class="empty">Field must not be empty !</span>
        <span class="error">Email or Password not matched !</span>
        <span class="disable">User Id disabled !</span>
    </div>
</div>

<?php include 'inc/footer.php'; ?>

</body>
</html>
