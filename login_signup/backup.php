<?php
	include 'db_connection';
    $conn = openConnection();
	session_start();
	if($_POST['type']==1){
		$name = $_POST["name"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $encryptedPassword = md5($password);
		
		$duplicate=mysqli_query($conn,"SELECT* FROM users WHERE email='$email'");
		if (mysqli_num_rows($duplicate)>0)
		{
			echo json_encode(array("statusCode"=>201));
		}
		else{
			$sql = "INSERT INTO users (email, fname, lname, password)
            VALUES ('$email','$name','$lname','$encryptedPassword')";
			if (mysqli_query($conn, $sql)) {
				echo json_encode(array("statusCode"=>200));
			} 
			else {
				echo json_encode(array("statusCode"=>201));
			}
		}
		mysqli_close($conn);
	}
	if($_POST['type']==2){
		$email=$_POST['email'];
		$password=$_POST['password'];
        $encryptedPassword = md5($password);
		$check=mysqli_query($conn,"SELECT * FROM users WHERE email='$email' and password='$encryptedPassword'");
		if (mysqli_num_rows($check)>0)
		{
			$_SESSION['email']=$email;
			echo json_encode(array("statusCode"=>200));
		}
		else{
			echo json_encode(array("statusCode"=>201));
		}
		mysqli_close($conn);
	}
