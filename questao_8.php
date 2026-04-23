<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 8</title>
</head>
<body>
    <h1>Questão 8</h1>
    

</body>
</html>

<?php
$produtos = [
    "celular" => 1800,
    "notebook" => 3500,
    "tablet" => 3000,
    "televisão" => 3500,
];
$total = 0;
foreach ($produtos as $produto => $preco) {
    echo "$produto custa R$ $preco <br>";
    $total = $total + $preco;
}
echo "O valor total dos produtos é R$ $total";
  
  ?>
  <a href="questao_9.php">Questão 9</a>
 </body>
 </html>