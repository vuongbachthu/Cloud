<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$csdl = "mydata";
		$connection = mysqli_connect($servername, $username, $password, $csdl);
		
		
		$customer_id = $_POST['customer_id'];
		$customer_name = $_POST['customer_name'];
		$customer_address = $_POST['customer_address'];
		$customer_phone = $_POST['customer_phone'];
		
		
		$bill_id = $_POST['bill_id'];
		$bill_price = $_POST['bill_price'];
		$bill_time = $_POST['bill_time'];
		
		$product_id = $_POST['product_id'];
		$product_name = $_POST['product_name'];
		$product_type = $_POST['product_type'];
		$product_number = $_POST['product_number'];
		$product_price = $_POST['product_price'];
		
		
		
		
	if(isset($_POST['them'])){
		// Them Khach hang
		$sql_customer = "insert into customer (customer_id, customer_name, customer_address, customer_phone) value ('$customer_id', '$customer_name', '$customer_address', '$customer_phone')";
		
		//them bill
		$sql_bill = "insert into bill (bill_id, customer_id, customer_name, bill_price, bill_time) value('$bill_id', '$customer_id', '$customer_name', '$bill_price', '$bill_time')";
		
		// Them Detail bill
		$sql_detail_bill = "insert into detail(bill_id, product_id, product_name, product_type, product_number, product_price, bill_time, bill_price) value('$bill_id', '$product_id', '$product_name', '$product_type', '$product_number', '$product_price', '$bill_time', '$bill_price')";
		
		mysqli_query($connection, $sql_customer) or die('ko the insert sql_customer');
		mysqli_query($connection, $sql_bill) or die('ko the insert sql_bill');
		mysqli_query($connection, $sql_detail_bill) or die('ko the insert sql_detail_bill');
		
		header('location:../../index.php?quanly=hoadon&ac=them');
	}elseif(isset($_POST['sua'])){
		// Sua KH
		$sql_customer = "update customer set customer_id = '$customer_id', customer_name = '$customer_name', customer_address = '$customer_address', customer_phone = '$customer_phone' where customer_id = '$customer_id'";
		
		//sua bill
		$sql_bill = "update bill set bill_id = '$bill_id', customer_id = '$customer_id', customer_name = '$customer_name', bill_price = '$bill_price', bill_time = '$bill_time' where bill_id = '$bill_id'";
		
		// Detail bill
		$sql_detail = "update detail set bill_id = '$bill_id', product_id = '$product_id', product_name = '$product_name', product_type = '$product_type', product_number = '$product_number', product_price = '$product_price', bill_time = '$bill_time', bill_price = '$bill_price' where bill_id = '$bill_id'";
		
		mysqli_query($connection, $sql_customer) or die('ko the Update sql_customer');
		mysqli_query($connection, $sql_bill) or die('ko the Update sql_bill');
		mysqli_query($connection, $sql_detail) or die('ko the Update sql_detail_bill');
		header('location:../../index.php?quanly=hoadon&ac=sua&id='.$type_id);
	}else if(isset($_POST['xoa'])){
	//xóa
		$sql_customer = "delete from customer where customer_id = '$customer_id'";
		$sql_bill = "delete from bill where bill_id = '$bill_id'";
		$sql_detail = "delete from detail where bill_id = '$bill_id'";
		
		
		mysqli_query($connection, $sql_detail);
		mysqli_query($connection, $sql_bill);
		mysqli_query($connection, $sql_customer);
		
		header('location:../../index.php?quanly=hoadon&ac=sua&id='.$bill_id);
	}
?>