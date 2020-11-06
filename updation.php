<?php
$size = sizeof($_POST);
$records = $size/4;

for ($i = 1; $i <= $records; $i++) {
    $index1 = "bookid".$i;
    $bookid[$i] = $_POST[$index1];

    $index2 = "title".$i;
    $title[$i] = $_POST[$index2];

    $index3 = "price".$i;
    $price[$i] = $_POST[$index3];

    $index4 = "author".$i;
    $author[$i] = $_POST[$index4];
}

$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn, 'brm_db');

for ($i = 1; $i <= $records; $i++) {
    $q = "update book SET title = '$title[$i]', price = $price[$i], author = '$author[$i]' where bookid = $bookid[$i]";
    mysqli_query($conn, $q);
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updation</title>
</head>

<body>
    <h1>Book Record Management </h1>
    <p>
        <?php
        echo  " Records Updated"
        ?>
    </p>
    See The Records Now <button><a href="view.php">Click Here</a></button>
    <br> <br>
    Go back to home page <button><a href="home.php">Click Here</a></button>
    <br> <br>
    Insert Records <button><a href="insertForm.php">Click Here</a></button>
</body>

</html>