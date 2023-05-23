<?php
$nome = $_GET['nome'];
$senha = $_GET['senha'];

class Pessoa
{
    public $nome;
    public $senha;
}


$rafael = new Pessoa;
$rafael->nome = "rafael";

$leigislane = new Pessoa;
$leigislane->nome = "leigislane";

$pass = '1234';

$leigsValidate = $nome === $leigislane->nome && $senha === $pass;
$rafaValidate = $nome === $rafael->nome && $senha === $pass;

if ($leigsValidate || $rafaValidate) {

    $nome = ucfirst($nome);

    echo "<h1 class=\" text-grey-500 \">Olá, $nome!</h1>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur placeat porro accusamus corrupti itaque atque totam esse error labore possimus!</p>

<a href=\"http://localhost/curso-de-PHP-moderno-do-curso-em-video/curso-php/ex005/public/\">Voltar para página anterior</a>";
} else {
    echo "<h1 class=\" text-8xl \">ERRO 404</h1>
    <p>Algo deu errado, retorne a página inicial e tente novamente</p>

    <a href=\"http://localhost/curso-de-PHP-moderno-do-curso-em-video/curso-php/ex005/public/\">Voltar para página anterior</a>";
}
