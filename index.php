<?php

require_once "media.php";
require_once "dados.php";

foreach ($alunos as $alunos) {
  $media = calcularMedia($alunos['notas']);
  $situacao = $media >= 6.0 ? "Aprovado" : "Reprovado";

  echo "nome: {$alunos["nome"]}\n";
  echo "RM: {$alunos["rm"]}\n";
  echo "E-mail: {$alunos["email"]}\n";
  echo "Notas: " . implode(", ", $alunos["notas"]) . "\n";
  echo "Média: " . number_format($media, 2) . "\n";
  echo "situação: {$situacao}\n";
  echo str_repeat("-", 30) . "\n";
}
