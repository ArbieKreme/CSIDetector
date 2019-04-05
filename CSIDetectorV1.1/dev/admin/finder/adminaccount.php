<!DOCTYPE html>
<html lang="en">
<title>CSI Detector</title>
<link rel = "icon" type = "image/png" href = "img/pcalogo.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/index-style.css" type="text/css">
<script src="js/index-script.js"></script>
<style type="text/css">
  body,h1,h2,h3,h4,h5,h6
{font-family: "Lato", sans-serif}

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

<!-- Header -->
<header class="w3-container w3-blue-grey w3-center" style="padding:20% 20px" id="adminhome">

</header>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64" style="padding:200px 20px">
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
