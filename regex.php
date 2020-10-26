<?php

$regexp = '~(\d\d)(\w)~';
$alvo = '11a22b33c';
$achou = preg_match_all($regexp, $alvo, $match);

echo $achou;

echo $match;

print_r($match); 

$string = '2007-12-31';

$string = 'Setembro 21';
$regex = '~(\w+)\s(\d+)~';
$novoTexto = '$2 de $1';

$resultado = preg_replace($regex, $novoTexto, $string);
echo $resultado; // 21 de Setembro