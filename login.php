<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Page</title>
   <link rel="stylesheet" href="signup.css">
</head>

<body>
   <div class="container">
      <div class="left-side">
         <div class="content">
            <img src="basoy.png" alt="Logo" class="logo">
            <h1>Wecome to Water Refilling<br>
               Management System!
            </h1>
            <h2>
               Where you can Radiate with Every Sip<br>
               with Basoy Luminous Drinking Water.
            </h2>

         </div>
      </div>
      <div class="right-side">
         <h1><b>LOGIN</b></h1>
         <h2>TO CONTINUE</h2>
         <section class="signup-form">
            <form action="include/login.inc.php" method="post" class="login-form">
               <input type="text" name="uid" placeholder="Username/Email" class="icon">
               <input type="password" name="pwd" placeholder="Password"class="icon1">
               <button type="submit" name="submit"><b>Log In</b></button>
            </form>
            <?php
            if (isset($_GET["error"]))
               if ($_GET["error"] == "emptyinput") {
                  echo "<p>Fill in all fields</p>";
               } else if ($_GET["error"] == "wronglogin") {
                  echo "<p>Incorrect Log In Details</p>";
               }

            ?>
      </div>
   </div>
</body>

</html>