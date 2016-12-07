<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$csdl = "mydb";
	$connection = mysqli_connect($servername, $username, $password, $csdl);

	$sql_bill = "select * from bill where bill_id = 'HD02'"; 
	$sql_detail_bill = "select * from detail_bill where bill_bill_id = 'HD02'";
	
	$hoadon = mysqli_query($connection, $sql_bill);
	$row_hoadon = mysqli_fetch_array($hoadon);
	
	$chitiet = mysqli_query($connection, $sql_detail_bill);
	$row_chitiet = mysqli_fetch_array($chitiet);
?>
<form action="modules/hoadon/xuly.php" method="post" enctype="multipart/form-data">
<table width="auto" height="100px" border="1">
  <tr>
    <td colspan="5" align="center" height="50px">Sửa Đơn Hàng</td>    
  </tr>
  <tr>
    <td width="130" height="40px">Mã Hóa Đơn</td>
    <td><input type="text" name="bill_id" id="bill_id" value="<?php echo $row_hoadon['bill_id'] ?>"></td>
  </tr>
  <tr>
    <td width="130" height="40px">Mã khách hàng</td>
    <td><input type="text" name="customer_id" id="customer_id" value="<?php echo $row_hoadon['customer_customer_id'] ?>"></td>
  </tr>
  <tr>
    <td width="130" height="40px">Tên khách hàng</td>
    <td><input type="text" name="customer_name" id="customer_name" value="<?php echo $row_hoadon['customer_name'] ?>"></td>
  </tr>
  <tr>
    <td width="130" height="40px">Thời gian</td>
    <td><input type="text" name="bill_time" id="bill_time" value="<?php echo $row_hoadon['bill_time'] ?>"></td>
  </tr>
  <tr>
    <td width="130" height="40px">Mã sản phẩm</td>
    <td><input type="text" name="product_id" id="product_id" value="<?php echo $row_chitiet['product_product_id'] ?>"></td>
  </tr>
  <tr>
    <td width="130" height="40px">Tên sản phẩm</td>
    <td><input type="text" name="product_name" id="product_name" value="<?php echo $row_chitiet['product_name'] ?>"></td>
  </tr>
  <tr>
    <td width="130" height="40px">Loại sản phẩm</td>
    <td><input type="text" name="type_name" id="type_name" value="<?php echo $row_chitiet['type_name'] ?>"></td>
  </tr>
  <tr>
    <td width="130" height="40px">Số lượng</td>
    <td><input type="text" name="number" id="number" value="<?php echo $row_chitiet['number'] ?>"></td>
  </tr>
  <tr>
    <td width="130" height="40px">Giá sản phẩm</td>
    <td><input type="text" name="price" id="price" value="<?php echo $row_chitiet['price'] ?>"></td>
  </tr>
  <tr>
    <td width="130" height="40px">Đơn giá</td>
    <td><input type="text" name="sum_price" id="sum_price" value="<?php echo $row_chitiet['sum_price'] ?>"></td>
  </tr>
  <tr width="auto" height="40px" align="center">
    <td colspan="2">
    <input type="submit" name="sua" value="Sửa">    </td>
  </tr>
</table>
</form>



