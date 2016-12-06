<div class="content">
     
        	<?php
				if(isset($_GET['quanly'])){
					$tam=$_GET['quanly'];
				}else{
					$tam='';
				}
				
				if($tam=='hoadon'){
					echo '<h2 align="center" style="line-height:50px">Hóa Đơn</h2>';
					include('modules/hoadon/main.php');
				}else if($tam=='sanpham'){
					echo '<h2 align="center" style="line-height:50px">Sản Phẩm</h2>';
					include('modules/sanpham/main.php');
				}else if($tam=='loai'){
					echo '<h2 align="center" style="line-height:50px">Loại Sản Phẩm</h2>';
					include('modules/loai/main.php');
				}else if($tam=='khachhang'){
					echo '<h2 align="center" style="line-height:50px">Khách Hàng</h2>';
					include('modules/khachhang/main.php');
				}else{
					echo '<h2 align="center">Chào mừng đến trang quản trị bán hàng</h2>';
					
				}
			?>
        
     
</div>