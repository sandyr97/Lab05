<?php
$user= $_POST["u_name"];

  if (empty($user))
  {
    echo "No username entered. Please, try again. <br>";
  }
  else {
    echo "Username: ".$user. "<br>";
  }
 ?>
