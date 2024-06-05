<?php


?>
<!DOCTYPE html>

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
            <h1>Sign Up</h1>

            <form action="include/signup.inc.php" method="post" class="login-form"> <!--inc means backend php file-->
                <input type="text" name="Name" placeholder="Full name"><br>
                <input type="text" name="Email" placeholder="Email"><br>
                <input type="text" name="UID" placeholder="Username"><br>
                <input type="password" name="pwd" placeholder="Password"><br>
                <input type="password" name="pwdrepeat" placeholder="Repeat Password"><br>
                <button type="submit" name="submit">Sign Up</button><br>
            </form>
            <?php
    if (isset($_GET["error"]))
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields</p>";
        } else if ($_GET["error"] == "invaliduid") {
            echo "<p>username is invalid</p>";
        } else if ($_GET["error"] == "invalidemail") {
            echo "<p>Invalid Email Format</p>";
        } else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p>Passwords dont match</p>";
        } else if ($_GET["error"] == "usernametaken") {
            echo "<p>Username is taken</p>";
        } else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong. Try again.</p>";
        } else if ($_GET["error"] == "none") {
            echo "<p>You have signed up!</p>";
        }
    ?>
        </div>
    </div>
    </body>

    </html>

