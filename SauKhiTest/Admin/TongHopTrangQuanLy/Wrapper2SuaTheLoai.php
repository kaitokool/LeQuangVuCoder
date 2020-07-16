<?php

	if (!isset($_SESSION['admin_email'])) {

		echo "<script>window.open('./LoginCuaAdmin.php', '_self')</script>";

	}else{
?>

    <?php

        if (isset($_GET['SuaTheLoai'])) {

            $edit_id = $_GET['SuaTheLoai'];

            $edit_query = "select * from category_product where Ma_CTSP = '$edit_id'";

            $run_edit = mysqli_query($con, $edit_query);

            $row_edit = mysqli_fetch_array($run_edit);

            $Ma_CTSP = $row_edit['Ma_CTSP'];

            $Ten_CTSP = $row_edit['Ten_CTSP'];

            $Mo_Ta = $row_edit['Mo_Ta'];

            $Ma_TL = $row_edit['Ma_TL'];

            $edit_query_cat = "select * from category where Ma_TL = '$Ma_TL'";

            $run_edit_cat = mysqli_query($con, $edit_query_cat);

            $row_edit_cat = mysqli_fetch_array($run_edit_cat);

            $Ma_TL = $row_edit_cat['Ma_TL'];

            $Ten_TL = $row_edit_cat['Ten_TL'];
        }

    ?>
    <!-- Bắt Đầu Tạo Header container-fluid -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Trang Chủ / Sửa Thể Loại Sản Phẩm</h1>
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
                <h3 class="card-title">Sửa Thể Loại Sản Phẩm</h3>
            </div>
            <!-- Kết Thúc Tạo header -->

            <!-- Bắt Đầu Tạo Body-->
            <div class="card-body">

                <form action="" class="form-horizontal" method="post" accept-charset="utf-8">

                    <div class="form-group">

                        <label for="" class="control-label col-md-3">

                            Tiêu đề thể loại sản phẩm

                        </label>

                        <div class="col-md-6">

                            <input value=" <?php echo $Ten_CTSP; ?>" type="text" name="Ten_CTSP" class="form-control">

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

                        <label class="control-label col-md-3">

                            Mô Tả Thể Loại Sản Phẩm

                        </label>

                        <div class="col-md-6">

                            <textarea name="Mo_Ta" type="text" id="" cols="30" rows="10" class="form-control textarea">

                                <?php echo $Mo_Ta; ?>

                            </textarea>

                        </div>

                    </div>

                    <div class="form-group">

                        <label for="" class="control-label col-md-3"></label>

                        <div class="col-md-6">

                            <input type="submit" value="Chỉnh Sửa" name="updateTLSanPham" class="form-control btn btn-primary">

                        </div>

                    </div>

                </form>

            </div>
            <!-- Kết Thúc Tạo Body -->

        </div>
    </section>
    <!-- Kết Thúc Tạo Hàm Chứa Chính -->
<?php } ?>