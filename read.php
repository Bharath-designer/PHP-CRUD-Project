<?php

$conn = new mysqli('localhost', 'root', '', 'student_db');
$sql = "SELECT * from users";
$result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        td,
        th {
            text-align: center;
        }
    </style>
</head>

<body>

    <div style="box-sizing:border-box;border: 1px solid grey;max-width: 700px;margin: 10% auto;padding: 40px 30px;">
        <h2 style="text-align: center;margin-bottom: 50px;">Read</h2>
        <?php if (mysqli_num_rows($result)) { ?>

            <table style="width: 100%;">
                <tr>
                    <th>S.no</th>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>

                <?php
                $i = 0;
                while ($rows = mysqli_fetch_assoc($result)) {
                    $i++; ?>

                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $rows['email'] ?></td>
                        <td><?php echo $rows['name'] ?></td>
                        <td>
                            <a href="update.php?<?php echo "id=" . $rows['id'] ?>" class="btn btn-primary">Update</a>

                        </td>
                        <td>
                            <a href="delete.php?<?php echo "id=" . $rows['id'] ?>" class="btn btn-danger">Delete</a>

                        </td>
                    </tr>

                <?php } ?>
            </table>

        <?php } ?>
        <a href="index.php" class="link-primary">Create</a>

    </div>
</body>

</html>