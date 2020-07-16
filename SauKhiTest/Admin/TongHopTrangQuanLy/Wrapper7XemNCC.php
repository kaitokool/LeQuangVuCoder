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
                    <h1 class="m-0 text-dark">Trang Chủ / Xem Thông Tin Nhà Cung Cấp</h1>
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
                <h3 class="card-title">Xem Thông Tin</h3>
            </div>
            <!-- Kết Thúc Tạo header -->

            <!-- Bắt Đầu Tạo Body-->
            <div class="card-body">
                <table class="table table-striped table-bordered table-hover">

                    <thead>

                        <tr>

                            <th>Mã NCC</th>
                            <th>Tên Hãng Cung Cấp</th>
                            <th>Người Đại Diện</th>
                            <th>Số Điện Thoại</th>
                            <th>Địa Chỉ</th>
                            <th>Chỉnh Sửa Thông Tin</th>
                            <th>Xóa Thông Tin</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php

                        $get_supplier = "select * from supplier";

                        $run_supplier = mysqli_query($con, $get_supplier);

                        while ($row_supplier = mysqli_fetch_array($run_supplier)) {

                            $Ma_NCC  = $row_supplier['Ma_NCC'];

                            $Ten_NCC = $row_supplier['Ten_NCC'];

                            $Nguoi_dai_dien = $row_supplier['Nguoi_dai_dien'];

                            $SDT = $row_supplier['SDT'];

                            $Dia_chi = $row_supplier['Dia_chi'];

                        ?>

                            <tr>

                                <td> <?php echo $Ma_NCC; ?> </td>
                                <td> <?php echo $Ten_NCC; ?> </td>
                                <td> <?php echo $Nguoi_dai_dien; ?> </td>
                                <td> <?php echo $SDT; ?> </td>
                                <td> <?php echo $Dia_chi; ?> </td>
                                <td>

                                    <a href="TrangChuChinh.php?SuaNCC=<?php echo $Ma_NCC; ?>">

                                        <i class="fas fa-edit"></i> Chỉnh Sửa

                                    </a>

                                </td>
                                <td>

                                    <a href="TrangChuChinh.php?XoaNCC=<?php echo $Ma_NCC; ?>">

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