<!DOCTYPE html>
<html lang="en">
<title>CSI Detector</title>
<link rel = "icon" type = "image/png" href = "img/pcalogo.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--W3 CSS-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!--Google APIs-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--AJAX JS-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<!--Jquery DataTables-->
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

<!--Bootstrap-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

<!--Defined CSS and JS-->
<link rel="stylesheet" href="css/index-style.css" type="text/css">
<script src="js/index-script.js"></script>
<script src="js/script.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<style type="text/css">
  body,h1,h2,h3,h4,h5,h6
{font-family: "Lato", sans-serif}

.td
{color:darkgrey}

#add_mp_gender{
  color: grey;
}

#update_mp_gender{
  color: grey;
}

#add_mp_relative{
  color: grey;
}

#update_mp_relative{
  color: grey;
}

.w3-bar,h1,button
{font-family: "Montserrat", sans-serif}

.fa-anchor,.fa-coffee
{font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-teal w3-card w3-left-align w3-large">
    <?php
    include 'adminnavbar.php';
    ?>
  </div>

  <!-- Navbar on small screens -->
  <div id="nav" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <?php
    include 'small-screen-adminnavbar.php';
    ?>
  </div>
</div>


<header class="w3-container w3-blue-grey w3-center" style="padding:70px 1px 240px" id="adminhome">
  <?php
  include 'adminhome.php';
  ?>
</header>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64" style="padding:15% 20px">
  <?php
  include 'quote.php';
  ?>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity" style="padding:200px 20px">
  <?php
  include 'templates/footer.php';
  ?>
</footer>

</body>
</html>
