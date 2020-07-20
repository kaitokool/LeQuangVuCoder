<?php
session_start();
include("../Admin/DatabaseChinh/database.php");
if (!isset($_SESSION['customer_email'])) {

  echo "<script>window.open('../LoginVGG.php', '_self')</script>";

}else{
$db = mysqli_connect("localhost", "root", "", "btl");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>V Gaming Gear</title>
  <link rel="shortcut icon" href="../Admin/ImageAdmin/img.png" type="image/x-icon">

  <link rel="stylesheet" href="../1PluginDung/bootstrap/styles/bootstrap-337.min.css">
  <link rel="stylesheet" href="../1PluginDung/bootstrap/font-awsome/css/font-awesome.min.css">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
  <link rel="stylesheet" href="../Admin/PluginsDung/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../Admin/PluginsDung/IconFont7s/pe-icon-7-stroke/css/helper.css">
  <link rel="stylesheet" href="../Admin/PluginsDung/IconFont7s/pe-icon-7-stroke/css/pe-icon-7-stroke.css">

  <link type="text/css" rel="stylesheet" href="../1TongHopCssTCVGG/XemSanPham.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div id="content">
    <div class="container-fluid">
      <div class="col-md-12">

        <ul class="breadcrumb">
          <li>
            <a href="../VGG.php" title="">Trang Chủ</a>
          </li>
          <li>
            Sản Phẩm
          </li>
        </ul>

      </div>

      <div class="col-md-3">

        <div class="panel panel-default sidebar-menu">
          <div class="panel-heading">
            <h3 class="panel-title">Thể Loại Sản Phẩm</h3>
          </div>

          <div class="panel-body">
            <ul class="nav nav-pills nav-stacked category-menu">

              <?php
              global $db;

              $get_p_cs = "select * from category_product";

              $run_p_cs = mysqli_query($db, $get_p_cs);

              while ($row_p_cs = mysqli_fetch_array($run_p_cs)) {

                $Ma_CTSP = $row_p_cs['Ma_CTSP'];

                $Ten_CTSP = $row_p_cs['Ten_CTSP'];

                echo "<li><a href='XemSanPham.php?p_cat=$Ma_CTSP'>$Ten_CTSP</a></li>";
              }
              ?>

            </ul>
          </div>

        </div>

        <div class="panel panel-default sidebar-menu">
          <div class="panel-heading">
            <h3 class="panel-title">Thể Loại</h3>
          </div>

          <div class="panel-body">
            <ul class="nav nav-pills nav-stacked category-menu">

              <?php
              global $db;

              $get_cs = "select * from category";

              $run_cs = mysqli_query($db, $get_cs);

              while ($row_cs = mysqli_fetch_array($run_cs)) {

                $Ma_TL = $row_cs['Ma_TL'];

                $Ten_TL = $row_cs['Ten_TL'];

                echo "<li><a href='XemSanPham.php?cat=$Ma_TL'>$Ten_TL</a></li>";
              }
              ?>

            </ul>
          </div>

        </div>

      </div>

      <div class="col-md-9">

        <?php

        if (!isset($_GET['p_cat'])) {

          if (!isset($_GET['cat'])) {

            echo "<div class='box'><h1>Sản Phẩm</h1><p>Sản Phẩm Hàng Đầu Chất Lượng</p></div>";
          }
        }

        ?>

        <div class="row">

          <?php

          if (!isset($_GET['p_cat'])) {

            if (!isset($_GET['cat'])) {

              $per_page = 6;

              if (isset($_GET['page'])) {

                $page = $_GET['page'];
              } else {

                $page = 1;
              }
              $start_from = ($page - 1) * $per_page;

              $get_products = "select * from product order by 1 DESC LIMIT $start_from,$per_page";

              $run_products = mysqli_query($con, $get_products);

              while ($row_products = mysqli_fetch_array($run_products)) {

                $Ma_SP = $row_products['Ma_SP'];

                $Ten_SP = $row_products['Ten_SP'];

                $Gia = $row_products['Gia'];

                $Hinh_anh = $row_products['Hinh_anh'];

                echo "

                  <div class='col-md-4 col-sm-6 center-responsive'>

                    <div class='product'>

                      <a href='XemSanPham.php?MuaSanPham=$Ma_SP'>

                        <img class='img-responsive' src='../Admin/ImageProduct/$Hinh_anh'>

                      </a>

                      <div class='text'>

                      <h3><a href='XemSanPham.php?MuaSanPham=$Ma_SP'> $Ten_SP </a></h3>

                      <p class='price'> $Gia VNĐ</p>

                      <p class='buttons'>

                        <a class='btn btn-primary' href='XemSanPham.php?MuaSanPham=$Ma_SP'>

                          <i class='fa fa-shopping-cart'></i> Mua

                        </a>

                      </p>

                    </div>

                  </div>

                </div>

                ";
              }

          ?>

        </div>

        <center>
          <ul class="pagination">
        <?php

              $query = "select * from product";

              $result = mysqli_query($con, $query);

              $total_records = mysqli_num_rows($result);

              $total_pages = ceil($total_records / $per_page);

              echo "<li><a href='XemSanPham.php?page=1'>" . 'Trang Đầu' . "</a></li>";

              for ($i = 1; $i <= $total_pages; $i++) {

                echo "<li><a href='XemSanPham.php?page=" . $i . "'>" . $i . "</a></li>";
              };

              echo "<li><a href='XemSanPham.php?page=$total_pages'>" . 'Trang Cuối' . "</a></li>";
            }
          }

        ?>


          </ul>
        </center>
        <?php

        global $db;

        if (isset($_GET['p_cat'])) {

          $Ma_CTSP = $_GET['p_cat'];

          $get_p_c = "select *from category_product where Ma_CTSP='$Ma_CTSP'";

          $run_p_c = mysqli_query($db, $get_p_c);

          $row_p_c = mysqli_fetch_array($run_p_c);

          $Ten_CTSP = $row_p_c['Ten_CTSP'];

          $get_products = "select * from product where Ma_CTSP='$Ma_CTSP'";

          $run_products = mysqli_query($db, $get_products);

          $count = mysqli_num_rows($run_products);

          if ($count == 0) {

            echo "

              <div class='box'>

                <h1> Sản phẩm đã hết hàng </h1>

              </div>

            ";
          } else {

            echo "

              <div class='box'>

                <h1> $Ten_CTSP </h1>

              </div>

            ";
          }

          while ($row_products = mysqli_fetch_array($run_products)) {

            $Ma_SP = $row_products['Ma_SP'];

            $Ten_SP = $row_products['Ten_SP'];

            $Gia = $row_products['Gia'];

            $Hinh_anh = $row_products['Hinh_anh'];

            echo "

              <div class='col-md-4 col-sm-6 center-responsive'>

                <div class='product'>

                  <a href='XemSanPham.php?MuaSanPham=$Ma_SP'>

                    <img class='img-responsive' src='../Admin/ImageProduct/$Hinh_anh'>

                  </a>

                <div class='text'>

                    <h3>

                      <a href='XemSanPham.php?MuaSanPham=$Ma_SP'>$Ten_SP</a>

                    </h3>

                    <p class='price'>$Gia VNĐ</p>

                    <p class='buttons'>

                      <a class='btn btn-primary' href='XemSanPham.php?MuaSanPham=$Ma_SP'>

                        <i class='fa fa-shopping-cart'></i> Mua

                      </a>

                    </p>

                  </div>

                </div>

              </div>

            ";
          }
        }

        global $db;

        if (isset($_GET['cat'])) {

          $Ma_TL = $_GET['cat'];

          $get_cat = "select * from category where Ma_TL='$Ma_TL'";

          $run_cat = mysqli_query($db, $get_cat);

          $row_cat = mysqli_fetch_array($run_cat);

          $Ten_TL = $row_cat['Ten_TL'];

          $get_cat = "select * from category_product, product where category_product.Ma_CTSP=product.Ma_CTSP and Ma_TL='$Ma_TL'";

          $run_products = mysqli_query($db, $get_cat);

          $count = mysqli_num_rows($run_products);

          if ($count == 0) {

            echo "

              <div class='box'>

                <h1> Sản Phẩm Hiện Tại Chưa Có Hàng. </h1>

              </div>

            ";
          } else {

            echo "

              <div class='box'>

                <h1> $Ten_TL </h1>

              </div>

            ";
          }

          while ($row_products = mysqli_fetch_array($run_products)) {

            $Ma_SP = $row_products['Ma_SP'];

            $Ten_SP = $row_products['Ten_SP'];

            $Gia = $row_products['Gia'];

            $Hinh_anh = $row_products['Hinh_anh'];

            echo "

 					  <div class='col-md-4 col-sm-6 center-responsive'>

                <div class='product'>

                  <a href='XemSanPham.php?MuaSanPham=$Ma_SP'>

								  <img class='img-responsive' src='../Admin/ImageProduct/$Hinh_anh'>

                </a>

                <div class='text'>

                <h3>

                  <a href='XemSanPham.php?MuaSanPham=$Ma_SP'>$Ten_SP</a>

                /h3>

                <p class='price'>

                  $Gia VNĐ

                </p>

                <p class='buttons'>

                  a class='btn btn-primary' href='XemSanPham.php?MuaSanPham=$Ma_SP'>

                    <i class='fa fa-shopping-cart'></i> Mua

                  </a>

                </p>

              </div>

            </div>

          </div>


				";
          }
        }

        ?>

      </div>

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

  <script src="./1PluginDung/bootstrap/js/jquery-331.min.js"></script>
  <script src="./1PluginDung/bootstrap/js/bootstrap-337.min.js"></script>

</body>

</html>

<?php }?>