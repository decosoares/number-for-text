# number-for-text
projeto em php para converter números para a forma escrita. Números por Extenso.

As funções do projeto foram adaptadas do blog de Dirceu Resende: https://www.dirceuresende.com/blog/escrevendo-numero-por-extenso-no-php/

Para testar:

Carregamos a classe para a memória<br>
require_once("src/NumberForText/NumberPtBr/NumberText.php");

Vai exibir na tela "um milhão, quatrocentos e oitenta e sete mil, duzentos e cinquenta e sete e cinquenta e cinco"<br>
NumberText::valorPorExtenso("R$ 1.487.257,55", false, false);

Vai exibir na tela "um milhão, quatrocentos e oitenta e sete mil, duzentos e cinquenta e sete reais e cinquenta e cinco centavos"<br>
NumberText::valorPorExtenso("R$ 1.487.257,55", true, false);

Vai exibir na tela "duas mil e setecentas e oitenta e sete"<br>
NumberText::valorPorExtenso("2787", false, true);
