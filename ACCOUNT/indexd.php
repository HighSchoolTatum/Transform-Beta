<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styled.css">
    <title>Login</title>
</head>
<body>
<div class="father">
  <center>
  
<div class="container">
  <div class="top">
    Login<br> to<br> your <br>Worshipper<br> Account.
  </div>
        <form action="" method="post">
            <img src="../images/logo/tclogo-nobg.png" width="60px" height="60px">
<hr class="hr">
<div id="fields">
            <div class="field-input1">
                <label for="username">Username</label><br>
                <input type="text" name="username" id="username" autocomplete="off" required>
            </div>

            <div class="field-input">
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password" autocomplete="off" required>
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