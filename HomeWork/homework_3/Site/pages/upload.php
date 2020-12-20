<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file</title>
</head>
<body>
    <form enctype="multipart/form-data" action="upload.php" method="post">
        <label for="picture">Choose file</label>
        <input type="file" name="picture" id="picture"><br>
        <input type="submit" value="Submit">
    </form>

    <?php
        require_once "../../connection.php";
        
        if ($_FILES && $_FILES['picture']['error'] == UPLOAD_ERR_OK) {
            $uploads_dir = '../images';
            
            $tmp_name = $_FILES['picture']['tmp_name'];
            $name = basename($_FILES['picture']['name']);
            $size = $_FILES['picture']['size'];
            move_uploaded_file($tmp_name, "$uploads_dir/$name");
            
            $link = mysqli_connect($host, $user, $password, $db) or die(mysqli_error($link));

            $query = "insert into pictures(name, size, imagepath) values('$name', $size, '$uploads_dir/$name')";

            mysqli_query($link, $query);

            mysqli_close($link);

            header('Location: ../index.php');
        }
    ?>
</body>
</html>