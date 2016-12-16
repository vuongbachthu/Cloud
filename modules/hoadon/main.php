<div class="content_left">
<?php

	if(isset($_GET['ac'])){
		$tam=$_GET['ac'];
	}else{
		$tam='';
	}
	if($tam=='them'){
		include('modules/hoadon/them.php');
	}else if($tam=='sua'){
		include('modules/hoadon/sua.php');
	}
?>
</div>
<div class="content_right">
	<?php
		include('modules/hoadon/search.php');
		include('modules/hoadon/lietke.php');
	?>
</div>