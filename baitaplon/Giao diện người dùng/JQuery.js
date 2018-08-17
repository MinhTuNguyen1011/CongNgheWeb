var $dangky=document.getElementById('dangky');
$dangky.addEventListener('click',KiemTra,false);

 
 function KiemTra(){
    tendangnhap = document.xuly.tendangnhap.value;
    matkhau=document.xuly.matkhau.value;
    lapmatkhau = document.xuly.lapmatkhau.value;
    hoten = document.xuly.hoten.value; 
    diachi = document.xuly.diachi.value;
    dienthoai = document.xuly.dienthoai.value; 
    email = document.xuly.email.value; 
    
     var emailReg =/[\w.]*[\w]@[\w][\w.]*\.[\w][\w]*/;
     var regex = new RegExp(emailReg);

    if(tendangnhap.length==0){
    alert("Ten dang nhap khong duoc rong.");
    document.xuly.tendangnhap.focus();
}
else if(matkhau.length>20 , matkhau.length<6){
    alert('Mat khau phai tu 6 den 20 ki tu');
    document.xuly.matkhau.focus();
}
else if(lapmatkhau!=matkhau){
    alert('Mat khau khong khop');
    document.xuly.lapmatkhau.focus();
}
else if(hoten.length==0){
    alert('Ho ten khong duoc rong');
    document.xuly.hoten.focus();
}
else if(diachi.length==0){
    alert('Dia chi khong duoc rong');
    document.xuly.diachi.focus();
}
else if(dienthoai.length<10){
    alert('So dien thoai khong hop le');
}
else if(dienthoai.length >11){
    alert('So dien thoai khong hop le');
}
else if(!regex.test(email)){
    alert("Email khong hop le.");
    document.xuly.email.focus();
}
else 
alert('Chuc mung ban da tro thanh thanh vien cua website');
}