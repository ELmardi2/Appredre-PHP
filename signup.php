<?php
include 'Dbh.php';
$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$confirmpwd = $_POST['confirmpwd'];
  $sql = "INSERT INTO users(first, last, uid, email, pwp, confirmpwd)
  VALUES('$first', '$last', '$uid', '$email', '$pwd', '$confirmpwd')";
  $result = $conn->query($sql);
  header("location: index.php");
 ?>
