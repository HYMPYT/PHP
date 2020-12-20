<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 1</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="country">Country</label>
        <input type="text" name="country" id="country"><br>

        <input type="submit" value="Add">
    </form>

    <select name="Coutries">
    <?php
    if (isset($_POST['country']) && !empty($_POST['country'])) {
        $new_country = $_POST['country'];

        if (!in_array($new_country . "\n", file('countries.txt'))) {
            $f = fopen('countries.txt', 'a') or die ("Can't create");
            fwrite($f, $new_country . "\n");
            fclose($f);
        }
    }
    
    $countries = file('countries.txt');
    foreach ($countries as $coutry) {
        echo "<option>$coutry</option>";
    }
    ?>
    </select>
</body>
</html>