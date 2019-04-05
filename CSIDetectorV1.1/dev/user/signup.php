<link rel="stylesheet" href="css/login-signup-style.css" type="text/css">

<span onclick="document.getElementById('signupModal').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" method="POST" action="signupaction.php"
   method="post">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>

      <div class="form-group">
      <label for="username"><b>Username</b></label>
      <input type="text" name="username" required>
      </div>

      <div class="form-group">
      <label for="firstname"><b>Firstname</b></label>
      <input type="text" name="firstname" required>
      </div>

      <div class="form-group">
      <label for="middlename"><b>Middlename</b></label>
      <input type="text" name="middlename">
      </div>

      <div class="form-group">
      <label for="lastname"><b>Lastname</b></label>
      <input type="text" name="lastname" required>
      </div>

      <div class="form-group">
      <label for="email"><b>Email</b></label>
      <input type="email" name="email">
      </div>

      <div class="form-group">
      <label for="contact_number"><b>Contact Number</b></label>
      <input type="tel" name="contact_number" pattern="[0-9]{4}[0-9]{3}[0-9]{4}" required>
      </div>

      <div class="form-group">
      <label for="house_number"><b>House Number</b></label>
      <input type="text" name="house_number" required>
      </div>

      <div class="form-group">
      <label for="street"><b>Street</b></label>
      <input type="text" name="street" required>
      </div>

      <div class="form-group">
      <label for="city"><b>City</b></label>
      <input type="text" name="city" required>
      </div>

      <div class="form-group">
      <label for="password"><b>Password</b></label>
      <input type="password" name="password" required>
      </div>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="
        document.getElementById('signupModal').style.display='none';"
        class="button signup-cancelbtn ">Cancel
        </button>
        <button id="signupbtn" type="submit" class="button signupbtn">Sign Up</button>

        <button
      type="button" onclick="
      document.getElementById('signupModal').style.display='none';
      document.getElementById('loginModal').style.display='block';"
      class="button loginbtn">Already have an account?
      </button>

      </div>
    </div>
  </form>
