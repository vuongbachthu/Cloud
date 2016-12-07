<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$csdl = "mydb";
	$connection = mysqli_connect($servername, $username, $password, $csdl);
	$id = $_GET['id'];
	
	$sql = "select * from product where product_id = 'SP01'";
	$sanpham = mysqli_query($connection, $sql);
	$row = mysqli_fetch_array($sanpham);
	
?>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

<form action="modules/sanpham/xuly.php?id=<?php echo $row['product_id'] ?>" method="post" enctype="multipart/form-data">
<table width="auto" height="100px" border="1">
  <tr>
    <td colspan="5" align="center" height="50px">Sửa sản phẩm</td>
  </tr>
  <tr>
    <td width="130" height="40px">Mã sản phẩm</td>
    <td><input type="text" name="product_id" id="product_id" value="<?php echo $row['product_id'] ?>"></td>
	
  </tr>
  <tr>
    <td width="130" height="40px">Tên sản phẩm</td>
    <td>
      <input type="text" name="product_name" id="product_name" value="<?php echo $row['product_name'] ?>"/></td>
  </tr>
  <tr>
    <td width="130" height="40px">Giá</td>
    <td>
      <input type="text" name="product_price" id="product_price" value="<?php echo $row['product_price'] ?>"/></td>
  </tr>
  <tr>
    <td width="130" height="40px">Số lượng</td>
    <td>
      <input type="text" name="product_number" id="product_number" value="<?php echo $row['product_number'] ?>"/></td>
  </tr>
  <tr>
    <td width="130" height="40px">Loại sản phẩm</td>
    <td ><input type="text" name="product_type" id="product_type" value="<?php echo $row['type_type_id'] ?>"/></td>
  </tr>

  <tr width="auto" height="40px" align="center">
    <td colspan="5">
    <input type="submit" name="sua" value="Sửa Sản Phẩm">    </td>
  </tr>
</table>
</form>


