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
session_start();

$conn = openConnection();

$link = mysqli_connect('localhost','root','root');
$database = mysqli_select_db($link,'registration');

$email = $_POST['email'];
$password = $_POST['password'];
$encryptedPassword = md5($password);

     $query = "SELECT * FROM users WHERE email = '". mysqli_real_escape_string($link,$email) ."' AND password = '". mysqli_real_escape_string($link,$encryptedPassword) ."'" ;
     $result = mysqli_query($link,$query);
     if (mysqli_num_rows($result) == 1) 
      {
        $query2 = "SELECT fname,lname FROM users WHERE email = '". mysqli_real_escape_string($link,$email) ."' AND password = '". mysqli_real_escape_string($link,$encryptedPassword) ."'" ;
        $result2 = mysqli_query($link,$query2);
        while ($row = $result2->fetch_assoc()) {
          echo "<h1>" . 'Welcome, ' . $row['fname'] . ' ' . $row['lname'] . "</h1>";
      }
      } 
       else 
      {
        echo "<script>
               alert('Email and password DO NOT match!!');
              window.location.href='/nouran/index.php';
              </script>";
      }
      ?>
      <head>
        <title>Welcome</title>
      </head>
      <body>
        
      </body>
