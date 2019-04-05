<?php
include("../config/config.php");

// check request
if(isset($_POST))
{
    // get values
    $sightings_id = $_POST['sightings_id'];
    $location = $_POST['location'];
    $respondent = $_POST['respondent'];
    $coconutcondition = $_POST['coconutcondition'];
    $status = $_POST['status'];

    // Updaste User details
    $query = "UPDATE sightings SET location = '$location', respondent = '$respondent', coconutcondition = '$coconutcondition', status = '$status' WHERE sightings_id = '$sightings_id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}
