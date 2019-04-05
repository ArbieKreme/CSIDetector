<?php
    if(isset($_POST['respondent']))
    {
        // include Database connection file
        include("../config/config.php");

        // get values
        $respondent = $_POST['respondent'];
        $location = $_POST['location'];
        $coconutcondition = $_POST['coconutcondition'];
        $status = $_POST['status'];

        $query = "INSERT INTO sightings(respondent, location, coconutcondition, status)
        VALUES('$respondent','$location', '$coconutcondition',
          '$status')";
        if (!$result = mysqli_query($con, $query)) {
            exit(mysqli_error($con));
        }
        echo "1 Record Added!";
    }
?>
