<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>


<script type="text/javascript" src="js/script.js"></script>
<script src="opencv.js" type="text/javascript"></script>
<script src="utils.js"></script>



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
              <video id="videoInput" style="padding:5% 1px 10%" width="320" height="240" class="w3-hide w3-center"></video>
              <div>
                <div class="control"><center><button id="capBtn">Start</button><center></div>

                  <table cellpadding="0" cellspacing="0" width="0" border="0">
                  <tbody><tr>

                      <td>
                          <canvas id="canvasOutput" width="100%" height="100%"></canvas>
                      </td>
                      <td></td>
                      <td></td>
                  </tr>

                  </tbody></table>
              </div>



<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <label>Add Sighting</label>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" style="color:teal" id="myModalLabel">Add New Record</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                  <select class="form-dropdown form-control" style="width:100%" id="add_mp_relative" name="add_mp_relative">
                    <option style="color:grey">--Select Respondent--</option>
                 <?php
                   include '../config/config.php';
                   $sql="SELECT account_id, firstname, middlename, lastname from  accounts";
                   $result = mysqli_query($con,$sql);
                    $menu=" ";
                     while($row =mysqli_fetch_assoc($result))
                     {$menu .="<option style=\"color:grey\" value=\"" . $row['account_id'] . "\">" . $row['firstname'] . ' ' . $row['middlename'] . ' ' . $row['lastname'] . "</option>";
                     }
                     echo $menu;
                  ?>
                </select>
                </div>

                <div class="form-group">
                    <input type="text" id="add_mp_firstname" placeholder="Enter Location" class="form-control" required/>
                </div>

                <div class="form-group" style="text-align:left;" for="add_mp_height">
                  <select id="add_mp_gender">
                   <option value="">--Coconut Condition--</option>
                   <option value="Normal">Normal</option>
                   <option value="Mild">Mild</option>
                   <option value="Severe">Severe</option>
                  </select>
                </div>

                <div class="form-group" style="text-align:left;" for="add_mp_weight">
                  <select id="add_mp_gender">
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
                  <select class="form-dropdown form-control" style="width:100%" id="update_mp_relative" name="update_mp_relative">
                    <option style="color:grey">--Select Respondent--</option>
                 <?php
                   include '../config/config.php';
                   $sql="SELECT account_id, firstname, middlename, lastname from  accounts";
                   $result = mysqli_query($con,$sql);
                    $menu=" ";
                     while($row =mysqli_fetch_assoc($result))
                     {$menu .="<option style=\"color:grey\" value=\"" . $row['account_id'] . "\">" . $row['firstname'] . ' ' . $row['middlename'] . ' ' . $row['lastname'] . "</option>";
                     }
                     echo $menu;
                  ?>
                </select>
                </div>

                <div class="form-group">
                    <input type="text" id="update_mp_firstname" placeholder="Enter Location" class="form-control" required/>
                </div>

                <div class="form-group" style="text-align:left;" for="update_mp_height">
                  <select id="update_mp_gender">
                   <option value="">--Coconut Condition--</option>
                   <option value="Normal">Normal</option>
                   <option value="Mild">Mild</option>
                   <option value="Severe">Severe</option>
                  </select>
                </div>

                <div class="form-group" style="text-align:left;" for="update_mp_weight">
                  <select id="update_mp_gender">
                   <option value="">--Status--</option>
                   <option value="Open">Open</option>
                   <option value="In Progress">In Progress</option>
                   <option value="Close">Close</option>
                  </select>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Save Changes</button>
                <input type="hidden" id="hidden_user_missing_person_id">
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
      $('#missing_persons_table').DataTable();
      readRecords(); // calling function
    });

    let capBtn = document.getElementById('capBtn');

    capBtn.onclick = function(){
    let utils = new Utils('errorMessage'); //use utils class
    let streaming = false;
    let src;
    let dst;
    let cap;
    let gray;
    let cocolisap;
    let classifier = new cv.CascadeClassifier();

    utils.createFileFromUrl('cocolisapCascade.xml', 'cocolisapCascade.xml', () => {
    classifier.load('cocolisapCascade.xml'); // in the callback, load the cascade from file
    });
    //let lstream;

    if(capBtn.innerHTML == "Start" && streaming == false){
    	capBtn.innerHTML = "Stop"
    	streaming = true;

    video = document.getElementById('videoInput');
    navigator.mediaDevices.getUserMedia({ video: true, audio: false })
        .then(function(stream) {
    	window.localStream = stream;
            video.srcObject = stream;
            video.play();

    	//initialize
    	let src = new cv.Mat(video.height, video.width, cv.CV_8UC4);
    	let dst = new cv.Mat(video.height, video.width, cv.CV_8UC1);
    	let cap = new cv.VideoCapture(video);
    const FPS = 30;
    function processVideo() {
        try {
          let cocolisap = new cv.RectVector();
            if (!streaming) {
                // clean and stop.
                src.delete();
                dst.delete();
                return;
            }
            let begin = Date.now();
            // start processing.
            cap.read(src);
            cv.cvtColor(src, dst, cv.COLOR_RGBA2GRAY);
            classifier.detectMultiScale(dst, cocolisap, 1.1, 3, 0);
        // draw faces.
            for (let i = 0; i < cocolisap.size(); ++i) {
            let cocolisap = cocolisap.get(i);
            let point1 = new cv.Point(cocolisap.x, cocolisap.y);
            let point2 = new cv.Point(cocolisap.x + cocolisap.width, cocolisap.y + cocolisap.height);
            cv.rectangle(src, point1, point2, [255, 0, 0, 255]);
        }
            cv.imshow('canvasOutput', src);
            // schedule the next one.
            let delay = 1000/FPS - (Date.now() - begin);
            setTimeout(processVideo, delay);
        } catch (err) {
            //utils.printError(err);
    	console.log(err);
        }
    };


    // schedule the first one.
    setTimeout(processVideo, 0);

        })
        .catch(function(err) {
            console.log("An error occured! " + err);
        });


    }else{
    	capBtn.innerHTML = "Start";
    	streaming = false;
    localStream.getTracks().forEach( (track) => {
    track.stop();
    });

    }
    }
</script>

</body>
</html>
