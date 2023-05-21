<?php

use JetBrains\PhpStorm\Language;

$nome = "Rafael";
$sobrenome = "Gomes Xavier";
const ESTADO = "São Paulo";
const CURSO = 'Curso em Vídeo';

echo "<br>$nome $sobrenome \u{1f596}";
echo '<br>$nome $sobrenome \u{1f596}';
echo "<br>Eu moro em ESTADO";
echo '<br>Eu moro em ESTADO';
echo "<br>Eu moro em " . ESTADO;
echo '<br>Eu moro em ' . ESTADO;
echo "<br>Porque a primeira linha é a única que não atualiza?";

echo "<br>Curso de PHP moderno do " . CURSO;
