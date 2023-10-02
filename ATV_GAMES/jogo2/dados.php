<!DOCTYPE html>
<html lang="pt-br">

<body>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $num = $_GET["numero"];
        if ($num % 2 == 0) {
            echo "<p>Seu numero é par</p>";
        } else {
            echo "<p>Seu numero é impar</p>";
        }
    }

    ?>

</body>

</html>