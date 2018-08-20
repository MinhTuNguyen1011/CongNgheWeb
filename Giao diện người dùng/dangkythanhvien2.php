<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="JQ.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<title>DangKyThanhVien</title>
</head>
<body>
<div id=”wrapper” >

<div id="content" style="margin-left:500px">
            <div class="body">
            <br>


                    <center><h1>ĐĂNG KÝ THÀNH VIÊN</h1></center>
                    <form name="xuly" action="" method="post">
                    <table border="0" cellpadding="0" cellspacing="0">
                    <tr class="table">
                        <td class="left"><p>Tên đăng nhập * </p></td>
                        <td class="right" ><p><input type="text" id="tendangnhap"  placeholder="Mời nhập tên"  ></p></td>
                    </tr>
                    <tr class="table">
                        <td class="left"><p>Mật khẩu *</p></td>
                        <td class="right"><p><input type="password" name="matkhau" placeholder="Mật khẩu từ 6 đến 20 ký tự"></p></td>
                    </tr>
                    <tr class="table">
                        <td class="left"><p>Nhập lại mật khẩu *</p></td>
                        <td class="right"><p><input type="password" name="lapmatkhau" placeholder="Mời nhập lại mật khẩu"></p></td>
                    </tr>
                    
                    <tr class="table">
                        <td class="left"><p>Họ và tên *</p></td>
                        <td class="right"><p><input type="text" name="hoten" placeholder="Mời nhập họ tên"></p></td>
                    </tr>
                    <tr class="table">
                            <td class="left"><p>Ngày sinh *</p></td>
                            <td class="right"><p><input type="date" name="Ngaysinh"></p></td>
                        </tr>
                    <tr class="table">
                            <td class="left"><p>Địa chỉ *</p></td>
                            <td class="right"><p><textarea style="height:25px;width:auto" name="diachi"></textarea></p></td>
                        </tr>
                    <tr class="table">
                            <td class="left"><p>Điện thoại *</p></td>
                            <td class="right"><p><input type="number" name="dienthoai" placeholder="0"></p></td>
                        </tr>
                    <tr class="table">
                            <td class="left"><p>Email</p></td>
                            <td class="right"><p><input type="text" name="email" placeholder="ví dụ: abc@gmail.com"></p></td>
                        </tr>
                    <tr class="table">
                            <td class="left"><p>Facebook *</p></td>
                            <td class="right"><p><input type="text" name="Facebook" placeholder="link url"></p></td>
                    </tr>    
                    <tr class="table">
                        <td class="left"><p>Giới tính *</p></td>
                        <td class="right"><p><input type="radio" checked name="gioitinh"> Nam <input type="radio" name="gioitinh"> Nữ</p></td>
                    </tr>
                                 
                    <tr>
                    <td colspan="2">
                      <center><input type="button" value="Đăng Ký"  id="dangky">  <input type="reset" value="Làm lại" name="lamlai"></center>
                    </td>
                    </tr>
                    </table>
                    </form>
                    </div>
    </div>
    </div>
    
</div>
<script src="JQuery.js"></script>
</body>  
</html>  