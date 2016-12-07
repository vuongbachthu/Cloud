<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$csdl = "mydb";
	$connection = mysqli_connect($servername, $username, $password, $csdl);

	$sql = "SELECT * FROM product";
	
	$product = mysqli_query($connection, $sql);
?>
<table width="auto" height="200px" border="1">
  <tr>
    <td colspan="8"><div align="center">Danh sách sản phẩm</div></td>
  </tr>
	<td width="50" align="center">STT</td>
    <td width="100" align="center">Mã sản phẩm</td>
    <td width="100" align="center">Tên sản phẩm</td>
    <td width="80" align="center">Giá </td>
    <td width="80" align="center">Số lượng</td>
    <td width="80" align="center">Tên loại</td>
    <td colspan="2" align="center">Quản lý</td>
  </tr>
    <?php
		$stt=0;
		while($dong = mysqli_fetch_array($product)){
	?>
  <tr>

    <td align="center"><?php echo $stt; ?></td>
    <td align="center"><?php echo $dong['product_id'] ?> </td>
    <td align="center"><?php echo $dong['product_name'] ?></td>
    <td align="center"><?php echo $dong['product_price'] ?></td>
    <td align="center"><?php echo $dong['product_number'] ?></td>
    <td align="center"><?php echo $dong['type_type_id'] ?></td>
    <td width="50" align="center"><a href="index.php?quanly=sanpham&ac=sua&id=<?php echo $dong['product_id'] ?>">Sửa</a></td>
    <td width="50" align="center">
		<form action="modules/sanpham/xuly.php?id=<?php echo $row['product_id'] ?>" method="post" enctype="multipart/form-data">
			<input type="submit" name="xoa" value="Xoa">
		</form>
	</td>
  </tr>
  <?php
  $stt++;
	}
  ?>
</table>

