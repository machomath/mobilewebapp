<?php
require_once './includes/inc.php';
// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";
if(isset($_POST["signup"], $_POST["name"], $_POST["email"], $_POST["password"])
    && is_string($_POST["name"])
    && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)
    && (check_password($_POST["password"]))
    && $_POST["signup"] == $_SESSION["rand"]
  ){
    $name = filter_var(trim($_POST["name"]), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $password = password_hash(trim($_POST["password"]), PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (name, email, password) VALUES ('" . $name . "', '" . $email . "', '" . $password . "');";
    //echo $sql;
    $db->exec($sql);
    $alert_message = "Account Created";
    //just for practice
    //This change was made by Dr. Zeb
}else{
  $alert_message = "Account not created";
}
$rand = $_SESSION["rand"] = rand(100000, 999999);
if(isset($_POST["signin"], $_POST["email"], $_POST["password"])
   && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)
   && (check_password($_POST["password"]))
){
  $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
  $password = trim($_POST["password"]);
  $sql = "SELECT * FROM users WHERE email='" . $email ."' LIMIT 1;" ;
  //echo $sql;
  $user = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
  echo "<pre>";
  var_dump($user);
  echo "</pre>";

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
      <button type="submit" name="signup" value="<?php echo $rand; ?>" >Signup</button>
    </form>
    <hr>
    <h2>Signin</h2>
    <form method="post">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password (Must not be Empty or all spaces)" required>
      <button type="submit" name="signin" >Signin</button>
    </form>
    <script>
      if ( window.history.replaceState ) {
          window.history.replaceState( null, null, window.location.href );
      }
    </script>
  </body>
</html>
