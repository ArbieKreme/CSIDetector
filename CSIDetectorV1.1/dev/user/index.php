<!DOCTYPE html>
<html lang="en">
<title>CSI Detector</title>
<link rel = "icon" type = "image/png" href = "img/iHanapTitleLogo.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/index-style.css" type="text/css">
<script src="js/index-script.js"></script>

<body>

<style type="text/css">
  body,h1,h2,h3,h4,h5,h6
{font-family: "Lato", sans-serif}

.w3-bar,h1,button
{font-family: "Montserrat", sans-serif}

.fa-anchor,.fa-coffee
{font-size:200px}
</style>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-teal w3-card w3-left-align w3-large">
    <?php
    include 'navbar.php';
    ?>
  </div>

  <!-- Navbar on small screens -->
  <div id="nav" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <?php
    include 'small-screen-navbar.php';
    ?>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-blue-grey w3-center" style="padding:80px 1px 10%" id="home">
  <?php
  include 'home.php';
  ?>
</header>

<!-- Login Modal-->

<div id="loginModal" class="modal">
  <?php
  include 'login.php';
  ?>
</div>

<!-- First Grid -->
<div class="w3-row-padding w3-container" background="" style="padding:8% 20px" id="aboutfinder">
  <?php
  include 'aboutfinder.php';
  ?>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-container" style="padding:8% 20px" id="aboutus">
  <?php
  include 'aboutus.php';
  ?>
</div>

<div class="w3-container w3-black w3-center w3-opacity" style="padding:200px 20px">
  <?php
  include 'quote.php';
  ?>
</div>

<!-- Footer -->
<footer class="w3-container w3-center w3-opacity" style="padding:200px 20px">
  <?php
  include 'templates/footer.php';
  ?>
</footer>

<script>
// Get the modal
var loginModal = document.getElementById('loginModal');
var signupModal = document.getElementById('signupModal');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == loginModal) {
    loginModal.style.display = "none";
  } else if (event.target == signupModal) {
    signupModal.style.display = "none";
  }
}

</script>
</body>
</html>
