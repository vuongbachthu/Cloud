<div class="content_left">
<?php

	if(isset($_GET['ac'])){
		$tam=$_GET['ac'];
	}else{
		$tam='';
	}
	if($tam=='them'){
		include('modules/khachhang/them.php');
	}else if($tam=='sua'){
		include('modules/khachhang/sua.php');
	}
?>
</div>
<div class="content_right">
	<?php
		include('modules/khachhang/search.php');
		include('modules/khachhang/lietke.php');
	?>
</div>