<form action="index.php" method="post">
    <label for="text">Text: </label>
    <textarea name="text" id="text" cols="30" rows="10"></textarea><br>

    <label for="file">File name: </label>
    <input type="text" name="file" id="file"><br>

    <input type="submit" value="Save">
</form>

<?php
    if (isset($_POST['text']) && isset($_POST['file'])) {
        $filename = $_POST['file'] . ".txt";
        $f = fopen($filename, "w");
        fwrite($f, $_POST['text']);
        fclose($f);
    }
?>