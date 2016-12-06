<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$csdl = "mydb";
	$connection = mysqli_connect($servername, $username, $password, $csdl);
	
	$sql = "select * from customer";
	$khachhang = mysqli_query($connection, $sql);
?>
<table width="auto" height="200" border="1">
  <tr>
    <td colspan="8"><div align="center">Danh sách khách hàng</div></td>
  </tr>
  <tr>
    <td width="50" align="center">STT</td>
    <td width="120" align="center">Mã khách hàng</td>
    <td width="150" align="center">Tên khách hàng</td>
	<td width="120" align="center">Địa chỉ</td>
	<td width="120" align="center">Số điện thoại</td>
	<td colspan="2" align="center">Quản lý</td>
  </tr>
    <?php
   	$stt=0;
  	while($dong = mysqli_fetch_array($khachhang)){
  ?>
  <tr>

    <td align="center"><?php echo $stt ?></td>
    <td align="center"><?php echo $dong['customer_id'] ?> </td>
	<td align="center"><?php echo $dong['customer_name'] ?> </td>
	<td align="center"><?php echo $dong['customer_address'] ?> </td>
	<td align="center"><?php echo $dong['customer_phone'] ?> </td>
	
    <td width="50" align="center"><a href="index.php?quanly=khachhang&ac=sua&id=<?php echo $dong['customer_id'] ?>">Sửa</a></td>
    <td width="50" align="center">
		<form action="modules/khachhang/xuly.php?id=<?php echo $dong['customer_id'] ?>" method="post" enctype="multipart/form-data">
			<input type="submit" name="xoa" value="Xoa">
		</form>
	</td>
  </tr>
  <?php
  $stt++;
	}
  ?>
</table>

