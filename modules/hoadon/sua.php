<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$csdl = "mydata";
	$connection = mysqli_connect($servername, $username, $password, $csdl);

	$sql_customer = "select * from customer where customer_id = '$_GET[id]'";
	$sql_bill = "select * from bill where bill_id = '$_GET[id]'"; 
	$sql_detail_bill = "select * from detail where bill_id = '$_GET[id]'";
	
	$khachhang = mysqli_query($connection, $sql_customer);
	$row_khachhang = mysqli_fetch_array($khachhang);
	
	$hoadon = mysqli_query($connection, $sql_bill);
	$row_hoadon = mysqli_fetch_array($hoadon);
	
	$chitiet = mysqli_query($connection, $sql_detail_bill);
	$row_chitiet = mysqli_fetch_array($chitiet);
?>
<form action="modules/hoadon/xuly.php" method="post" enctype="multipart/form-data">
<table width="auto" height="100px" border="1">
  <tr>
    <td colspan="5" align="center" height="50px">Chi Tiết Đơn Hàng</td>    
  </tr>
  <tr>
    <td width="130" height="40px">Mã Hóa Đơn</td>
    <td><input type="text" name="bill_id" id="bill_id" value="<?php echo $row_hoadon['bill_id'] ?>"></td>
  </tr>
  <tr>
    <td width="130" height="40px">Mã khách hàng</td>
    <td><input type="text" name="customer_id" id="customer_id" value="<?php echo $row_khachhang['customer_id'] ?>"></td>
  </tr>
  <tr>
    <td width="130" height="40px">Tên khách hàng</td>
    <td><input type="text" name="customer_name" id="customer_name" value="<?php echo $row_khachhang['customer_name'] ?>"></td>
  </tr>
  <tr>
    <td width="130" height="40px">Địa chỉ</td>
    <td><input type="text" name="customer_address" id="customer_address" value="<?php echo $row_khachhang['customer_address'] ?>"></td>
  </tr>
  <tr>
    <td width="130" height="40px">Số điện thoại</td>
    <td><input type="text" name="customer_phone" id="customer_phone" value="<?php echo $row_khachhang['customer_phone'] ?>"></td>
  </tr>
  
  <tr>
    <td width="130" height="40px">Thời gian</td>
    <td><input type="text" name="bill_time" id="bill_time" value="<?php echo $row_hoadon['bill_time'] ?>"></td>
  </tr>
  <tr>
    <td width="130" height="40px">Mã sản phẩm</td>
    <td><input type="text" name="product_id" id="product_id" value="<?php echo $row_chitiet['product_id'] ?>"></td>
  </tr>
  <tr>
    <td width="130" height="40px">Tên sản phẩm</td>
    <td><input type="text" name="product_name" id="product_name" value="<?php echo $row_chitiet['product_name'] ?>"></td>
  </tr>
  <tr>
    <td width="130" height="40px">Loại sản phẩm</td>
    <td><input type="text" name="product_type" id="product_type" value="<?php echo $row_chitiet['product_type'] ?>"></td>
  </tr>
  <tr>
    <td width="130" height="40px">Số lượng</td>
    <td><input type="text" name="product_number" id="product_number" value="<?php echo $row_chitiet['product_number'] ?>"></td>
  </tr>
  <tr>
    <td width="130" height="40px">Giá sản phẩm</td>
    <td><input type="text" name="product_price" id="product_price" value="<?php echo $row_chitiet['product_price'] ?>"></td>
  </tr>
  <tr>
    <td width="130" height="40px">Đơn giá</td>
    <td><input type="text" name="bill_price" id="bill_price" value="<?php echo $row_hoadon['bill_price'] ?>"></td>
  </tr>
  <tr width="auto" height="40px" align="center">
    <td colspan="2">
		<input type="submit" name="sua" value="Sửa"> 
		<input type="submit" name="xoa" value="Xóa"> 
	</td>
  </tr>
</table>
</form>



