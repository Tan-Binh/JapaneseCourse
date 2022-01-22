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
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="icon" href="../images/title/titleLogo.png" type="image/x-icon" />
  <link rel="stylesheet" href="../css/main.css" />
  <link rel="stylesheet" href="../css/header.css" />
  <link rel="stylesheet" href="../css/footer.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <title>Khoá học 2</title>
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
  <div class="gap-60"></div>
  <div class="container">
    <div class="back-page">
      <a href="./khoaHoc.php"><i class="fas fa-angle-left"></i>Quay lại</a>
      <!-- <p class="back-page-text">Quay lại</p> -->
    </div>
    <div class="gap-60"></div>
    <div class="content-course">
      <div class="course1 col-960px">
        <div class="course-title">
          <p class="course-text font-3rem">KHOÁ HỌC</p>
        </div>
        <div class="course__detail">
          <p class="course__detail-name font-3rem">N4 JLPT</p>
        </div>
        <div class="course__benefit">
          <ol class="course__benefit__list">
            <li class="course__text text-left"><strong> 
              Khóa học bắt đầu từ ngày 16/8/2022</strong>
            </li>
            <li class="course__text text-left">
              Khóa học N3 dành cho những bạn đã có bằng N4 hoặc trình độ tương đương.
            </li>
            <li class="course__text text-left">
              Mỗi khóa học kéo dài 4 tháng/ 16 tuần. Gồm 32 buổi học. Mỗi tuần 2 buổi vào 19h30-21h thứ 3 và thứ 5 hàng tuần. 
            </li>
            <li class="course__text text-left">
              Cam kết đầu ra cho học viên, nếu không đạt trình độ N3 học viên sẽ được học lại miễn phí với điều kiện không nghỉ quá 20% số buổi học trong khóa.
            </li>
            <li class="course__text text-left">
              Trong suốt khóa học, trung tâm sẽ tổ chức những buổi thi thử để đánh giá sự tiến bộ của học viên.
            </li>
            <li class="course__text text-left">
              Giáo viên là người có trình độ N1 trở lên, có kinh nghiệm và trách nhiệm.
            </li>
          </ol>
        </div>
        <div class="course-title">
          <p class="course-text font-3rem"> GIÁO VIÊN</p>
        </div>
        <div class="course-sense">
          <div class="avatar-sense">
            <img src="../images/khoa_hoc/image-avatar.jpg" alt="" class="img-circle">
          </div>
          <div class="about-sense">
            <h2 class="name-sense">
              Quao Sensei
            </h2>
            <p>Trình độ tiếng Nhật N1 JLPT 
              </p>
            <p>email: anhfuji@gmai.com</p>
          </div>
        </div>
        <div class="course__benefit">
          <ul class="course__benefit__list">
            <li class="course__text text-center">
              Tốt nghiệp khoa Tiếng Nhật, trường đại học Hà Nội.

            </li>
            <li class="course__text text-center">
              Đang học hệ Thạc sĩ, đại học Ngoại ngữ Tokyo (học bổng MEXT)
            </li>
            <li class="course__text text-center">
              Giám đốc dự án Fuji online, PGD CTCP Fuji.
            </li>
          </ul>
        </div>
        <div class="gap-20"></div>
      </div>
    </div>
    <div class="gap-100"></div>
    <div class="amount-people">
      <div class="more-action">
        <div class="icon-more">
          <i class="fas fa-user-friends"></i>
        </div>
        <div class="number-registed">
          <p class="text-number">17</p>
          <p class="text-number">Học viên đăng kí khoá học này</p>
        </div>
      </div>
      <div class="gap-100"></div>
      <div class="action-register">
      
          <?php
          if($username=='')
          echo '<button class="btn-more"> <a href="dangnhap.php">ĐĂNG KÍ NGAY </a></button>';
          else
          {
            echo '<button class="btn-more"> <a href="../php_xuly/dangky_kh.php">ĐĂNG KÍ NGAY </a></button>';
          }
          ?>
        <h3 class="time-register">Hạn đăng ký: 14 ngày 03 giờ 54:08 </h3>
      </div>
    </div>

  </div>
  <div class="gap-100"></div>

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
        <i class="far fa-envelope icon1"></i>&nbsp;<a href="mailto:fujinihongo@gmail.com"
          class="anchor1">fujinihongo@gmail.com</a>
        <br><br><i class="fas fa-phone-alt icon1"></i> 0382468820
        <br><br><i class="far fa-calendar-check icon1"></i> Thứ 2- Thứ 7: 8h - 15h
        <br><br><i class="fas fa-map-marker-alt icon1"></i> 720A Điện Biên Phủ, q.22, p.Bình Thạnh, TP. Hồ Chí
        Minh
      </p>
    </div>
    <div class="Ketnoi">
      <strong>
        <p class="title_1">KẾT NỐI VỚI CHÚNG TÔI</p>
      </strong>
      <hr class="hr_white">
      <hr class="hr_blue">
      <br>
      <a href="https://www.facebook.com/"><img src="../images/footer/facebook.png" width="60px" height="60px"
          class="images1"></a>
      <a href="https://www.youtube.com/"><img src="../images/footer/youtube.png" width="60px" height="60px"
          class="images1"></a>
      <a href="https://www.tiktok.com/"><img src="../images/footer/tiktok.png" width="60px" height="60px"
          class="images1"></a>
    </div>
    <hr class="hr_footer">
    <p class="footer_copyright">Copyright © 2021 FujiNihongo. All Rights Reserved.</p>
  </footer>
</body>

</html>