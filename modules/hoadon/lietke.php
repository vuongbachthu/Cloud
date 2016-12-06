<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$csdl = "mydb";
	$connection = mysqli_connect($servername, $username, $password, $csdl);
	
	$sql = "select * from bill";
	$hoadon = mysqli_query($connection, $sql);
?>
<table width="auto" height="200" border="1">
  <tr>
    <td colspan="8"><div align="center">Danh sách đơn hàng</div></td>
  </tr>
  <tr>
    <td width="50" align="center">STT</td>
    <td width="100" align="center">Mã hóa đơn</td>
    <td width="150" align="center">Tên khách hàng</td>
	<td width="100" align="center">Đơn giá</td>
	<td width="100" align="center">Thời gian</td>
	<td width="100" align="center">Mã khách hàng</td>
	<td colspan="2" align="center">Quản lý</td>
  </tr>
    <?php
   	$stt=0;
  	while($dong = mysqli_fetch_array($hoadon)){
  ?>
  <tr>

    <td align="center"><?php echo $stt ?></td>
    <td align="center"><?php echo $dong['bill_id'] ?> </td>
	<td align="center"><?php echo $dong['customer_name'] ?> </td>
	<td align="center"><?php echo $dong['bill_price'] ?> </td>
	<td align="center"><?php echo $dong['bill_time'] ?> </td>
	<td align="center"><?php echo $dong['customer_customer_id'] ?> </td>
	
    <td width="60" align="center"><a href="index.php?quanly=hoadon&ac=sua&id=<?php echo $dong['bill_id'] ?>">Chi tiết</a></td>
    <td width="50" align="center">
		<form action="modules/hoadon/xuly.php?id=<?php echo $dong['bill_id'] ?>" method="post" enctype="multipart/form-data">
			<input type="submit" name="xoa" value="Xoa">
		</form>
	</td>
  </tr>
  <?php
  $stt++;
	}
  ?>
</table>

