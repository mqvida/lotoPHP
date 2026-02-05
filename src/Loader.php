<?php

namespace Lotofacil;

class Loader
{
    public static function loadCSV(string $file): array
    {
        $rows = [];
        if (!file_exists($file)) {
            throw new \Exception("Arquivo CSV não encontrado.");
        }

        $handle = fopen($file, 'r');
        while (($data = fgetcsv($handle, 1000, ';')) !== false) {
            $numbers = array_slice($data, -15);
            $rows[] = array_map('intval', $numbers);
        }
        fclose($handle);

        return $rows;
    }
}
