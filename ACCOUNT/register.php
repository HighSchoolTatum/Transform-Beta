<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style1.css">
    <title>Register</title>
</head>
<body>
<nav>
        <div class="tc">
            Transform Club
</div>
<div class="links">
<a href="../index.html">Home</a>
<a href="register.php">Login Now</a>
</div>
<div>
  <a href="registerd.php" class="notavailable" id="dark">Dark Mode</a>
</nav>
<div class="alert">
    <center>
    Transform Club is getting a new login page.
</center>
</div>
<div class="top">
        <div class="text">Sign Up for a <br> Worshipper Account.</div>
      <div class="container">
        <div class="box form-box">

        <?php

         include("php/config.php");
         if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $password = $_POST['password'];

         //verifying the unique email

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

         }else{

        ?>

            <header><center>Sign Up</center></header>
            <p><center>Sign Up for a Worshipper Account.</center></p>
            <br>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="date" name="age" id="age" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="Profile Picture">Profile Picture</label>
                    <input type="file" accept="image/jpg, image/jpeg, image/png, image/gif" id="profileimg" name="profileimg">
         </div>
                <div class="field">

                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Already a member? <a href="index.php">Sign In</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
      <script>
      </script>
</body>
</html>