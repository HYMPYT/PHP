<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
    <label for="id">Id</label>
    <input type="number" name="id" id="id">

    <input type="submit" value="Add">
</form>

<!-- Form for update -->
<!-- <form action="index.php" method="post">
    <label for="id">Id</label>
    <input type="number" name="id" id="id">

    <label for="name">Name</label>
    <input type="text" name="name" id="name">

    <label for="age">Age</label>
    <input type="number" name="age" id="age">

    <input type="submit" value="Add">
</form> -->

<!-- Form for insert -->
<!-- <form action="index.php" method="post">
    <label for="name">Name</label>
    <input type="text" name="name" id="name">

    <label for="age">Age</label>
    <input type="number" name="age" id="age">

    <input type="submit" value="Add">
</form> -->


<?php
    require_once "connection.php";

    $link = mysqli_connect($host, $user, $password, $db) or die(mysqli_error($link));

#region delete
    // if (isset($_POST['id'])) {
    //     $query_delete = "delete from users where id = " . $_POST['id'];

    //     $result = mysqli_query($link, $query_delete) or die(mysqli_error($link));

    //     if ($result) {
    //         echo "user removed";
    //     }
    // }
#endregion

#region update
    // if (isset($_POST['id']) and isset($_POST['name']) and isset($_POST['age'])){
    //     $query_update = "update users set name = '" . $_POST['name'] . "', age = " . $_POST['age'] . " where id = " . $_POST['id'];

    //     $result = mysqli_query($link, $query_update) or die(mysqli_error($link));

    //     if ($result){
    //         echo "user " . $_POST['name'] . " updated";
    //     }
    // }
#endregion

#region select
    // $query_select = "select * from users";

    // $result = mysqli_query($link, $query_select) or die(mysqli_error($link));
    // $count = mysqli_num_rows($result);

    // for ($i = 0; $i < $count; $i++) { 
    //     $row = mysqli_fetch_row($result);
        
    //     for ($j = 0; $j < 3; $j++) { 
    //         echo $row[$j] . " ";
    //     }
    //     echo "<br>";
    // }

    // mysqli_free_result($result);
#endregion

#region insert   
    // if (isset($_POST['name']) && isset($_POST['age'])) {
    //     $name = $_POST['name'];
    //     $age = $_POST['age'];

    //     $query_insert = "insert into users(name, age) values('" . $name . "' ," . $age . ");";

    //     $result = mysqli_query($link, $query_insert) or die(mysqli_error($link));

    //     if ($result) {
    //         echo $name . " inserted!";
    //     }
    // }
#endregion

#region create_new_table
    // $query_create = "create table users (
    //     id int auto_increment primary key,
    //     name varchar(50),
    //     age int
    // );";

    // $result = mysqli_query($link, $query_create) or die(mysqli_error($link));

    // if ($result) {
    //     echo "table created!";
    // }
#endregion

    mysqli_close($link);
?>
</body>
</html>