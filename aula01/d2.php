<?php
function tabuada($numero)
{
    for ($n = 1; $n <= 10; $n++) {
        $resultado = $n * $numero;
        echo "$numero X $n = $resultado" . PHP_EOL;
    }
}

tabuada(2);
tabuada(9);
