<?php
include("../config/config.php");

// check request
if(isset($_POST))
{
    // get values
    $missing_person_id = $_POST['missing_person_id'];
    $mp_firstname = $_POST['mp_firstname'];
    $mp_relative = $_POST['mp_relative'];
    $mp_height = $_POST['mp_height'];
    $mp_weight = $_POST['mp_weight'];

    // Updaste User details
    $query = "UPDATE missingpersons SET
    mp_firstname = '$mp_firstname',
    mp_relative = '$mp_relative',
    mp_height = '$mp_height',
    mp_weight = '$mp_weight'
     WHERE missing_person_id = '$missing_person_id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}
