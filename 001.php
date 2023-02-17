<?php
include 'assets/php/config.php';
include_once 'assets/php/form-reload.php';
if (isset($_POST['post_comment'])) {
    $name = $_POST['name'];
    $message = $_POST['message'];
    $sql = "INSERT INTO comment_box (name, message)
VALUES ('$name','$message')";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hội người Việt Nam tại tỉnh Okinawa | 在沖縄県ベトナム人協会</title>
    <!-- for icons  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- bootstrap  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- for swiper slider  -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!-- fancy box  -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <!-- custom css  -->
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/7bccc10542.js" crossorigin="anonymous"></script>
</head>

<body class="body-fixed">
    <!-- start of header  -->
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header-logo">
                        <a href="index.html">
                            <img src="logo.png" width="90" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="main-navigation">
                        <button class="menu-toggle"><span></span><span></span></button>
                        <nav class="header-menu">
                            <ul class="menu food-nav-menu">
                                <li>
                                    <a href="index.html">trang chủ</a>
                                    <p style="font-size: 11px;text-align: center;margin-top: 0px;">HOME</p>
                                </li>
                                <li>
                                    <a href="#about">về chúng tôi</a>
                                    <p style="font-size: 11px;text-align: center;margin-top: 0px;">ABOUT US</p>
                                </li>
                                <!-- <li>
                                    <a href="#menu">メニュー</a>
                                    <p style="font-size: 11px;text-align: center;margin-top: 0px;">MENU</p>
                                </li> -->
                                <li>
                                    <a href="#gallery">event</a>
                                    <p style="font-size: 11px;text-align: center;margin-top: 0px;">GALLERY</p>
                                </li>
                                <li>
                                    <a href="#blog">Các hoạt động</a>
                                    <p style="font-size: 11px;text-align: center;margin-top: 0px;">BLOG</p>
                                </li>
                                <li>
                                    <a href="#contact">liên hệ</a>
                                    <p style="font-size: 11px;text-align: center;margin-top: 0px;">CONTACT</p>
                                </li>
                            </ul>
                        </nav>
                        <div class="header-right">
                            <form action="#" class="header-search-form for-des">
                                <input type="search" class="form-input" placeholder="Nhập từ khóa...">
                                <button type="submit">
                                    <i class="uil uil-search"></i>
                                </button>
                            </form>
                            <!-- <a href="javascript:void(0)" class="header-btn header-cart">
                                <i class="uil uil-shopping-bag"></i>
                                <span class="cart-number">3</span>
                            </a>
                            <a href="javascript:void(0)" class="header-btn">
                                <i class="uil uil-user-md"></i>
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header ends  -->

    <div id="viewport">
        <div id="js-scroll-content">
            <section class="main-banner" id="home">
                <div class="blog-body">
                    <div class="tittle-main">
                        <div>
                            <div class="tag-link">
                                <a href="">Home</a> / <a href="">Blog</a> / <a href="">News</a>
                            </div>
                        </div>
                        <div class="tittle-post">
                            <h4>Có bao nhiêu người Việt Nam đang sinh sống tại Nhật Bản?</h4>
                            <i>
                                <p>
                                    Ngày: <a href="">23/01/2023</a>
                                    Tác giả: <a href="">Vũ Dũng</a>
                                    <i class="fa-solid fa-eye" style="margin: 0px 0px 0px 5px;"></i>
                                    <span id="count" style="margin: 0px 5px;">0</span>Views
                                </p>
                            </i>
                        </div>
                    </div>
                    <div class="post-body">
                        <p>
                            Hỏi: Tôi được biết, giữa Việt Nam và Nhật Bản thiết lập quan hệ đã từ rất lâu. Những năm gần
                            đây, mối quan hệ càng nồng ấm hơn và người Việt ta sang đó học tập, làm việc ngày càng đông
                            hơn. Tôi muốn biết hiện nay có khoảng bao nhiêu người Việt đang sống ở Nhật, cụ thể họ đang
                            cư trú ở đó theo những diện visa gì? Mong nhatban.net.vn cập nhật thông tin mới nhất giúp
                            tôi. Tôi xin chân thành cảm ơn!
                            Trả lời: Thông tin số lượng người Việt Nam tại Nhật

                            Sắp có chuyến thăm của thủ tướng Nhật Bản đến Việt Nam (dự kiến tháng 5/2022) nên bạn quan
                            tâm thông tin này cũng là dễ hiểu. Cũng như bạn đã biết, từ năm 73 nước ta và Nhật Bản đã
                            thiết lập quan hệ ngoại giao, lúc này đất nước Việt Nam còn chưa được thống nhất. Hiện nay,
                            Nhật Bản là đối tác kinh tế quan trọng hàng đầu của Việt Nam và là nước G7 đầu tiên công
                            nhận quy chế kinh tế thị trường của Việt Nam vào tháng 10/2011. Nhật Bản là nước tài trợ ODA
                            lớn nhất, đối tác du lịch thứ ba, thương mại lớn thứ tư của Việt Nam.
                        </p>
                        <img src="assets/images/news/viet-nhat.jpg" alt="">
                        <p><i style="font-size: 11px; color: rgb(117, 117, 117);margin: 10px auto;">Nguồn : Expres News
                                - Phóng sự phỏng vấn trực tiếp</i></p>
                        <p>
                        <h5>Số người Việt Nam đang sinh sống tại Nhật Bản khoảng 450.000 người</h5>
                        <p>Người Việt là cộng đồng nước ngoài lớn ở Nhật, với hơn 450.000 người sống tại khắp 47 tỉnh,
                            thành Nhật Bản, chủ yếu tập trung tại Aichi, Tokyo, Osaka, Saitama, Chiba và Fukuoka. Diện
                            visa
                            chủ yếu của họ là thực tập sinh kỹ năng (khoảng 200.000 người), du học sinh tiếp đến là các
                            diện
                            visa khác như: visa vĩnh trú, visa làm việc, visa kỹ sư, visa kỹ thuật viên, visa công vụ,
                            visa
                            thăm thân… <br>
                            Ngoài ra cũng không thể phủ nhận đang có một số lượng không nhỏ, những người cư trú bất hợp
                            pháp
                            (từng sang Nhật theo diện thực tập sinh kỹ năng hoặc du học sinh).
                            <br>
                            Nhật Bản hiện là đối tác kinh tế quan trọng hàng đầu của Việt Nam, đứng đầu về vốn ODA, thứ
                            hai về đầu tư, thứ ba về du lịch và thứ tư về thương mại.

                        </p>
                        <img src="assets/images/news/thuongmai-vietnhat.jpg" alt="">
                        <p><i style="font-size: 11px; color: rgb(117, 117, 117);margin: 10px auto;">Nguồn : Expres News
                                - Phóng sự phỏng vấn trực tiếp</i></p>
                        <p>
                            Những chuyến thăm qua lại của những người đứng đầu chính phủ hai nước thể hiện mối quan hệ
                            bền chặt, song phương và hữu nghị giữa hai quốc gia. Góp phần thúc đẩy sự phát triển kinh
                            tế, xã hội và nâng cao chất lượng nguồn nhân lực Việt Nam khi mà nhiều doanh nghiệp Nhật Bản
                            tiếp nhận người Việt đào tạo, làm việc tại cả Việt Nam và Nhật Bản.
                        </p>
                        </p>
                    </div>
                    <hr>
                    <!--Form Comment : Start-->
                    <div class="main-comment">
                        <form action="" method="post">
                            <label for="fname">Tên Của Bạn :</label>
                            <input type="text" id="fname" name="name" placeholder="Nhập tên của bạn..">

                            <label for="lname">Dòng bình luận</label>
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Viết bình luận vào đây..."></textarea>
                            <button type="submit" name="post_comment" value="Comment">Bình luận</button>
                        </form>
                    </div>
                    <div class="main-comment">
                        <div class="user-comment">
                            <?php
                            $sql = "SELECT * FROM comment_box";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    noReload();
                                    // echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";

                            ?>
                                    <div class="comment-body">
                                        <span><i><a href="">Reply</a></i></span>
                                        <p><?php echo $row['message']; ?></p>
                                    </div>
                                    <div class="user-img">
                                        <div>
                                            <img src="assets/images/guest.jpg" alt="">
                                        </div>
                                        <div class="date-post">
                                            <p><i><?php echo $row['time']; ?></i></p>
                                            <a href="#"><?php echo $row['name']; ?></a>
                                        </div>

                                    </div>
                            <?php }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="js-parallax-scene">
                    <div class="banner-shape-1 w-100" data-depth="0.30">
                        <img src="assets/images/laco.png" alt="">
                    </div>
                    <div class="banner-shape-2 w-100" data-depth="0.25">
                        <img src="assets/images/japan.webp" alt="">
                    </div>
                </div>
            </section>
            <!-- footer starts  -->
            <footer class="site-footer" id="contact">
                <div class="top-footer section">
                    <div class="sec-wp">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="footer-info">
                                        <div class="footer-logo">
                                            <a href="index.html">
                                                <img src="logo.png" width="120" alt="Logo">
                                            </a>
                                        </div>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia, tenetur.
                                        </p>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-github-alt"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="footer-flex-box">
                                        <div class="footer-table-info">
                                            <h3 class="h3-title">open hours</h3>
                                            <ul>
                                                <li><i class="uil uil-clock"></i> Mon-Thurs : 9am - 22pm</li>
                                                <li><i class="uil uil-clock"></i> Fri-Sun : 11am - 22pm</li>
                                            </ul>
                                        </div>
                                        <div class="footer-menu food-nav-menu">
                                            <h3 class="h3-title">Links</h3>
                                            <ul class="column-2">
                                                <li>
                                                    <a href="#home" class="footer-active-menu">Home</a>
                                                </li>
                                                <li><a href="#about">About</a></li>
                                                <li><a href="#menu">Menu</a></li>
                                                <li><a href="#gallery">Gallery</a></li>
                                                <li><a href="#blog">Blog</a></li>
                                                <li><a href="#contact">Contact</a></li>
                                            </ul>
                                        </div>
                                        <div class="footer-menu">
                                            <h3 class="h3-title">Company</h3>
                                            <ul>
                                                <li><a href="#">Terms & Conditions</a></li>
                                                <li><a href="#">Privacy Policy</a></li>
                                                <li><a href="#">Cookie Policy</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="copyright-text">
                                    <p>Copyright &copy; 2023 <span class="name">Vũ Dũng OCC </span>All Rights Reserved.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <button class="scrolltop"><i class="uil uil-angle-up"></i></button>
                    </div>
                </div>
            </footer>



        </div>
    </div>





    <!-- jquery  -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!-- fontawesome  -->
    <script src="assets/js/font-awesome.min.js"></script>

    <!-- swiper slider  -->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!-- mixitup -- filter  -->
    <script src="assets/js/jquery.mixitup.min.js"></script>

    <!-- fancy box  -->
    <script src="assets/js/jquery.fancybox.min.js"></script>

    <!-- parallax  -->
    <script src="assets/js/parallax.min.js"></script>

    <!-- gsap  -->
    <script src="assets/js/gsap.min.js"></script>

    <!-- scroll trigger  -->
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <!-- scroll to plugin  -->
    <script src="assets/js/ScrollToPlugin.min.js"></script>
    <!-- rellax  -->
    <!-- <script src="assets/js/rellax.min.js"></script> -->
    <!-- <script src="assets/js/rellax-custom.js"></script> -->
    <!-- smooth scroll  -->
    <script src="assets/js/smooth-scroll.js"></script>
    <!-- custom js  -->
    <script src="main.js"></script>
    <!--Count Visitor-->
    <script src="assets/js/countvistor.js"></script>

</body>

</html>