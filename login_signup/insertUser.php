<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nouran</title>
    <link rel="stylesheet" type="text/css" href="stylewelcome.css">
    </script>
</head>
<?php
include "db_connection.php"; 

$conn = openConnection();
$link = mysqli_connect('localhost', 'root', 'root');
$database = mysqli_select_db($link, 'registration');

$name = $_POST["name"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$password = $_POST["password"];
$encryptedPassword = md5($password);

$query = "SELECT * FROM users WHERE email = '" . mysqli_real_escape_string($link, $email) . "'";
$result = mysqli_query($link, $query);
if (mysqli_num_rows($result) == 1) {
  echo "<script>
               alert('This email already exixts!!Choose a different one');
              window.location.href='/nouran/register.php';
              </script>"; 
} else {
  
  echo "<h1>" . 'Welcome, ' . $name . ' ' . $lname . "</h1>";

  $sql = "INSERT INTO users (email, fname, lname, password)
  VALUES ('$email','$name','$lname','$encryptedPassword')";

  if ($conn->query($sql) === TRUE) {
    echo "";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>
<head>
        <title>Welcome</title>
      </head>
      <body>
        
      </body>
