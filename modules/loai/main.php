<div class="content_left">
<?php

	if(isset($_GET['ac'])){
		$tam=$_GET['ac'];
	}else{
		$tam='';
	}
	if($tam=='them'){
		include('modules/loai/them.php');
	}else if($tam=='sua'){
		include('modules/loai/sua.php');
	}
?>
</div>
<div class="content_right">
	<?php
		include('modules/loai/lietke.php');
	?>
</div>