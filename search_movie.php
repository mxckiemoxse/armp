<?php
// เชื่อมต่อฐานข้อมูล
include('db_connect.php'); // เรียกใช้ไฟล์ที่เชื่อมต่อกับฐานข้อมูล

// ตรวจสอบว่ามีคำค้นหามาหรือไม่
if (isset($_GET['query'])) {
    $search = $_GET['query'];

    // คำสั่ง SQL สำหรับค้นหาชื่อหนัง
    $sql = "SELECT * FROM movies WHERE title LIKE '%$search%'";
    $result = $conn->query($sql);

    // แสดงผลลัพธ์การค้นหา
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ชื่อหนัง: " . $row['title'] . "<br>";
        }
    } else {
        echo "ไม่พบชื่อหนังที่ค้นหา";
    }
}
?>
