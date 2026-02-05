<?php

namespace Lotofacil;

class Estatisticas
{
    public static function frequencia(array $jogos): array
    {
        $freq = array_fill(1, 25, 0);

        foreach ($jogos as $jogo) {
            foreach ($jogo as $num) {
                $freq[$num]++;
            }
        }

        arsort($freq);
        return $freq;
    }
}
