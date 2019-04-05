<?php
    if(isset($_POST['mp_relative']))
    {
        // include Database connection file
        include("../config/config.php");

        // get values
        $mp_relative = $_POST['mp_relative'];
        $mp_firstname = $_POST['mp_firstname'];
        $mp_height = $_POST['mp_weight'];
        $mp_weight = $_POST['mp_height'];

        $query = "INSERT INTO missingpersons(mp_relative, mp_firstname,mp_height, mp_weight)
        VALUES('$mp_relative','$mp_firstname', '$mp_height',
          '$mp_weight')";
        if (!$result = mysqli_query($con, $query)) {
            exit(mysqli_error($con));
        }
        echo "1 Record Added!";
    }
?>
