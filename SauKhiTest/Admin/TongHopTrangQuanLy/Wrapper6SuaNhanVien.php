<?php
$i = 1;
if ($i == 1) {
?>

    <?php

    if (isset($_GET['SuaNhanVien'])) {

        $edit_id = $_GET['SuaNhanVien'];

        $edit_query = " select * 
                        from staff, staff_in_company, position 
                        where staff.Ma_NV = staff_in_company.Ma_NV and staff_in_company.Ma_CV = position.Ma_CV and staff.Ma_NV = '$edit_id'";

        $run_edit = mysqli_query($con, $edit_query);

        $row_edit = mysqli_fetch_array($run_edit);

        $Ma_NV = $row_edit['Ma_NV'];

        $Ten_NV = $row_edit['Ten_NV'];

        $SDT = $row_edit['SDT'];

        $TK = $row_edit['TK'];

        $Ma_CV = $row_edit['Ma_CV'];

        $Ten_CV = $row_edit['Ten_CV'];

        $Luong_co_ban = $row_edit['Luong_co_ban'];
    }

    ?>

    <!-- Bắt Đầu Tạo Header container-fluid -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Trang Chủ / Xem Sửa Thông Tin Nhân Viên</h1>
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
                <h3 class="card-title">Xem Sửa Thông Tin Nhân Viên</h3>
            </div>
            <!-- Kết Thúc Tạo header -->

            <!-- Bắt Đầu Tạo Body-->
            <div class="card-body">

                <form action="" class="form-horizontal" method="post" accept-charset="utf-8">

                    <div class="form-group">

                        <label for="" class="control-label col-md-3">

                            Tên Nhân Viên

                        </label>

                        <div class="col-md-6">

                            <input value=" <?php echo $Ten_NV; ?>" type="text" name="Ten_NV" class="form-control">

                        </div>

                    </div>

                    <div class="form-group">

                        <label for="" class="control-label col-md-3">

                            Số Điện Thoại

                        </label>

                        <div class="col-md-6">

                            <input value=" <?php echo $SDT; ?>" type="text" name="SDT" class="form-control">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-3 control-label"> Chức Vụ</label>

                        <div class="col-md-6">

                            <select name="chucvu" class="form-control">
                                <option value=" <?php echo $Ma_CV; ?>"> <?php echo $Ten_CV; ?></option>

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

                        <label for="" class="control-label col-md-3"></label>

                        <div class="col-md-6">

                            <input type="submit" value="Chỉnh Sửa" name="updateNhanVien" class="form-control btn btn-primary">

                        </div>

                    </div>

                </form>

            </div>
            <!-- Kết Thúc Tạo Body -->

        </div>
    </section>
    <!-- Kết Thúc Tạo Hàm Chứa Chính -->
<?php } ?>