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
                    <h1 class="m-0 text-dark">Trang Chủ / Thêm Sản Phẩm</h1>
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
                <h3 class="card-title">Thêm Sản Phẩm</h3>
            </div>
            <!-- Kết Thúc Tạo header -->

            <!-- Bắt Đầu Tạo Body-->
            <div class="card-body">

                <form class="form-horizontal" method="post" enctype="multipart/form-data">

                    <div class="form-group">

                        <label class="col-md-3 control-label"> Tiêu Đề Sản Phẩm </label>

                        <div class="col-md-6">

                            <input type="text" name="TD_san_pham" class="form-control" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-3 control-label"> Thể Loại Sản Phẩm</label>

                        <div class="col-md-6">

                            <select name="theloai_sanpham" class="form-control">
                                <option disabled selected> Chọn 1 Thể Loại Cho Sản Phẩm</option>

                                <?php

                                $get_p_cs = "select * from category_product";
                                $run_p_cs = mysqli_query($con, $get_p_cs);

                                while ($row_p_cs = mysqli_fetch_array($run_p_cs)) {

                                    $ma_ct_sp = $row_p_cs['Ma_CTSP'];
                                    $t_ct_sp = $row_p_cs['Ten_CTSP'];

                                    echo "

                                        <option value='$ma_ct_sp'> $t_ct_sp</option>

                                    ";
                                }

                                ?>

                            </select>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-3 control-label"> Thể Loại</label>

                        <div class="col-md-6">

                            <select name="theloai" class="form-control">
                                <option disabled selected> Chọn 1 Thể Loại</option>

                                <?php

                                $get_cs = "SELECT * FROM category";
                                $run_cs = mysqli_query($con, $get_cs);

                                while ($row_cs = mysqli_fetch_array($run_cs)) {

                                    $ma_tl = $row_cs['Ma_TL'];
                                    $t_tl = $row_cs['Ten_TL'];

                                    echo "

                                        <option value='$ma_tl'> $t_tl</option>

                                    ";
                                }

                                ?>

                            </select>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-3 control-label"> Hình ảnh đại diện </label>

                        <div class="col-md-6">

                            <input type="file" name="product_image_dd" class="form-control">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-3 control-label"> Hình ảnh sản phẩm </label>

                        <div class="col-md-6">

                            <input type="file" name="product_image[]" class="form-control" multiple>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-3 control-label"> Giá Sản Phẩm </label>

                        <div class="col-md-6">

                            <input type="text" name="product_price" class="form-control" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-3 control-label"> Từ Khóa Tìm Kiếm </label>

                        <div class="col-md-6">

                            <input type="text" name="product_keywords" class="form-control" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-3 control-label"> Mô Tả Sản Phẩm </label>

                        <div class="col-md-6">

                            <textarea name="product_description" cols="19" rows="8" class="form-control textarea"></textarea>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-3 control-label"></label>

                        <div class="col-md-6">

                            <input type="submit" name="nhapSanPham" value="Nhập Sản Phẩm" class="btn btn-primary form-control">

                        </div>

                    </div>

                </form>

            </div>
            <!-- Kết Thúc Tạo Body -->

        </div>
    </section>
    <!-- Kết Thúc Tạo Hàm Chứa Chính -->
<?php } ?>