<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$csdl = "mydata";
		$connection = mysqli_connect($servername, $username, $password, $csdl);
		
		$type_id = $_POST['type_id'];
		$product_type = $_POST['product_type'];
		
	if(isset($_POST['them'])){
		//them
		
		$sql="insert into type(type_id, product_type) value('$type_id', '$product_type')";
		mysqli_query($connection, $sql) or die('ko the insert');
		header('location:../../index.php?quanly=loai&ac=them');
	}elseif(isset($_POST['sua'])){
		//sua
		$sql="update type set type_id ='$type_id', product_type='$product_type' where type_id='$type_id'";
		
		mysqli_query($connection, $sql) or die('ko the Update');
		header('location:../../index.php?quanly=loai&ac=sua&id='.$type_id);
	}else if(isset($_POST['xoa'])){
	//xóa
		$sql="delete from type where type_id = 'L03'";
		mysqli_query($connection, $sql);
		header('location:../../index.php?quanly=loai&ac=sua&id='.$type_id);
	}
?>