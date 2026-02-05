<?php

namespace Lotofacil;

class Score
{
    public static function calcular(array $jogos, int $janela = 50): array
    {
        $freqTotal = array_fill(1, 25, 0);
        $freqRecente = array_fill(1, 25, 0);
        $atraso = array_fill(1, 25, 0);

        $totalJogos = count($jogos);
        $recentes = array_slice($jogos, -$janela);

        foreach ($jogos as $index => $jogo) {
            foreach ($jogo as $n) {
                $freqTotal[$n]++;
                $atraso[$n] = 0;
            }
            foreach (range(1, 25) as $i) {
                if (!in_array($i, $jogo)) {
                    $atraso[$i]++;
                }
            }
        }

        foreach ($recentes as $jogo) {
            foreach ($jogo as $n) {
                $freqRecente[$n]++;
            }
        }

        $scores = [];
        foreach (range(1, 25) as $n) {
            $scores[$n] =
                ($freqTotal[$n] * 0.5) +
                ($freqRecente[$n] * 1.5) -
                ($atraso[$n] * 0.2);
        }

        arsort($scores);
        return $scores;
    }
}
