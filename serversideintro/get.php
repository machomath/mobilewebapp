<?php
  if(isset($_GET["id"], $_GET["first_name"])){
    echo $_GET["id"];
    echo "<br>";
    echo $_GET["first_name"];
  }


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Knowing Get</h1>
    <!-- Normally we use post as a method in forms -->
    <form class="" method="get">
      <input type="text" name="first_name" placeholder="First Name">
      <input type="number" name="id" placeholder="id">
      <button type="submit" name="button">Click to Submit</button>
    </form>


  </body>
</html>
