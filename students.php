<?php

session_start();

require "dbconnect.php";

echo "<center><h2>STUDENTS LIST</h2>"

$query = "SELECT * FROM students";

$result = $conn->query($query);


while ($row = mysqli_fetch_assoc($result)) {

  echo "<table><tr>";
  echo "<td>$row[firstname]</td>";
  echo "<td>$row[secondname]</td>";
  echo "<td>$row[surename]</td>";

  }

?>


