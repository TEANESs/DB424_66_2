<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search product by category</title>
</head>
<body>
  <form>
    <label for="category">
      <select name="category" id="category">
<?php
// ทำข้อสอบหลังจาก comment ของแต่ละข้อdocker run --name db424-web-server -d -p 80:80 -v /mnt/d/<รหัสนักศึกษา>/db424:/var/www/html php:apache
// 1. (2 คะแนน) เขียนคำสั่ง php เพื่อติดต่อฐานข้อมูล northwind
$conn = new mysqli("localhost", "root", "P@ssw0rd", "northwind")
// 2. (3 คะแนน) เขียนคำสั่ง php เพื่อดึงข้อมูล CategoryName และ CategoryID จากตาราง categories
$query = "SELECT CategoryID, CategoryName FROM categories";
$result = $conn->query($query);
// 3. (5 คะแนน) เพิ่ม element option ใน element select เพื่อแสดงตัวเลือกเป็น CategoryName และค่าที่ได้เป็น CategoryID
// ตัวอย่างการเพิ่ม element options
<option value="CategoryID">Beverages</option>
<option value="CategoryID">Condiments</option>
<option value="CategoryID">Confections</option>
<option value="CategoryID">Dairy Products</option>
<option value="CategoryID">Grains/Cereals</option>
<option value="CategoryID">Meat/Poultry</option>
<option value="CategoryID">Produce</option>
<option value="CategoryID">Seafood</option>
if ($result->num_rows > 0) 
     while ($row = $result->fetch_assoc()) 
    $conn->close();
?>

      </select>
    </label>
    <input type="submit" value="Search" name="submit">
  </form>
</body>
</html>