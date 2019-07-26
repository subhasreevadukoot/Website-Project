<html>
<head>
<title> This is Database connection project </title>
</head>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$user=$_POST['usernamep'];
$pass=$_POST['passwordp'];
$conn = new mysqli ($servername, $username, $password);
if ($conn->connect_error){
die("Connection failed : " . $conn->connect_error);
}
echo "Connected successfully";
mysqli_select_db($conn,"userinfo");
$sql = "INSERT INTO example1(username,password) VALUES ('$user','$pass')";
if($conn->query($sql) === TRUE){
echo "new record created successfully";
}
else{
echo "ERROR: " . $sql . "<br>" .$conn->error;
}
$conn->close();
?>
</body>
</html>