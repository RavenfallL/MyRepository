<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mybook";
$username = $_POST["username"];
$passwd = $_POST["password"];
$birthday = $_POST["year"];
@$email = $_POST["email"];
$number = $_POST["number"];
@$favour = $_POST["favour"];
$hobby = $_POST["hobby"];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$sql = "select name from user where name = '$name'";  
$result = $conn->query($sql);
if($num = $result->fetch_assoc())  
{  
	echo "<script>alert('It is a same username, please try others ');history.go(-1);</script>";  
}else{
	$sql = "insert into user (name,sex,passwd,birthday,email,number,favour,hobby) values ('$name','$sex','$passwd','$birthday','$email','$number','$favour','$hobby')";
	if($conn->query($sql)){
		echo "<script>alert('OK');history.go(-1);</script>";
	}else{
		echo "<script>alert('no');history.go(-1);</script>";
	}
}
$conn->close();


?>