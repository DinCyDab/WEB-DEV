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
  <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $username = $_POST["username"];
      $firstname = $_POST["firstname"];
      $lastname = $_POST["lastname"];
      $email = $_POST["email"];
      $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
      $contactnumber = $_POST["contactnumber"];
      $address = $_POST["address"];

      $createdAccount = false;

      $conn = mysqli_connect("localhost","root","","mamaflors");
      if ($conn->connect_error) {
          die("ERROR". $conn->connect_error);
      }
      else{
          $sql = "SELECT * FROM user WHERE username='$username'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              include "add-account.php";
          }
          else{
              $sql = "INSERT INTO user(username, firstname, lastname, email, cpassword, contactnumber, caddress)
              VALUES ('$username', '$firstname', '$lastname', '$email', '$password', '$contactnumber', '$address');";
              $conn->query($sql);
              $createdAccount = true;
              include "created-account-successfully.php";
          }
      }
      $conn->close();
    }
  ?>
    <div class="content-create">
        <div class="auth-form">
            <h2 class="create-account-header">CREATE ACCOUNT</h2>
            <form method="post" name="myform" onsubmit="return passwordVerify()">
              <div class="form-field">
                <label for="user_name">Username</label>
                <input class="text-input" type="text" name="username" required>
              </div>
              <div class="form-field">
                <label for="user_firstname">First Name</label>
                <input class="text-input" type="text" name="firstname"  required>
              </div>
              <div class="form-field">
                <label for="user_lastname">Last name</label>
                <input class="text-input" type="text" name="lastname" required>
              </div>
              <div class="form-field">
                <label for="user_email">Email</label>
                <input class="text-input" type="email" name="email" required>
              </div>
              <div class="form-field">
                <label for="user_password">Password</label>
                <input class="text-input" type="password" name="password" required>
              </div>
              <div class="form-field">
                <label for="user_password">Confirm Password</label>
                <input class="text-input" type="password" name="confirmpass" required>
              </div>
              <div class="form-field">
                <label for="user_contact">Contact Number</label>
                <input class="text-input" type="tel" name="contactnumber" required>
              </div>
              <div class="form-field">
                <label for="user_address">Address</label>
                <textarea class="text-input" name="address" rows="3" required></textarea>
              </div>
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
        }
    </script>
</body>
</html>