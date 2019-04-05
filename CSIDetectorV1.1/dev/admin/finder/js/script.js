
// Add Record
function addRecord() {
    // get values
    var location = $("#add_location").val();
    var respondent = $("#add_respondent").val();
    var coconutcondition = $("#add_coconutcondition").val();
    var status = $("#add_status").val();

    // Add record
    $.post("ajax/addRecord.php", {
        location: location,
        respondent: respondent,
        coconutcondition: coconutcondition,
        status: status
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#add_location").val("");
        $("#add_respondent").val("");
        $("#add_coconutcondition").val("");
        $("#add_status").val("");
    });
}

// READ records
function readRecords() {
    $.get("ajax/readRecord.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteUser(sightings_id) {
    var conf = confirm("Are you sure, do you really want to delete report?");
    if (conf == true) {
        $.post("ajax/deleteRecord.php", {
                sightings_id: sightings_id},
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

function GetUserDetails(sightings_id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_sightings_id").val(sightings_id);
    $.post("ajax/readUserDetails.php", {
            sightings_id: sightings_id
        },
        function (data, status) {
            // PARSE json data
            alert(data);
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_location").val(user.location);
            $("#update_respondent").val(user.respondent);
            $("#update_coconutcondition").val(user.coconutcondition);
            $("#update_status").val(user.status);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateUserDetails() {
    // get values
    var location = $("#update_location").val();
    var respondent = $("#update_respondent").val();
    var coconutcondition = $("#update_coconutcondition").val();
    var status = $("#update_status").val();
    // get hidden field value
    var sightings_id = $("#hidden_user_sightings_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateUserDetails.php", {
      sightings_id: sightings_id,
      location: location,
      respondent: respondent,
      coconutcondition: coconutcondition,
      status: status
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}
