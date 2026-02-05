<?php

namespace Lotofacil;

class Desdobrador
{
    public static function gerarJogos(array $numeros, int $qtd = 10): array
    {
        $jogos = [];

        for ($i = 0; $i < $qtd; $i++) {
            shuffle($numeros);
            $jogos[] = array_slice($numeros, 0, 15);
        }

        return $jogos;
    }
}
