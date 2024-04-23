<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Account</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      margin: 0;
      font-family: "Roboto-Regular", Arial, sans-serif;
      background-color: #eca14a;
    }

    .content-create {
      display: flex;
      justify-content: center;
      align-items: center;
      height: auto;
      background-image: linear-gradient(#ffde59, #ff914d);
      padding-bottom: 50px;
    }

    .auth-form {
      margin-top: 150px;
      width: 50%; 
      background-color: rgba(255, 255, 255, .3);
      padding: 40px;
      border-radius: 50px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .form-field {
      margin-bottom: 20px;
    }

    .text-input {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .btn2 {
      padding: 12px 24px;
      background-color: #1a73e8;
      color: #fff;
      text-decoration: none;
      border-radius: 10px;
      transition: background-color 0.3s ease;
    }

    .btn2:hover {
      background-color: #0d4aba;
    }

    .auth-link {
      margin-top: 10px;
    }

    .create-account-header{
      text-align: center;
      font-family: ChunkFive;
      color: red;
      font-size: 50px;
      letter-spacing: 5px;
      width: auto;
      text-shadow: 3px 3px 2px white,
                 -3px -3px 2px white,
                 -3px 3px 2px white,
                 3px -3px 2px white;
    }
  </style>
</head>
<body>
  <?php
    include "sidemenu.php";
    include "banner.php";
  ?>
    <div class="content-create">
        <div class="auth-form">
            <h2 class="create-account-header">CREATE ACCOUNT</h2>
            <form action="add-account.php" method="post" name="myform" onsubmit="return passwordVerify()">
              <div class="form-field">
                <label for="user_name">Username</label>
                <input class="text-input" type="text" name="username" id="user_name">
              </div>
              <div class="form-field">
                <label for="user_name">First Name</label>
                <input class="text-input" type="text" name="firstname" id="first_name">
              </div>
              <div class="form-field">
                <label for="user_username">Last name</label>
                <input class="text-input" type="text" name="lastname" id="user_username">
              </div>
              <div class="form-field">
                <label for="user_email">Email</label>
                <input class="text-input" type="email" name="email" id="user_email">
              </div>
              <div class="form-field">
                <label for="user_password">Password</label>
                <input class="text-input" type="password" name="password" id="user_password">
              </div>
              <div class="form-field">
                <label for="user_password">Confirm Password</label>
                <input class="text-input" type="password" name="confirmpass" id="user_password">
              </div>
              <div class="form-field">
                <label for="user_contact">Contact Number</label>
                <input class="text-input" type="tel" name="contactnumber" id="user_contact">
              </div>
              <div class="form-field">
                <label for="user_address">Address</label>
                <textarea class="text-input" name="address" id="user_address" rows="3"></textarea>
              </div>
              <!-- <div class="form-field">
                <label class="checkbox">
                  <input type="checkbox" name="terms">
                  I agree to the <a href="/terms">terms of service</a>
                </label>
              </div> -->
              <div class="form-btns">
                <input class="btn2" type="submit" value="Create">
              </div>
            </form>
            <div class="auth-link">
              Already have an account? <a href="login.php">Sign in</a>
            </div>
        </div>
    </div>
    <?php
      include "footer.php";
    ?>
    <script src="script.js"></script>
    <script src="click-to-zoom.js"></script>
    <script src="go-to-branch.js"></script>
    <script>
        function passwordVerify(){
            var newPass = document.forms["myform"]["password"].value;
            var conPass = document.forms["myform"]["confirmpass"].value;
            if(newPass != conPass){
                alert("PASSWORD DID NOT MATCH");
                return false;
            }
            alert("PASSWORD UPDATED SUCCESSFULLY");
        }
    </script>
</body>
</html>