<!-- Hướng dẫn kết nối CSDL -> PHP
1. Kết nối CSDL từ PHP
Tạo một file PHP kết nối đến cơ sở dữ liệu, ví dụ: db.php. -->

<?php
$servername = "localhost"; // Tên server của bạn
$username = "root";        // Username MySQL
$password = "";            // Mật khẩu MySQL (nếu có)
$dbname = "BTTH01_CSE485"; // Tên cơ sở dữ liệu

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>

