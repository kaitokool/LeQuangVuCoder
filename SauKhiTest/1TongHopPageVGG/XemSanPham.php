<?php
  session_start();
  include("../Admin/DatabaseChinh/database.php");
	if (!isset($_SESSION['customer_email'])) {

		echo "<script>window.open('../VGG.php', '_self')</script>";

	}else{
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V Gaming Gear</title>
    <link rel="shortcut icon" href="./ImageAdmin/img.png" type="image/x-icon">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="./PluginsDung/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="./PluginsDung/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="./PluginsDung/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="./PluginsDung/IconFont7s/pe-icon-7-stroke/css/helper.css">
    <link rel="stylesheet" href="./PluginsDung/IconFont7s/pe-icon-7-stroke/css/pe-icon-7-stroke.css">

    <link type="text/css" rel="stylesheet" href="../Admin/TongHopCss/TrangChuChinhCss.css">
  </head>

  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="container card">

      <div class="card-header">
        <h3 class="card-title">Xem Sản Phẩm</h3>
      </div>

      <div class="card-body">
        <table class="table table-striped table-bordered table-hover">

          <thead>

            <tr>

              <th>Mã SP</th>
              <th>Tên SP</th>
              <th>Giá</th>
              <th>Hình Ảnh</th>
              <th>Mua Sản Phẩm</th>

            </tr>

          </thead>

          <tbody>

            <?php

            $get_products = "select * from product";

            $run_products = mysqli_query($con, $get_products);

            while ($row_products = mysqli_fetch_array($run_products)) {

              $Ma_SP = $row_products['Ma_SP'];

              $Ten_SP = $row_products['Ten_SP'];

              $Gia = $row_products['Gia'];

              $Hinh_anh = $row_products['Hinh_anh'];

              $Mo_ta = $row_products['Mo_ta'];

              $Key_word = $row_products['Key_word'];

            ?>

              <tr>

                <td> <?php echo $Ma_SP; ?> </td>
                <td> <?php echo $Ten_SP; ?> </td>
                <td> <?php echo $Gia; ?> VNĐ </td>
                <td> <img src="../Admin/ImageProduct/<?php echo $Hinh_anh ?>" width="60" height="60"></td>
                <td>

                  <a href="XemSanPham.php?MuaSanPham=<?php echo $Ma_SP; ?>">

                    <i class="fas fa-edit"></i> Mua

                  </a>

                </td>

              </tr>

            <?php } ?>

          </tbody>

        </table>

      </div>

    </div>

    <?php
      if (isset($_GET['MuaSanPham'])) {

        $date = date("d/m/Y");

        $so = rand(1, 1000000);

        $refran = rand(1, 1000000);

        $racode = rand(1, 1000000);

        $muaid = $_GET['MuaSanPham'];

        $get_products = "select * from product where Ma_SP = '$muaid'";

        $run_products = mysqli_query($con, $get_products);

        $count_products = mysqli_fetch_array($run_products);

        $Ma_SP  = $count_products['Ma_SP'];

        $Gia = $count_products['Gia'];

        $muapayments = "insert into payments (invoice_no, amount, payment_mode, ref_no, code, date, Ma_SP) 
                        values ('$so', '$Gia', 'Visa Card', $refran, '$racode', '$date', '$Ma_SP')";

        $run_muapayments = mysqli_query($con, $muapayments);

        if ($run_muapayments) {

          echo "<script>alert('Bạn Đã Mua Thành Công :))')</script>";

          echo "<script>window.open('./XemSanPham.php', '_self')</script>";

        }

      }
    ?>

    <script src="./PluginsDung/jquery/jquery.min.js"></script>
    <script src="./PluginsDung/jquery-ui/jquery-ui.min.js"></script>
    <script src="./PluginsDung/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./PluginsDung/jquery-knob/jquery.knob.min.js"></script>
    <script src="./PluginsDung/summernote/summernote-bs4.min.js"></script>
    <script src="./PluginsDung/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="./PluginsDung/tinymce/tinymce.min.js"></script>

  </body>

  </html>

<?php }?>