<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="styleregister.css">
    <script type="text/javascript" src="scriptRegister.js">
    </script>

<body>
    <h1>Signup Form</h1>
    <br />
    <div class="form-center">
        <form name="register" action="insertUser.php" onsubmit="return validateForm2()" method="post">
            <div>
                <input type="text" name="name" placeholder="First name">
            </div>
            <div>
                <input type="text" name="lname" placeholder="Last name">
            </div>
            <div>
                <input type="email" name="email" placeholder="Email">
            </div>
            <div>
                <input type="password" name="password" placeholder="Password">
            </div>
            <div>
                <input type="password" name="confirmPassword" placeholder="Confirm password">
            </div>
            <br />
            <input type="submit" value="Register">
    </div>
</body>
</head>

</html>