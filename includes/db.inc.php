<?php

$mysqli = new mysqli("localhost","root","123456","moyouth");

// Check connection
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

?>