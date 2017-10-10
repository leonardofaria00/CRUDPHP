<?php

$cep = trim($_POST['cep']);

//$tratandoCep = preg_replace("/[^0-9]/", "", $cep);
$xml = simplexml_load_file("http://cep.republicavirtual.com.br/web_cep.php?formato=xml&cep=" . $cep);

$dados['sucesso'] = (string) $xml->resultado;
$dados['logradouro'] = (string) $xml->logradouro;
$dados['cidade'] = (string) $xml->cidade;
$dados['bairro'] = (string) $xml->bairro;
$dados['uf'] = (string) $xml->uf;

echo json_encode($dados);

