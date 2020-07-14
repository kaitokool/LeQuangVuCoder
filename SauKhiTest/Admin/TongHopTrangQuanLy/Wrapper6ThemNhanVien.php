<?php
$i = 1;
if ($i == 1) {
?>
    <!-- Bắt Đầu Tạo Header container-fluid -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Trang Chủ / Tuyển Thêm Nhân Viên</h1>
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
                <h3 class="card-title">Thêm Nhân Viên</h3>
            </div>
            <!-- Kết Thúc Tạo header -->

            <!-- Bắt Đầu Tạo Body-->
            <div class="card-body">

                <form class="form-horizontal" method="post" enctype="multipart/form-data">

                    <div class="form-group">

                        <label class="col-md-3 control-label"> Tên Nhân Viên </label>

                        <div class="col-md-6">

                            <input type="text" name="Ten_NV" class="form-control" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-3 control-label"> Số Điện Thoại Nhân Viên </label>

                        <div class="col-md-6">

                            <input type="text" name="SDT" class="form-control" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-3 control-label"> Tài Khoản (Tên Nhân Viên) và Mật Khẩu <br> Được Cài Mặc Định 123 Nhân Viên Có Thể ĐỔi </label>

                        <div class="col-md-6">

                            <input type="text" name="TK" class="form-control" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-3 control-label"> Chức Vụ Đảm Nhận </label>

                        <div class="col-md-6">

                            <select name="chucvu" class="form-control">
                                <option disabled selected> Chọn 1 Chức Vụ Cho Nhân Viên</option>

                                <?php

                                $get_cs = "select * from position";
                                $run_cs = mysqli_query($con, $get_cs);

                                while ($row_cs = mysqli_fetch_array($run_cs)) {

                                    $ma_cv = $row_cs['Ma_CV'];
                                    $t_cv = $row_cs['Ten_CV'];

                                    echo "

                                    <option value='$ma_cv'> $t_cv</option>

                                    ";
                                }

                                ?>

                            </select>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-3 control-label"></label>

                        <div class="col-md-6">

                            <input type="submit" name="themNhanVienC" value="Thêm Nhân Viên" class="btn btn-primary form-control">

                        </div>

                    </div>

                </form>

            </div>
            <!-- Kết Thúc Tạo Body -->

        </div>
    </section>
    <!-- Kết Thúc Tạo Hàm Chứa Chính -->
<?php } ?>