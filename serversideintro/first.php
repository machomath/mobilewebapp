<?php
  $date_time = time();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Welcome</h1>
    <p>You visited us at: <span><?php echo date("Y-M-d h:i:s") ?></span> </p>
    <p>You visited us at (brought to you by JS): <span id="date-span"><?php echo $date_time; ?></span> </p>
    <script type="text/javascript">
      var months = ["Jan", "Feb", "March", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"];
      var rawDateTime = document.getElementById("date-span").innerHTML;
      var dateTime = new Date(rawDateTime*1000);
      var year = dateTime.getFullYear();
      var month = months[dateTime.getMonth()];
      var day = dateTime.getDate();
      document.getElementById("date-span").innerHTML = year + "-" + month + "-" + day;
    </script>

  </body>
</html>
