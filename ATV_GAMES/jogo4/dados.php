<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera a jogada do jogador do formulário POST
    $move = $_POST['move'];

    // Recupera o ID do jogo
    $gameId = $_POST['gameId'];

    // Define um array associativo para representar o estado do jogo da velha
    // Use um array bidimensional para representar cada jogo da velha
    $games = [
        'game1' => ['', '', '', '', '', '', '', '', ''],
        'game2' => ['', '', '', '', '', '', '', '', ''],
        'game3' => ['', '', '', '', '', '', '', '', ''],
        'game4' => ['', '', '', '', '', '', '', '', ''],
        'game5' => ['', '', '', '', '', '', '', '', ''],
        'game6' => ['', '', '', '', '', '', '', '', ''],
        'game7' => ['', '', '', '', '', '', '', '', ''],
        'game8' => ['', '', '', '', '', '', '', '', ''],
        'game9' => ['', '', '', '', '', '', '', '', ''],
    ];

    // Função para verificar o estado do jogo e determinar o próximo jogador
    function checkGameStatus($board) {
        // Implemente a lógica de verificação de vitória e empate aqui
        // Você pode usar uma lógica semelhante à mencionada anteriormente no JavaScript
        // Retorne 'X' ou 'O' para o vencedor, 'Tie' para empate ou '' (string vazia) para jogo em andamento
    }

    // Verifica se é um movimento válido e atualiza o tabuleiro do jogo apropriado
    if ($move != '' && $games[$gameId][$move - 1] == '') {
        $games[$gameId][$move - 1] = $move;
    }

    // Verifica o estado atual do jogo
    $gameStatus = checkGameStatus($games[$gameId]);

    // Retorna a próxima jogada como resposta
    $response = [
        'nextMove' => $move == 'X' ? 'O' : 'X',
        'gameStatus' => $gameStatus,
        'board' => $games[$gameId],
    ];

    echo json_encode($response);
}
?>
