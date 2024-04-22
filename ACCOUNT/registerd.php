<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style1d.css">
    <title>Register</title>
</head>
<body>
    <?php
    include "php/config.php";

    if(isset($_POST['submit'])){
      $username = $_POST['username'];
      $email = $_POST['email'];
      $age = $_POST['age'];
      $password = $_POST['password'];

    $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

          if(mysqli_num_rows($verify_query) !=0 ){
              echo "<div class='message'>
                        <p>This email is used, Try another One Please!</p>
                    </div> <br>";
              echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
          }
          else{

              mysqli_query($con,"INSERT INTO users(Username,Email,Age,Password) VALUES('$username','$email','$age','$password')") or die("Erroe Occured");

              echo "<div class='message'>
                        <p>Registration successfully!</p>
                    </div> <br>";
              echo "<a href='index.php'><button class='btn'>Login Now</button>";


          }

          }

?>

<!--REGISTER TEZT-->
<div class="father">
  <center>
  
<div class="container">
  <div class="top">
    Sign up for a Worshipper Account.
  </div>
        <form action="" method="post">
            <img src="../images/logo/tclogo-nobg.png" width="60px" height="60px">
<hr>
            <div class="field-input1">
                <label for="username">Username</label><br>
                <input type="text" name="username" id="username" autocomplete="off" required>
            </div>
            <div class="field-input">
                <label for="email">Email</label><br>
                <input type="text" name="email" id="email" autocomplete="off" required>
            </div>

            <div class="field-inputage">
                <label for="age">Date of Birth</label><br>
                <input type="date" name="age" id="age" autocomplete="off" required>
            </div>
            <div class="field-input">
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password" autocomplete="off" required>
            </div>
            <div class="field-input">
                <label for="Profile Picture">Profile Picture</label><br>
                <input type="file" accept="image/jpg, image/jpeg, image/png, image/gif" id="profileimg" name="profileimg" class="fl">
     </div>
            <div class="field">

                <input type="submit" class="btn" name="submit" value="Register" required>
            </div>
            <div class="links">
                Already a member? <a href="index.php">Sign In</a>
            </div>
        </form>
    </div>
</div>
        <nav>
            <div class="tc">
                <a href="../index.html">Transform Club</a>
    </div>
    
    <div class="links">
    <a href="register.php">Sign Up Now</a><hr>
    <a href="register.php">Login Now</a>
    </div>
    <div class="light">
      <a href="register.php"><d class="black">Light</d> <v class="light">Mode</v></a>
    </div>
    </nav>
</body>
</html>
