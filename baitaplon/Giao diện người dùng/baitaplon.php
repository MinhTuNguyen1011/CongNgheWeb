<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<style type="text/css">
body { margin:1em;}
pre { background-color:#ddd; padding:10px; margin:20px;}
h1 { font-size:large;}
h2 { font-size: medium; color:red;}

</style>
<html> 
<head>
<link rel="stylesheet" href="lienket.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
//Thực hiện ajax cho nút Đăng Nhập
$(document).ready(function(){
    $("#a").click(function(){
        $("#div1").load("index.php");
    });
});
/*//Thực hiện ajax cho nút Đăng Ký
$(document).ready(function(){
    $("#b").click(function(){
        $("#div1").load("dangkythanhvien2.php");
    });
});*/ 
</script>

<title>Hệ Thống Quản Lý Khóa Học</title>
</head>

<body> 

<table>
<tr>
<td rowspan=2 valign=center><img src="../unnamed.jpg" border=1 width=300></a></td>

<td rowspan=2>&nbsp;</td>

<td colspan=3>
  <br>

<h1>Hệ Thống Quản Lý Khóa Học Khoa CNTT</h1>
<h2>Giới thiệu</h2>
Chào mừng bạn đến với hệ thống quản lý khóa học của khoa Công Nghệ Thông Tin - Đại Học Thủy Lợi. 
Chúc bạn có một ngày làm việc hiệu quả.

<tr>
<td valign=bottom>
<a href="http://cse.tlu.edu.vn/">Khoa Công Nghệ Thông Tin</a>
<br><a href="http://www.tlu.edu.vn/">Trường Đại Học Thủy Lợi Hà Nội</a>
<br>
<br>
<br>

</td>

<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

<td valign=bottom>
<br>Văn phòng: Nhà C1 Đại Học Thủy Lợi
<br>Email: <a href="mailto:dhtl(removespam)@tlu.edu">dhtl@tlu.edu.vn</a>
<br>Phone: + 84962552712
<br>Fax:   + 84087245671
</td>
</tr>
</table>
<br>

<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <a href="baitaplon.php" class="lienket">Trang Chủ</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

 <a href="C:/xampp/htdocs/website/index.php" class="lienket">Khóa Học</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

 <a href="baitaplon2.php" class="lienket">Giảng Viên</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

 <a id="a" href="index.php" class="lienket">Đăng Nhập</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

 <a id="b" href="dangkythanhvien2.php" class="lienket">Đăng Ký</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



<div id="div1" style="background-color:cyan" >
<p>
<!--<img src="../anh3.jpg" width="80%" height="100%" style="margin-left:140px"></p>-->
    <p style="font-size:25px;text-align:center;"><big>Đăng Nhập Hệ Thống</big></p>
<?php

include("index.php")

?>

</div>
<div id="footer" style="padding-top:40px;text-align:center;position:relative">&copy;2018 Minh Tú Nguyễn All Rights Reserved</div>

</body>
</html>