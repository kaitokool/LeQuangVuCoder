<?php

	if (!isset($_SESSION['admin_email'])) {

		echo "<script>window.open('./LoginCuaAdmin.php', '_self')</script>";

	}else{
?>

    <?php

    if (isset($_GET['SuaSanPham'])) {

        $edit_id = $_GET['SuaSanPham'];

        $get_p = "select * from product where Ma_SP='$edit_id'";

        $run_edit = mysqli_query($con, $get_p);

        $row_edit = mysqli_fetch_array($run_edit);

        $Ma_SP = $row_edit['Ma_SP'];

        $Ma_CTSP = $row_edit['Ma_CTSP'];

        $Ten_SP = $row_edit['Ten_SP'];

        $Gia = $row_edit['Gia'];

        $Mo_ta =  $row_edit['Mo_ta'];

        $Hinh_anh = $row_edit['Hinh_anh'];

        $Key_word = $row_edit['Key_word'];
    }

    $get_product_cat = "select * from category_product where Ma_CTSP='$Ma_CTSP'";

    $run_product_cat = mysqli_query($con, $get_product_cat);

    $row_product_cat = mysqli_fetch_array($run_product_cat);

    $Ten_CTSP = $row_product_cat['Ten_CTSP'];

    $Ma_TL = $row_product_cat['Ma_TL'];

    $get_cat = "select * from category where Ma_TL = '$Ma_TL'";

    $run_cat = mysqli_query($con, $get_cat);

    $row_cat = mysqli_fetch_array($run_cat);

    $Ten_TL = $row_cat['Ten_TL'];

    $get_image_product = "select * from image_product where Ma_SP = '$Ma_SP'";

    $run_image_product = mysqli_query($con, $get_image_product);

    //$get_image_product = $con->query("select * from image_product where Ma_SP = '$Ma_SP'");


    ?>
    <!-- Bắt Đầu Tạo Header container-fluid -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Trang Chủ / Sửa Sản Phẩm</h1>
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
                <h3 class="card-title">Sửa Sản Phẩm</h3>
            </div>
            <!-- Kết Thúc Tạo header -->

            <!-- Bắt Đầu Tạo Body-->
            <div class="card-body">

                <form class="form-horizontal" method="post" enctype="multipart/form-data">

                    <div class="form-group">

                        <label class="col-md-3 control-label"> Tiêu Đề Sản Phẩm </label>

                        <div class="col-md-6">

                            <input type="text" name="TD_san_pham" class="form-control" required value="<?php echo $Ten_SP; ?> ">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-3 control-label"> Thể Loại Sản Phẩm</label>

                        <div class="col-md-6">

                            <select name="theloai_sanpham" class="form-control">
                                <option value="<?php echo $Ma_CTSP; ?>"> <?php echo $Ten_CTSP; ?></option>

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
                                <option value=" <?php echo $Ma_TL; ?>"> <?php echo $Ten_TL; ?></option>

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

                            <img width="70" height="70" src="ImageProduct/<?php echo $Hinh_anh; ?>" alt="<?php echo $Hinh_anh; ?>">

                            <br>

                            <input type="file" name="product_image_dd" class="form-control">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-3 control-label"> Hình ảnh sản phẩm </label>

                        <div class="col-md-6">

                            <?php

                            $row_image_product = mysqli_num_rows($run_image_product);

                            if ($row_image_product > 0) {
                                while ($rows_image_product = mysqli_fetch_assoc($run_image_product)) {
                                    $imageurl = $rows_image_product["Hinh_anh"];
                            ?>
                                    <img width="70" height="70" src=" <?php echo $imageurl; ?>" alt="<?php echo $imageurl; ?>">
                                <?php     }
                            } else { ?>

                                <p>Không Có Hình Ảnh Để Show.</p>
                            <?php
                            }
                            ?>

                            <br>

                            <input type="file" name="product_image[]" class="form-control" multiple>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-3 control-label"> Giá Sản Phẩm </label>

                        <div class="col-md-6">

                            <input type="text" name="product_price" class="form-control" required value="<?php echo $Gia; ?>">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-3 control-label"> Từ Khóa Tìm Kiếm </label>

                        <div class="col-md-6">

                            <input type="text" name="product_keywords" class="form-control" required value="<?php echo $Key_word; ?>">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-3 control-label"> Mô Tả Sản Phẩm </label>

                        <div class="col-md-6 mb-3">

                            <textarea name="product_description" cols="19" rows="8" class="textarea">

                                <?php echo $Mo_ta; ?>

                            </textarea>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-3 control-label"></label>

                        <div class="col-md-6">

                            <input type="submit" name="updateSanPham" value="Sửa Sản Phẩm" class="btn btn-primary form-control">

                        </div>

                    </div>

                </form>

            </div>
            <!-- Kết Thúc Tạo Body -->

        </div>
    </section>
    <!-- Kết Thúc Tạo Hàm Chứa Chính -->
<?php } ?>