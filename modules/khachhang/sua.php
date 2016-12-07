<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$csdl = "mydb";
	$connection = mysqli_connect($servername, $username, $password, $csdl);

	$sql="select * from customer where customer_id = 'KH01'"; 
	$khachhang = mysqli_query($connection, $sql);
	$dong = mysqli_fetch_array($khachhang);
?>
<form action="modules/khachhang/xuly.php" method="post" enctype="multipart/form-data">
<table width="auto" height="100px" border="1">
  <tr>
    <td colspan="5" align="center" height="50px">Sửa khách hàng</td>
  </tr>
  <tr>
    <td width="130" height="40px">Mã khách hàng</td>
    <td>
    <input type="text" name="customer_id" id="customer_id" value="<?php echo $dong['customer_id'] ?>"></td>
  </tr>
  <tr>
    <td width="130" height="40px">Tên khách hàng</td>
    <td>
      <input type="text" name="customer_name" id="customer_name" value="<?php echo $dong['customer_name'] ?>"></td>
  </tr>
  <tr>
    <td width="130" height="40px">Địa chỉ</td>
    <td>
    <input type="text" name="customer_address" id="customer_address" value="<?php echo $dong['customer_address'] ?>"></td>
  </tr>
  <tr>
    <td width="130" height="40px">Số điện thoại</td>
    <td>
      <input type="text" name="customer_phone" id="customer_phone" value="<?php echo $dong['customer_phone'] ?>"></td>
  </tr>
  <tr width="auto" height="40px" align="center">
    <td colspan="2">
    <input type="submit" name="sua" value="Sửa">    </td>
  </tr>
</table>
</form>



