<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="https://bit.ly/3Ncc6D4">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <form action="action.php" method="post" style="box-sizing:border-box;border: 1px solid grey;max-width: 500px;margin: 10% auto;padding: 40px 30px;">
        <h2 style="text-align: center;">Registration</h2>
        <?php if (isset($_GET['error'])) { ?>

            <div class="alert alert-danger">
                <?php echo $_GET['error'] ?>
            </div>
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>

            <div class="alert alert-success">
                <?php echo $_GET['success'] ?>
            </div>
        <?php } ?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input value="<?php if (isset($_GET['email'])) {
                                echo $_GET['email'];
                            } elseif (isset($_GET['edtemail'])) {

                                echo $_GET['edtemail'];
                            } ?>" <?php if (isset($_GET['edtemail'])) {
                                echo "readonly";
                            } ?> type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input value="<?php if (isset($_GET['name'])) {
                                echo $_GET['name'];
                            } elseif (isset($_GET['edtname'])) {

                                echo $_GET['edtname'];
                            } ?>" type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
        </div>
        <?php if (isset($_GET['edtname'])) { ?>
            <button type="submit" name="update" class="btn btn-primary">Update</button>

        <?php } else { ?>
            <button type="submit" name="sub" class="btn btn-primary">Submit</button>

        <?php } ?>

        <a href="read.php" style="margin-left: 20px;" class="link-primary">View</a>
    </form>
</body>

</html>
