<?php

/**
 * Pegar dados do arquivo .env e adicionar nas variáveis globais
 */

namespace Source\Support;

class Env
{
    public static function load(): bool
    {
        if (!file_exists(dirname(__DIR__, 2) . "/.env")){
            return false;
        }

        $lines = file(dirname(__DIR__, 2) . "/.env");
        
        foreach($lines as $line){
            putenv(trim($line));
        }
        return true;
    }
}
