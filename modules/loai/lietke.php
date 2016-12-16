<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$csdl = "mydata";
	$connection = mysqli_connect($servername, $username, $password, $csdl);
	
	$sql = "select * from type";
	$loai = mysqli_query($connection, $sql);
?>
<table width="auto" height="auto" border="1">
  <tr>
    <td height="40" colspan="5"><div align="center">Danh sách loại sản phẩm</div></td>
  </tr>
  <tr>
    <td width="120" height="40" align="center">Mã loại sản phẩm</td>
    <td width="150" height="40" align="center">Tên loại sản phẩm</td>
	<td colspan="2" height="40" align="center">Quản lý</td>
  </tr>
    <?php
  	while($dong = mysqli_fetch_array($loai)){
  ?>
  <tr>

    <td width="120" height="40" align="center"><?php echo $dong['type_id'] ?> </td>
	<td width="120" height="40" align="center"><?php echo $dong['product_type'] ?> </td>
	
    <td width="70" align="center"><a href="index.php?quanly=loai&ac=sua&id=<?php echo $dong['type_id'] ?>">Chi tiết</a></td>
    
  </tr>
  <?php
	}
  ?>
</table>

