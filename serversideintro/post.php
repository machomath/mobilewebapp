<?php
  if(isset($_POST["signup"],
           $_POST["first_name"],
           $_POST["email"],
           $_POST["password"],
           $_POST["age"]) &&
           filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) &&
           filter_var($_POST["age"], FILTER_VALIDATE_INT) &&
           $_POST["age"] >=15 ){
      $first_name = filter_var($_POST["first_name"], FILTER_SANITIZE_STRING);
      $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
      $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
      $age = filter_var($_POST["age"], FILTER_SANITIZE_NUMBER_INT);
      echo "<pre>";
      echo $password;
      echo "</pre>";
  }else{
    echo "Something wrong";
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Knowing Post</h1>
    <h2>Let's Signup</h2>
    <form class="" method="post">
      <input type="text" name="first_name" placeholder="First Name" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="number" name="age" placeholder="How old are you (you must be 15+)" required>
      <button type="submit" name="signup">Signup</button>
    </form>

  </body>
</html>
