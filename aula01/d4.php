<?php
$pessoas = [
    "000.000.000-12" => ['nome' => "Hugo", "idade" => 21, "telefone" => "14998550515"],
    "000.000.000-13" => ['nome' => "Breno", "idade" => 22, "telefone" => "14998554060"],
    "000.000.000-14" => ['nome' => "Mayra", "idade" => 23, "telefone" => "17898550515"],
];

foreach ($pessoas as $cpf => $pessoa) {
    echo "CPF: {$cpf}. Nome: {$pessoa['nome']}. Idade: {$pessoa['idade']}. Telefone: {$pessoa['telefone']}." . PHP_EOL;
}

$pessoas['403.791.448-40'] = ['nome' => "Rafa", "idade" => 20, "telefone" => "1346261723"];
echo "Antes de remover" . PHP_EOL;
var_dump($pessoas);
unset($pessoas['403.791.448-40']);
echo "Após remover" . PHP_EOL;
var_dump($pessoas);
