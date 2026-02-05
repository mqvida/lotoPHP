<?php
require __DIR__ . '/../vendor/autoload.php';

use Lotofacil\Loader;
use Lotofacil\Score;
use Lotofacil\Desdobrador;
use Lotofacil\Exporter;

$jogos = Loader::loadCSV(__DIR__ . '/../data/resultados.csv');
$scores = Score::calcular($jogos);
$base20 = array_slice(array_keys($scores), 0, 20);
$jogosGerados = Desdobrador::gerarJogos($base20, 8);

Exporter::csv($jogosGerados, __DIR__ . '/../export/jogos.csv');

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="jogos_lotofacil.csv"');
readfile(__DIR__ . '/../export/jogos.csv');
