<?php
// check request
if(isset($_POST['sightings_id']) && isset($_POST['sightings_id']) != "")
{
    // include Database connection file
    include("../config/config.php");

    // get user id
    $sightings_id = $_POST['sightings_id'];

    // delete User
    $query = "DELETE FROM sightings WHERE sightings_id = '$sightings_id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}
?>
