<?php
$user= $_POST["u_name"];
$myPost=$_POST["post1"];
/*$mysqli = new mysqli("mysql.eecs.ku.edu", "s214r501", "Caireik7", "s214r501");

/* check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
*/
  if (empty($user) || empty($myPost))
  {
    echo "Username or Post not entered. Please, try again. <br>";
  }
  else {
    echo "Username: ".$user. "<br>";
    echo "Post: ".$myPost. "<br>";
    }

  /* close connection */
#$mysqli->close();

 ?>
