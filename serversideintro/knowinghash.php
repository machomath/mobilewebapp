<?php
$password_1 = "123";
$password_2 = "123";
$password_3 = "122";

$password_1_hash = password_hash($password_1, PASSWORD_DEFAULT);
$password_2_hash = password_hash($password_2, PASSWORD_DEFAULT);
echo $password_1_hash . "<br>";
echo $password_2_hash . "<br>";
echo password_hash($password_3, PASSWORD_DEFAULT) . "<br>";


if(password_verify("123", $password_1_hash)){
  echo "It matches with password_1 <br>";
}

if(password_verify("123", $password_2_hash)){
  echo "It matches with password_2 <br>";
}


?>
