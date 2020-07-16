<?php

session_start();
include("DatabaseChinh/database.php");

if (!isset($_SESSION['admin_email'])) {

  echo "<script>window.open('./LoginCuaAdmin.php', '_self')</script>";
  
} else {

  $admin_session = $_SESSION['admin_email'];

  $get_admin = "select * from admin where Email = '$admin_session'";

  $run_admin = mysqli_query($con, $get_admin);

  $row_admin = mysqli_fetch_array($run_admin);

  $Ma_ad = $row_admin['Ma_ad'];

  $Ten_ad = $row_admin['Ten_ad'];

  $Email = $row_admin['Email'];

  $Dia_chi = $row_admin['Dia_chi'];

  $Hinh_anh = $row_admin['Hinh_anh'];

  $Gioi_thieu = $row_admin['Gioi_thieu'];

  $Cong_viec = $row_admin['Cong_viec'];

  $get_products = "select * from product";

  $run_products = mysqli_query($con, $get_products);

  $count_products = mysqli_num_rows($run_products);

  $get_customers = "select * from customer";

  $run_customers = mysqli_query($con, $get_customers);

  $count_customers = mysqli_num_rows($run_customers);

  $get_product_cat = "select * from category_product";

  $run_product_cat = mysqli_query($con, $get_product_cat);

  $count_product_cat = mysqli_num_rows($run_product_cat);

  $get_pending_orders = "select * from pending_order";

  $run_pending_orders = mysqli_query($con, $get_pending_orders);

  $count_pending_orders = mysqli_num_rows($run_pending_orders);

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

    <link type="text/css" rel="stylesheet" href="./TongHopCss/TrangChuChinhCss.css">
  </head>

  <body class="hold-transition sidebar-mini layout-fixed">

    <!-- Bắt Đầu Tạo Cấu Trúc Và Giao Diện  Toàn Bài-->
    <div class="wrapper">
      <!-- Tao Giao Dien Header-->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="TrangChuChinh.php?TrangChu" class="nav-link">Trang Chủ</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">

          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="">
              <i class="far pe-7s-bell pe-2x pe-va"></i>
              <span class="badge badge-warning navbar-badge">16</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-item dropdown-header">Thông Báo</span>
              <div class="dropdown-divider"></div>
              <a href="" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> 5 Tin Nhắn Mới
                <span class="float-right text-muted text-sm">3 Phút</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 Khách Hàng
                <span class="float-right text-muted text-sm">12 Tiếng</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 Báo Cáo Mới
                <span class="float-right text-muted text-sm">2 Ngày</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="" class="dropdown-item dropdown-footer">Xem Thông Tin</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="" role="button">
              <i class="fas pe-7s-config pe-spin pe-2x pe-va"></i>
            </a>
          </li>

        </ul>

      </nav>
      <!-- Kết Thúc Tạo Giao Dien Header-->

      <!-- Tạo Giao Dien Mục Chọn Chức Năng-->
      <aside class="main-sidebar sidebar-dark-blue-grey-darken-4 elevation-4">

        <!-- Tạo Logo-->
        <a href="TrangChuChinh.php?TrangChu" class="brand-link">
          <i class="fas pe-7s-science pe-spin pe-2x pe-va"></i>
          <span class="brand-text font-weight-light">V Gaming Gear</span>
        </a>
        <!-- Kết Thúc Tạo Logo-->

        <!-- Tạo Mục Chức Năng slidebar của boostrap 4-->
        <div class="sidebar">

          <!-- Tạo Panel Người Dùng-->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="./ImageAdmin/admin_image_1.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="" class="d-block"> Lê Quang Vũ</a>
            </div>
          </div>
          <!-- Kết Thúc Tạo Panel Người Dùng-->

          <!-- Tạo Phân Vùng layout Của Boostrap 4-->
          <nav class="mt-2">

            <!-- Tạo Khung Nav Chứa Chức Năng-->
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

              <!-- Tạo Nav Node Header Trang Chủ-->
              <li class="nav-header">Trang Chủ</li>
              <!-- Kết Thúc Tạo Nav Node Header Trang Chủ-->

              <!-- Tạo Nav-item Trang Chủ Admin-->
              <li class="nav-item">
                <a href="TrangChuChinh.php?TrangChu" class="nav-link ac">
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                    Trang Chủ
                  </p>
                </a>
              </li>
              <!-- Kết Thúc Tạo Nav-item Trang Chủ Admin-->

              <!-- Tạo Nav Node Header Sản Phẩm-->
              <li class="nav-header">Sản Phẩm</li>
              <!-- Kết Thúc Tạo Nav Node Header Sản Phẩm-->

              <!-- Tạo Nav-item Sản Phẩm-->
              <li class="nav-item has-treeview">
                <a href="" class="nav-link ac">
                  <i class="nav-icon fab fa-product-hunt"></i>
                  <p>
                    Sản Phẩm
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>

                <!-- Tạo Nav Node Treeview Sản Phẩm-->
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="TrangChuChinh.php?ThemSanPham" class="nav-link ac">
                      <i class="nav-icon fas fa-biohazard pe-spin"></i>
                      <p>Thêm Sản Phẩm</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="TrangChuChinh.php?XemSanPham" class="nav-link ac">
                      <i class="nav-icon fas fa-biohazard pe-spin"></i>
                      <p>Xem Sản Phẩm</p>
                    </a>
                  </li>
                </ul>
                <!-- Kết Thúc Tạo Nav Node Treeview Sản Phẩm-->

              </li>
              <!-- Kết Thúc Tạo Nav-item Sản Phẩm-->

              <!-- Tạo Nav Node Header Thể Loại-->
              <li class="nav-header">Thể Loại Sản Phẩm</li>
              <!-- Kết Thúc Tạo Nav Node Header Thể Loại-->

              <!-- Tạo Nav-item Thể Loại-->
              <li class="nav-item has-treeview">
                <a href="" class="nav-link ac">
                  <i class="nav-icon fab fa-elementor"></i>
                  <p>
                    Mục Thể Loại
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>

                <!-- Tạo Nav Node Treeview Thể Loại-->
                <ul class="nav nav-treeview">

                  <!-- Tạo Nav Node Thể Loại Riêng-->
                  <li class="nav-item has-treeview">
                    <a href="" class="nav-link ac">
                      <i class="nav-icon fas fa-biohazard pe-spin"></i>
                      <p>
                        Sản Phẩm: Riêng
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="TrangChuChinh.php?ThemTheLoai" class="nav-link ac">
                          <i class="nav-icon fab fa-affiliatetheme pe-spin"></i>
                          <p>Thêm Thể Loại</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="TrangChuChinh.php?XemTheLoai" class="nav-link ac">
                          <i class="nav-icon fab fa-affiliatetheme pe-spin"></i>
                          <p>Xem Thể Loại</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Kết Thúc Tạo Nav Node Thể Loại Riêng-->

                  <!-- Tạo Nav Node Thể Loại Chung-->
                  <li class="nav-item has-treeview">
                    <a href="" class="nav-link ac">
                      <i class="nav-icon fas fa-biohazard pe-spin"></i>
                      <p>
                        Sản Phẩm: Chung
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="TrangChuChinh.php?ThemLoai" class="nav-link ac">
                          <i class="nav-icon fab fa-affiliatetheme pe-spin"></i>
                          <p>Thêm Loại</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="TrangChuChinh.php?XemLoai" class="nav-link ac">
                          <i class="nav-icon fab fa-affiliatetheme pe-spin"></i>
                          <p>Xem Loại</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Kết Thúc Tạo Nav Node Thể Loại Chung-->

                </ul>
                <!-- Kết Thúc Tạo Nav Node Treeview Thể Loại-->

              </li>
              <!-- Kết Thúc Tạo Nav-item Thể Loại-->

              <!-- Tạo Nav Node Header Khách Hàng-->
              <li class="nav-header">Khách Hàng</li>
              <!-- Kết Thúc Tạo Nav Node Header Khách Hàng-->

              <!-- Tạo Nav-item Khách Hàng-->
              <li class="nav-item">
                <a href="TrangChuChinh.php?XemTTKhachHang" class="nav-link ac">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Thông Tin Khách Hàng
                  </p>
                </a>
              </li>
              <!-- Kết Thúc Tạo Nav-item Khách Hàng-->

              <!-- Tạo Nav Node Header Thông Tin Đặt Hàng-->
              <li class="nav-header">Thanh Toán</li>
              <!-- Kết Thúc Tạo Nav Node Header Thông Tin Đặt Hàng-->

              <!-- Tạo Nav-item Thông Tin Đặt Hàng-->
              <li class="nav-item">
                <a href="TrangChuChinh.php?XemTTThanhToan" class="nav-link ac">
                  <i class="nav-icon fas fa-money-check-alt"></i>
                  <p>
                    Thông Tin Đã Thanh Toán
                  </p>
                </a>
              </li>
              <!-- Kết Thúc Tạo Nav-item Thông Tin Đặt Hàng-->

              <!-- Tạo Nav Node Header Nhân Viên-->
              <li class="nav-header">Nhân Viên</li>
              <!-- Kết Thúc Tạo Nav Node Header Nhân Viêng-->

              <!-- Tạo Nav-item Nhân Viên-->
              <li class="nav-item has-treeview">
                <a href="" class="nav-link ac">
                  <i class="nav-icon fas fa-user-tie"></i>
                  <p>
                    Nhân Viên
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>

                <!-- Tạo Nav Node Treeview Nhân Viên-->
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="TrangChuChinh.php?ThemNhanVien" class="nav-link ac">
                      <i class="nav-icon fas fa-biohazard pe-spin"></i>
                      <p>Thêm Nhân Viên</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="TrangChuChinh.php?XemNhanVien" class="nav-link ac">
                      <i class="nav-icon fas fa-biohazard pe-spin"></i>
                      <p>Xem Nhân Viên</p>
                    </a>
                  </li>
                </ul>
                <!-- Kết Thúc Tạo Nav Node Treeview Nhân Viên-->

              </li>
              <!-- Kết Thúc Tạo Nav-item Nhân Viên-->

              <!-- Tạo Nav Node Header Nhà Cung Cấp-->
              <li class="nav-header">Nhà Cung Cấp</li>
              <!-- Kết Thúc Tạo Nav Node Header Nhà Cung Cấp-->

              <!-- Tạo Nav-item Nhà Cung Cấp-->
              <li class="nav-item has-treeview">
                <a href="" class="nav-link ac">
                  <i class="nav-icon fas fa-hands-helping"></i>
                  <p>
                    Nhà Cung Cấp
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>

                <!-- Tạo Nav Node Treeview Nhà Cung Cấp-->
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="TrangChuChinh.php?ThemNCC" class="nav-link ac">
                      <i class="nav-icon fas fa-biohazard pe-spin"></i>
                      <p>Thêm Nhà Cung Cấp</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="TrangChuChinh.php?XemNCC" class="nav-link ac">
                      <i class="nav-icon fas fa-biohazard pe-spin"></i>
                      <p>Xem Nhà Cung Cấp</p>
                    </a>
                  </li>
                </ul>
                <!-- Kết Thúc Tạo Nav Node Treeview Nhà Cung Cấp-->

              </li>
              <!-- Kết Thúc Tạo Nav-item Nhà Cung Cấp-->

              <!-- Tạo Nav Node Header Chức Năng-->
              <li class="nav-header">Chức Năng</li>
              <!-- Kết Thúc Tạo Nav Node Header Chức Năng-->

              <!-- Tạo Nav-item Chức Năng-->
              <li class="nav-item">
                <a href="./LogoutCuaAdmin.php" class="nav-link">
                  <i class="nav-icon fas fa-sign-out-alt"></i>
                  <p>
                    Đăng Xuất
                  </p>
                </a>
              </li>
              <!-- Kết Thúc Tạo Nav-item Chức Năng-->

              <li class="Padded-bar">
                <p></p>
              </li>

            </ul>
            <!-- Kết Thúc Tạo Nav Chứa Chức Năng-->

          </nav>
          <!-- Kết Thúc Tạo Phân Vùng layout Của Boostrap 4-->

        </div>
        <!-- Kết Thúc Tạo Mục Chức Năng slidebar của boostrap 4-->

      </aside>
      <!-- Kết Thúc Tạo Giao Dien Mục Chọn Chức Năng-->

      <!-- Tạo Khung Chứa content-wrapper boostrap 4-->
      <div class="content-wrapper">
        <?php

        if (isset($_GET['TrangChu'])) {
          include("./TongHopTrangQuanLy/WrapperTrangChuChinh.php");
        }
        if (isset($_GET['ThemSanPham'])) {
          include("./TongHopTrangQuanLy/Wrapper1ThemSanPham.php");
        }
        if (isset($_GET['XemSanPham'])) {
          include("./TongHopTrangQuanLy/Wrapper1XemSanPham.php");
        }
        if (isset($_GET['SuaSanPham'])) {
          include("./TongHopTrangQuanLy/Wrapper1SuaSanPham.php");
        }
        if (isset($_GET['XoaSanPham'])) {
          include("./PhuongThucSuDung.php");
        }
        if (isset($_GET['ThemTheLoai'])) {
          include("./TongHopTrangQuanLy/Wrapper2ThemTheLoai.php");
        }
        if (isset($_GET['XemTheLoai'])) {
          include("./TongHopTrangQuanLy/Wrapper2XemTheLoai.php");
        }
        if (isset($_GET['SuaTheLoai'])) {
          include("./TongHopTrangQuanLy/Wrapper2SuaTheLoai.php");
        }
        if (isset($_GET['XoaTheLoai'])) {
          include("./PhuongThucSuDung.php");
        }
        if (isset($_GET['ThemLoai'])) {
          include("./TongHopTrangQuanLy/Wrapper3ThemLoai.php");
        }
        if (isset($_GET['XemLoai'])) {
          include("./TongHopTrangQuanLy/Wrapper3XemLoai.php");
        }
        if (isset($_GET['SuaLoai'])) {
          include("./TongHopTrangQuanLy/Wrapper3SuaLoai.php");
        }
        if (isset($_GET['XoaLoai'])) {
          include("./PhuongThucSuDung.php");
        }
        if (isset($_GET['XemTTKhachHang'])) {
          include("./TongHopTrangQuanLy/Wrapper4XemTTKhachHang.php");
        }
        if (isset($_GET['XemTTThanhToan'])) {
          include("./TongHopTrangQuanLy/Wrapper5XemTTThanhToan.php");
        }
        if (isset($_GET['XoaTTThanhToan'])) {
          include("./PhuongThucSuDung.php");
        }
        if (isset($_GET['ThemNhanVien'])) {
          include("./TongHopTrangQuanLy/Wrapper6ThemNhanVien.php");
        }
        if (isset($_GET['SuaNhanVien'])) {
          include("./TongHopTrangQuanLy/Wrapper6SuaNhanVien.php");
        }
        if (isset($_GET['XemNhanVien'])) {
          include("./TongHopTrangQuanLy/Wrapper6XemNhanVien.php");
        }
        if (isset($_GET['XoaNhanVien'])) {
          include("./PhuongThucSuDung.php");
        }
        if (isset($_GET['ThemNCC'])) {
          include("./TongHopTrangQuanLy/Wrapper7ThemNCC.php");
        }
        if (isset($_GET['SuaNCC'])) {
          include("./TongHopTrangQuanLy/Wrapper7SuaNCC.php");
        }
        if (isset($_GET['XemNCC'])) {
          include("./TongHopTrangQuanLy/Wrapper7XemNCC.php");
        }
        if (isset($_GET['XoaNCC'])) {
          include("./PhuongThucSuDung.php");
        }
        ?>
      </div>
      <!-- Kết Thúc tạo content-wrapper boostrap 4-->

      <aside class="control-sidebar control-sidebar-dark"></aside><!-- Tạo Đường Dẫn Đến Cài Đặt Giao Diện-->

    </div>
    <!-- Kết Thúc Tạo Cấu Trúc Và Giao Diện Toàn Bài-->

    <script src="./PluginsDung/jquery/jquery.min.js"></script>
    <script src="./PluginsDung/jquery-ui/jquery-ui.min.js"></script>
    <script src="./PluginsDung/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./PluginsDung/jquery-knob/jquery.knob.min.js"></script>
    <script src="./PluginsDung/summernote/summernote-bs4.min.js"></script>
    <script src="./PluginsDung/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="./PluginsDung/tinymce/tinymce.min.js"></script>

    <script type="text/javascript">
      $(function() {
        $('.textarea').summernote()
      })
    </script>
    <script>
      $(document).ready(function() {
        $('.ac').click(function() {
          $('.ac').removeClass('active');
          $(this).addClass('active');
        });
      });
    </script>
    <script src="./TongHopJS/TrangChuChinhJS.js"></script>
    <script src="./TongHopJS/TrangChuChinhSetting.js"></script>

  </body>

  </html>

  <?php include("PhuongThucSuDung.php"); ?>

<?php } ?>