<?php
$conn = mysqli_connect("localhost","root", "", "tractoronthego_db");
$output = array();
$query =  "SELECT * FROM users";
$query =  "SELECT * FROM farmers";
$result = mysqli_query($conn, $query);
if (mysql_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
    $output[] = $row;
  }
  echo json_encode($output);
}


 ?>
