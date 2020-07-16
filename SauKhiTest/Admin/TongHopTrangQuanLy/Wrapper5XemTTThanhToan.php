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
                    <h1 class="m-0 text-dark">Trang Chủ / Xem Thông Tin Thanh Toán</h1>
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
                <h3 class="card-title">Xem Thông Tin Thanh Toán</h3>
            </div>
            <!-- Kết Thúc Tạo header -->

            <!-- Bắt Đầu Tạo Body-->
            <div class="card-body">

                <table class="table table-striped table-bordered table-hover">

                    <thead>

                        <tr>

                            <th> ID</th>
                            <th> Invoice No</th>
                            <th> Tiền</th>
                            <th> Phương Thức Thanh Toán</th>
                            <th> Tham Số Thanh Toán</th>
                            <th> Mã Code</th>
                            <th> Ngày Thanh Toán</th>
                            <th> Xóa</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php

                        $i = 0;

                        $get_payments = "select * from payments";

                        $run_payments = mysqli_query($con, $get_payments);

                        while ($row_payments = mysqli_fetch_array($run_payments)) {

                            $Ma_ngan_hang = $row_payments['Ma_ngan_hang'];

                            $invoice_no = $row_payments['invoice_no'];

                            $amount = $row_payments['amount'];

                            $payment_mode = $row_payments['payment_mode'];

                            $ref_no = $row_payments['ref_no'];

                            $code = $row_payments['code'];

                            $date = $row_payments['date'];

                            $i++;

                        ?>

                            <tr class="edit-text-center">

                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $invoice_no; ?></td>
                                <td> <?php echo $amount; ?> </td>
                                <td> <?php echo $payment_mode; ?></td>
                                <td> <?php echo $ref_no; ?> </td>
                                <td> <?php echo $code; ?> </td>
                                <td> <?php echo $date; ?> VNĐ</td>
                                <td>

                                    <a href="TrangChuChinh.php?XoaTTKhachHang=<?php echo $Ma_ngan_hang; ?>">

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