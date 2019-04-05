<?php
session_start();
$account_id = $_SESSION["account_id"];
$username = $_SESSION["username"];
$firstname = $_SESSION["firstname"];
$middlename = $_SESSION["middlename"];
$lastname = $_SESSION["lastname"];
$email = $_SESSION["email"];
$contact_number = $_SESSION["contact_number"];
$house_number = $_SESSION["house_number"];
$street = $_SESSION["street"];
$city = $_SESSION["city"];
$created_at = $_SESSION["created_at"];
 ?>

<a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-white" href="javascript:void(0);" onclick="toggleMenu()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="finderhome.php#adminhome" id="home" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>

    <div class="w3-bar-item w3-padding-small w3-dropdown-hover w3-teal">
      <button class="w3-button w3-hide-small w3-hover-white"><?php echo $email;?></button>
      <div class="w3-dropdown-content w3-bar-block w3-border">
        <a href="adminaccount.php" class="w3-bar-item w3-button">Account</a>
        <a href="../logoutaction.php" class="w3-bar-item w3-button">Logout</a>
      </div>
    </div>
