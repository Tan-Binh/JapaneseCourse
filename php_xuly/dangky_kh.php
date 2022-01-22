<?php
session_start();
$username=$_SESSION['username'] ;
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
$servername = "localhost";
/* $username = "id18297134_user1"; */
$username = "root";

/* $password = "k7xTdHSp\!xbZw|u"; */
$dbname = "id18297134_fujinihongo";
$conn = new mysqli($servername, $usrname, $password, $dbname);
$sql = "UPDATE dangky SET khoahoc='N4' WHERE username='$username'";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
header("Location: ../web/thongtin.php?username=".$username);
?>