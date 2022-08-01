<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>

<?php
$id = $_GET['id'];
$conn = new mysqli('localhost', 'root', '', 'student_db');
$sql = "SELECT * FROM users where id=$id";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_assoc($result);
$user_data = 'edtname=' . $rows['name'] . '&edtemail=' . $rows['email'];

header("location: index.php?$user_data");


?>