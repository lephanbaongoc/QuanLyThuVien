<?php
      // 1. Kết nối CSDL
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "qlthuvien";
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Thiết lập cho tiếng Việt
  mysqli_set_charset($conn, 'utf8');

  // 1. Kiểm tra kết nối
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
?>