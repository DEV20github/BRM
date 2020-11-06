<?php

$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn, 'brm_db');
$q = "select * from book";
$result = mysqli_query($conn, $q);
$num = mysqli_num_rows($result);
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View book Records</title>
    <link rel="stylesheet" href="./css/viewstyle.css">
</head>

<body>
    <h1>Book Record Management </h1>
    <table id="view_table">
        <tr>
            <th>Book Id</th>
            <th>Title</th>
            <th>Price</th>
            <th>Author</th>
        </tr>
        <?php
        for ($i = 1; $i <= $num; $i++) {
            $row = mysqli_fetch_array($result);
        ?>
        <tr>
        <td> <?php echo $row['bookid']; ?> </td>
        <td> <?php echo $row['title']; ?> </td>
        <td> <?php echo $row['price']; ?> </td>
        <td> <?php echo $row['author']; ?> </td>
        </tr>
        <?php
        }
        ?>
    </table>
    <br>
    Want to delete some records ? <button><a href="deleteForm.php">Click Here</a></button>
    <br> <br>
    Go back to home page <button><a href="home.php">Click Here</a></button>
    <br> <br>
    Insert Records <button><a href="insertForm.php">Click Here</a></button>
</body>

</html>