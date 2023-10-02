<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

    $options = array('pedra', 'papel', 'tesoura');

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["escolha"])) {
        $userChoice = $_GET["escolha"];
        $computerChoice = $options[array_rand($options)];

        $userImage = "{$userChoice}.png";
        $computerImage = "{$computerChoice}.png";

        echo "<p>Usuário escolheu:</p> <div class'back'><img src='img/$userImage' alt='$userChoice'></div>";
        echo "<p>Computador escolheu:</p> <div class'back'><img src='img/$computerImage' alt='$computerChoice'></div>";

        if ($userChoice == $computerChoice) {
            echo "<p>Empate!</p>";
        } elseif (
            ($userChoice == 'pedra' && $computerChoice == 'tesoura') ||
            ($userChoice == 'papel' && $computerChoice == 'pedra') ||
            ($userChoice == 'tesoura' && $computerChoice == 'papel')
        ) {
            echo "<p>Você ganhou!</p>";
        } else {
            echo "<p>Computador ganhou!</p>";
        }
    }

    ?>

</body>

</html>