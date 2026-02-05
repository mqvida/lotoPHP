<?php
require __DIR__ . '/../vendor/autoload.php';

use Lotofacil\Loader;
use Lotofacil\Score;
use Lotofacil\Desdobrador;

$jogos = Loader::loadCSV(__DIR__ . '/../data/resultados.csv');
$scores = Score::calcular($jogos);

$base20 = array_slice(array_keys($scores), 0, 20);
$jogosGerados = Desdobrador::gerarJogos($base20, 8);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Lotofácil Analytics</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>🎯 Lotofácil Analytics</h1>

    <h2>Top 20 números (Score)</h2>
    <p><?= implode(', ', $base20) ?></p>

    <h2>Jogos Gerados</h2>
    <ul>
        <?php foreach ($jogosGerados as $jogo): sort($jogo); ?>
            <li><?= implode(' ', $jogo) ?></li>
        <?php endforeach; ?>
    </ul>

    <a href="export.php">⬇️ Exportar jogos</a>
</body>

</html>