<?php
require "logout.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <link href="" rel="stylesheet">
  </head>
  <body>
    
    <form method="post">
      <input type="hidden" name="logout" value="1">
      <input type="image" value="Sign Out" src="4.png" alt="4" class="i4">
    </form>

    <h2>Welcome <?=$_SESSION["user"]?></h2>
    
  </body>
</html>