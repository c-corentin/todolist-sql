<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Todo List | Log in</title>
</head>
<body>

 <?php

   echo "<form class='form' action='check_signup.php' method='POST'>";
   echo "<h4>Sign up</h4>";
   echo "<label class='label' for='username'>Username</label>";
   echo "<input class='text' type='text' name='username' placeholder='Username'>";
   echo "<label class='label' for='password'>Password</label>";
   echo "<input class='text' type='password' name='password' placeholder='Password'>";
   echo "<input class='submit' type='submit' value='Sign up'/>";
   echo "</form>";

 ?>

</body>
</html>