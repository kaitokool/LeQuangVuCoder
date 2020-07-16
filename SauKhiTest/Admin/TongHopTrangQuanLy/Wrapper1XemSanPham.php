<?php

	if (!isset($_SESSION['admin_email'])) {

		echo "<script>window.open('./LoginCuaAdmin.php', '_self')</script>";

	}else{
?>
    <!-- Bắt Đầu Tạo Header container-fluid -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Trang Chủ / Xem Sản Phẩm</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Kết Thúc Tạo Header container-fluid -->

    <!-- Bắt Đầu Tạo Hàm Chứa Chính -->
    <section class="content">
        <div class="card">

            <!-- Bắt Đầu Tạo header -->
            <div class="card-header">
                <h3 class="card-title">Xem Sản Phẩm</h3>
            </div>
            <!-- Kết Thúc Tạo header -->

            <!-- Bắt Đầu Tạo Body-->
            <div class="card-body">
                <table class="table table-striped table-bordered table-hover">

                    <thead>

                        <tr>

                            <th>Mã SP</th>
                            <th>Tên SP</th>
                            <th>Giá</th>
                            <th>Hình Ảnh</th>
                            <th>SP Được Bán</th>
                            <th>Key Word</th>
                            <th>Chỉnh Sửa SP</th>
                            <th>Xóa</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php

                        $i = 0;

                        $get_products = "select * from product";

                        $run_products = mysqli_query($con, $get_products);

                        while ($row_products = mysqli_fetch_array($run_products)) {

                            $Ma_SP = $row_products['Ma_SP'];

                            $Ten_SP = $row_products['Ten_SP'];

                            $Gia = $row_products['Gia'];

                            $Hinh_anh = $row_products['Hinh_anh'];

                            $Mo_ta = $row_products['Mo_ta'];

                            $Key_word = $row_products['Key_word'];

                            $i++;

                        ?>

                            <tr>

                                <td> <?php echo $Ma_SP; ?> </td>
                                <td> <?php echo $Ten_SP; ?> </td>
                                <td> <?php echo $Gia; ?> VNĐ </td>
                                <td> <img src="ImageProduct/<?php echo $Hinh_anh ?>" width="60" height="60"></td>
                                <td>

                                    <?php

                                    $get_pending_orders = "select * from pending_order where Ma_SP='$Ma_SP'";

                                    $run_pending_orders = mysqli_query($con, $get_pending_orders);

                                    $count = mysqli_num_rows($run_pending_orders);

                                    echo $count;

                                    ?>

                                </td>
                                <td> <?php echo $Key_word; ?> </td>
                                <td>

                                    <a href="TrangChuChinh.php?SuaSanPham=<?php echo $Ma_SP; ?>">

                                        <i class="fas fa-edit"></i> Chỉnh Sửa

                                    </a>

                                </td>
                                <td>

                                    <a href="TrangChuChinh.php?XoaSanPham=<?php echo $Ma_SP; ?>">

                                        <i class="fas fa-trash-alt"></i> Xóa

                                    </a>

                                </td>

                            </tr>

                        <?php } ?>

                    </tbody>

                </table>
            </div>
            <!-- Kết Thúc Tạo Body -->

        </div>
    </section>
    <!-- Kết Thúc Tạo Hàm Chứa Chính -->
<?php } ?>