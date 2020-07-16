<?php

	if (!isset($_SESSION['admin_email'])) {

		echo "<script>window.open('./LoginCuaAdmin.php', '_self')</script>";

	}else{
?>

    <?php
        if (isset($_GET['SuaNCC'])) {

            $edit_id = $_GET['SuaNCC'];

            $get_p = "select * from supplier where Ma_NCC='$edit_id'";

            $run_edit = mysqli_query($con, $get_p);

            $row_edit = mysqli_fetch_array($run_edit);

            $Ma_NCC = $row_edit['Ma_NCC'];

            $Ten_NCC = $row_edit['Ten_NCC'];

            $Nguoi_dai_dien = $row_edit['Nguoi_dai_dien'];

            $SDT = $row_edit['SDT'];

            $Dia_chi =  $row_edit['Dia_chi'];
        }
    ?>
    <!-- Bắt Đầu Tạo Header container-fluid -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Trang Chủ / Sửa Thông Tin Nhà Cung Cấp</h1>
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
                <h3 class="card-title">Sửa Thông Tin Nhà Cung Cấp</h3>
            </div>
            <!-- Kết Thúc Tạo header -->

            <!-- Bắt Đầu Tạo Body-->
            <div class="card-body">

                <form class="form-horizontal" method="post" enctype="multipart/form-data">

                    <div class="form-group">

                        <label class="col-md-3 control-label"> Tên Hãng Cung Cấp </label>

                        <div class="col-md-6">

                            <input type="text" name="Ten_NCC" class="form-control" required value="<?php echo $Ten_NCC; ?> ">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-3 control-label"> Tên Người Đại Diện</label>

                        <div class="col-md-6">

                            <input type="text" name="Nguoi_dai_dien" class="form-control" required value="<?php echo $Nguoi_dai_dien; ?>">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-3 control-label"> Số Điện Thoại </label>

                        <div class="col-md-6">

                            <input type="text" name="SDT" class="form-control" required value="<?php echo $SDT; ?>">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-3 control-label"> Địa Chỉ Của Nhà Cung Cấp </label>

                        <div class="col-md-6 mb-3">

                            <textarea name="Dia_chi" cols="19" rows="8" class="textarea">

                                <?php echo $Dia_chi; ?>

                            </textarea>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-3 control-label"></label>

                        <div class="col-md-6">

                            <input type="submit" name="updateNCC" value="Chỉnh Sửa Thông Tin" class="btn btn-primary form-control">

                        </div>

                    </div>

                </form>

            </div>
            <!-- Kết Thúc Tạo Body -->

        </div>
    </section>
    <!-- Kết Thúc Tạo Hàm Chứa Chính -->
<?php } ?>