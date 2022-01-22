<?php
session_start();
if(isset($_SESSION['username'])) $username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/gioithieu.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="icon" href="../images/title/titleLogo.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="../images/title/titleLogo.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Giới Thiệu</title>
</head>
<body>
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

    <section id="gioithieu">
		<div class="body">
        <h1>
            Fuji Nihongo - Tiếng Nhật vì tương lai Việt
        </h1>
        <p>
			Xuất phát từ niềm đam mê với những giá trị của đất nước mặt trời mọc, Nhật ngữ Fuji Nihongo được thành lập với muốn tạo ra một môi trường học tập tiếng Nhật đột phá ngay tại Việt Nam, trở thành cầu nối giúp các bạn trẻ Việt có tiếp cận cơ hội học tập và làm việc tại Nhật Bản.
        </p>
		<p>
			<strong>"Tiếng Nhật vì tương lai Việt"</strong> đây là kim chỉ nam giúp Fuji Nihongo luôn nổ lực để tạo ra một môi trường học tập hiện đại và đột phá hơn so với phương pháp dạy truyền thống hiện nay.Tại Fuji các học viên không những học được tiếng Nhật mà còn thẩm thấu một cách tự nhiên văn hóa và tinh thần Nhật Bản truyền cảm hứng cho học viên nỗ lực, trưởng thành hơn mỗi ngày.
		</p>
        <p>
			Nhật ngữ Fuji Nihongo luôn nỗ lực để tạo ra một môi trường học tập hiện đại và đột phá hơn so với phương pháp dạy truyền thống hiện nay. Tại Fuji Nihongo các học viên không những học được tiếng Nhật mà còn thẩm thấu một cách tự nhiên văn hóa và tinh thần Nhật Bản truyền cảm hứng cho học viên nỗ lực, trưởng thành hơn mỗi ngày.
        </p>
        <p class="image">
            <img class="hinh1" src="../images/gioithieu/gt1.jpg" alt="">
        </p>
        <p>
            Lớp học được thiết kế với số lượng học viên vừa phải từ 8 - 20 học viên để có thể theo sát và hỗ trợ từng học viên một cách tốt nhất. Từ N5 đến N3 các học viên đều được học tất cả các kỹ năng nghe, nói, đọc, viết cùng KANJI học và có thể sử dụng được cũng là một trong những phương châm của Fuji Nihongo.
        </p>
		<p class="image">
            <img class="hinh1" src="../images/gioithieu/gt3.jpg" alt="">
        </p>
        <p>
            Đội ngũ giáo viên tại trung tâm trẻ trung, năng động với trình độ tiếng Nhật N2 và N1 cùng phương pháp dạy cuốn hút. Giáo viên đã từng có cơ hội trải nghiệm training, du học và làm việc tại Nhật. Nhờ đó, trung tâm có thể hiểu rõ được các khó khăn khi học tiếng Nhật cũng như cuộc sống và văn hóa tại Nhật như thế nào để có thể hướng dẫn và hỗ trợ học viên một cách tốt nhất. Cùng với nhân viên chăm sóc học viên, hỗ trợ học bù khi vắng học cũng như không theo kịp bài, hỗ trợ lên lớp hoặc xuống lớp tùy theo trình độ và nguyện vọng của học viên.
        </p>
		<p class="image">
            <img class="hinh1" src="../images/gioithieu/gt4.jpg" alt="">
        </p>
			</div>
    </section>

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
    </footer>
</body>
</html>