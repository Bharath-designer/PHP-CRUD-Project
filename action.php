<?php


if (isset($_POST['sub'])) {
    function validator($data)
    {
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validator($_POST['name']);
    $email = validator($_POST['email']);

    $user_data = 'name=' . $name . '&email=' . $email;

  

    if (empty($name)) {
        header("Location: index.php?error=Name is Required&$user_data");
    } else if (empty($email)) {
        header("Location: index.php?error=Email is Required&$user_data");
    } else {

        $conn = new mysqli('localhost', 'root', '', 'student_db');
        $sql = "INSERT INTO users (email,name) VALUES('$email','$name')";
        $result = mysqli_query($conn, $sql);


        if ($result) {
            header("Location: index.php?success=Inserted Successfully!");
        } else {
            header("Location: index.php?error=Unknown Error Occured");
        }
    }
} else {
    $uptname = $_POST['name'];
    $uptemail = $_POST['email'];
    echo $uptemail . $uptname;
    $conn = new mysqli('localhost', 'root', '', 'student_db');
    $sql = "UPDATE users SET (email,name) VALUES('$uptemail','$uptname') WHERE id='3'";
    $result = mysqli_query($conn, $sql);

    header("Location: read.php");
}
