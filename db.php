<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seat_booking";

// 建立資料庫連接
$conn = new mysqli($servername, $username, $password, $dbname);

// 檢查資料庫連接是否成功
if ($conn->connect_error) {
    die("資料庫連接失敗: " . $conn->connect_error);
}
?>
