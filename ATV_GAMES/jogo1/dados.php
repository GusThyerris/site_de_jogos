<!DOCTYPE html>
<html lang="pt-br">

<body>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $num = $_GET["numero"];
        if ($num == rand(1,100)) {
            echo "<p>venceu</p>";
        } else {
            echo "<p>perdeu</p>";
        }
    }

    ?>

</body>

</html>