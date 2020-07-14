<?php
$i = 1;
if ($i == 1) {
?>
    <!-- Bắt Đầu Tạo Header container-fluid -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Trang Chủ / Xem Thông Tin Khách Hàng</h1>
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
                <h3 class="card-title">Xem Thông Tin Khách Hàng</h3>
            </div>
            <!-- Kết Thúc Tạo header -->

            <!-- Bắt Đầu Tạo Body-->
            <div class="card-body">

                <table class="table table-striped table-bordered table-hover">

                    <thead>

                        <tr>

                            <th>STT</th>
                            <th>Hình Ảnh</th>
                            <th>Tên Khách Hàng</th>
                            <th>Email Khách hàng</th>
                            <th>Địa Chỉ Của Khách hàng</th>
                            <th>Số Điện Thoại</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php

                        $i = 0;

                        $get_customer = "select * from customer";

                        $run_customer = mysqli_query($con, $get_customer);

                        while ($row_customer = mysqli_fetch_array($run_customer)) {

                            $Ma_KH = $row_customer['Ma_KH'];

                            $Ten_KH = $row_customer['Ten_KH'];

                            $Email = $row_customer['Email'];

                            $Hinh_anh = $row_customer['Hinh_anh'];

                            $Dia_chi = $row_customer['Dia_chi'];

                            $SDT = $row_customer['SDT'];

                            $i++;

                        ?>

                            <tr>

                                <td> <?php echo $i; ?> </td>
                                <td> <img src="../KhachHang/Image_KhachHang/<?php echo $Hinh_anh ?>" width="120" height="100"></td>
                                <td> <?php echo $Ten_KH; ?> </td>
                                <td> <?php echo $Email; ?></td>
                                <td> <?php echo $Dia_chi; ?> </td>
                                <td> <?php echo $SDT; ?> </td>

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