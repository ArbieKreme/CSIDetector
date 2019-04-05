<?php
// check request
if(isset($_POST['missing_person_id']) && isset($_POST['missing_person_id']) != "")
{
    // include Database connection file
    include("../config/config.php");

    // get user id
    $missing_person_id = $_POST['missing_person_id'];

    // delete User
    $query = "DELETE FROM missingpersons WHERE missing_person_id = '$missing_person_id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}
?>
