<html>
    <head>
        <title>Demo Search Basic by freetuts.net</title>
    </head>
    <body>
        <div align="left">
            <form action="modules/hoadon/search.php" method="get">
                Nhập tên: <input type="text" name="search" />
                <input type="submit" name="ok" value="search" />
            </form>
        </div>
        <?php
        // Nếu người dùng submit form thì thực hiện
        if (isset($_REQUEST['ok'])) 
        {
            // Gán hàm addslashes để chống sql injection
            $search = addslashes($_GET['search']);
 
            // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
            if (empty($search)) {
                echo "Yeu cau nhap du lieu vao o trong";
            } 
            else
            {
                // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
                $query = "select * from bill where customer_name like '%$search%'";
 
                // Kết nối sql
                $servername = "localhost";
				$username = "root";
				$password = "";
				$csdl = "mydata";
				$connection = mysqli_connect($servername, $username, $password, $csdl);
 
                // Thực thi câu truy vấn
                $sql = mysqli_query($connection,$query);
 
                // Đếm số đong trả về trong sql.
                $num = mysqli_num_rows($sql);
 
                // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                if ($num > 0 && $search != "") 
                {
                    // Dùng $num để đếm số dòng trả về.
                    echo "$num ket qua tra ve voi tu khoa <b>$search</b>";
 
                    // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                    echo '<table border="1" cellspacing="0" cellpadding="10">
					<tr>
					<td width="100" height="50" align="center">Mã hóa đơn</td>
					<td width="150" height="50" align="center">Mã khách hàng</td>
					<td width="150" height="50" align="center">Tên khách hàng</td>
					<td width="100" height="50" align="center">Đơn giá</td>
					<td width="100" height="50" align="center">Thời gian</td>
					
				  </tr>';
                    while ($row = mysqli_fetch_assoc($sql)) {
                        echo '<tr>';
							echo "<td>{$row['bill_id']}</td>";
                            echo "<td>{$row['customer_id']}</td>";
                            echo "<td>{$row['customer_name']}</td>";
                            echo "<td>{$row['bill_time']}</td>";
                            echo "<td>{$row['bill_price']}</td>";
                          
                        echo '</tr>';
                    }
                    echo '</table>';
                } 
                else {
                    echo "Khong tim thay ket qua!";
                }
            }
        }
        ?>   
    </body>
</html>
<br/>
<br/>