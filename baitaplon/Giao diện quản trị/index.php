<?php require_once("includes/connection.php"); ?>
<?php include "includes/header.php" ?>
<?php
	// Lấy 16 bài viết mới nhất đã được phép public ra ngoài từ bảng posts
	$sql = "select * from posts where is_public = 1 order by createdate desc limit 16";
	// Thực hiện truy vấn data thông qua hàm mysqli_query
	$query = mysqli_query($conn,$sql);
?>
			<div class="innertube">
				<table width="100%" border="1">
					<tr>
					<?php
						// Khởi tạo biến đếm $i = 0
						$i = 0;
						// Lặp dữ liệu lấy data từ cơ sở dữ liệu
						while ( $data = mysqli_fetch_array($query) ) {
							// Nếu biến đếm $i = 4, tức là vòng lặp chạy tới bài viết thứ tư thì ta thực hiện xuống hàng cho bài viết kế tiếp
							// Vì mỗi dòng hiển thị, ta chỉ hiển thị 4 bài viết
							if ($i == 4) {
								echo "</tr>";
								$i = 0;
							}
					?>
						<td >
							<b><?php echo $data["title"];// In ra title bài viết ?></b>
							<p><?php echo substr($data["content"], 0, 100)." ...";// In ra nội dung bài viết lấy chỉ 100 ký tự ?></p>
							<a href="display.php?id=<?php echo $data["id"]; // Tạo liên kết đến trang display.php và truyền vào id bài viết ?>"> Xem thêm</a>
						</td>
					
					<?php
							$i++;
						}
					?>
				</table>	
			</div>
		</main>
		
		<nav>
			<div class="innertube">
				<h3>Chức Năng </h3>
				<ul>
					<li><a href="dang-nhap.php">Đăng Nhập</a></li>
					<li><a href="dang-ky.php">Đăng Ký</a></li>
					
				</ul>
				<h3>Cập Nhập Danh Mục</h3>
				<ul>
					<li><a href="them-thanh-vien.php">Thêm Thành Viên</a></li>
                    <li><a href="them-bai-viet.php">Thêm Bài Viết</a></li>

					
				</ul>
				<h3>Quản Lý Thành Viên</h3>
				<ul>
					<li><a href="quan-ly-thanh-vien.php">Hiển Thị Thành Viên</a></li>
					<li><a href="chinh-sua-thanh-vien.php">Sửa Thành Viên</a></li>
					<li><a href="quan-ly-thanh-vien.php">Xóa Thành Viên</a></li>					
				</ul>

			</div>
		</nav>
<?php include "includes/footer.php" ?>