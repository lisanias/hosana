<?php

ob_start();
session_start();

require dirname(__dir__, 1) . "/vendor/autoload.php";

# Carregar os dados do arquivo .env como variável global
Source\Support\Env::load();
var_dump(getenv()) ;
echo '<h1>HOSANA</h1>';

ob_end_flush();