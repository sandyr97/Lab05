<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "s214r501", "Caireik7", "s214r501");
/* check connection */
if ($mysqli->connect_error) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$query = "SELECT user_id FROM Users;";
$result = $mysqli->query($query);
if ($result->num_rows > 0) {
  // output data to user
  echo "<table>
  <tr>
  <th>User IDs</th>
  </tr>";
  while($row = $result->fetch_assoc()) {
    $user = $row["user_id"];
    echo "<tr>";
    echo "<td>" . $user . "</td>";
    echo "</tr>";
  }
  echo "</table>";
}
else {
  echo "There are currently no existing Users";
}
/* close connection */
$mysqli->close();
?>
