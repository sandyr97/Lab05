<?php

$user= $_POST["u_name"];

$mysqli = new mysqli("mysql.eecs.ku.edu", "s214r501", "Caireik7", "s214r501");

/* check connection */
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

  if (empty($user))
  {
    echo "No username entered. Please, try again. <br>";
  }
  else {
    echo "Username: ".$user. "<br>";
    $query="INSERT INTO Users(user_id) VALUES ('$users');";
    if ($result = $mysqli->query($query)) {
    echo "New Record created successfully";
    /* free result set */
    $result->free();
    }
    else{
      echo "Error: " . $mysqli . "<br>" . $mysqli->error;
    }
  }

  /* close connection */
$mysqli->close();

 ?>
