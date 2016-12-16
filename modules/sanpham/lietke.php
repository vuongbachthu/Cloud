<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$csdl = "mydata";
	$connection = mysqli_connect($servername, $username, $password, $csdl);

	$sql = "SELECT * FROM products";
	
	$product = mysqli_query($connection, $sql);
?>
<table width="auto" height="auto" border="1">
  <tr>
    <td height="50" colspan="8"><div align="center">Danh sách sản phẩm</div></td>
  </tr>
    <td width="100" height="40" align="center">Mã sản phẩm</td>
    <td width="100" height="40" align="center">Tên sản phẩm</td>
    <td width="80" height="40" align="center">Giá </td>
    <td width="80" height="40" align="center">Tên loại</td>
	<td width="80" height="40" align="center">Mã loại</td>
    <td colspan="2" height="40" align="center">Quản lý</td>
  </tr>
    <?php
		
		while($dong = mysqli_fetch_array($product)){
	?>
  <tr>

    <td width="100" height="40" align="center"><?php echo $dong['product_id'] ?> </td>
    <td width="100" height="40" align="center"><?php echo $dong['product_name'] ?></td>
    <td width="80" height="40" align="center"><?php echo $dong['product_price'] ?></td>
    <td width="80" height="40" align="center"><?php echo $dong['product_type'] ?></td>
    <td width="80" height="40" align="center"><?php echo $dong['type_id'] ?></td>
    <td width="80" height="40" align="center"><a href="index.php?quanly=sanpham&ac=sua&id=<?php echo $dong['product_id'] ?>">Chi tiết</a></td>
    
  </tr>
  <?php
  
	}
  ?>
</table>

