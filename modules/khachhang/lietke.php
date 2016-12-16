<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$csdl = "mydata";
	$connection = mysqli_connect($servername, $username, $password, $csdl);
	
	$search_id = "Vuong Bach Thu";
	
	$sql = "select * from customer";
	$sql_search = "select * from customer where customer_name LIKE '%$search_id%'";
	$khachhang = mysqli_query($connection, $sql);
	
?>

<table width="auto" height="200" border="1">
  <tr>
    <td colspan="8"><div align="center">Danh sách khách hàng</div></td>
  </tr>
  <tr>
    <td width="70" align="center">Mã khách hàng</td>
    <td width="150" align="center">Tên khách hàng</td>
	<td width="120" align="center">Địa chỉ</td>
	<td width="120" align="center">Số điện thoại</td>
	<td width="120" colspan="2" align="center">Quản lý</td>
  </tr>
    <?php
		while($dong = mysqli_fetch_array($khachhang)){
	?>
  <tr>

    <td align="center"><?php echo $dong['customer_id'] ?> </td>
	<td align="center"><?php echo $dong['customer_name'] ?> </td>
	<td align="center"><?php echo $dong['customer_address'] ?> </td>
	<td align="center"><?php echo $dong['customer_phone'] ?> </td>
	
    <td width="50" align="center"><a href="index.php?quanly=khachhang&ac=sua&id=<?php echo $dong['customer_id'] ?>">Chi tiết</a></td>
    
  </tr>
  <?php
	}
  ?>
</table>

