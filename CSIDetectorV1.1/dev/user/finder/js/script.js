// Add Record
function addRecord() {
    // get values
    var mp_firstname = $("#add_mp_firstname").val();
    var mp_relative = $("#add_mp_relative").val();
    var mp_height = $("#add_mp_height").val();
    var mp_weight = $("#add_mp_weight").val();

    // Add record
    $.post("ajax/addRecord.php", {
        mp_firstname: mp_firstname,
        mp_relative: mp_relative,
        mp_height: mp_height,
        mp_weight: mp_weight
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#add_mp_firstname").val("");
        $("#add_mp_relative").val("");
        $("#add_mp_height").val("");
        $("#add_mp_weight").val("");
    });
}

// READ records
function readRecords() {
    $.get("ajax/readRecord.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteUser(missing_person_id) {
    var conf = confirm("Are you sure, do you really want to delete report?");
    if (conf == true) {
        $.post("ajax/deleteRecord.php", {
                missing_person_id: missing_person_id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

function GetUserDetails(missing_person_id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_missing_person_id").val(missing_person_id);
    $.post("ajax/readUserDetails.php", {
            missing_person_id: missing_person_id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_mp_firstname").val(user.mp_firstname);
            $("#update_mp_relative").val(user.mp_relative);
            $("#update_mp_height").val(user.mp_height);
            $("#update_mp_weight").val(user.mp_weight);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateUserDetails() {
    // get values
    var mp_firstname = $("#update_mp_firstname").val();
    var mp_relative = $("#update_mp_relative").val();
    var mp_height = $("#update_mp_height").val();
    var mp_weight = $("#update_mp_weight").val();
    // get hidden field value
    var missing_person_id = $("#hidden_user_missing_person_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateUserDetails.php", {
      mp_firstname: mp_firstname,
      mp_relative: mp_relative,
      mp_height: mp_height,
      mp_weight: mp_weight
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}
