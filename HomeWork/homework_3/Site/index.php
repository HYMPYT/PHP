<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <a href="pages/upload.php">Upload File</a>

    <?php
        require_once "../connection.php";

        $link = mysqli_connect($host, $user, $password, $db) or die(mysqli_error($link));

        $query = "select * from pictures";

        $result = mysqli_query($link, $query);

        echo "<br>Count " . mysqli_num_rows($result);

        mysqli_close($link);
    ?>
</body>
</html>
