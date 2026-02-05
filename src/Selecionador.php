<?php

namespace Lotofacil;

class Selecionador
{
    public static function escolher20(array $frequencia): array
    {
        return array_slice(array_keys($frequencia), 0, 20);
    }
}
