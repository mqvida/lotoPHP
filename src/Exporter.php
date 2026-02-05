<?php

namespace Lotofacil;

class Exporter
{
    public static function csv(array $jogos, string $arquivo)
    {
        $fp = fopen($arquivo, 'w');
        foreach ($jogos as $jogo) {
            sort($jogo);
            fputcsv($fp, $jogo, ';');
        }
        fclose($fp);
    }

    public static function txt(array $jogos, string $arquivo)
    {
        $content = "";
        foreach ($jogos as $jogo) {
            sort($jogo);
            $content .= implode(' ', $jogo) . PHP_EOL;
        }
        file_put_contents($arquivo, $content);
    }
}
