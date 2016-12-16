<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$csdl = "mydata";
	$connection = mysqli_connect($servername, $username, $password, $csdl);
	
	$sql = "select * from bill";
	$hoadon = mysqli_query($connection, $sql);
?>
<table width="auto" height="auto" border="1">
  <tr>
    <td height="50" colspan="8"><div align="center">Danh sách đơn hàng</div></td>
  </tr>
  <tr>
    <td width="100" height="50" align="center">Mã hóa đơn</td>
	<td width="150" height="50" align="center">Mã khách hàng</td>
    <td width="150" height="50" align="center">Tên khách hàng</td>
	<td width="100" height="50" align="center">Đơn giá</td>
	<td width="100" height="50" align="center">Thời gian</td>
	<td colspan="2" height="50" align="center">Quản lý</td>
  </tr>
    <?php
   	$stt=0;
  	while($dong = mysqli_fetch_array($hoadon)){
  ?>
  <tr>

    <td width="100" height="50" align="center"><?php echo $dong['bill_id'] ?> </td>
	<td width="150" height="50" align="center"><?php echo $dong['customer_id'] ?> </td>
	<td width="150" height="50" align="center"><?php echo $dong['customer_name'] ?> </td>
	<td width="100" height="50" align="center"><?php echo $dong['bill_price'] ?> </td>
	<td width="100" height="50" align="center"><?php echo $dong['bill_time'] ?> </td>
	
    <td width="60" align="center"><a href="index.php?quanly=hoadon&ac=sua&id=<?php echo $dong['bill_id'] ?>">Chi tiết</a></td>
   
  </tr>
  <?php
  $stt++;
	}
  ?>
</table>

