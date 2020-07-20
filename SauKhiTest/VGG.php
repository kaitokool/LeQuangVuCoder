<?php
session_start();
session_destroy();
include("./Admin/DatabaseChinh/database.php");

?>

<!DOCTYPE html>

<html lang="en">

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta charset="UTF-8">

  <title>V Gaming Gear</title>

  <link rel="shortcut icon" href="./Admin/ImageAdmin/img.png" type="image/x-icon">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <link rel="stylesheet" type="text/css" href="1TongHopCssTCVGG/VGGCss.css">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

  <header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

      <a class="navbar-brand" href="VGG.php">V Gaming Gear</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav ml-lg-auto">

          <li class="nav-item">

            <a class="nav-link" href="#GioiThieu">Giới Thiệu</a>

          </li>

          <li class="nav-item">

            <a class="nav-link" href="#SanPham">Sản Phẩm</a>

          </li>

          <li class="nav-item">

            <a class="nav-link" href="#KhuyenMai">Khuyến Mãi</a>

          </li>

          <li class="nav-item">

            <a class="nav-link" href="#LienHe">Liên Hệ</a>

          </li>

          <li class="nav-item">

            <a class="nav-link" href="./LoginVGG.php">Đăng Nhập</a>

          </li>

        </ul>

      </div>

    </nav>

  </header>

  <div class="jumbotron jumbotron-fluid height100p banner" id="VGG.php">

    <div class="container h100">

      <div class="contentbox h100">

        <div>

          <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">V Gaming Gear</h1>

          <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">Nơi bạn thỏa sức đam mê mua sắm các loại máy tính PC, Laptop.<br>
            Build PC theo cách của bạn, làm việc thì hãy để chúng tôi.</p>

        </div>

      </div>

    </div>

  </div>

  <section class="sec1" id="GioiThieu">

    <div class="container">

      <div class="row">

        <div class="offset-sm-2 col-sm-8">

          <div class="headerText text-center">

            <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">Chúng Tôi Gọi Nó Là Chất</h2>

            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">Nếu thích thì hãy làm theo ý của bạn còn mọi chuyện cứ để bọn tôi lo</p>

          </div>

        </div>

      </div>

      <div class="row">

        <?php

        $get_introduction = "select * from introductory_homepage";
        $run_introduction = mysqli_query($con, $get_introduction);
        while ($row_introduction = mysqli_fetch_array($run_introduction)) {

          $Introductory_Id = $row_introduction['Introductory_Id'];
          $Introductory_Name = $row_introduction['Introductory_Name'];
          $Introductory_Description = $row_introduction['Introductory_Description'];
          $Introductory_Image = $row_introduction['Introductory_Image'];

        ?>


          <div class="col-sm-4">

            <div class="placeBox" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">

              <div class="imgBx">

                <img src="./1ImageTrangChuVGG/<?php echo $Introductory_Image; ?>" class="img-fluid">

              </div>

              <div class="content">

                <h3><?php echo $Introductory_Description; ?><br><span><?php echo $Introductory_Name; ?></span></h3>

              </div>

            </div>

          </div>

        <?php } ?>

      </div>

    </div>

  </section>

  <section class="sec2" id="SanPham">

    <div class="container h100">

      <div class="contentBox h100">

        <div class="sec22cont" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">

          <h2>Sản Phẩm Tạo Nên Thương Hiệu Chúng Tôi</h2>

          <p>Bạn Đã Từng Thử Sắm Cho Mình 1 Laptop hay 1 cái PC.<br>Nhưng Bạn Lại Quá Đau Đầu Thì Hãy Đến Với Chúng Tôi, Bởi Vì Chúng Tôi Chính Là Giải Pháp.</p>

          <a href="./1TongHopPageVGG/XemSanPham.php" title="" class="btn btnD1 active">Xem Chi Tiết</a>

        </div>

        <div class="container-fluid p-0">

          <div class="site-slider">

            <div class="slider-one">

              <?php

              $get_slides = "select * from slider LIMIT 0,1";

              $run_slides = mysqli_query($con, $get_slides);

              while ($row_slides = mysqli_fetch_array($run_slides)) {
                $slide_name = $row_slides['slider_name'];
                $slide_image = $row_slides['slider_image'];
                $URL_Slider = $row_slides['URL_Slider'];

                echo "
                  <div class='item active'>

                    <a href='$URL_Slider'>
                                        
                      <img src='1ImageTrangChuVGG/$slide_image' class='img-fluid'>

                    </a>

                  </div>
                ";
              }

              $get_slides = "select * from slider LIMIT 1,3";

              $run_slides = mysqli_query($con, $get_slides);

              while ($row_slides = mysqli_fetch_array($run_slides)) {
                $slide_name = $row_slides['slider_name'];
                $slide_image = $row_slides['slider_image'];
                $URL_Slider = $row_slides['URL_Slider'];

                echo "
                  <div class='item'>

                    <a href='$URL_Slider'>
                                        
                      <img src='1ImageTrangChuVGG/$slide_image' class='img-fluid'>

                    </a>
                                        
                  </div>
                ";
              }

              ?>
            </div>

            <div class="slider-btn">
              <span class="prev position-top">
                <i class="fas fa-chevron-left"></i>
              </span>
              <span class="next position-top right-0">
                <i class="fas fa-chevron-right"></i>
              </span>
            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

  <section class="khuyenmai" id="KhuyenMai">

    <div class="container">

      <div class="row">

        <div class="offset-sm-2 col-sm-8">

          <div class="headerText text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">

            <h2>Tưng Bừng Khuyến Mãi</h2>
            <p>Bạn đã từng thử xếp hàng để chờ ngày Flash Sale.<br>Bạn phải chờ đợi thậm chí là xếp hàng vậy đến đây chúng tôi sẽ giúp bạn qua được điều đó => vì chúng tôi là V Gaming Gear nơi không thể thành có thể.</p>

          </div>

        </div>

      </div>

      <div class="row">
        <div class="col-sm-6">
          <div class="khuyenmaipost" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <div class="imgBx">
              <img src="1ImageTrangChuVGG/km1.jpg" alt="" class="img-fluid">
            </div>
            <div class="content">
              <h1>Main Broard ASUS Hoặc VGA</h1>
              <p>Khuyến mãi ASUS ROG SICA khi mau MainBoard hoặc VGA</p>
              <a href="#" class="btn btnD2" title="">Xem Chi Tiết</a>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="khuyenmaipost" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <div class="imgBx">
              <img src="1ImageTrangChuVGG/km2.jpg" alt="" class="img-fluid">
            </div>
            <div class="content">
              <h1>Main Broard MSI</h1>
              <p>Mua Combo bo mạch chủ và màn hình MSI gaming được nhận Voucher mua sắm thả ga</p>
              <a href="#" class="btn btnD2" title="">Xem Chi Tiết</a>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="khuyenmaipost" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <div class="imgBx">
              <img src="1ImageTrangChuVGG/km3.jpg" alt="" class="img-fluid">
            </div>
            <div class="content">
              <h1>NVIDIA GeForce RTX</h1>
              <p>Mua RTX 2070/2080 nhận ngay một chuột Gaming và bàn phím cơ tổng giá trị lên đến 5.400.000 VNĐ</p>
              <a href="#" class="btn btnD2" title="">Xem Chi Tiết</a>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="khuyenmaipost" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <div class="imgBx">
              <img src="1ImageTrangChuVGG/km4.jpg" alt="" class="img-fluid">
            </div>
            <div class="content">
              <h1>Main Broard Nâng Cấp PC</h1>
              <p>Khuyến mãi khi mua bo mạch chủ MSI rất nhiều phần thưởng hấp dẫn đang chờ bạn.</p>
              <a href="#" class="btn btnD2" title="">Xem Chi Tiết</a>
              <div class="clearfix"></div>
            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

  <section class="LienHe" id="LienHe">

    <div class="container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">

      <div class="row">
        <div class="col-sm-12">
          <div class="headerText text-center">
            <h2>Liên Hệ Chúng Tôi</h2>
            <p>Liên Hệ Chúng Tôi Khi Các Bạn Cần Giúp Đỡ Vì Chúng Tôi Luôn Sản Sàng.</p>
          </div>
        </div>
      </div>

      <div class="row clearfix">

        <div class="offset-sm-2 col-sm-8">

          <form method="post">
            <div class="form-group">
              <label>Họ Và Tên</label>
              <input type="text" name="hoten" class="form-control"></input>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text" name="emailf" class="form-control"></input>
            </div>
            <div class="form-group">
              <label>Số Điện Thoại</label>
              <input type="text" name="sdt" class="form-control"></input>
            </div>
            <div class="form-group">
              <label>Lời Nhắn</label>
              <textarea class="form-control textarea" name="noidung"></textarea>
            </div>
            <div class="form-group text-center">
              <button class="btn btnD1" name="guiGmail" type="">Gửi</button>
            </div>
          </form>

        </div>

      </div>

    </div>

  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <ul class="sci">
            <li> <a href="#"><i class="fab fa-facebook"></i></a></li>
            <li> <a href="#"><i class="fab fa-twitter"></i></a></li>
            <li> <a href="#"><i class="fab fa-google-plus"></i></a></li>
            <li> <a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li> <a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
          <p class="cpryt">Website Tạo @2020 Bởi <a href="#" title="">V Gaming Gear</a></p>
        </div>
      </div>
    </div>
  </footer>

  <?php
  if (isset($_POST['guiGmail'])) {
    require '1PluginDung/phpmailer/PHPMailerAutoload.php';
    $mail =  new PHPMailer;

    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';

    $mail->Username = 'tvfahasa@gmail.com';
    $mail->Password = 'Hehehe123';

    $mail->setFrom('tvfahasa@gmail.com', 'V Gaming Gear');
    $mail->addAddress($_POST['emailf']);
    $mail->addReplyTo('tvfahasa@gmail.com');

    $mail->isHTML(true);
    $mail->AddEmbeddedImage("./1ImageTrangChuVGG/logoGmail.png", "logoGmail", "logoGmail.png");
    $mail->AddEmbeddedImage("./1ImageTrangChuVGG/gmailBack.jpg", "gmailBack", "logoGmail.png");
    $mail->AddEmbeddedImage("./1ImageTrangChuVGG/product1.png", "product1", "logoGmail.png");
    $mail->AddEmbeddedImage("./1ImageTrangChuVGG/product2.png", "product2", "logoGmail.png");
    $mail->Subject = "Send feedback to customers";
    $mail->Body = '
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">>
        <html style="margin: 0; padding: 0;" xmlns="http://www.w3.org/1999/xhtml">
          <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title></title>
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width" />
            <style type="text/css">
            @import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,700,400);
              body {
                margin: 0;
                padding: 0;
                background-color: #212a32;
                align-items: center;
              }
              table {
                border-collapse: collapse;
                table-layout: fixed;
              }
              * {
                line-height: inherit;
              }
              [x-apple-data-detectors] {
                color: inherit !important;
                text-decoration: none !important;
              }
              .wrapper .footer__share-button a:hover,
              .wrapper .footer__share-button a:focus {
                color: #ffffff !important;
              }
              .btn a:hover,
              .btn a:focus,
              .footer__share-button a:hover,
              .footer__share-button a:focus,
              .email-footer__links a:hover,
              .email-footer__links a:focus {
                opacity: 0.8;
              }
              .preheader,
              .header,
              .layout,
              .column {
                transition: width 0.25s ease-in-out, max-width 0.25s ease-in-out;
              }
              .preheader td {
                padding-bottom: 8px;
              }
              .layout,
              div.header {
                max-width: 400px !important;
                -fallback-width: 95% !important;
                width: calc(100% - 20px) !important;
              }
              div.preheader {
                max-width: 360px !important;
                -fallback-width: 90% !important;
                width: calc(100% - 60px) !important;
              }
              .snippet,
              .webversion {
                Float: none !important;
              }
              .stack .column {
                max-width: 400px !important;
                width: 100% !important;
              }
              .fixed-width.has-border {
                max-width: 402px !important;
              }
              .fixed-width.has-border .layout__inner {
                box-sizing: border-box;
              }
              .snippet,
              .webversion {
                width: 50% !important;
              }
              .ie .btn {
                width: 100%;
              }
              .ie .stack .column,
              .ie .stack .gutter {
                display: table-cell;
                float: none !important;
              }
              .ie div.preheader,
              .ie .email-footer {
                max-width: 560px !important;
                width: 560px !important;
              }
              .ie .snippet,
              .ie .webversion {
                width: 280px !important;
              }
              .ie div.header,
              .ie .layout {
                max-width: 600px !important;
                width: 600px !important;
              }
              .ie .two-col .column {
                max-width: 300px !important;
                width: 300px !important;
              }
              .ie .three-col .column,
              .ie .narrow {
                max-width: 200px !important;
                width: 200px !important;
              }
              .ie .wide {
                width: 400px !important;
              }
              .ie .stack.fixed-width.has-border,
              .ie .stack.has-gutter.has-border {
                max-width: 602px !important;
                width: 602px !important;
              }
              .ie .stack.two-col.has-gutter .column {
                max-width: 290px !important;
                width: 290px !important;
              }
              .ie .stack.three-col.has-gutter .column,
              .ie .stack.has-gutter .narrow {
                max-width: 188px !important;
                width: 188px !important;
              }
              .ie .stack.has-gutter .wide {
                max-width: 394px !important;
                width: 394px !important;
              }
              .ie .stack.two-col.has-gutter.has-border .column {
                max-width: 292px !important;
                width: 292px !important;
              }
              .ie .stack.three-col.has-gutter.has-border .column,
              .ie .stack.has-gutter.has-border .narrow {
                max-width: 190px !important;
                width: 190px !important;
              }
              .ie .stack.has-gutter.has-border .wide {
                max-width: 396px !important;
                width: 396px !important;
              }
              .ie .fixed-width .layout__inner {
                border-left: 0 none white !important;
                border-right: 0 none white !important;
              }
              .ie .layout__edges {
                display: none;
              }
              .mso .layout__edges {
                font-size: 0;
              }
              .layout-fixed-width,
              .mso .layout-full-width {
                background-color: #ffffff;
              }
              @media only screen and (min-width: 620px) {
                .column,
                .gutter {
                  display: table-cell;
                  Float: none !important;
                  vertical-align: top;
                }
                div.preheader,
                .email-footer {
                  max-width: 560px !important;
                  width: 560px !important;
                }
                .snippet,
                .webversion {
                  width: 280px !important;
                }
                div.header,
                .layout,
                .one-col .column {
                  max-width: 600px !important;
                  width: 600px !important;
                }
                .fixed-width.has-border,
                .fixed-width.x_has-border,
                .has-gutter.has-border,
                .has-gutter.x_has-border {
                  max-width: 602px !important;
                  width: 602px !important;
                }
                .two-col .column {
                  max-width: 300px !important;
                  width: 300px !important;
                }
                .three-col .column,
                .column.narrow,
                .column.x_narrow {
                  max-width: 200px !important;
                  width: 200px !important;
                }
                .column.wide,
                .column.x_wide {
                  width: 400px !important;
                }
                .two-col.has-gutter .column,
                .two-col.x_has-gutter .column {
                  max-width: 290px !important;
                  width: 290px !important;
                }
                .three-col.has-gutter .column,
                .three-col.x_has-gutter .column,
                .has-gutter .narrow {
                  max-width: 188px !important;
                  width: 188px !important;
                }
                .has-gutter .wide {
                  max-width: 394px !important;
                  width: 394px !important;
                }
                .two-col.has-gutter.has-border .column,
                .two-col.x_has-gutter.x_has-border .column {
                  max-width: 292px !important;
                  width: 292px !important;
                }
                .three-col.has-gutter.has-border .column,
                .three-col.x_has-gutter.x_has-border .column,
                .has-gutter.has-border .narrow,
                .has-gutter.x_has-border .narrow {
                  max-width: 190px !important;
                  width: 190px !important;
                }
                .has-gutter.has-border .wide,
                .has-gutter.x_has-border .wide {
                  max-width: 396px !important;
                  width: 396px !important;
                }
              }
              @supports (display: flex) {
                @media only screen and (min-width: 620px) {
                  .fixed-width.has-border .layout__inner {
                    display: flex !important;
                  }
                }
              }
              @media only screen and (-webkit-min-device-pixel-ratio: 2),
              only screen and (min--moz-device-pixel-ratio: 2),
              only screen and (-o-min-device-pixel-ratio: 2/1),
              only screen and (min-device-pixel-ratio: 2),
              only screen and (min-resolution: 192dpi),
              only screen and (min-resolution: 2dppx) {
                .fblike {
                  background-image: url(https://i7.createsend1.com/static/eb/master/13-the-blueprint-3/images/fblike@2x.png) !important;
                }
                .tweet {
                  background-image: url(https://i8.createsend1.com/static/eb/master/13-the-blueprint-3/images/tweet@2x.png) !important;
                }
                .linkedinshare {
                  background-image: url(https://i9.createsend1.com/static/eb/master/13-the-blueprint-3/images/lishare@2x.png) !important;
                }
                .forwardtoafriend {
                  background-image: url(https://i10.createsend1.com/static/eb/master/13-the-blueprint-3/images/forward@2x.png) !important;
                }
              }
              @media (max-width: 321px) {
                .fixed-width.has-border .layout__inner {
                  border-width: 1px 0 !important;
                }
          
                .layout,
                .stack .column {
                  min-width: 320px !important;
                  width: 320px !important;
                }
          
                .border {
                  display: none;
                }
          
                .has-gutter .border {
                  display: table-cell;
                }
              }
              .mso div {
                border: 0 none white !important;
              }
              .mso .w560 .divider {
                Margin-left: 260px !important;
                Margin-right: 260px !important;
              }
              .mso .w360 .divider {
                Margin-left: 160px !important;
                Margin-right: 160px !important;
              }
              .mso .w260 .divider {
                Margin-left: 110px !important;
                Margin-right: 110px !important;
              }
              .mso .w160 .divider {
                Margin-left: 60px !important;
                Margin-right: 60px !important;
              }
              .mso .w354 .divider {
                Margin-left: 157px !important;
                Margin-right: 157px !important;
              }
              .mso .w250 .divider {
                Margin-left: 105px !important;
                Margin-right: 105px !important;
              }
              .mso .w148 .divider {
                Margin-left: 54px !important;
                Margin-right: 54px !important;
              }
              .mso .size-8,
              .ie .size-8 {
                font-size: 8px !important;
                line-height: 14px !important;
              }
              .mso .size-9,
              .ie .size-9 {
                font-size: 9px !important;
                line-height: 16px !important;
              }
              .mso .size-10,
              .ie .size-10 {
                font-size: 10px !important;
                line-height: 18px !important;
              }
              .mso .size-11,
              .ie .size-11 {
                font-size: 11px !important;
                line-height: 19px !important;
              }
              .mso .size-12,
              .ie .size-12 {
                font-size: 12px !important;
                line-height: 19px !important;
              }
              .mso .size-13,
              .ie .size-13 {
                font-size: 13px !important;
                line-height: 21px !important;
              }
              .mso .size-14,
              .ie .size-14 {
                font-size: 14px !important;
                line-height: 21px !important;
              }
              .mso .size-15,
              .ie .size-15 {
                font-size: 15px !important;
                line-height: 23px !important;
              }
              .mso .size-16,
              .ie .size-16 {
                font-size: 16px !important;
                line-height: 24px !important;
              }
              .mso .size-17,
              .ie .size-17 {
                font-size: 17px !important;
                line-height: 26px !important;
              }
              .mso .size-18,
              .ie .size-18 {
                font-size: 18px !important;
                line-height: 26px !important;
              }
              .mso .size-20,
              .ie .size-20 {
                font-size: 20px !important;
                line-height: 28px !important;
              }
              .mso .size-22,
              .ie .size-22 {
                font-size: 22px !important;
                line-height: 31px !important;
              }
              .mso .size-24,
              .ie .size-24 {
                font-size: 24px !important;
                line-height: 32px !important;
              }
              .mso .size-26,
              .ie .size-26 {
                font-size: 26px !important;
                line-height: 34px !important;
              }
              .mso .size-28,
              .ie .size-28 {
                font-size: 28px !important;
                line-height: 36px !important;
              }
              .mso .size-30,
              .ie .size-30 {
                font-size: 30px !important;
                line-height: 38px !important;
              }
              .mso .size-32,
              .ie .size-32 {
                font-size: 32px !important;
                line-height: 40px !important;
              }
              .mso .size-34,
              .ie .size-34 {
                font-size: 34px !important;
                line-height: 43px !important;
              }
              .mso .size-36,
              .ie .size-36 {
                font-size: 36px !important;
                line-height: 43px !important;
              }
              .mso .size-40,
              .ie .size-40 {
                font-size: 40px !important;
                line-height: 47px !important;
              }
              .mso .size-44,
              .ie .size-44 {
                font-size: 44px !important;
                line-height: 50px !important;
              }
              .mso .size-48,
              .ie .size-48 {
                font-size: 48px !important;
                line-height: 54px !important;
              }
              .mso .size-56,
              .ie .size-56 {
                font-size: 56px !important;
                line-height: 60px !important;
              }
              .mso .size-64,
              .ie .size-64 {
                font-size: 64px !important;
                line-height: 63px !important;
              }
              @media only screen and (min-width: 620px) {
                .wrapper {
                  min-width: 600px !important
                }
                .wrapper h1 {
                  font-size: 26px !important;
                  line-height: 34px !important
                }
                .wrapper h2 {
                  font-size: 20px !important;
                  line-height: 28px !important
                }
                .wrapper .size-8 {
                  font-size: 8px !important;
                  line-height: 14px !important
                }
                .wrapper .size-9 {
                  font-size: 9px !important;
                  line-height: 16px !important
                }
                .wrapper .size-10 {
                  font-size: 10px !important;
                  line-height: 18px !important
                }
                .wrapper .size-11 {
                  font-size: 11px !important;
                  line-height: 19px !important
                }
                .wrapper .size-12 {
                  font-size: 12px !important;
                  line-height: 19px !important
                }
                .wrapper .size-13 {
                  font-size: 13px !important;
                  line-height: 21px !important
                }
                .wrapper .size-14 {
                  font-size: 14px !important;
                  line-height: 21px !important
                }
                .wrapper .size-15 {
                  font-size: 15px !important;
                  line-height: 23px !important
                }
                .wrapper .size-16 {
                  font-size: 16px !important;
                  line-height: 24px !important
                }
                .wrapper .size-17 {
                  font-size: 17px !important;
                  line-height: 26px !important
                }
                .wrapper .size-18 {
                  font-size: 18px !important;
                  line-height: 26px !important
                }
                .wrapper .size-20 {
                  font-size: 20px !important;
                  line-height: 28px !important
                }
                .wrapper .size-22 {
                  font-size: 22px !important;
                  line-height: 31px !important
                }
                .wrapper .size-24 {
                  font-size: 24px !important;
                  line-height: 32px !important
                }
                .wrapper .size-26 {
                  font-size: 26px !important;
                  line-height: 34px !important
                }
                .wrapper .size-28 {
                  font-size: 28px !important;
                  line-height: 36px !important
                }
                .wrapper .size-30 {
                  font-size: 30px !important;
                  line-height: 38px !important
                }
                .wrapper .size-32 {
                  font-size: 32px !important;
                  line-height: 40px !important
                }
                .wrapper .size-34 {
                  font-size: 34px !important;
                  line-height: 43px !important
                }
                .wrapper .size-36 {
                  font-size: 36px !important;
                  line-height: 43px !important
                }
                .wrapper .size-40 {
                  font-size: 40px !important;
                  line-height: 47px !important
                }
                .wrapper .size-44 {
                  font-size: 44px !important;
                  line-height: 50px !important
                }
                .wrapper .size-48 {
                  font-size: 48px !important;
                  line-height: 54px !important
                }
                .wrapper .size-56 {
                  font-size: 56px !important;
                  line-height: 60px !important
                }
                .wrapper .size-64 {
                  font-size: 64px !important;
                  line-height: 63px !important
                }
              }
              .logo a:hover,
              .logo a:focus {
                color: #fff !important
              }
          
              .mso .layout-has-border {
                border-top: 1px solid #000;
                border-bottom: 1px solid #000
              }
          
              .mso .layout-has-bottom-border {
                border-bottom: 1px solid #000
              }
          
              .mso .border,
              .ie .border {
                background-color: #000
              }
          
              .mso h1,
              .ie h1 {
                font-size: 26px !important;
                line-height: 34px !important
              }
          
              .mso h2,
              .ie h2 {
                font-size: 20px !important;
                line-height: 28px !important
              }
          
              .mso .footer__share-button p {
                font-family: Open Sans, sans-serif
              }
            </style>
            <meta name="robots" content="noindex,nofollow" />
            <meta property="og:title" content="My First Campaign" />
          </head>
          <body class="full-padding" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;">
            <table class="wrapper"
              style="border-collapse: collapse;table-layout: fixed;min-width: 320px;width: 100%;background-color: #212a32;"
              cellpadding="0" cellspacing="0" role="presentation">
              <tbody>
                <tr>
                  <td>
                    <div role="banner">
                      <div class="preheader"
                        style="Margin: 0 auto;max-width: 560px;min-width: 280px; width: 280px;width: calc(28000% - 167440px);">
                        <div style="border-collapse: collapse;display: table;width: 100%;">
                          <div class="snippet"
                            style="display: table-cell;Float: left;font-size: 12px;line-height: 19px;max-width: 280px;min-width: 140px; width: 140px;width: calc(14000% - 78120px);padding: 10px 0 5px 0;color: #e6e6e6;font-family: Open Sans,sans-serif;">
          
                          </div>
                          <div class="webversion"
                            style="display: table-cell;Float: left;font-size: 12px;line-height: 19px;max-width: 280px;min-width: 139px; width: 139px;width: calc(14100% - 78680px);padding: 10px 0 5px 0;text-align: right;color: #e6e6e6;font-family: Open Sans,sans-serif;">
          
                          </div>
                        </div>
                      </div>
                      <div class="header"
                        style="Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);"
                        id="emb-email-header-container">
                        <div class="logo emb-logo-margin-box"
                          style="font-size: 26px;line-height: 32px;Margin-top: 6px;Margin-bottom: 20px;color: #c3ced9;font-family: Roboto,Tahoma,sans-serif;Margin-left: 20px;Margin-right: 20px;"
                          align="center">
                          <div class="logo-center" align="center" id="emb-email-header"><img
                              style="display: block;height: auto;width: 100%;border: 0;max-width: 247px;"
                              src="cid:logoGmail" alt="" width="247" /></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="layout one-col fixed-width stack"
                        style="Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;">
                        <div class="layout__inner"
                          style="border-collapse: collapse;display: table;width: 100%;background-color: #212a32;">
                          <div class="column"
                            style="text-align: left;color: #bdbdbd;font-size: 14px;line-height: 21px;font-family: Open Sans,sans-serif;">
          
                            <div style="font-size: 12px;font-style: normal;font-weight: normal;line-height: 19px;" align="center">
                              <img class="gnd-corner-image gnd-corner-image-center gnd-corner-image-top"
                                style="border: 0;display: block;height: auto;width: 100%;max-width: 825px;" alt="" width="600"
                                src="cid:gmailBack" />
                            </div>
          
                            <div style="Margin-left: 20px;Margin-right: 20px;Margin-top: 20px;">
                              <div style="line-height: 20px;font-size: 1px;">&nbsp;</div>
                            </div>
          
                            <div style="Margin-left: 20px;Margin-right: 20px;">
                              <div style="vertical-align: middle;">
                                <h1
                                  style="Margin-top: 0;Margin-bottom: 0;font-style: normal;font-weight: normal;color: #fff;font-size: 22px;line-height: 31px;font-family: Avenir,sans-serif;text-align: center;">
                                  Cảm Ơn Bạn Đã Gửi Phản Hồi</h1>
                                <p style="Margin-top: 20px;Margin-bottom: 20px;text-align: center;">
                                  Vấn Đề Của Bạn( '.$_POST['noidung'].')<br>
                                  Chúng tôi sẽ cố gắng giải quyết vấn đề của bạn 1 cách tốt nhất trong lần cập nhật 
                                  tới mong bạn hãy giữ liên lạc nếu còn bất kỳ khúc mắc nào mong bạn xóm phản hồi.</p>
                              </div>
                            </div>
          
                            <div style="Margin-left: 20px;Margin-right: 20px;Margin-bottom: 24px;">
                              <div class="btn btn--ghost btn--medium" style="text-align:center;">
                                <a
                                  style="border-radius: 4px;display: inline-block;font-size: 12px;font-weight: bold;line-height: 22px;padding: 10px 20px;text-align: center;text-decoration: none !important;transition: opacity 0.1s ease-in;color: #ffffff !important;border: 1px solid #3e4f5e;font-family: Open Sans, sans-serif;"
                                  href="http://lequangvu.epizy.com/VGG.php">Phản Hồi Cho Chúng Tôi Ở Đây
                                </a>
                              </div>
                            </div>
          
                          </div>
                        </div>
                      </div>
          
                      <div style="line-height: 20px;font-size: 20px;">&nbsp;</div>
          
                      <div class="layout two-col has-gutter stack"
                        style="Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;">
                        <div class="layout__inner" style="border-collapse: collapse;display: table;width: 100%;">
                          <div class="column"
                            style="max-width: 320px;min-width: 290px; width: 320px;width: calc(18290px - 3000%);Float: left;">
                            <table class="column__background"
                              style="border-collapse: collapse;table-layout: fixed;background-color: #212a32;" cellpadding="0"
                              cellspacing="0" width="100%" role="presentation">
                              <tbody>
                                <tr>
                                  <td
                                    style="text-align: left;color: #bdbdbd;font-size: 14px;line-height: 21px;font-family: Open Sans,sans-serif;">
          
                                    <div style="Margin-left: 20px;Margin-right: 20px;Margin-top: 24px;">
                                      <div
                                        style="font-size: 12px;font-style: normal;font-weight: normal;line-height: 19px;Margin-bottom: 20px;"
                                        align="center">
                                        <img style="border: 0;display: block;height: auto;width: 100%;max-width: 300px;" alt=""
                                          width="250" src="cid:product1" />
                                      </div>
                                    </div>
          
                                    <div style="Margin-left: 20px;Margin-right: 20px;Margin-bottom: 24px;">
                                      <div style="vertical-align: middle;">
                                        <h3
                                          style="Margin-top: 0;Margin-bottom: 0;font-style: normal;font-weight: normal;color: #fff;font-size: 16px;line-height: 24px;font-family: Avenir,sans-serif;">
                                          Gaming Laptop Predator PR-1</h3>
                                        <p style="Margin-top: 12px;Margin-bottom: 0;">Là 1 trong những dòng sản phẩm nổi bật mang phong cách cá tính. 
                                          Tạo cảm giác chơi game siêu cool. 
                                          Chiến Mọi loại game đình đám hiện nay: PUPG, LOL, Dota2,....</p>
                                        <p style="Margin-top: 20px;Margin-bottom: 0;">&nbsp;</p>
                                        <p class="size-20"
                                          style="Margin-top: 20px;Margin-bottom: 0;font-size: 17px;line-height: 26px;"
                                          lang="x-size-20"><a style="color:#3dbafd" href="http://lequangvu.epizy.com/VGG.php">Xem Chi Tiết</a>
                                        </p>
                                      </div>
                                    </div>
          
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          
                          <div class="gutter" style="Float: left;width: 20px;">&nbsp;</div>
          
                          <div class="column"
                            style="max-width: 320px;min-width: 290px; width: 320px;width: calc(18290px - 3000%);Float: left;">
                            <table class="column__background"
                              style="border-collapse: collapse;table-layout: fixed;background-color: #212a32;" cellpadding="0"
                              cellspacing="0" width="100%" role="presentation">
                              <tbody>
                                <tr>
          
                                  <td style="text-align: left;color: #bdbdbd;font-size: 14px;line-height: 21px;font-family: Open Sans,sans-serif;">
          
                                    <div style="Margin-left: 20px;Margin-right: 20px;Margin-top: 24px;">
                                      
                                      <div style="font-size: 12px;font-style: normal;font-weight: normal;
                                      line-height: 19px;Margin-bottom: 20px;" align="center">
          
                                        <img style="border: 0;display: block;height: auto;width: 100%;max-width: 300px;" alt=""
                                          width="250" src="cid:product2" />
          
                                      </div>
          
                                    </div>
          
                                    <div style="Margin-left: 20px;Margin-right: 20px;Margin-bottom: 24px;">
          
                                      <div style="vertical-align: middle;">
          
                                        <h3
                                          style="Margin-top: 0;Margin-bottom: 0;font-style: normal;font-weight: normal;color: #fff;font-size: 16px;line-height: 24px;font-family: Avenir,sans-serif;">
                                          Gaming Laptop Predator PR-2</h3>
                                        <p style="Margin-top: 12px;Margin-bottom: 0;">Chung quy mang phong cách game thủ. 
                                          Tạo cảm giác chơi game chân thực tới từng chi tiết. 
                                          Mang Đến việc làm sử dụng để chơi game ko còn là quan trọng nữa.</p>
          
                                        <p style="Margin-top: 20px;Margin-bottom: 0;">&nbsp;</p>
          
                                        <p class="size-20"
                                          style="Margin-top: 20px;Margin-bottom: 0;font-size: 17px;line-height: 26px;"
                                          lang="x-size-20"><a style="color:#3dbafd" href="http://lequangvu.epizy.com/VGG.php">Xem Chi Tiết</a>
                                        </p>
          
                                      </div>
          
                                    </div>
          
                                  </td>
          
                                </tr>
          
                              </tbody>
          
                            </table>
          
                          </div>
          
                        </div>
          
                      </div>
          
                      <div style="line-height: 60px;font-size: 60px;">&nbsp;</div>
          
                      <div role="contentinfo">
                        
                        <div class="layout email-footer stack"
                          style="Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;
                          width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;
                          word-break: break-word;">
                          
                          <div class="layout__inner" style="border-collapse: collapse;display: table;
                          width: 100%; text-align: center;">
                            
                            <div class="column wide"
                              style="font-size: 12px;line-height: 19px;color: #e6e6e6;font-family: Open Sans,sans-serif;Float: left;
                              max-width: 400px;min-width: 320px; width: 320px;width: calc(8000% - 47600px);">
                              
                              <div>
          
                                <table class="email-footer__links" style="margin-left: 40%;margin-right: 50%;" role="presentation" emb-web-links>
                                  
                                  <tbody>
                                    <tr role="navigation">
                                      <td style="padding: 0;width: 26px;" emb-web-links><a
                                          style="text-decoration: underline;transition: opacity 0.1s ease-in;color: #e6e6e6;"
                                          href="https://www.facebook.com/vu.pk.908/"><img style="border: 0;"
                                            src="https://i2.createsend1.com/static/eb/master/13-the-blueprint-3/images/facebook.png"
                                            width="26" height="26" alt="Facebook" /></a></td>
                                      <td style="padding: 0 0 0 3px;width: 26px;" emb-web-links><a
                                          style="text-decoration: underline;transition: opacity 0.1s ease-in;color: #e6e6e6;"
                                          href="https://twitter.com/thanvu18"><img style="border: 0;"
                                            src="https://i3.createsend1.com/static/eb/master/13-the-blueprint-3/images/twitter.png"
                                            width="26" height="26" alt="Twitter" /></a></td>
                                      <td style="padding: 0 0 0 3px;width: 26px;" emb-web-links><a
                                          style="text-decoration: underline;transition: opacity 0.1s ease-in;color: #e6e6e6;"
                                          href="https://www.youtube.com/channel/UC7Cg49bDsZ870tgFCoSBAhA?view_as=subscriber"><img
                                            style="border: 0;"
                                            src="https://i4.createsend1.com/static/eb/master/13-the-blueprint-3/images/youtube.png"
                                            width="26" height="26" alt="YouTube" /></a></td>
                                      <td style="padding: 0 0 0 3px;width: 26px;" emb-web-links><a
                                          style="text-decoration: underline;transition: opacity 0.1s ease-in;color: #e6e6e6;"
                                          href="https://www.instagram.com/vukaitokool/"><img style="border: 0;"
                                            src="https://i5.createsend1.com/static/eb/master/13-the-blueprint-3/images/instagram.png"
                                            width="26" height="26" alt="Instagram" /></a></td>
                                    </tr>
                                  </tbody>
          
                                </table>
          
                                <div style="font-size: 12px;line-height: 19px;Margin-top: 20px;">
          
                                  <div>V Gaming Gear Xin Tài Trợ.<br />Admin: Lê Quang Vũ.</div>
          
                                </div>
          
                              </div>
          
                            </div>
          
                          </div>
          
                        </div>
          
                      </div>
          
                    </div>
          
                  </td>
          
                </tr>
          
              </tbody>
          
            </table>
          
          </body>
          
          </html>
          ';

    if ($mail->send()) {

      echo "<script>alert('Đã Gửi Phản Hồi Đến Shop')</script>";
      echo "<script>window.open('VGG.php','_self')</script>";
    } else {

      echo "<script>alert('Quá Trình Gửi Đã Xảy Ra Lỗi')</script>";
      echo "<script>window.open('VGG.php','_self')</script>";
    }
  }
  ?>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript" src="1TongHopJSTCVGG/VGGJs.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="https://kit.fontawesome.com/03f58c9027.js" crossorigin="anonymous"></script>
  <script>
    AOS.init();
  </script>
  <script type="text/javascript">
    $(document).scroll(function() {
      $('.navbar').toggleClass('scrolled', $(this).scrollTop() > $('.navbar').height());
    });
  </script>
</body>

</html>