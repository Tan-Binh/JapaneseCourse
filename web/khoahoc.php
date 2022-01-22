<?php
session_start();
if(isset($_SESSION['username'])) $username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="../images/title/titleLogo.png" type="image/x-icon" />
  <link rel="stylesheet" href="../css/main.css" />
  <link rel="stylesheet" href="../css/header.css" />
  <link rel="stylesheet" href="../css/footer.css" />

  <title>Khoá học</title>
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
    <div class="search">
      <input type="search" name="search" id="search" class="search-input" placeholder="Tên khoá học, giáo viên" />
      <a href="" class="search-icon"><i class="fas fa-search"></i></a>
    </div>
    <div class="gap-60"></div>
    <div class="label-left">
      <h1>Khoá học nổi bật</h1>
    </div>
    <div class="gap-60"></div>
    <div class="content">
      <div class="wrapper">
        <div class="course">
          <div class="course-title">
            <p class="course-text">KHOÁ HỌC</p>
          </div>
          <div class="course__detail">
            <p class="course__detail-name">N4 JLPT</p>
          </div>
          <div class="course__benefit">
            <ul class="course__benefit__list">
              <li class="course__text">
                Dành cho các bạn đã hoàn thành khóa N5 hoặc tương đương
              </li>
              <li class="course__text">
                Cam kết sau khóa học (3 tháng) sẽ đạt trình độ tương đương N4
              </li>
              <li class="course__text">
                Giáo viên tận tình, có kinh nghiệm và trách nhiệm cao. 
              </li>
            </ul>
          </div>
          <div class="more-action">
            <div class="icon-more">
              <i class="fas fa-user-friends"></i>
            </div>
            <div class="number-registed">
              <p class="text-number">18</p>
              <p class="text-number">Học viên đăng kí</p>
            </div>
          </div>

          <button class="btn-more"><a href="./course-2.php">Xem chi tiết</a></button>
          <div class="gap-20"></div>
        </div>
        <div class="course">
          <div class="course-title">
            <p class="course-text">KHOÁ HỌC</p>
          </div>
          <div class="course__detail">
            <p class="course__detail-name">N4 JLPT</p>
          </div>
          <div class="course__benefit">
            <ul class="course__benefit__list">
              <li class="course__text">
                Dành cho các bạn đã hoàn thành khóa N5 hoặc tương đương
              </li>
              <li class="course__text">
                Cam kết sau khóa học (3 tháng) sẽ đạt trình độ tương đương N4
              </li>
              <li class="course__text">
                Giáo viên tận tình, có kinh nghiệm và trách nhiệm cao. 
              </li>
            </ul>
          </div>
          <div class="more-action">
            <div class="icon-more">
              <i class="fas fa-user-friends"></i>
            </div>
            <div class="number-registed">
              <p class="text-number">13</p>
              <p class="text-number">Học viên đăng kí</p>
            </div>
          </div>

          <button class="btn-more"><a href="./course-2.php">Xem chi tiết</a></button>
          <div class="gap-20"></div>
        </div>
        <div class="course">
          <div class="course-title">
            <p class="course-text">KHOÁ HỌC</p>
          </div>
          <div class="course__detail">
            <p class="course__detail-name">N4 JLPT</p>
          </div>
          <div class="course__benefit">
            <ul class="course__benefit__list">
              <li class="course__text">
                Dành cho các bạn đã hoàn thành khóa N5 hoặc tương đương
              </li>
              <li class="course__text">
                Cam kết sau khóa học (3 tháng) sẽ đạt trình độ tương đương N4
              </li>
              <li class="course__text">
                Giáo viên tận tình, có kinh nghiệm và trách nhiệm cao. 
              </li>
            </ul>
          </div>
          <div class="more-action">
            <div class="icon-more">
              <i class="fas fa-user-friends"></i>
            </div>
            <div class="number-registed">
              <p class="text-number">10</p>
              <p class="text-number">Học viên đăng kí</p>
            </div>
          </div>

          <button class="btn-more"><a href="./course-2.php">Xem chi tiết</a></button>
          <div class="gap-20"></div>
        </div>
        <div class="course">
          <div class="course-title">
            <p class="course-text">KHOÁ HỌC</p>
          </div>
          <div class="course__detail">
            <p class="course__detail-name">N4 JLPT</p>
          </div>
          <div class="course__benefit">
            <ul class="course__benefit__list">
              <li class="course__text">
                Dành cho các bạn đã hoàn thành khóa N5 hoặc tương đương
              </li>
              <li class="course__text">
                Cam kết sau khóa học (3 tháng) sẽ đạt trình độ tương đương N4
              </li>
              <li class="course__text">
                Giáo viên tận tình, có kinh nghiệm và trách nhiệm cao. 
              </li>
            </ul>
          </div>
          <div class="more-action">
            <div class="icon-more">
              <i class="fas fa-user-friends"></i>
            </div>
            <div class="number-registed">
              <p class="text-number">6</p>
              <p class="text-number">Học viên đăng kí</p>
            </div>
          </div>

          <button class="btn-more"><a href="./course-2.php">Xem chi tiết</a></button>
          <div class="gap-20"></div>
        </div>
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
<script src="../js/khoaHoc.js"></script>
</html>