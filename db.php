<?php
// db.php - 只在這裡開啟一次連接
$servername = "13.54.4.168"; // 資料庫伺服器
$username = "root";        // 資料庫用戶名
$password = "root";            // 資料庫密碼
$dbname = "seat_booking";  // 資料庫名稱

// 創建連接
$conn = new mysqli($servername, $username, $password, $dbname);

// 檢查連接是否成功
if ($conn->connect_error) {
    die("資料庫連接失敗: " . $conn->connect_error);
}

// 不要在此處關閉連接，讓它在其他地方被正常使用
?>
