<!-- Bắt Đầu Thêm Sản Phẩm -->
<?php
	if (isset($_POST['nhapSanPham'])) {

		$TD_san_pham = $_POST['TD_san_pham'];
		$theloai_sanpham = $_POST['theloai_sanpham'];
		$theloai = $_POST['theloai'];
		$product_price = $_POST['product_price'];
		$product_description = $_POST['product_description'];
		$product_keywords = $_POST['product_keywords'];

		$product_image = $_FILES['product_image_dd']['name'];

		$temp_name = $_FILES['product_image_dd']['tmp_name'];

		move_uploaded_file($temp_name, "product_images/".$product_image);

		$insert_product = "insert into product (Ma_CTSP, Ten_SP, Gia, Mo_ta, Hinh_anh, Key_word) values ('$theloai_sanpham', '$TD_san_pham', '$product_price', '$product_description', '$product_image', '$product_keywords')";

		$run_product = mysqli_query($con, $insert_product);

		if($run_product){
			$id = $con->insert_id;

			if (is_array($_FILES)) {
				foreach ($_FILES['product_image']['name'] as $name => $value) {
					$file_name = explode(".", $_FILES['product_image']['name'][$name]);
					$allowed_ext = array("jpg", "jpeg", "png", "gif");
					if (in_array($file_name[1], $allowed_ext)) {
						$sourcePath = $_FILES['product_image']['tmp_name'][$name];
						$new_name = $_FILES['product_image']['name'][$name].'.'.$file_name[1];
						$targetPath = "product_images/".$new_name;
						$sql = "insert into image_product (Ma_SP, Hinh_anh) values ('$id', '{$targetPath}')";
						$image = mysqli_query($con,$sql);
						if (move_uploaded_file($sourcePath, $targetPath)) {
						}
					}
				}
			}

			echo "<script>alert('Sản Phẩm Nhập Thành Công')</script>";
			echo "<script>window.open('TrangChuChinh.php?XemSanPham','_self')</script>";

		}

	}

?>
<!-- Kết Thúc Thêm Sản Phẩm -->

<!-- Bắt Đầu Sửa Sản Phẩm -->
<?php
	$output = '';
	if (isset($_POST['updateSanPham'])) {

		$TD_san_pham = $_POST['TD_san_pham'];
		$theloai_sanpham = $_POST['theloai_sanpham'];
		$theloai = $_POST['theloai'];
		$product_price = $_POST['product_price'];
		$product_description = $_POST['product_description'];
		$product_keywords = $_POST['product_keywords'];
		$product_image_chuan = array_filter($_FILES['product_image']['name']);

		$product_image = $_FILES['product_image_dd']['name'];



		if (empty($product_image_chuan)) {

			if (empty($product_image)) {

				$update_product = "update product set Ma_CTSP ='$theloai_sanpham', Ten_SP = '$TD_san_pham', Gia = '$product_price', Mo_ta = '$product_description', Key_word = '$product_keywords' where Ma_SP = '$Ma_SP'";
			} else {

				$temp_name = $_FILES['product_image_dd']['tmp_name'];

				move_uploaded_file($temp_name, "ImageProduct/" . $product_image);

				$update_product = "update product set Ma_CTSP ='$theloai_sanpham', Ten_SP = '$TD_san_pham', Gia = '$product_price', Mo_ta = '$product_description', Key_word = '$product_keywords', Hinh_anh = '$product_image' where Ma_SP = '$Ma_SP'";
			}

			$run_product = mysqli_query($con, $update_product);

			echo "<script>alert('Sản Phẩm Sửa Thành Công :))')</script>";
			echo "<script>window.open('TrangChuChinh.php?XemSanPham','_self')</script>";
		} else {

			if (empty($product_image)) {

				$update_product = "update product set Ma_CTSP ='$theloai_sanpham', Ten_SP = '$TD_san_pham', Gia = '$product_price', Mo_ta = '$product_description', Key_word = '$product_keywords' where Ma_SP = '$Ma_SP'";
			} else {

				$temp_name = $_FILES['product_image_dd']['tmp_name'];

				move_uploaded_file($temp_name, "ImageProduct/" . $product_image);

				$update_product = "update product set Ma_CTSP ='$theloai_sanpham', Ten_SP = '$TD_san_pham', Gia = '$product_price', Mo_ta = '$product_description', Key_word = '$product_keywords', Hinh_anh = '$product_image' where Ma_SP = '$Ma_SP'";
			}

			$run_product = mysqli_query($con, $update_product);

			$get_products_imagecc = $con->query("select * form image_product where Ma_SP='$Ma_SP'");
			if ($get_products_imagecc->num_rows > 0) {
				$delete_image = "delete from image_product where Ma_SP='$Ma_SP'";
				$run_delete = mysqli_query($con, $delete_image);

				if ($run_delete) {
					if (is_array($_FILES)) {
						foreach ($_FILES['product_image']['name'] as $name => $value) {
							$file_name = explode(".", $_FILES['product_image']['name'][$name]);
							$allowed_ext = array("jpg", "jpeg", "png", "gif");
							if (in_array($file_name[1], $allowed_ext)) {
								$sourcePath = $_FILES['product_image']['tmp_name'][$name];
								$new_name = $_FILES['product_image']['name'][$name];
								$targetPath = "ImageProduct/" . $new_name;
								$sql = "insert into image_product (Ma_SP, Hinh_anh) values ('$Ma_SP', '{$targetPath}')";
								$image = mysqli_query($con, $sql);
								if (move_uploaded_file($sourcePath, $targetPath)) {
								}
							}
						}
					}
				}
			} else {
				if (is_array($_FILES)) {
					foreach ($_FILES['product_image']['name'] as $name => $value) {
						$file_name = explode(".", $_FILES['product_image']['name'][$name]);
						$allowed_ext = array("jpg", "jpeg", "png", "gif");
						if (in_array($file_name[1], $allowed_ext)) {
							$sourcePath = $_FILES['product_image']['tmp_name'][$name];
							$new_name = $_FILES['product_image']['name'][$name];
							$targetPath = "ImageProduct/" . $new_name;
							$sql = "insert into image_product (Ma_SP, Hinh_anh) values ('$Ma_SP', '{$targetPath}')";
							$image = mysqli_query($con, $sql);
							if (move_uploaded_file($sourcePath, $targetPath)) {
							}
						}
					}
				}
			}

			echo "<script>alert('Sản Phẩm Sửa Thành Công :))')</script>";
			echo "<script>window.open('TrangChuChinh.php?XemSanPham','_self')</script>";
		}
	}
?>
<!-- Kết Thúc Sửa Sản Phẩm -->

<!-- Bắt Đầu Xóa Sản Phẩm -->
<?php

	if (isset($_GET['XoaSanPham'])) {

		$delete_id = $_GET['XoaSanPham'];

		$delete_image = "delete from image_product where Ma_SP='$delete_id'";

		$run_delete = mysqli_query($con, $delete_image);


		if ($run_delete) {

			$delete_product = "delete from product where Ma_SP='$delete_id'";

			$run_delete = mysqli_query($con, $delete_product);

			if ($run_delete) {

				echo "<script>alert('1 Sản Phẩm Đã Được Xóa :))')</script>";

				echo "<script>window.open('TrangChuChinh.php?XemSanPham', '_self')</script>";
			}
		}
	}

?>
<!-- Kết Thúc Xóa Sản Phẩm -->

<!-- Bắt Đầu Thêm Thể Loại Sản Phẩm -->
<?php

	if (isset($_POST['themTLSanPham'])) {

		$Ten_CTSP = $_POST['Ten_CTSP'];

		$theloai = $_POST['theloai'];

		$Mo_Ta = $_POST['Mo_Ta'];

		$insert_p_cat = "insert into category_product (Ten_CTSP, Mo_Ta, Ma_TL) values ('$Ten_CTSP', '$Mo_Ta', '$theloai')";

		$run_p_cat = mysqli_query($con, $insert_p_cat);

		if ($run_p_cat) {

			echo "<script>alert('Bạn Mới Thêm 1 Loại Thể Loại Sản Phẩm Mới!')</script>";
			echo "<script>window.open('TrangChuChinh.php?XemTheLoai','_self')</script>";

		}

	}

?>
<!-- Kết Thúc Thêm Thể Loại Sản Phẩm -->

<!-- Bắt Đầu Sửa Thể Loại Sản Phẩm -->
<?php

	if (isset($_POST['updateTLSanPham'])) {

		$Ten_CTSP = $_POST['Ten_CTSP'];

		$theloai = $_POST['theloai'];

		$Mo_Ta = $_POST['Mo_Ta'];

		$update_product_cat = "update category_product set Ten_CTSP='$Ten_CTSP', Mo_Ta = '$Mo_Ta', Ma_TL = '$theloai' where Ma_CTSP = '$Ma_CTSP'";

		$run_product_cat = mysqli_query($con, $update_product_cat);

		if ($run_product_cat) {

			echo "<script>alert('Bạn Đã Chỉnh Sửa Sản Phẩm Thành Công!')</script>";
			echo "<script>window.open('TrangChuChinh.php?XemTheLoai','_self')</script>";

		}

	}

?>
<!-- Kết Thúc Sửa Thể Loại Sản Phẩm -->

<!-- Bắt Đầu Xóa Thể Loại Sản Phẩm -->
<?php

	if(isset($_GET['XoaTheLoai'])){

		$delete_id = $_GET['XoaTheLoai'];

		$delete_product_cat = "delete from category_product where Ma_CTSP = '$delete_id'";

		$run_delete = mysqli_query($con, $delete_product_cat);

		if ($run_delete) {

			echo "<script>alert('Bạn đã xóa 1 thể loại sản phẩm :))')</script>";

			echo "<script>window.open('TrangChuChinh.php?XemTheLoai', '_self')</script>";

		}

	}

?>
<!-- Kết Thúc Xóa Thể Loại Sản Phẩm -->

<!-- Bắt Đầu Thêm Loại Sản Phẩm -->
<?php

	if (isset($_POST['themLoaiSP'])) {

		$Ten_TL = $_POST['Ten_TL'];

		$Mo_Ta_Cat = $_POST['Mo_Ta_Cat'];

		$insert_cat = "insert into category (Ten_TL, Mo_Ta_Cat) values ('$Ten_TL', '$Mo_Ta_Cat')";

		$run_cat = mysqli_query($con, $insert_cat);

		if ($run_cat) {

			echo "<script>alert('Bạn Mới Thêm 1 Loại Thể Loại Mới!')</script>";
			echo "<script>window.open('TrangChuChinh.php?XemLoai','_self')</script>";

		}

	}

?>
<!-- Kết Thúc Thêm Loại Sản Phẩm -->

<!-- Bắt Đầu Sửa Loại Sản Phẩm -->
<?php

	if (isset($_POST['updateLSanPham'])) {

		$Ten_TL = $_POST['Ten_TL'];

		$Mo_Ta_Cat = $_POST['Mo_Ta_Cat'];

		$update_cat = "update category set Ten_TL='$Ten_TL', Mo_Ta_Cat = '$Mo_Ta_Cat' where Ma_TL = '$Ma_TL'";

		$run_cat = mysqli_query($con, $update_cat);

		if ($run_cat) {

			echo "<script>alert('Bạn Đã Chỉnh Sửa Thể Loại Thành Công!')</script>";
			echo "<script>window.open('TrangChuChinh.php?XemLoai','_self')</script>";

		}

	}

?>
<!-- Kết Thúc Sửa Loại Sản Phẩm -->

<!-- Bắt Đầu Xóa Loại Sản Phẩm -->
<?php

	if(isset($_GET['XoaLoai'])){

		$delete_id = $_GET['XoaLoai'];

		$delete_cat = "delete from category where Ma_TL = '$delete_id'";

		$run_delete = mysqli_query($con, $delete_cat);

		if ($run_delete) {

			echo "<script>alert('Bạn đã xóa 1 thể loại :))')</script>";

			echo "<script>window.open('TrangChuChinh.php?XemLoai', '_self')</script>";

		}

	}

?>
<!-- Kết Thúc Xóa Loại Sản Phẩm -->

<!-- Bắt Đầu Xóa TT Thanh Toán -->
<?php

	if(isset($_GET['XoaTTKhachHang'])){

		$delete_id = $_GET['XoaTTKhachHang'];

		$delete_payments = "delete from payments where Ma_ngan_hang = '$delete_id'";

		$run_delete = mysqli_query($con, $delete_payments);

		if ($run_delete) {

			echo "<script>alert('Bạn đã xóa 1 Phương Thức Thanh Toán :))')</script>";

			echo "<script>window.open('TrangChuChinh.php?XemTTThanhToan', '_self')</script>";

		}

	}

?>
<!-- Kết Thúc Xóa TT Thanh Toán -->

<!-- Bắt Đầu Thêm Nhân Viên -->
<?php

	if (isset($_POST['themNhanVienC'])) {

		$Ten_NV = $_POST['Ten_NV'];

		$SDT = $_POST['SDT'];

		$TK = $_POST['TK'];

		$chucvu = $_POST['chucvu'];

		$insert_NhanVien = "insert into staff (Ten_NV, SDT) values ('$Ten_NV', '$SDT')";

		$run_NhanVien = mysqli_query($con, $insert_NhanVien);

		if ($run_NhanVien) {
			$id = mysqli_insert_id($con);

			$insert_NV_in = "insert into staff_in_company (Ma_NV, TK, MK, Ma_CV) values ('$id', '$TK', '123', '$chucvu')";
			
			$run_NV_in = mysqli_query($con, $insert_NV_in);
			if($run_NV_in){
				echo "<script>alert('Bạn Mới Thêm Nhân Viên Mới!')</script>";
				echo "<script>window.open('TrangChuChinh.php?XemNhanVien','_self')</script>";
			}
		}

	}

?>
<!-- Kết Thúc Thêm Nhân Viên-->

<!-- Bắt Đầu Sửa Nhân Viên -->
<?php

	if (isset($_POST['updateNhanVien'])) {

		$Ten_NV = $_POST['Ten_NV'];

		$chucvu = $_POST['chucvu'];

		$SDT = $_POST['SDT'];

		$update_nv = "update staff set Ten_NV='$Ten_NV', SDT = '$SDT' where Ma_NV = '$Ma_NV'";
		$update_nv_in = "update staff_in_company set Ma_CV ='$chucvu' where Ma_NV = '$Ma_NV'";

		$run_nv = mysqli_query($con, $update_nv);
		$run_nv_in = mysqli_query($con, $update_nv_in);

		if ($run_nv && $run_nv_in) {

			echo "<script>alert('Bạn Đã Chỉnh Sửa Thông Tin Nhân Viên Thành Công!')</script>";
			echo "<script>window.open('TrangChuChinh.php?XemNhanVien','_self')</script>";

		}

	}

?>
<!-- Kết Thúc Sửa Nhân Viên -->

<!-- Bắt Đầu Xóa Nhân Viên -->
<?php

	if(isset($_GET['XoaNhanVien'])){

		$delete_id = $_GET['XoaNhanVien'];

		$delete_staff_in = "delete from staff_in_company where Ma_NV = '$delete_id'";
		$delete_staff = "delete from staff where Ma_NV = '$delete_id'";

		$run_delete_nv_in = mysqli_query($con, $delete_staff_in);
		$run_delete_nv = mysqli_query($con, $delete_staff);

		if ($run_delete_nv && $run_delete_nv_in) {

			echo "<script>alert('Bạn đã Xa Thải 1 Nhân Viên :))')</script>";

			echo "<script>window.open('TrangChuChinh.php?XemNhanVien', '_self')</script>";

		}

	}

?>
<!-- Kết Thúc Xóa Nhân Viên -->

<!-- Bắt Đầu Thêm Nhà Cung Cấp -->
<?php

	if (isset($_POST['nhapTTNCC'])) {

		$Ten_NCC = $_POST['Ten_NCC'];

		$Nguoi_dai_dien = $_POST['Nguoi_dai_dien'];

		$SDT = $_POST['SDT'];

		$Dia_chi = $_POST['Dia_chi'];

		$insert_supplier = "insert into supplier (Ten_NCC, Nguoi_dai_dien, SDT, Dia_chi) values ('$Ten_NCC', '$Nguoi_dai_dien', '$SDT', '$Dia_chi')";

		$run_supplier = mysqli_query($con, $insert_supplier);

		if ($run_supplier) {			
				echo "<script>alert('Bạn Đã Hợp Tác Với Một Nhà Cung Cấp Mới!')</script>";
				echo "<script>window.open('TrangChuChinh.php?XemNCC','_self')</script>";
		}
	}

?>
<!-- Kết Thúc Thêm Nhà Cung Cấp -->

<!-- Bắt Đầu Sửa Nhà Cung Cấp -->
<?php

	if (isset($_POST['updateNCC'])) {

		$Ten_NCC = $_POST['Ten_NCC'];

		$Nguoi_dai_dien = $_POST['Nguoi_dai_dien'];

		$SDT = $_POST['SDT'];

		$Dia_chi = $_POST['Dia_chi'];

		$update_ncc = "update supplier set Ten_NCC = '$Ten_NCC', Nguoi_dai_dien = '$Nguoi_dai_dien', SDT = '$SDT', Dia_chi = '$Dia_chi' where Ma_NCC = '$Ma_NCC'";

		$run_ncc = mysqli_query($con, $update_ncc);

		if ($run_ncc) {

			echo "<script>alert('Bạn Đã Chỉnh Sửa Thông Tin Nhà Cung Cấp Thành Công!')</script>";
			echo "<script>window.open('TrangChuChinh.php?XemNCC','_self')</script>";

		}

	}

?>
<!-- Kết Thúc Sửa Nhà Cung Cấp -->

<!-- Bắt Đầu Xóa Nhà Cung Cấp -->
<?php

	if(isset($_GET['XoaNCC'])){

		$delete_id = $_GET['XoaNCC'];

		$delete_supplier = "delete from supplier where Ma_NCC = '$delete_id'";

		$run_delete_supplier = mysqli_query($con, $delete_supplier);

		if ($run_delete_supplier) {

			echo "<script>alert('Bạn đã Xóa Thông Tin Nhà Cung Cấp Thành Công :))')</script>";

			echo "<script>window.open('TrangChuChinh.php?XemNCC', '_self')</script>";

		}

	}

?>
<!-- Kết Thúc Xóa Nhà Cung Cấp -->