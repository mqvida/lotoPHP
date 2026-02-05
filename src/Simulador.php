<?php

namespace Lotofacil;

class Simulador
{
    public static function rodar(array $jogos, int $inicio = 100): array
    {
        $resultado = array_fill(11, 5, 0);

        for ($i = $inicio; $i < count($jogos); $i++) {
            $base = array_slice($jogos, 0, $i);

            $scores = Score::calcular($base);
            $base20 = array_slice(array_keys($scores), 0, 20);

            $desdobrados = Desdobrador::gerarJogos($base20, 6);
            $real = $jogos[$i];

            foreach ($desdobrados as $jogo) {
                $acertos = count(array_intersect($jogo, $real));
                if ($acertos >= 11) {
                    $resultado[$acertos]++;
                }
            }
        }

        return $resultado;
    }
}
