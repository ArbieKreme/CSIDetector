<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script src="js/script.js"></script>

              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <h4>Sightings Details</h4>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                          <div class="pull-right">
                              <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Add New Record</button>
                          </div>
                      </div>
                  </div>
                  <br>
              </div>

              <div class="records_content"></div>
<!-- Bootstrap Modals -->
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <label>Add Sighting Details</label>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" style="color:teal" id="myModalLabel">Add New Record</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                  <select class="form-dropdown form-control" style="width:100%" id="add_respondent" name="add_respondent">
                    <option style="color:grey">--Select Respondent--</option>
                 <?php
                   include '../config/config.php';
                   $sql="SELECT account_id, firstname, middlename, lastname from  accounts";
                   $result = mysqli_query($con,$sql);
                    $menu=" ";
                     while($row =mysqli_fetch_assoc($result))
                     {$menu .="<option style=\"color:grey\" value=\"" . $row['firstname'] . "\">" . $row['firstname'] . ' ' . $row['middlename'] . ' ' . $row['lastname'] . "</option>";
                     }
                     echo $menu;
                  ?>
                </select>
                </div>

                <div class="form-group">
                    <input type="text" id="add_location" placeholder="Enter Location" class="form-control" required/>
                </div>

                <div class="form-group" style="text-align:left;" for="add_coconutcondition">
                  <select id="add_coconutcondition" class="form-control">
                   <option value="">--Coconut Condition--</option>
                   <option value="Normal">Normal</option>
                   <option value="Mild">Mild</option>
                   <option value="Severe">Severe</option>
                  </select>
                </div>

                <div class="form-group" style="text-align:left;" for="add_status">
                  <select id="add_status" class="form-control">
                   <option value="">--Status--</option>
                   <option value="Open">Open</option>
                   <option value="In Progress">In Progress</option>
                   <option value="Close">Close</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addRecord()">Add Record</button>
            </div>
        </div>
    </div>
<!-- // Modal -->

<!-- Modal - Update User details -->
<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel" style="color:teal">Update</h4>
            </div>
              <div class="modal-body">
                <div class="form-group">
                  <select class="form-dropdown form-control" style="width:100%" id="update_respondent" name="update_respondent">
                    <option style="color:grey">--Select Respondent--</option>
                 <?php
                   include '../config/config.php';
                   $sql="SELECT account_id, firstname, middlename, lastname from  accounts";
                   $result = mysqli_query($con,$sql);
                    $menu=" ";
                     while($row =mysqli_fetch_assoc($result))
                     {$menu .="<option style=\"color:grey\" value=\"" . $row['firstname'] . "\">" . $row['firstname'] . ' ' . $row['middlename'] . ' ' . $row['lastname'] . "</option>";
                     }
                     echo $menu;
                  ?>
                </select>
                </div>

                <div class="form-group">
                    <input type="text" id="update_location" placeholder="Enter Location" class="form-control" required/>
                </div>

                <div class="form-group" style="text-align:left;" for="update_coconutcondition">
                  <select id="update_coconutcondition" class="form-control">
                   <option value="">--Coconut Condition--</option>
                   <option value="Normal">Normal</option>
                   <option value="Mild">Mild</option>
                   <option value="Severe">Severe</option>
                  </select>
                </div>

                <div class="form-group" style="text-align:left;" for="update_status">
                  <select id="update_status" class="form-control">
                   <option value="">--Status--</option>
                   <option value="Open">Open</option>
                   <option value="In Progress">In Progress</option>
                   <option value="Close">Close</option>
                  </select>
                </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Save Changes</button>
        <input type="hidden" id="hidden_user_sightings_id">
    </div>
</div>
</div>

<script>
    $(document).ready(function(){
      $('#missing_persons_table').DataTable();
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
      readRecords(); // calling function
    });
</script>
</body>
</html>
