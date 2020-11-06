<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion Form</title>
</head>

<body>
    <h1>Book Record Management </h1>

    <form action="insertion.php" method="POST">
        <table>
            <tr>
                <th>Title</th>
                <td><input type="text" name="title" required></td>
            </tr>
            <tr>
                <th>Price</th>
                <td><input type="text" name="price" required></td>
            </tr>
            <tr>
                <th>Author</th>
                <td><input type="text" name="author"></td>
            </tr>
            <tr>
                <th>Submit</th>
                <td><input type="submit" value="Insert"></td>
            </tr>
        </table>
    </form>
    <br> <br>
    Go back to home page <button><a href="home.php">Click Here</a></button>
</body>

</html>