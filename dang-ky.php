<?php include "includes/header.php" ?>
<?php require_once("includes/connection.php"); ?>
<?php
	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$username = $_POST["username"];
		$password = $_POST["pass"];
		$name = $_POST["name"];
		$email = $_POST["email"];
		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if ($username == "" || $password == "" || $name == "" || $email == "") {
			echo "Bạn vui lòng nhập đầy đủ thông tin";
		}else{
			$sql = "INSERT INTO users(username, password, fullname, email, createdate ) VALUES ( '$username', '$password', '$name', '$email', now())";
			// thực thi câu $sql với biến conn lấy từ file connection.php
			mysqli_query($conn,$sql);
			echo "Chúc mừng bạn đã đăng ký thành công";
		}
	}

?>

	<form action="dang-ky.php" method="post" >
	
		<table style="margin-left:auto;margin-right:auto;margin-top:40px;">
			<tr>
				<td colspan="2" align="center" ><b><big>Form Đăng Ký</b></td>
			</tr>	
			<tr>
				<td style="font-size:22px">Username :</td>
				<td><input type="text" id="username" name="username" placeholder="Mời nhập tên" style="margin-top:10px;margin-bottom:10px"></td>
			</tr>
			<tr>
				<td style="font-size:22px">Password :</td>
				<td><input type="password" id="pass" name="pass" placeholder="Mật khẩu từ 6 đến 20 ký tự" style="margin-top:10px;margin-bottom:10px"></td>
			</tr>
			<tr>
				<td style="font-size:22px">Họ Tên :</td>
				<td><input type="text" id="name" name="name" style="margin-top:10px;margin-bottom:10px"></td>
			</tr>
			<tr>
				<td style="font-size:22px">Email :</td>
				<td><input type="text" id="email" name="email" placeholder="Mời nhập email" style="margin-top:10px;margin-bottom:10px" ></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Đăng Ký" style="font-size:17px;margin-top:10px"></td>
			</tr>

		</table>
		
	</form>

	<!--Dùng thẻ </main> trước khi include menu.php --> 
</main>

<?php include ("includes/menu.php") ?>
<?php include "includes/footer.php" ?>