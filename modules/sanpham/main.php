<div class="content_left">
<?php

	if(isset($_GET['ac'])){
		$tam=$_GET['ac'];
	}else{
		$tam='';
	}
	if($tam=='them'){
		include('modules/sanpham/them.php');
	}else if($tam=='sua'){
		include('modules/sanpham/sua.php');
	}
?>
</div>

<div class="content_right">
	<?php
		include('modules/sanpham/lietke.php');
	?>
</div>