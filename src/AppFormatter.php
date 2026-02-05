<?php

namespace Lotofacil;

class AppFormatter
{
    public static function format(array $jogos): string
    {
        $saida = [];
        foreach ($jogos as $jogo) {
            sort($jogo);
            $saida[] = implode(' ', $jogo);
        }
        return implode(PHP_EOL, $saida);
    }
}
