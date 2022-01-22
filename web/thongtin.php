<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
	<link rel="stylesheet" href="../css/thongtin_style.css">
    <link rel="stylesheet" type="text/css" href="./css/slick.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="../images/title/titleLogo.png" type="image/x-icon" />
    <title>Thông tin cá nhân</title>
</head>
<?php
session_start();
if(isset($_SESSION['username'])) $username = $_SESSION['username'];
?>
<?php
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
$servername = "localhost";
/* $username = "id18297134_user1"; */
$username = "root";

/* $password = "k7xTdHSp\!xbZw|u"; */
$dbname = "id18297134_fujinihongo";
$conn = new mysqli($servername, $username, $password, $dbname);
$username = $_GET['username'];
$result=mysqli_query($conn,"SELECT * FROM dangky where username='$username'");
$result=mysqli_fetch_array($result);
$date= $result['register_date'];
$tel = $result['tel'];
$email = $result['email'];
$Khoahoc = $result['Khoahoc'];
if($result['TìnhTrangThanhToan']==0)  $TinhTrangThanhToan='chưa';else$TinhTrangThanhToan='rồi';
?>
<!DOCTYPE html>
<html lang="en">

<body>
    <script>
       function myFunction()
       {
        window.location.href = "../index.php";
       }
        </script>
<header>
    <a class="logo_header" href="../index.php">
        <img src="../images/header/logoHeader.png" alt="">
    </a>
    <nav class="content_list">
        <ul>
            <li><a href="./gioithieu.php">Giới thiệu</a></li>
            <li><a href="khoahoc.php">Khóa học</a></li>
            <li class="dropdown ">
                <a href="#" class="dropbtn_1">Bài viết
                  </a>   
                <div class="dropdown-content_1">
                <a href='./vanHoaNhatBan.php'>Văn hoá Nhật Bản</a> 
                <a href='./duhocnhatban.php'>Du học Nhật Bản</a> 
                <a href='./cohoivieclam.php'>Cơ hội việc làm</a> 
                </div>                     
            </li>
            <li><a href="tuvan.php">Tư vấn</a></li>
            <li><a href="giaovien.php">Giáo Viên</a></li>
            <li><a href="./thithu.php">Thi thử</a></li>
        </ul>
    </nav>
    <?php 
    error_reporting(E_ERROR | E_PARSE);
    if ($username=="")
    echo '
    <nav class="login">
        <ul>
            <li><a href="./dangnhap.php">Đăng nhập</a></li>
            <li><a href="./dangky.php">Đăng ký</a></li>
        </ul>
    </nav>';
    else
    {
       echo'
        <nav class="login">
        <ul>
        <li class="dropdown ">
                <a href="#" class="dropbtn">
        ';
         echo $username;
         echo'<i class="fa fa-caret-down"></i></a>   
                <div class="dropdown-content">';
        echo "<a href='thongtin.php?username=".$username."'>Thông tin cá nhân</a> ";
        echo'<a href="../php_xuly/logout.php">Đăng xuất</a> 
                </div>                     
            </li>
        </ul>
         </nav>';
    }
    ?>
</header>
    <div class="hongtin">
		<div class="khung">
        	<div class="thongtin_content">
				<p>
                    Tên tài khoản:<strong><?php echo $username  ?></strong>
                	<br>Số điện thoại:<strong><?php echo $tel  ?></strong>
                	<br>Email: <strong><?php echo $email ?></strong>
                    <br>Ngày đăng ký: <strong><?php echo $date ?></strong>
                    <br>
                    <div class="khoahoc">
                	<br>Bạn đã đăng kí khóa: <strong><?php echo $Khoahoc ?></strong>
                	<br>Bạn  <strong><?php echo $TinhTrangThanhToan ?></strong> thanh toán 
                    <br>
                    <h3>Thanh toán qua MOMO với cú pháp: "username_tenkhoahoc"</h3>
                    <br>
                    <img src="../images/thongtin/momo-upload-api-buoc-2-190522172522.jpg" width="300" height="300">
					<br>
                  </div>
            	</p>
        	</div>
		</div>
    </div>

    <footer>
        <div class="logo_footer">
            <img src="../images/footer/logoFooter.png" alt="">
        </div>
        <div class="Thongtin" width="500px">
            <strong><p class="title_1">THÔNG TIN LIÊN HỆ</p></strong>
            <hr class="hr_white">
            <hr class="hr_blue">
            <p> 
                <i class="far fa-envelope icon1"></i>&nbsp;<a href="mailto:fujinihongo@gmail.com" class="anchor1">fujinihongo@gmail.com</a>
                <br><br><i class="fas fa-phone-alt icon1"></i> 0382468820
                <br><br><i class="far fa-calendar-check icon1"></i> Thứ 2- Thứ 7: 8h - 15h
                <br><br><i class="fas fa-map-marker-alt icon1"></i> 720A Điện Biên Phủ, q.22, p.Bình Thạnh, TP. Hồ Chí Minh
            </p>
        </div>
        <div class="Ketnoi">
            <strong><p class="title_1">KẾT NỐI VỚI CHÚNG TÔI</p></strong>
            <hr class="hr_white">
            <hr class="hr_blue">
            <br>
            <a href="https://www.facebook.com/"><img src="../images/footer/facebook.png" width="60px" height="60px" class="images1"></a>
            <a href="https://www.youtube.com/"><img src="../images/footer/youtube.png" width="60px" height="60px" class="images1"></a>
            <a href="https://www.tiktok.com/"><img src="../images/footer/tiktok.png" width="60px" height="60px" class="images1"></a>
        </div>
        <hr class="hr_footer">
        <p class="footer_copyright">Copyright © 2021 FujiNihongo. All Rights Reserved.</p>
        <div class="dialog_overlay" id="dialog_overlay">
            <div class="dialog-body">
                <h3 id="dialog_title"></h3>
                <p id="dialog_content"></p>
            </div>
        </div>
    </footer>

</body>
</html>