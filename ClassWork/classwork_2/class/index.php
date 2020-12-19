<!-- <form action="index.php" method="post">

    <input type="checkbox" value="first" name="checkbox[]">
    <input type="checkbox" value="second" name="checkbox[]">
    <input type="checkbox" value="third" name="checkbox[]">

    <input type="radio" name="radio" value="cat">
    <input type="radio" name="radio" value="dog">
    <input type="radio" name="radio" value="parrot">

    <select name="animals[]" multiple size="3">
        <option value="cat">Cat</option>
        <option value="snake">Snake</option>
        <option value="wolf">Wolf</option>
    </select>

    <input type="submit" value="Submit">

</form> -->

<!-- <form action="index.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="Submit">
</form> -->

<?php
#region string
    // $str = "this is the end";
    // echo mb_strpos($str, "is") . "<br>";

    // $cyr_str = "Что-то еще";
    // echo mb_strpos($cyr_str, "о") . "<br>";
#endregion

#region upload_file
    // if ($_FILES && $_FILES["file"]["error"] == UPLOAD_ERR_OK) {
    //     print_r($_FILES["file"]);
    //     $filename = $_FILES["file"]["name"];
    //     move_uploaded_file($_FILES["file"]["tmp_name"], $filename);
    // } else {
    //     echo "Something went wrong";
    // }
#endregion

#region file
    // if (is_dir("folder")) {
    //     echo "dir";
    // }

    // echo getcwd();

    // mkdir("first/new", 0777, true);

    // if (!copy("folder/file_2.txt", "folder/file_3.txt")) {
    //     echo "Can't copy";
    // } else {
    //     echo "Success";
    // }

    // if (!rename("file_2.txt", "folder/file_2.txt")) {
    //     echo "Can't move";
    // } else {
    //     echo "Success";
    // }

    // if (unlink("file_2.txt")) {
    //     echo "File removed";
    // } else {
    //     echo ";(";
    // }


    // $fw = fopen("file_2.txt", "w") or die("Can't create");
    // fwrite($fw, "smth\n");
    // fclose($fw);

    // $f = fopen("file.txt", "r") or die("No such file!");

    // while (!feof($f)) {
    //     echo fgets($f) . "<br>";
    // }

    // fclose($f);

    // echo file_get_contents("file.txt");
#endregion

#region session
    // session_start();
    // $_SESSION["name"] = "Kolya";
    
    // if (isset($_SESSION['name'])) {
    //     echo $_SESSION['name'];
    // }

    // $_SESSION = array();

    // if (session_id() != "" || isset($_COOKIE[session_name()])) {
    //     setcookie(session_name(), "", time() - 1);
    // }

    // session_destroy();
#endregion

#region cookie
    // setcookie("c[0]", "cat", time() + 500);
    // setcookie("c[1]", "dog", time() + 500);
    // setcookie("c[2]", "horse", time() + 500);

    // foreach ($_COOKIE["c"] as $key => $value) {
    //     echo "Key " . $key . " value " . $value . "<br>";
    // }

    // setcookie("c", "", time() - 1);


    // $name = "Misha";
    // $pass = "123";

    // setcookie("login", $name, time() + 1800);
    // setcookie("pass", $pass, time() + 1800);

    // if (isset($_COOKIE['login'])) {
    //     echo $_COOKIE['login'] . "<br>";
    // }
    // if (isset($_COOKIE['pass'])) {
    //     echo $_COOKIE['pass'] . "<br>";
    // }
#endregion

#region checkbox_radio_multiselect
    // if (isset($_POST['animals'])) {
    //     $animals = $_POST['animals'];
    //     foreach ($animals as $key => $value) {
    //         echo "Key " . $key . " value " . $value . "<br>";
    //     }

    //     // $radio = $_POST['radio'];
    //     // echo $radio;

    //     // foreach ($checkbox as $key => $value) {
    //     //     echo "Key " . ($key + 1) . " value " . $value . "<br>";
    //     // }
    // } else {
    //     echo "no cb";
    // }
#endregion
?>