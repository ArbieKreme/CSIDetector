<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/login-signup-style.css" type="text/css">
<script src="js/jquery-3.3.1.js"></script>
<span onclick="document.getElementById('loginModal').style.display='none'" class="close" title="Close Modal">&times;</span>
  <!-- Modal Content -->
  <form class="modal-content animate" method="POST" action="loginaction.php">
    <div class="imgcontainer">
      <img src="img/avatar.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="username"><b>Username</b></label>
      <input id="username" type="text" name="username" required>

      <label for="password"><b>Password</b></label>
      <input id="password" type="password" name="password" required>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button
        type="submit" class="button loginbtn">Login
      </button>
      <button
      type="button" onclick="
      document.getElementById('loginModal').style.display='none';"
      class="button login-cancelbtn">Cancel
      </button>
      <button
      id="signupButton" type="button" onclick="
      document.getElementById('loginModal').style.display='none';
      document.getElementById('signupModal').style.display='block';"
      class="button signupbtn">Add User
      </button>
    </div>
  </form>
  </html>
