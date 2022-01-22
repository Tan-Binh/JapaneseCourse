<?php
$servername = "localhost";
/* $username = "id18297134_user1"; */
$username = "root";

/* $password = "k7xTdHSp\!xbZw|u"; */
$dbname = "id18297134_fujinihongo";

$conn = new mysqli($servername, $username, $password, $dbname);

    if (isset($_POST['username'])){
	$username = $_POST['username'];
	$password = md5($_POST['pwd']);
    $result=mysqli_query($conn,"SELECT * FROM dangky where username='$username' and password = '$password'");
    if (mysqli_num_rows($result)==0)
    {
        header("Location: ../web/dangnhap.php?success=2");
    }
    else
    {
        if(!empty($_POST["remember"])) {
            setcookie ("member_login",$_POST["member_name"],time()+ 600,"/");
        }
        session_start();
                    $_SESSION['result']= $result;
                    $_SESSION['username'] =$username;
				   header("Location: ../index.php?user=".$username);
    }
}
?>