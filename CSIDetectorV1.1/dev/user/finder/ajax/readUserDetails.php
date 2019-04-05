  <?php
include("../config/config.php");

// check request
if(isset($_POST['missing_person_id']) && isset($_POST['missing_person_id']) != "")
{
    // get User ID
    $missing_person_id = $_POST['missing_person_id'];

    // Get User Details
    $query = "SELECT * FROM missingpersons WHERE missing_person_id = '$missing_person_id'";
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
