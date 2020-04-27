<?php
require_once './includes/inc.php';
if(isset($_POST["signup"], $_POST["name"], $_POST["email"], $_POST["password"])
    && is_string($_POST["name"])
    && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)
    && (check_password($_POST["password"]))
  ){
    $name = filter_var(trim($_POST["name"]), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $password = password_hash(trim($_POST["password"]), PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (name, email, password) VALUES ('" . $name . "', '" . $email . "', '" . $password . "');";
    //echo $sql;
    $db->exec($sql);
    //just for practice 
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php require_once './layouts/head.php'; ?>
  <body>
    <?php require_once './layouts/nav.php'; ?>
    <h1>About Me</h1>
    <h2>Signup</h2>
    <form method="post">
      <input type="text" name="name" placeholder="Name" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password (Must not be Empty or all spaces)" required>
      <button type="submit" name="signup">Signup</button>
    </form>

  </body>
</html>
