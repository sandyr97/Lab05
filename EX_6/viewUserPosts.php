<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "s214r501", "Caireik7", "s214r501");
/* check connection */
if ($mysqli->connect_error) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$user=$_POST["chosen_u"];
$query = "SELECT author_id, content FROM Posts WHERE author_id='$user';";
$result = $mysqli->query($query);
if ($result->num_rows > 0) {
  echo "<table>
  <tr>
  <th>User ID</th>
  <th>Post Content</th>
  </tr>";
  while($row = $result->fetch_assoc()) {
    $content = $row["content"];
    echo "<tr>";
    echo "<td>" .$user. "</td>";
    echo "<td>" . $content . "</td>";
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
