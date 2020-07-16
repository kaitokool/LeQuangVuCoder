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
                    <h1 class="m-0 text-dark">Trang Chủ / Xem Loại Sản Phẩm</h1>
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
                <h3 class="card-title">Xem Loại Sản Phẩm</h3>
            </div>
            <!-- Kết Thúc Tạo header -->

            <!-- Bắt Đầu Tạo Body-->
            <div class="card-body">

                <table class="table table-hover table-striped table-bordered">

                    <thead>

                        <tr>

                            <th> ID Thể Loại</th>
                            <th> Tiêu Đề Thể Loại</th>
                            <th> Mô Tả Thể Loại</th>
                            <th> Chỉnh Sửa Thể Loại</th>
                            <th> Xóa Thể Loại</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php

                        $i = 0;

                        $get_cats = "select * from category";

                        $run_cats = mysqli_query($con, $get_cats);

                        while ($row_cats = mysqli_fetch_array($run_cats)) {

                            $Ma_TL = $row_cats['Ma_TL'];

                            $Ten_TL = $row_cats['Ten_TL'];

                            $Mo_Ta_Cat = $row_cats['Mo_Ta_Cat'];

                            $i++;


                        ?>

                            <tr>

                                <td> <?php echo $i; ?></td>
                                <td> <?php echo $Ten_TL; ?></td>
                                <td width="300" height="50"> <?php echo $Mo_Ta_Cat; ?></td>
                                <td>

                                    <a href="TrangChuChinh.php?SuaLoai=<?php echo $Ma_TL ?>">

                                        <i class="fas fa-edit"></i> Chỉnh Sửa

                                    </a>

                                </td>
                                <td>

                                    <a href="TrangChuChinh.php?XoaLoai=<?php echo $Ma_TL ?>">

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