<?php
	include("../config/config.php");

	// Design initial table header
	$data = '
		<div class="container w3-container" width="100%">
  		<div class="table-responsive" width="100%">
       <table id="missing_persons_table" class="table table-hover table-condensed table-bordered" width="100%">
            <thead>
                 <tr>
                 <td>Respondent</td>
								 <td>Location</td>
								 <td>Coconut Condition</td>
                 <td>Status</td>
                 <td>Date Reported</td>
								 <td class="no-sort"></td>
								 <td class="no-sort"></td>
              </tr>
         </thead>';

	$query = "SELECT * FROM sightings
";

	if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }

    // if query results contains rows then featch those rows
    if(mysqli_num_rows($result) > 0)
    {
    	$number = 1;
    	while($row = mysqli_fetch_assoc($result))
    	{
    		$data .=
        '<tr>
				<td class="td">'.$row["respondent"].'</td>
				<td class="td">'.$row["location"].'</td>
        <td class="td">'.$row["coconutcondition"].'</td>
        <td class="td">'.$row["status"].'</td>
        <td class="td">'.$row["created_at"].'</td>
				<td>
					<button onclick="GetUserDetails('.$row['sightings_id'].')" class="btn btn-warning">Update</button>
				</td>
				<td>
					<button onclick="DeleteUser('.$row['sightings_id'].')" class="btn btn-danger">Delete</button>
				</td>
    		</tr>';
    		$number++;
    	}
    }
    else
    {
    	// records now found
    	$data .= '<tr><td class="td" colspan="18">No Available Records</td></tr>';
    }

    $data .= "</div></div></table>
		<script>
		    $(document).ready(function(){
		      $('#missing_persons_table').DataTable();
		    });
		</script>
		";

    echo $data;
?>
