<?php
require __DIR__ . '/../vendor/autoload.php';

use Lotofacil\Loader;
use Lotofacil\Score;
use Lotofacil\Desdobrador;
use Lotofacil\Simulador;
use Lotofacil\Exporter;
use Lotofacil\AppFormatter;

$jogos = Loader::loadCSV(__DIR__ . '/../data/resultados.csv');

echo "🔢 Calculando score...\n";
$scores = Score::calcular($jogos);

$base20 = array_slice(array_keys($scores), 0, 20);
$jogosGerados = Desdobrador::gerarJogos($base20, 8);

echo "🎯 Números base:\n";
print_r($base20);

echo "\n🧪 Simulação retroativa:\n";
print_r(Simulador::rodar($jogos));

Exporter::csv($jogosGerados, __DIR__ . '/../export/jogos.csv');
Exporter::txt($jogosGerados, __DIR__ . '/../export/jogos.txt');

echo "\n📱 Formato apps:\n";
echo AppFormatter::format($jogosGerados);
