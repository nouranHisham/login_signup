<?php
function openConnection()
{
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "root";
  $db = "registration";
  $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);

  return $conn;
}
?>