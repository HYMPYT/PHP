<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .body {
        display: grid;
        height: 100vh;
        grid-template-columns: 25% 50% 25%;
        grid-template-rows: 25% 50% 25%;
    }

    .login {
        grid-column-start: 2;
        grid-column-end: 3;
        grid-row-start: 2;
        grid-row-end: 3;
        display: table;
        width: 100%;
        height: 100%;
    }

    .login_form {
        display: table-cell;
        text-align: center;
        vertical-align: middle;
    }
</style>

<div class="body">
    <div class="login">
        <form class="login_form" action="index.php" method="post">
            <label for="login">Login: </label>
            <input type="text" name="login"><br>

            <label for="pass">Password: </label>
            <input type="password" name="pass"><br>

            <label for="check">Remember me: </label>
            <input type="checkbox" name="check">

            <input type="submit" value="LogIn">
        </form>
    </div>
</div>

<?php
    if (isset($_COOKIE['login']) && isset($_COOKIE['pass'])) {
        header('Location: content.html');
    } else if (isset($_POST['login']) && isset($_POST["pass"])) {
        $login = $_POST['login'];
        $pass = $_POST['pass'];

        if (isset($_POST['check'])) {
            setcookie("login", $login, time() + 15);
            setcookie("pass", $pass, time() + 15);
        }
        header('Location: content.html');
    }
?>