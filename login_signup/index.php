<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="stylelogin.css">
    <script type="text/javascript" src="scriptLogin.js">
    </script>
</head>
<?php
include "db_connection.php";
$conn = openConnection();
?>

<body>
    <h1>Login Form</h1>
    <br />
    <div class="form-center">
        <form name="loginForm" action="checkUser.php" onsubmit="return validateForm()" method="post">
            <div>
                <input type="text" name="email" placeholder="Email">
                <div>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <br />
                <input type="submit" value="LOGIN">
                <br />
        </form>
        <h5>Don't have an account? Create one</h5>
        <form name="registerForm" action="register.php" class="form-center">
            <div>
                <button>SIGN UP</button>
            </div>
        </form>
    </div>
</body>

</html>