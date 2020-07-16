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
                    <h1 class="m-0 text-dark">Trang Chủ / Thêm Loại Sản Phẩm</h1>
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
                <h3 class="card-title">Thêm Loại Sản Phẩm</h3>
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

                            <input type="text" name="Ten_TL" class="form-control">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-md-3">

                            Mô Tả Thể Loại

                        </label>

                        <div class="col-md-6">

                            <textarea name="Mo_Ta_Cat" type="text" id="" cols="30" rows="10" class="form-control textarea"></textarea>

                        </div>

                    </div>

                    <div class="form-group">

                        <label for="" class="control-label col-md-3"></label>

                        <div class="col-md-6">

                            <input type="submit" value="Nhập Thể Loại" name="themLoaiSP" class="form-control btn btn-primary">

                        </div>

                    </div>

                </form>

            </div>
            <!-- Kết Thúc Tạo Body -->

        </div>
    </section>
    <!-- Kết Thúc Tạo Hàm Chứa Chính -->
<?php } ?>