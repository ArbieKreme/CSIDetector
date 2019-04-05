  <?php
include("../config/config.php");

// check request
if(isset($_POST['sightings_id']) && isset($_POST['sightings_id']) != "")
{
    // get User ID
    $sightings_id = $_POST['sightings_id'];

    // Get User Details
    $query = "SELECT * FROM sightings
 WHERE sightings_id = '$sightings_id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
    $response = array();
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $response = $row;
        }
    }
    else
    {
        $response['status'] = 200;
        $response['message'] = "Data not found!";
    }
    // display JSON data
    echo json_encode($response);
}
else
{
    $response['status'] = 200;
    $response['message'] = "Invalid Request!";
}
