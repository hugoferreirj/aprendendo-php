<?php
function media($nota1, $nota2, $nota3)
{
    $media = ($nota1 + $nota2 + $nota3) / 3;
    if ($media < 0 or $media > 10) {
        return "Algo deu errado no cálculo da média. Tente novamente." . PHP_EOL;
    } else if ($media >= 0 && $media <= 5) {
        return "Nota baixa. Estude mais!" . PHP_EOL;
    } else if ($media > 5 && $media <= 7) {
        return "Sua nota está OK" . PHP_EOL;
    } else if ($media > 7 && $media <= 10) {
        return "Parabéns! Continue assim." . PHP_EOL;
    } else {
        return "Algo inesperado aconteceu" . PHP_EOL;
    }
}

echo media(3, 2, 1);
echo media(10, 2, 1);
