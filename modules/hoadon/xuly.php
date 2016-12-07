<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$csdl = "mydb";
		$connection = mysqli_connect($servername, $username, $password, $csdl);
		
		$bill_id = $_POST['bill_id'];
		$customer_id = $_POST['customer_id'];
		$customer_name = $_POST['customer_name'];
		$customer_address = $_POST['customer_address'];
		$customer_phone = $_POST['customer_phone'];
		
		$bill_time = $_POST['bill_time'];
		
		$product_id = $_POST['product_id'];
		$product_name = $_POST['product_name'];
		$type_name = $_POST['type_name'];
		$number = $_POST['number'];
		$price = $_POST['price'];
		$sum_price = $_POST['sum_price'];
		
		
	if(isset($_POST['them'])){
		// Them Khach hang
		$sql_customer = "insert into customer (customer_id, customer_name, customer_address, customer_phone) value ('$customer_id', '$customer_name', '$customer_address', '$customer_phone')";
		
		//them bill
		$sql_bill = "insert into bill (bill_id, customer_name, bill_price, bill_time, customer_customer_id) value('$bill_id', '$customer_name', '$sum_price', '$bill_time', '$customer_id')";
		
		// Them Detail bill
		$sql_detail_bill = "insert into detail_bill(bill_bill_id, customer_id, product_product_id, product_name, type_name, number, price, sum_price) value('$bill_id', '$customer_id', '$product_id', '$product_name', '$type_name', '$number', '$price', '$sum_price')";
		
		mysqli_query($connection, $sql_customer) or die('ko the insert sql_customer');
		mysqli_query($connection, $sql_bill) or die('ko the insert sql_bill');
		mysqli_query($connection, $sql_detail_bill) or die('ko the insert sql_detail_bill');
		
		header('location:../../index.php?quanly=hoadon&ac=them');
	}elseif(isset($_POST['sua'])){
		
		//sua bill
		$sql_bill = "update bill set bill_id ='$bill_id', customer_name='$customer_name', bill_price ='$sum_price', bill_time = '$bill_time', customer_customer_id ='$customer_id' where bill_id='$bill_id'";
		
		// Detail bill
		$sql_detail_bill = "update detail_bill set bill_bill_id ='$bill_id', customer_id='$customer_id', product_product_id ='$product_id', product_name ='$product_name', type_name = '$type_name', number = '$number', price='$price', sum_price = '$sum_price'  where bill_bill_id='$bill_id'";
		
		
		mysqli_query($connection, $sql_bill) or die('ko the Update sql_bill');
		mysqli_query($connection, $sql_detail_bill) or die('ko the Update sql_detail_bill');
		header('location:../../index.php?quanly=hoadon&ac=sua&id='.$type_id);
	}else if(isset($_POST['xoa'])){
	//xóa
		$sql_customer = "delete from customer where customer_id = 'KH04'";
		$sql_bill = "delete from bill where bill_id = 'HD04'";
		$sql_detail_bill = "delete from detail_bill where bill_bill_id = 'HD04'";
		
		
		mysqli_query($connection, $sql_detail_bill);
		mysqli_query($connection, $sql_bill);
		mysqli_query($connection, $sql_customer);
		
		header('location:../../index.php?quanly=hoadon&ac=sua&id='.$bill_id);
	}
?>