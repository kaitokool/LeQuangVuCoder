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
                    <h1 class="m-0 text-dark">Trang Chủ / Xem Thông Tin Nhân Viên</h1>
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
                <h3 class="card-title">Xem Thông Tin Nhân Viên</h3>
            </div>
            <!-- Kết Thúc Tạo header -->

            <!-- Bắt Đầu Tạo Body-->
            <div class="card-body">

                <table class="table table-striped table-bordered table-hover">

                    <thead>

                        <tr>

                            <th>STT</th>
                            <th>Tên Nhân Viên</th>
                            <th>Số Điện Thoại</th>
                            <th>Tên Chức Vụ</th>
                            <th>Lương Cơ Bản</th>
                            <th>Tài Khoản</th>
                            <th>Chỉnh Sửa</th>
                            <th>Xóa</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php

                        $i = 0;

                        $get_nv = "select * from staff, staff_in_company, position where staff.Ma_NV = staff_in_company.Ma_NV and staff_in_company.Ma_CV = position.Ma_CV";

                        $run_nv = mysqli_query($con, $get_nv);

                        while ($row_nv = mysqli_fetch_array($run_nv)) {

                            $Ma_NV = $row_nv['Ma_NV'];

                            $Ten_NV = $row_nv['Ten_NV'];

                            $SDT = $row_nv['SDT'];

                            $TK = $row_nv['TK'];

                            $Ten_CV = $row_nv['Ten_CV'];

                            $Luong_co_ban = $row_nv['Luong_co_ban'];

                            $i++;

                        ?>

                            <tr>

                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $Ten_NV; ?> </td>
                                <td> <?php echo $SDT; ?></td>
                                <td> <?php echo $Ten_CV; ?> </td>
                                <td> <?php echo $Luong_co_ban; ?> VNĐ</td>
                                <td> <?php echo $TK; ?> </td>
                                <td>

                                    <a href="TrangChuChinh.php?SuaNhanVien=<?php echo $Ma_NV; ?>">

                                        <i class="fas fa-edit"></i> Chỉnh Sửa

                                    </a>

                                </td>
                                <td>

                                    <a href="TrangChuChinh.php?XoaNhanVien=<?php echo $Ma_NV; ?>">

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