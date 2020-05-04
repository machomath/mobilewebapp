<?php
require_once './includes/inc.php';
if((isset($_SESSION["is_signed_in"]) && $_SESSION["is_signed_in"] == true)){
  header("Location: me.php");
}//!
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php require_once './layouts/head.php'; ?>
  <body>
    <?php require_once './layouts/nav.php'; ?>
    <h1>Private Contents</h1>

  </body>
</html>
