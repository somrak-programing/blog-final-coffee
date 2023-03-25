<?php 
    error_reporting(E_ALL); // เปิด Error ทั้งหมด
    //error_reporting(0); // ปิด error ในกรณีที่เราต้องการแสดง error ของเราเอง
    //เชื่อมต่อ Database
    $conn = new mysqli('localhost','root','','blog_final');
    // ตั้งค่าภาษา ให้รองรับภาษาไทย
    $conn->set_charset('utf8'); 
    if ($conn->connect_errno) {// เช็คว่ามีค่า error code หรือเปล่า
        echo "Connect Error :".$conn->connect_error; // แสดงผล error message
        exit(); // จบการทำงานทุกอย่าง (โปรแกรมปิดตัวลง)
    }
    // ถ้าไม่มี error ให้ปล่อยผ่านไม่ต้องแสดงอะไร แต่เอาแค่ค่าไปใช้งาน
    $base_path_blog = 'assets/images/blog/';
    // ตั้งค่า timezone
    date_default_timezone_set('Asia/Bangkok');
?>

