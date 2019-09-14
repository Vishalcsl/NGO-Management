
<!DOCTYPE html>
<html>
<head>
  <title>User Registration</title>
  <link rel="stylesheet" type="text/css" href="register_style.css">
  <link rel="stylesheet" type="text/css" href="maincss.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
</head>
  <body class="main-background">
    <div class="register_header">
        <h3 style="font-family:Merienda">Register Yourself to become a change!!<h3>
    
    <!-- <form  method=POST action='register.php'>
             
             <p>
               <label>Name:-</label>
               <input type="text" name="username" id="username" class="textInput"/>
            </p>

             
             <p>
              <label> Email:-<label>
              <input type="email" name="email" id="email" class="textInput"/>
            </p>

             <p>
               <label>Password:-</label>
               <input type="password" name="password1" id="password" class="textInput"/>
             </p>

             <p>
               <label>Password Again:-</label>
               <input type="password" name="password2" id="password2" class="textInput"/>
             </p>

             <p>
               <label>Phone1:-</label>
               <input type="text" name="phone1" id="phone1" class="textInput" />
             </p>

             <p>
               <label>Phone2:-</label>
               <label><input type="text" name="phone2" id="phone2" class="textInput" />
             </p>

             <p>
               <label>Address:-</label>
               <input type="text" name="address" id="address" class="textInput" />
             </p>

             <p>
               <label>Type:-</label>
               <input type="text" name="user_type" id="type" class="textInput" />
             </p>


             <p>
               <label></label>
              <input type="submit" id="register_btn" name="register_btn" value="Register" />
             </p>

    </form> -->
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" method="POST" action="register.php">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="username"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="username" required>

      <label for="password1"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password1" required>

      <label for="password2"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="password2" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="phone1"><b>Phone Number</b></label>
      <input type="text" length=10 placeholder="Enter Phone Number" name="phone1" required>

      <label for="phone2"><b>Additional Number</b></label>
      <input type="text" length=10 placeholder="Enter Additional Number" name="phone2">
      
      <label for="address"><b>Address</b></label>
      <input type="text" placeholder="Enter Your Address" name="address" required>

      <label for="type"><b>Donar/Volunteer</b></label>
      <input type="text" placeholder="Your Choice" name="user_type" required>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
  </body>
</html>