<form action="index.php" method="post">
    <label for="R">RED (0 - 255):</label>
    <input type="number" name="R" min="0" max="255" required><br>

    <label for="G">GREEN (0 - 255):</label>
    <input type="number" name="G" min="0" max="255" required><br>

    <label for="B">BLUE (0 - 255):</label>
    <input type="number" name="B" min="0" max="255" required><br>
    <input type="submit" value="Accept">
</form>
<span class="text">
    Hello Wolrd!<br>
</span>


<?php
    if (isset($_POST["R"]) && isset($_POST["G"]) && isset($_POST["B"])) {
        $R = $_POST["R"];
        $G = $_POST["G"];
        $B = $_POST["B"];

        echo "<style>
            .text {
                background-color: rgb($R, $G, $B);
                color: rgb(" . (255 - $R) . ", " . (255 - $G) . ", " . (255 - $B) . ");
            }
        </style>";
    }
?>