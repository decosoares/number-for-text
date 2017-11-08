<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

//Carregamos a classe para a memória
require_once("src/NumberForText/NumberPtBr/NumberText.php");

//Vai exibir na tela "um milhão, quatrocentos e oitenta e sete mil, duzentos e cinquenta e sete e cinquenta e cinco"
echo "R$ 1.487.257,55: ".NumberText::valorPorExtenso("R$ 1.487.257,55", false, false)."<br>";

//Vai exibir na tela "um milhão, quatrocentos e oitenta e sete mil, duzentos e cinquenta e sete reais e cinquenta e cinco centavos"
echo "R$ 1.487.257,55: ".NumberText::valorPorExtenso("R$ 1.487.257,55", true, false)."<br>";

//Vai exibir na tela "duas mil e setecentas e oitenta e sete"
echo "2787: ".NumberText::valorPorExtenso("2787", false, true)."<br>";
