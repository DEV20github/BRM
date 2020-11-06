<?php

$title = $_POST['title'];
$price = $_POST['price'];
$author = $_POST['author'];

$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn, 'brm_db');

$q = "INSERT INTO `book` (`title`, `price`, `author`) VALUES ('$title', '$price', '$author')";
$status = mysqli_query($conn, $q);
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion</title>
</head>

<body>
    <h1>Book Record Management </h1>
    <p>
        <?php
        if ($status == 1) {
            echo "Record Inserted Successfully";
        } else echo "Insertion Failed";
        ?>
    </p>
    Do You Want To Insert More Record ? <button><a href="insertForm.php">Click Here</a></button>
    <br> <br>
    Check the Records <button><a href="view.php">Click Here</a></button>
    <br> <br>
    Go back to home page <button><a href="home.php">Click Here</a></button>
</body>

</html>