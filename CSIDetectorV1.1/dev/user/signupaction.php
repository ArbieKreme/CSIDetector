<!--
Here, we write code for registration.
-->
<?php
require_once('config/config.php');
$username = $firstname = $middlename = $lastname = $email = $contact_number  = $house_number  = $street  = $city = $pwd  = $password  = '';

$username= $_POST['username'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$contact_number = $_POST['contact_number'];
$house_number = $_POST['house_number'];
$street = $_POST['street'];
$city = $_POST['city'];
$pwd = $_POST['password'];
$password = MD5($pwd);

$sql = "INSERT INTO accounts (username, firstname, middlename, lastname, email, contact_number, house_number, street, city, password) VALUES ('$username','$firstname','$middlename','$lastname','$email','$contact_number','$house_number','$street','$city','$password')";
$result = mysqli_query($con, $sql);
if($result)
{
		header("Location: index.php");
}
else
{
	echo "Error :".$sql;
}
?>
