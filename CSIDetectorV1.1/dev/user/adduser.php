<link rel="stylesheet" href="css/login-signup-style.css" type="text/css">

<span onclick="document.getElementById('signupModal').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" method="post">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>

      <div class="form-group">
      <label for="username"><b>Username</b></label>
      <input type="text" name="username" required>
      </div>

      <div class="form-group">
      <label for="password"><b>Password</b></label>
      <input type="password" name="password" required>
      </div>

      <div class="form-group">
      <label for="confirm_password"><b>Confirm Password</b></label>
      <input type="password" name="confirm_password" required>
      </div>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button id="cancelbtn" type="button" onclick="
        document.getElementById('signupModal').style.display='none';"
        class="button cancelbtn ">Cancel
        </button>
        <button id="signupbtn" type="submit" class="button signupbtn">Sign Up</button>

        <button
      id="loginbtn" type="button" onclick="
      document.getElementById('signupModal').style.display='none';
      document.getElementById('loginModal').style.display='block';"
      class="button loginbtn">Already have an account?
      </button>

      </div>
    </div>
  </form>
