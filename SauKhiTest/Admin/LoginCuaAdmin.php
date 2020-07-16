<?php

session_start();
include("DatabaseChinh/database.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>V Gaming Gear</title>
  <link rel="shortcut icon" href="./ImageAdmin/img.png" type="image/x-icon" />

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
  <link rel="stylesheet" href="./PluginsDung/fontawesome-free/css/all.min.css" />
  <link rel="stylesheet" href="./PluginsDung/IconFont7s/pe-icon-7-stroke/css/helper.css" />
  <link rel="stylesheet" href="./PluginsDung/IconFont7s/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
  <link rel="stylesheet" href="./PluginsDung/animate/animate.css" />
  <link rel="stylesheet" href="./PluginsDung/animsition/css/animsition.min.css" />

  <link type="text/css" rel="stylesheet" href="./TongHopCss/LoginCuaAdmin.css" />
</head>

<body>
  <div class="limiter">
    <div class="container-loginAdminVGG hieuungdong">
      <div class="wrap-loginAdminVGG">
        <form class="loginAdminVGG validate-form" method="post">
          <span class="loginAdminVGG-title p-b-34">Đăng Nhập Admin</span>

          <div class="wrap-inputAdminVGG m-b-mar c-c-VGG">
            <input id="first-name" class="NhapTTAdminVGG" type="text" name="admin_tk" placeholder="Mời Nhập Tên Tài Khoản" required/>
            <span class="focus-NhapTTAdminVGG"></span>
          </div>
          <div class="wrap-inputAdminVGG m-b-mar c-c-VGG">
            <input class="NhapTTAdminVGG" type="password" name="admin_pass" placeholder="Mời Nhập Password" required/>
            <span class="focus-NhapTTAdminVGG"></span>
          </div>

          <div class="container-loginAdminVGG-form-btn">
            <button class="loginAdminVGG-btn" name="admin_login">Đăng Nhập</button>
          </div>
        </form>

        <div class="loginAdminVGG-gt">
          <div class="khungGT"></div>
            <h2 class="animate1">V Gaming Gear</h2>
            <h2 class="animate2">Nơi Bán Tất Cả Phụ Kiện</h2>
            <h2 class="animate3">Bán Các Dòng PC, Laptop</h2>
            <h2 class="animate4">Đạt Tiêu Chuẩn Quốc Tế</h2>
            <h2 class="animate5">
                <span>Mới Nhất.<br></span>
                <span>Phục Vụ Tận Tình Nhất.<br></span>
                <span>Tư Vấn Chuyên Nghiệp Nhất.</span>
            </h2>
        </div>
      </div>
    </div>
  </div>

  <script src="./PluginsDung/animsition/js/animsition.min.js"></script>
  <script src="./PluginsDung/jquery/jquery.min.js"></script>
  <script src="./PluginsDung/jquery/jquery.min.js"></script>
  <script src="./PluginsDung/jquery-ui/jquery-ui.min.js"></script>
  <script src="./PluginsDung/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./PluginsDung/jquery-knob/jquery.knob.min.js"></script>

  <script src="./TongHopJS/LoginCuaAdmin.js"></script>
</body>

</html>

<?php
	if (isset($_POST['admin_login'])) {

		$admin_tk = mysqli_real_escape_string($con, $_POST['admin_tk']);

		$admin_pass = mysqli_real_escape_string($con, $_POST['admin_pass']);

		$get_admin = "select * from admin where Tai_khoan = '$admin_tk' AND Mat_khau = '$admin_pass'";

		$run_admin = mysqli_query($con, $get_admin);

		$count = mysqli_num_rows($run_admin);

		if( $count==1){

			$row_email_admin = mysqli_fetch_array($run_admin);

			$admin_email = $row_email_admin['Email'];

			$_SESSION['admin_email'] = $admin_email;

			echo "<script>alert('Đăng Nhập Thành Công. Chào Mừng Admin: $admin_email')</script>";

			echo "<script>window.open('TrangChuChinh.php?TrangChu', '_self')</script>";

		}else{

			echo "<script>alert('Đăng Nhập Thất Bại. Bạn Nên Kiểm Tra Mật Khẩu Và Tài Khoản Nhé!')</script>";

		}

	}

?>