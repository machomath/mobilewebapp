<?php
  function check_password($password){
    //we can check any policy overhere
    //we may arso use regular expressions
    if(trim($password) != ""){
      return true;
    }else{
      return false;
    }
  }

?>
