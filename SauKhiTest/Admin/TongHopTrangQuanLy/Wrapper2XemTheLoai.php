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
                    <h1 class="m-0 text-dark">Trang Chủ / Xem Thể Loại Sản Phẩm</h1>
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
                <h3 class="card-title">Xem Thể Loại Sản Phẩm</h3>
            </div>
            <!-- Kết Thúc Tạo header -->

            <!-- Bắt Đầu Tạo Body-->
            <div class="card-body">

                <table class="table table-hover table-striped table-bordered">

                    <thead>

                        <tr>

                            <th> ID Thể Loại Sản Phẩm</th>
                            <th> Tiêu Đề Thể Loại Sản Phẩm</th>
                            <th> Mô Tả Thể Loại Sản Phẩm</th>
                            <th> Chỉnh Sửa Thể Loại Sản Phẩm</th>
                            <th> Xóa Thể Loại Sản Phẩm</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php

                        $i = 0;

                        $get_p_cats = "select * from category_product";

                        $run_p_cats = mysqli_query($con, $get_p_cats);

                        while ($row_p_cats = mysqli_fetch_array($run_p_cats)) {

                            $Ma_CTSP = $row_p_cats['Ma_CTSP'];

                            $Ten_CTSP = $row_p_cats['Ten_CTSP'];

                            $Mo_Ta = $row_p_cats['Mo_Ta'];

                            $i++;


                        ?>

                            <tr>

                                <td> <?php echo $i; ?></td>
                                <td> <?php echo $Ten_CTSP; ?></td>
                                <td width="300" height="50"> <?php echo $Mo_Ta; ?></td>
                                <td>

                                    <a href="TrangChuChinh.php?SuaTheLoai=<?php echo $Ma_CTSP ?>">

                                        <i class="fas fa-edit"></i> Chỉnh Sửa

                                    </a>

                                </td>
                                <td>

                                    <a href="TrangChuChinh.php?XoaTheLoai=<?php echo $Ma_CTSP ?>">

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