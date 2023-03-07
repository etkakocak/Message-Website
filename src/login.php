<?php
require "control.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link href="/web/login.css" rel="stylesheet">
  </head>
  <body>
    
    <?php if (isset($failed)) { ?>
    <div id="login-bad">Access Denied!</div>
    <?php } ?>

    <h2>Hello World</h2>

    <form id="login-form" method="post" target="_self" autocomplete="off">
      <label for="user">Username</label>
      <input type="text" name="user" required>
      <label for="password">Password</label>
      <input type="password" name="password" required>
      <input type="submit" value="Access">
    </form>
    
  </body>
</html>