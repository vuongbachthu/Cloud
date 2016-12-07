<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$csdl = "mydb";
		$connection = mysqli_connect($servername, $username, $password, $csdl);
		
		$product_id = $_POST['product_id'];
		$product_name = $_POST['product_name'];
		$product_price = $_POST['product_price'];
		$product_number = $_POST['product_number'];
		$product_type = $_POST['product_type'];
		
        
	if(isset($_POST['them'])){
		//them
		$sql="insert into product (product_id, product_name, product_price, product_number, type_type_id) values('$product_id','$product_name','$product_price','$product_number','$product_type')";
		mysqli_query($connection, $sql) or die('ko the insert');
		header('location:../../index.php?quanly=sanpham&ac=them');
	}else if(isset($_POST['sua'])){
		//sua

		$sql="update product set product_id ='$product_id', product_name='$product_name', product_price='$product_price', product_number='$product_number', type_type_id='$product_type' where product_id='$product_id'";
		
		mysqli_query($connection, $sql) or die('ko the Update');
		header('location:../../index.php?quanly=sanpham&ac=sua&id='.$product_id);
	}else if(isset($_POST['xoa'])){
		//xóa
		$sql="delete from product where product_id = 'SP03'";
		mysqli_query($connection, $sql);
		header('location:../../index.php?quanly=sanpham&ac=sua&id='.$product_id);
	}
?>