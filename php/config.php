<?php
  $hostName = "localhost";
  $userName = "root";
  $password = "";
  $dbName = "iChitChat";

  $conn = mysqli_connect($hostName, $userName, $password, $dbName);

  if(!$conn)
  {
    echo "Database connection error".mysqli_connect_error();
  }
?>
