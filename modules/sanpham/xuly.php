<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$csdl = "mydata";
		$connection = mysqli_connect($servername, $username, $password, $csdl);
		
		$product_id = $_POST['product_id'];
		$product_name = $_POST['product_name'];
		$product_price = $_POST['product_price'];
		$product_type = $_POST['product_type'];
		$type_id = $_POST['type_id'];
		
        
	if(isset($_POST['them'])){
		//them
		$sql="insert into products (product_id, product_name, product_price, product_type, type_id) values('$product_id','$product_name','$product_price','$product_type','$type_id')";
		mysqli_query($connection, $sql) or die('ko the insert');
		header('location:../../index.php?quanly=sanpham&ac=them');
	}else if(isset($_POST['sua'])){
		//sua

		$sql="update products set product_id ='$product_id', product_name='$product_name', product_price='$product_price', product_type='$product_type', type_id='$type_id' where product_id='$product_id'";
		
		mysqli_query($connection, $sql) or die('ko the Update');
		header('location:../../index.php?quanly=sanpham&ac=sua&id='.$product_id);
	}else if(isset($_POST['xoa'])){
		//xóa
		$sql="delete from products where product_id = 'SP03'";
		mysqli_query($connection, $sql);
		header('location:../../index.php?quanly=sanpham&ac=sua&id='.$product_id);
	}
?>