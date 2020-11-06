<?php

$size = sizeof($_POST);
$j = 1;
for ($i = 1; $i <= $size; $i++, $j++) {
    $index = "d".$j;
    if (isset($_POST[$index])) {
        $d_id[$i] = $_POST[$index];
    } else  $i--;
};

$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn, 'brm_db');

for ($k = 1; $k <= $size; $k++) {
    $q = "DELETE FROM `book` WHERE `bookid` =".$d_id[$k];
    mysqli_query($conn, $q);
};
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletion</title>
</head>

<body>
    <h1>Book Record Management </h1>
    <p>
        <?php
       echo $size." Records Deleted"
        ?>
    </p>
    See The Records Now <button><a href="view.php">Click Here</a></button>
    <br> <br>
    Go back to home page <button><a href="home.php">Click Here</a></button>
    <br> <br>
    Insert Records <button><a href="insertForm.php">Click Here</a></button>
</body>

</html>