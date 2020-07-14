<?php
$i = 1;
if ($i == 1) {
?>
    <!-- Bắt Đầu Tạo Header container-fluid -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Trang Chủ / Hợp Tác Nhà Cung Cấp Mới</h1>
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
                <h3 class="card-title">Thêm Thông Tin Nhà Cung Cấp</h3>
            </div>
            <!-- Kết Thúc Tạo header -->

            <!-- Bắt Đầu Tạo Body-->
            <div class="card-body">

                <form class="form-horizontal" method="post" enctype="multipart/form-data">

                    <div class="form-group">

                        <label class="col-md-3 control-label"> Tên Hãng Cung Cấp </label>

                        <div class="col-md-6">

                            <input type="text" name="Ten_NCC" class="form-control" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-3 control-label"> Tên Người Đại Diện </label>

                        <div class="col-md-6">

                            <input type="text" name="Nguoi_dai_dien" class="form-control" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-3 control-label"> Số Điện Thoại </label>

                        <div class="col-md-6">

                            <input type="text" name="SDT" class="form-control" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-3 control-label"> Địa Chỉ Của Nhà Cung Cấp </label>

                        <div class="col-md-6">

                            <textarea name="Dia_chi" cols="19" rows="8" class="form-control textarea"></textarea>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-3 control-label"></label>

                        <div class="col-md-6">

                            <input type="submit" name="nhapTTNCC" value="Nhập Sản Phẩm" class="btn btn-primary form-control">

                        </div>

                    </div>

                </form>

            </div>
            <!-- Kết Thúc Tạo Body -->

        </div>
    </section>
    <!-- Kết Thúc Tạo Hàm Chứa Chính -->
<?php } ?>