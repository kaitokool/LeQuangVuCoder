<?php

	if (!isset($_SESSION['admin_email'])) {

		echo "<script>window.open('./LoginCuaAdmin.php', '_self')</script>";

	}else{
?>

    <?php

    if (isset($_GET['SuaLoai'])) {

        $edit_id = $_GET['SuaLoai'];

        $edit_query = "select * from category where Ma_TL = '$edit_id'";

        $run_edit = mysqli_query($con, $edit_query);

        $row_edit = mysqli_fetch_array($run_edit);

        $Ma_TL = $row_edit['Ma_TL'];

        $Ten_TL = $row_edit['Ten_TL'];

        $Mo_Ta_Cat = $row_edit['Mo_Ta_Cat'];
    }

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

                <form action="" class="form-horizontal" method="post" accept-charset="utf-8">

                    <div class="form-group">

                        <label for="" class="control-label col-md-3">

                            Tiêu đề thể loại

                        </label>

                        <div class="col-md-6">

                            <input value=" <?php echo $Ten_TL; ?>" type="text" name="Ten_TL" class="form-control">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-md-3">

                            Mô Tả Thể Loại

                        </label>

                        <div class="col-md-6">

                            <textarea name="Mo_Ta_Cat" type="text" id="" cols="30" rows="10" class="form-control textarea">

                                <?php echo $Mo_Ta_Cat; ?>

                            </textarea>

                        </div>

                    </div>

                    <div class="form-group">

                        <label for="" class="control-label col-md-3"></label>

                        <div class="col-md-6">

                            <input type="submit" value="Chỉnh Sửa" name="updateLSanPham" class="form-control btn btn-primary">

                        </div>

                    </div>

                </form>

            </div>
            <!-- Kết Thúc Tạo Body -->

        </div>
    </section>
    <!-- Kết Thúc Tạo Hàm Chứa Chính -->
<?php } ?>