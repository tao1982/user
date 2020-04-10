<?php

    include 'datenbank.php';
	
	echo "<br>";
	$username=$_POST["un"];
	$password=$_POST["pw"];
	$email=$_POST["el"];
	$tele=$_POST["tl"];
	echo "Username: " .$username;
	echo "<br>";
	echo "Password: " .$password."<br>";
	echo"success!!";


	$sql = "INSERT INTO `user`(`id`, `username`, `password`, `email`, `sex`, `tel`, `addr`) VALUES ('','".$username."','".$password."','".$email."','herr' , '".$tele."','nurnberg')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
	
?>
