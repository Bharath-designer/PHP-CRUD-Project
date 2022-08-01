
<?php
$id = $_GET['id'];
$conn = new mysqli('localhost', 'root', '', 'student_db');
$sql = "DELETE FROM users where id=$id";
$result = mysqli_query($conn, $sql);
// $rows = mysqli_fetch_assoc($result);
// $user_data = 'edtname=' . $rows['name'] . '&edtemail=' . $rows['email'];

header("location: read.php");


?>