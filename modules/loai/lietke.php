<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$csdl = "mydb";
	$connection = mysqli_connect($servername, $username, $password, $csdl);
	
	$sql = "select * from type";
	$loai = mysqli_query($connection, $sql);
?>
<table width="auto" height="200" border="1">
  <tr>
    <td colspan="5"><div align="center">Danh sách loại sản phẩm</div></td>
  </tr>
  <tr>
    <td width="70" align="center">STT</td>
    <td width="150" align="center">Mã loại sản phẩm</td>
    <td width="150" align="center">Tên loại sản phẩm</td>
	<td colspan="2" align="center">Quản lý</td>
  </tr>
    <?php
   	$stt=0;
  	while($dong = mysqli_fetch_array($loai)){
  ?>
  <tr>

    <td align="center"><?php echo $stt ?></td>
    <td align="center"><?php echo $dong['type_id'] ?> </td>
	<td align="center"><?php echo $dong['type_name'] ?> </td>
	
    <td width="50" align="center"><a href="index.php?quanly=loai&ac=sua&id=<?php echo $dong['type_id'] ?>">Sửa</a></td>
    <td width="50" align="center">
		<form action="modules/loai/xuly.php?id=<?php echo $dong['type_id'] ?>" method="post" enctype="multipart/form-data">
			<input type="submit" name="xoa" value="Xoa">
		</form>
	</td>
  </tr>
  <?php
  $stt++;
	}
  ?>
</table>

