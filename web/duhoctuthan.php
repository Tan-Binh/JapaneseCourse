<!DOCTYPE HTML>
<html>
<?php
session_start();
if(isset($_SESSION['username'])) $username = $_SESSION['username'];
?>
	<head>
		<title>Du học Nhật Bản</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../css/duhocnhatban.css" />
		<link rel="stylesheet" href="../css/headerduhoc.css" />
		<link rel="stylesheet" href="../css/footerduhoc.css" />
		<link rel="stylesheet" href="../fontawesome/css/all.css" />
		<link rel="icon" href="../images/title/titleLogo.png" type="image/x-icon" />
	</head>
	<body>
			<!-- Header -->
			<header class="header">
        		<a class="logo_header" href="../index.php">
            		<img src="../images/duhocnhatban/logoHeader.png" alt="">
        		</a>
        		<nav class="content_list">
        			<ul>
            			<li><a href="./gioithieu.php">Giới thiệu</a></li>
            			<li><a href="khoahoc.php">Khóa học</a></li>
            			<li class="dropdown ">
                			<a href="#" class="dropbtn_1">Bài viết</a>   
                			<div class="dropdown-content_1">
                				<a href="vanHoaNhatBan.php">Văn hoá Nhật Bản</a> 
                				<a href="duhocnhatban.php">Du học Nhật Bản</a> 
                				<a href="cohoivieclam.php">Cơ hội việc làm</a> 
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

			<!-- Noidung  -->
				<div class="noidung">
					<h3 class="tieudebaiviet">Du học tự thân, tại sao không ?</h3>
					<p class="doanvanban">Du học Nhật tự túc là hình thức sinh viên phải chịu 100% chi phí du học của mình. Với chương trình du học này bạn sẽ không được sự hỗ trợ của quỹ học bổng và Chính phủ. Du học tự túc tại Nhật chiếm đến 80% lượng du học sinh học tập tại đây. Kết quả của con số này là do quá trình săn học tìm kiếm học bổng du học quá lâu. Không chỉ thế, tính cạnh tranh cao cũng khiến cho nhiều bạn lựa chọn hình thức này.</p>
					<p class="hinhanh"><img class="hinh1" src="../images/duhocnhatban/duhocnhatbantutuc.jpg" alt=""></p>
					<h4>Vì sao chọn du học Nhật Bản tự túc ?</h4>
					<p class="doanvanban">
						<strong>Nền giáo dục đẳng cấp thế giới</strong>
						<br>
						Chúng ta không thể phủ nhận rằng Nhật Bản luôn là một trong những nước có nền giáo dục đẳng cấp quốc tế. Bạn có thể tiếp cận với nền giáo dục tiên tiến này bất kể ở trường đại học, cao đẳng, hay trường nghề tại Nhật Bản….
					</p>
					<p class="doanvanban">
						<strong>Chi phí du học Nhật Bản tương đối thấp</strong>
						<br>
						Với những học sinh Châu Á, phí tổn Du Học Nhật Bản luôn thấp hơn rất nhiều so với du học ở các nước Châu Mỹ hay Châu Âu. Ngoài ra, chính phủ Nhật cũng không giới hạn các công việc làm thêm, vậy nên, bạn có thể chọn công việc hợp với ý muốn của mình. Điều này không chỉ giúp đỡ bạn rất nhiều trong việc đỡ đần một phần chi phí cho gia đình, mà còn giúp bạn trao dồi thêm những kinh nghiệm quý giá cho bản thân.
					</p>
					<p class="doanvanban">
						<strong>Du học sinh được phép đi làm thêm</strong>
						<br>
						Du học sinh được phép đi làm thêm 28h/ tuần. Tùy theo khu vực mà mức lương sẽ từ 900 - 1200 Yên. Trước khi quyết định đi làm thêm bạn phải tìm hiểu kỹ về quy định làm thêm tại trường học. Tuy nhiên, hãy tuân thủ chấp hành đúng quy định về giờ làm thêm của trường. Nếu bạn cố tình vi phạm có thể bị xử phạt nghiêm khắc.
					</p>
					<p class="doanvanban">
						<strong>Điều kiện tuyển sinh</strong>
						<br>
						• Tốt nghiệp THPT trở lên
						<br>
						• Tiếng Nhật N5 trở lên
						<br>
						• Không giới hạn độ tuổi đối với người đi học. Tuy nhiên, đối với những học viên lớn tuổi nếu không có trình độ học vấn cao hay không chứng minh được có quá trình học tập xuyên suốt thì sẽ gặp khó khăn ban đầu khi thuyết phục các trường chấp nhận hồ sơ.
						<br>
						• Thời gian bắt đầu tiếp nhận hồ sơ trước mỗi đợt nhập học là 6 tháng (trong đó bao gồm 3 tháng chờ kết quả từ Cục xuất nhập cảnh). Tuỳ vào số lượng học viên đăng ký mà thời gian kết thúc nhận hồ sơ có thể kết thúc sớm hoặc kéo dài hơn so với kế hoạch. Vì vậy, để có thể thoải mái lựa chọn trường học có chất lượng tốt học sinh nên bắt đầu học tiếng Nhật và liên hệ thực hiện hồ sơ ít nhất 6 tháng trước khi kỳ nhập học bắt đầu.
						<br>
						• Thời hạn nộp hồ sơ cho Cục nhập cảnh Nhật Bản theo từng kỳ nhập học:
						<br>
						&#160&#160&#160&#160🌾 Kỳ nhập học tháng 4: đầu tháng 12 năm trước (du học 2 năm)
						<br>
						&#160&#160&#160&#160🌾 Kỳ nhập học tháng 7: đầu tháng 3 (du học 1 năm 9 tháng)
						<br>
						&#160&#160&#160&#160🌾 Kỳ nhập học tháng 10: đầu tháng 6 (du học 1 năm 6 tháng)
						<br>
						&#160&#160&#160&#160🌾 Kỳ nhập học tháng 1: cuối tháng 9 năm trước (du học 1 năm 3 tháng)
						<br>
						• Người bảo lãnh có mức thu nhập từ 20 - 30 triệu đồng/ tháng và có sổ tiết kiệm từ 500 triệu đồng trở lên.
					</p>
				</div>
			<!-- Footer -->
			<footer>
        		<div class="logo_footer">
            		<img src="../images/footer/logoFooter.png" alt="">
        		</div>
        		<div class="Thongtin" width="500px">
            		<strong>
                		<p class="title_1">THÔNG TIN LIÊN HỆ</p>
            		</strong>
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
            		<strong>
                		<p class="title_1">KẾT NỐI VỚI CHÚNG TÔI</p>
            		</strong>
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