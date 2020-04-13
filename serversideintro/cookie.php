<?php
  if(isset($_COOKIE["color"])){
      $color = filter_var($_COOKIE["color"], FILTER_SANITIZE_STRING);
  }else{
    $red = rand(0, 255);
    $green = rand(0, 255);
    $blue = rand(0, 255);
    $color = $red . ", " . $green . ", " . $blue . ", ";
    setcookie("color", $color, time() + 20);
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      body{
        background: rgba(<?php echo $color; ?> 0.5);
      }
    </style>
  </head>
  <body>


  </body>
</html>
