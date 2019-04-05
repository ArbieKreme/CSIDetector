<?php
require_once('config/config.php');
$username = $password = $pwd = '';
$username = $_POST['username'];
$pwd = $_POST['password'];
$password = MD5($pwd);
$sql = "SELECT * FROM accounts WHERE username='$username' AND password='$password'";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$account_id = $row["account_id"];
    $username = $row["username"];
    $firstname = $row["firstname"];
    $middlename = $row["middlename"];
    $lastname = $row["lastname"];
		$email = $row["email"];
    $contact_number = $row["contact_number"];
    $house_number = $row["house_number"];
    $street = $row["street"];
    $city = $row["city"];
    $created_at = $row["created_at"];
		session_start();
		$_SESSION['account_id'] = $account_id;
		$_SESSION['username'] = $username;
    $_SESSION['firstname'] = $firstname;
    $_SESSION['middlename'] = $middlename;
    $_SESSION['lastname'] = $lastname;
    $_SESSION['email'] = $email;
    $_SESSION['contact_number'] = $contact_number;
    $_SESSION['house_number'] = $house_number;
    $_SESSION['street'] = $street;
    $_SESSION['city'] = $city;
    $_SESSION['created_at'] = $created_at;
	}
	header("Location: finder/finderhome.php");
}
else
{
	echo "Invalid email or password";
}
?>
