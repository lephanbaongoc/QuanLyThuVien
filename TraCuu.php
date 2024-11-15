<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "qlthuvien";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $keyword = $_POST['keyword'];
    $category = $_POST['category'];


    $sql = "";
    if ($category == "docgia") {
        $sql = "SELECT * FROM docgia WHERE MaDG LIKE '%$keyword%' OR TenDG LIKE '%$keyword%' OR DiaChi LIKE '%$keyword%'";
    } elseif ($category == "sach") {
        $sql = "SELECT * FROM sach WHERE MaSach LIKE '%$keyword%' OR TenSach LIKE '%$keyword%'";
    } elseif ($category == "muon") {
        $sql = "SELECT muon.*, docgia.TenDG, sach.TenSach 
                FROM muon
                JOIN docgia ON muon.MaDG = docgia.MaDG
                JOIN sach ON muon.MaSach = sach.MaSach
                WHERE docgia.TenDG LIKE '%$keyword%' OR sach.TenSach LIKE '%$keyword%'";
    } elseif ($category == "tra") {
        $sql = "SELECT tra.*, docgia.TenDG, sach.TenSach 
                FROM tra
                JOIN docgia ON tra.MaDG = docgia.MaDG
                JOIN sach ON tra.MaSach = sach.MaSach
                WHERE docgia.TenDG LIKE '%$keyword%' OR sach.TenSach LIKE '%$keyword%'";
    }


    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        echo "<h2>Kết quả tìm kiếm</h2><table border='1'><tr>";


        if ($category == "docgia") {
            echo "<th>Mã Độc Giả</th><th>Tên Độc Giả</th><th>Ngày Sinh</th><th>Giới Tính</th><th>Địa Chỉ</th><th>Ngày Cấp Thẻ</th><th>Hạn Dùng Thẻ</th>";
        } elseif ($category == "sach") {
            echo "<th>Mã Sách</th><th>Tên Sách</th><th>Loại Sách</th><th>Nhà Xuất Bản</th><th>Ngôn Ngữ</th><th>Số Lượng</th><th>Kích Cỡ</th><th>Số Trang</th><th>Giá Tiền</th>";
        } elseif ($category == "muon" || $category == "tra") {
            echo "<th>Mã Độc Giả</th><th>Tên Độc Giả</th><th>Tên Sách</th><th>Ngày Mượn/Trả</th><th>Số Lượng Mượn/Trả</th>";
            if ($category == "tra") echo "<th>Tiền Phạt</th><th>Số Lượng Hỏng</th>";
        }
        echo "</tr>";

        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            if ($category == "docgia") {
                echo "<td>" . $row["MaDG"] . "</td><td>" . $row["TenDG"] . "</td><td>" . $row["NgaySinh"] . "</td><td>" . $row["GioiTinh"] . "</td><td>" . $row["DiaChi"] . "</td><td>" . $row["NgayCapThe"] . "</td><td>" . $row["HanDungThe"] . "</td>";
            } elseif ($category == "sach") {
                echo "<td>" . $row["MaSach"] . "</td><td>" . $row["TenSach"] . "</td><td>" . $row["MaLoaiSach"] . "</td><td>" . $row["MaNXB"] . "</td><td>" . $row["MaNN"] . "</td><td>" . $row["SoLuong"] . "</td><td>" . $row["KichCo"] . "</td><td>" . $row["SoTrang"] . "</td><td>" . $row["GiaTien"] . "</td>";
            } elseif ($category == "muon") {
                echo "<td>" . $row["MaDG"] . "</td><td>" . $row["TenDG"] . "</td><td>" . $row["TenSach"] . "</td><td>" . $row["NgayMuon"] . "</td><td>" . $row["SL_Muon"] . "</td>";
            } elseif ($category == "tra") {
                echo "<td>" . $row["MaDG"] . "</td><td>" . $row["TenDG"] . "</td><td>" . $row["TenSach"] . "</td><td>" . $row["NgayTra"] . "</td><td>" . $row["SL_Tra"] . "</td><td>" . $row["TienPhat"] . "</td><td>" . $row["SL_Hong"] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Không tìm thấy kết quả nào.</p>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tra cứu thư viện</title>
</head>
<body>
<h1>Tra cứu thư viện</h1>
<form method="post" action="TraCuu.php">
    <label for="keyword">Từ khóa:</label>
    <input type="text" name="keyword" id="keyword" required>
    <label for="category">Loại tìm kiếm:</label>
    <select name="category" id="category">
        <option value="docgia">Độc Giả</option>
        <option value="sach">Sách</option>
        <option value="muon">Mượn</option>
        <option value="tra">Trả</option>
    </select>
    <button type="submit">Tìm kiếm</button>
</form>
</body>
</html>
